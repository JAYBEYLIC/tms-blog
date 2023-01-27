<?php


// header("Content-Security-Policy: default-src 'none';");
// header("Access-Control-Allow-Origin: http://192.168.33.23/test.php");
include('include/Flutterwave-PHP-v3/library/rave.php');
include('include/Flutterwave-PHP-v3/library/raveEventHandlerInterface.php');
use Unirest\Request\Body;
$request_headers = getallheaders();
if($_SERVER['REQUEST_METHOD'] !=="POST"){
   http_response_code(502);
   die;
}
//
// if( !in_array($request_headers['Host'],["192.168.33.55","attendout.com"]) ){
//   http_response_code(502);
//   die;
// }


$jsond = file_get_contents('php://input');
$json = json_decode($jsond,true);



//make
$to = "banjimayowa@gmail.com";
$subject = "New Json Webhook";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: info@attendout.com" . "\r\n" .
"CC: attendout@gmail.com";


// if($bdd['is_premium'] !==NULL && $bdd['expiration'] > $now){
mail($to,$subject,$jsond,$headers);


$signature = (isset($_SERVER['HTTP_VERIF_HASH']) ? $_SERVER['HTTP_VERIF_HASH'] : '');

/* It is a good idea to log all events received. Add code *
 * here to log the signature and body to db or file       */

if (!$signature) {
    // echo "No Signature";
    // only a post with rave signature header gets our attention
    exit();
}else{
    $webhook = true;
}

// Store the same signature on your server as an env variable and check against what was sent in the headers
$local_signature = getenv('SECRET_HASH');

// confirm the event's signature
if( $signature !== $local_signature ){
  // silently forget this ever happened
   //"Signature Mismatch";
  exit();
}


// var_dump($json);
if(isset($json['event.type']) && $json['event.type'] == "Transfer"){



  if($json['data']['status'] == "SUCCESSFUL"){

  $record = selectContent($conn,"payout_invoice",["invoice_id"=>$json['data']['reference']]);
$determine = explode("_",$record[0]['invoice_id']);

if($determine[0] == "EVT"){
$target = "event_paid_registrant";
    $currency = "NGN";
}
if($determine[0] == "TRN"){
$target = "training_paid_registrant";
    $currency = "NGN";
}
if($determine[0] == "DNT"){
$target = "donation_paid_registrant";
    $currency = $record[0]['currency'];
}

    if($target == "event_paid_registrant"){
      $columncheck = "event_id";
    }
    if($target == "training_paid_registrant"){
        $columncheck = "training_id";
    }
    if($target == "donation_paid_registrant"){
        $columncheck = "donate_id";
    }

if(count($record) > 0){

  updateContent($conn,"payout_invoice",['status'=>"SUCCESSFUL"],["invoice_id"=>$json['data']['reference']]);







  updateContent($conn,$target,['payment_status'=>2],[$columncheck=>$record[0]['hash_id'],"payment_status"=>1]);

  $bdd = adminInfo($conn,$record[0]['user_id']);
  $who = $bdd['image_2'];
  $headings = "Attendout Payout Completed";
  $message = "Hello ".$bdd['firstname']." ".$bdd['lastname'].", Your attendout revenue payout has been credited to your bank";
  $page = "/wallet";
  $webp = "Payout";
  include 'include/onenotification.php';

//send notification;
exit();
}else{
  exit();
}


}else{
    $record = selectContent($conn,"payout_invoice",["invoice_id"=>$json['data']['reference']]);
    $determine = explode("_",$record[0]['invoice_id']);
    if($determine[0] == "EVT"){
    $target = "event_paid_registrant";
        $currency = "NGN";
    }
    if($determine[0] == "TRN"){
    $target = "training_paid_registrant";
        $currency = "NGN";
    }
    if($determine[0] == "DNT"){
    $target = "donation_paid_registrant";
        $currency = $record[0]['currency'];
    }

        if($target == "event_paid_registrant"){
          $columncheck = "event_id";
        }
        if($target == "training_paid_registrant"){
            $columncheck = "training_id";
        }
        if($target == "donation_paid_registrant"){
            $columncheck = "donate_id";
        }

  updateContent($conn,$target,['payment_status'=>0],[$columncheck=>$record[0]['hash_id'],"payment_status"=>"1"]);
    sleep(3);
updateContent($conn,"payout_invoice",['status'=>"Never SUCCESSFUL"],["invoice_id"=>$json['data']['reference']]);
  $bdd = adminInfo($conn,$record[0]['user_id']);
  $who = $bdd['image_2'];
  $headings = "Attendout Payout Failed";
  $message = "Hello ".$bdd['firstname']." ".$bdd['lastname'].", Your attendout revenue payout was not successful and has been reversed. Kindly try again later";
  $page = "/wallet/event";
  $webp = "Payout";
  include 'include/onenotification.php';

  exit();
}
}else{



if ($json['data']['status'] == "successful" ) {

  $determine = explode("_",$json['data']['tx_ref']);

  if ($determine[0] == "CRS") {
  $invoice_table = 'invoice';
  $redirectUrl = "confirm_courses";
  }elseif ($determine[0] == "TRN") {
  $invoice_table = 'training_invoice';
  $redirectUrl = "/confirm_training_ticket";
  }elseif ($determine[0] == "DNT") {
  $invoice_table = 'donation_invoice';
  $redirectUrl = "/confirm_donation_ticket";
}elseif ($determine[0] == "GVW") {
  $invoice_table = 'giveaway_invoice';
  $redirectUrl = "/confirm_giveaway_ticket";
  }elseif ($determine[0] == "VTN") {
    // code...
  }elseif ($determine[0] == "RMV") {
    // code...
  }else{
  exit();
  }

}
}

$arrayTypes = ["account","banktransfer","card","qr","ussd"];

if(in_array($json['data']['payment_type'],$arrayTypes)){



  if($json['data']['status'] == "successful"){

    $determine = explode("_",$json['data']['tx_ref']);
    if(count($determine) > 1){

  $invoice = selectContent($conn,$invoice_table,['invoice_id'=>$json['data']['tx_ref']]);


  // var_dump($invoice);
  if(count($invoice) < 1){
exit();
  }else{
if($invoice[0]['status'] == "paid"){
  exit();
}

      if(isset($_GET['cancelled'])){
        $data["status"] = "Success and Cancelled";
        $data["invoice_id"] = $json['data']['tx_ref'];
        $data['time_created'] = date("h:i:s");
        $data['date_created'] = date("Y-m-d");
        insertSafe($conn,'complications',$data);
        header("Location:/error.php?message=payment cancelled on page. kindly wait to see if payment was processed");
        die;
      }


    extract($invoice[0]);





    // $query = array(
    //     "SECKEY" => "FLWSECK-a69a2e475fe63bdf6302fb2dace3b22b-X",
    //     "tx_ref" => $json['data']['tx_ref']
    // );
    //
    // $data_string = json_encode($query);
    //
    //
    // $ch = curl_init('https://ravesandbox.flutterwave.com/flwv3-pug/getpaidx/api/v2/verify');
    // https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/verify
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //
    // $response = curl_exec($ch);
    //
    // $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    // $header = substr($response, 0, $header_size);
    // $body = substr($response, $header_size);
    //
    // curl_close($ch);
    //
    // $resp = json_decode($response, true);
    //
    // die(var_dump($response));
    //
    //   $paymentStatus = $resp['data']['status'];
    //   $chargeResponsecode = $resp['data']['chargecode'];
    //   $chargeAmount = $resp['data']['amount'];
    //   $chargeCurrency = $resp['data']['currency'];
    //   $customerMail = $resp['data']['custemail'];
    //   $customerName = $resp['data']['custname'];

    // die("die here");

    // $data = array('tx_ref' => $json['data']['tx_ref'],
    //   'SECKEY' => getenv("RAVE_SECRETE")//secret key from pay button generated on rave dashboard
    // );



      // make request to endpoint using unirest.
      $headers = array('Content-Type' => 'application/json');
      $headers = array('Authorization' => 'Bearer '.getenv("RAVE_SECRETE"));
      $url = "https://api.flutterwave.com/v3/transactions/".$json['data']['id']."/verify"; //please make sure to change this to production url when you go live
    // die($url);
    // Make `POST` request and handle response with unirest
      $response = Unirest\Request::get($url, $headers);

    // echo $amount_due;
    // echo $response->body->data->amount;
    // echo "<hr>";
    // echo $amount_due;
      //check the status is success
      if ($response->body->data->status === "successful") {

          //confirm that the amount is the amount you wanted to charge
          if ($response->body->data->amount === intval($amount_due)) {


    updateContent($conn,$invoice_table,["status"=>"paid"],["invoice_id"=>$json['data']['tx_ref']]);



    $url = "https://attendout.com.".$redirectUrl."?invoice=".$invoice[0]['hash_id'];


// Initialize a CURL session.
$ch = curl_init();

// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

    exit();
          }else{
            $data["status"] = "Success, Verified But Payment Unmatched";
            $data["invoice_id"] = $json['data']['tx_ref'];
            $data['time_created'] = date("h:i:s");
            $data['date_created'] = date("Y-m-d");
            insertSafe($conn,'complications',$data);
            header("Location:/error.php?message=payment not processed. ");
            die;
          }
      }else{
        $data["status"] = "Success and But Unverified";
        $data["invoice_id"] = $json['data']['tx_ref'];
        $data['time_created'] = date("h:i:s");
        $data['date_created'] = date("Y-m-d");
        insertSafe($conn,'complications',$data);
          header("Location:/error.php?message=Payment not processed");
        die;
      }





  }






    }else{
      exit();
    }






  }
}
