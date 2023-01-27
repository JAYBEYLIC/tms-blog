<?php
ob_start();

// die("i ma here");
// session_start();
include('include/Flutterwave-PHP-v3/library/rave.php');
include('include/Flutterwave-PHP-v3/library/raveEventHandlerInterface.php');
use Unirest\Request\Body;






if(!isset($_GET['tx_ref'])){


  if(isset($_GET['resp'])){
    $comp_resp = json_decode($_GET['resp']);
    $_GET['tx_ref'] = $comp_resp->tx->txRef;

  }else{
    $data["status"] = $_SERVER['REQUEST_URI'];
    $data["invoice_id"] = "Not Stated";
    $data['time_created'] = date("h:i:s");
    $data['date_created'] = date("Y-m-d");
    insertSafe($conn,'complications',$data);
    header("Location:/paymentFailed");

    exit();
  }

}

$determine = explode("_",$_GET['tx_ref']);
// die(var_dump($determine));
if ($determine[0] == "PUB") {
$invoice_table = 'invoice';
$redirectUrl = "confirm_book_payment";
}elseif ($determine[0] == "PLA") {
  $invoice_table = 'invoice';
  $redirectUrl = "confirm_plan_payment";
}elseif ($determine[0] == "DNT") {
$invoice_table = 'donation_invoice';
$redirectUrl = "confirm_donation_ticket";
}elseif ($determine[0] == "GVW") {
  $invoice_table = 'giveaway_invoice';
$redirectUrl = "confirm_giveaway_ticket";
}elseif ($determine[0] == "VTN") {
  // code...
}elseif ($determine[0] == "RMV") {
  // code...
}else{
  header("Location:/failed");
}
$invoice = selectContent($conn,$invoice_table,['invoice_id'=>$_GET['tx_ref']]);

// $userInfo = selectContent($conn,'read_users',["id"=>$invoice[0]['user_id']]);

if(count($invoice) < 1){
exit();
}else{

  if(isset($_GET['cancelled'])){
    $data["status"] = "Success and Cancelled";
    $data["invoice_id"] = $_GET['tx_ref'];
    $data['time_created'] = date("h:i:s");
    $data['date_created'] = date("Y-m-d");
    insertSafe($conn,'complications',$data);
    header("Location:/error.php?message=payment cancelled on page. kindly wait to see if payment was processed");
    die;
  }


extract($invoice[0]);


$currency = "NGN";


// $query = array(
//     "SECKEY" => "FLWSECK-a69a2e475fe63bdf6302fb2dace3b22b-X",
//     "tx_ref" => $_GET['tx_ref']
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

// $data = array('tx_ref' => $_GET['tx_ref'],
//   'SECKEY' => getenv("RAVE_SECRETE")//secret key from pay button generated on rave dashboard
// );



  // make request to endpoint using unirest.
  $headers = array('Content-Type' => 'application/json');
  $headers = array('Authorization' => 'Bearer '.getenv("RAVE_SECRETE"));
  $url = "https://api.flutterwave.com/v3/transactions/".$_GET['transaction_id']."/verify"; //please make sure to change this to production url when you go live
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
if ($userInfo[0]['input_country'] == "NIGERIA") {
  if (intval($response->body->data->amount) === intval($amount_due*$ngnx)) {
    updateContent($conn,$invoice_table,["status"=>"paid"],["invoice_id"=>$_GET['tx_ref']]);

		    // Instantiate a new PHPMailer
				$mail = new PHPMailer;

				// Tell PHPMailer to use SMTP
				$mail->isSMTP();

				// Replace sender@example.com with your "From" address.
				// This address must be verified with Amazon SES.
				$mail->setFrom($site_email, $site_name." Payment Confirmation");
				// $mail->AddReplyTo('reformersofafrica@gmail.com', 'Reformers Of Africa');

				// Replace recipient@example.com with a "To" address. If your account
				// is still in the sandbox, this address must be verified.
				// Also note that you can include several addAddress() lines to send
				// email to multiple recipients.


				$mail->addAddress($getInfo[0]['email'], $site_name." Payment Confirmation");

				// Replace smtp_username with your Amazon SES SMTP user name.
				$mail->Username = $site_email;

				// Replace smtp_password with your Amazon SES SMTP password.
				$mail->Password = $site_email_password;

				// Specify a configuration set. If you do not want to use a configuration
				// set, comment or remove the next line.
				// $mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');

				// If you're using Amazon SES in a region other than US West (Oregon),
				// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
				// endpoint in the appropriate region.
				$mail->Host = 'smtp.gmail.com';

				// The subject line of the email
				$mail->Subject =  $site_name."Item Purchased";

		    // The HTML-formatted body of the email
		    $mail->Body = '<h3>Dear AA resume Paid Member,</h3><br>
				<p>Thank you for your Payment!  Your Registration and Payment records will be integrated by our administrator.  Please log back into Your Account with your Registration email and password for further steps.</p></br>

        <ul>
          <li>For the Heritage Competition you may begin to upload your Design submission.</li>
          <li> For the African Architecture Courses, check your email within 10 Days for the CANVAS Classroom Invitation.</li>
        </ul>

        <p>Thank you for joining us at The Community Planning & Design Initiative Africa! <a href="http://cpdiafrica.org">www.cpdiafrica.org</a></p>
				<br><br>
				<br><br>

				<p>Email: <a href="mailto:design@cpdiafrica.org">design@cpdiafrica.org</a> / <a href="mailto:cpdiafricascholarships@gmail.com">cpdiafricascholarships@gmail.com</a></p>


		    ';



		    // Tells PHPMailer to use SMTP authentication
		    $mail->SMTPAuth = true;

		    // Enable TLS encryption over port 587
		    $mail->SMTPSecure = 'tls';
		    $mail->Port = 587;

		    // Tells PHPMailer to send HTML-formatted email
		    $mail->isHTML(true);

		    // The alternative email body; this is only displayed when a recipient
		    // opens the email in a non-HTML email client. The \r\n represents a
		    // line break.
		    $mail->AltBody = "Do not send a reply to this mail";


		    if(!$mail->send()) {
		      // die(var_dump("Email not sent. " , $mail->ErrorInfo , PHP_EOL));
					$mailerror = "An error occur while trying to send a receipt to you via mail";
		    }

        $to = $getInfo[0]['email'];

        $subject =  $site_name." Heritage Competition Registration";
        $message = '<h3>Dear AA Resume Paid Member,</h3><br>
        <p>Thank you for your Payment!  Your Registration and Payment records will be integrated by our administrator..</p></br>

        <br><br>
        <p>Thank you for joining purchasing an item with Us <a href="http://cpdiafrica.org">www.cpdiafrica.org</a></p>
        <br><br>

        <p>Email: <a href="mailto:echo $site_email;">design@cpdiafrica.org</a> / <a href="mailto:echo $site_email;">echo $site_email;</a></p>


        ';
        $headers ="MIME-Version :1.0"."\r\n";
        $headers .="Content-type:text/html; charset=iso-8859-1"."\r\n";
        $headers .= 'From: design@cpdiafrica.org' . "\r\n" .
          'Reply-To: echo $site_email;' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

// $_SESSION['success'] = $invoice[0]['hash_id'];
header("Location:/".$redirectUrl."?invoice=".$invoice[0]['hash_id']);
exit();
  }else{
    $data["status"] = "Success, Verified But Payment Unmatched";
    $data["invoice_id"] = $_GET['tx_ref'];
    $data['time_created'] = date("h:i:s");
    $data['date_created'] = date("Y-m-d");
    insertSafe($conn,'complications',$data);
    header("Location:/error.php?message=payment not processed. ");
    die;
  }
}else{
  if (intval($response->body->data->amount) === intval($amount_due)) {


updateContent($conn,$invoice_table,["status"=>"paid"],["invoice_id"=>$_GET['tx_ref']]);


// $_SESSION['success'] = $invoice[0]['hash_id'];
header("Location:/".$redirectUrl."?invoice=".$invoice[0]['hash_id']);
exit();
  }else{
    $data["status"] = "Success, Verified But Payment Unmatched";
    $data["invoice_id"] = $_GET['tx_ref'];
    $data['time_created'] = date("h:i:s");
    $data['date_created'] = date("Y-m-d");
    insertSafe($conn,'complications',$data);
    header("Location:/error.php?message=payment not processed. ");
    die;
  }
}
  }else{
    $data["status"] = "Success and But Unverified";
    $data["invoice_id"] = $_GET['tx_ref'];
    $data['time_created'] = date("h:i:s");
    $data['date_created'] = date("Y-m-d");
    insertSafe($conn,'complications',$data);
      header("Location:/error.php?message=Payment not processed");
    die;
  }




}


 ?>
