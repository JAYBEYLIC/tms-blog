<?php
ob_start();

if (!isset($_GET['id']) || !isset($_GET['type']) ) {
header("Location:/index");
exit();
}
//session_start();
// include("include/link_include.php");
// if(!isset($_SESSION['user_to_edit'])){
//   header("Location:/index");
// }

$error= [];

if(array_key_exists('submit', $_POST)){

  if(empty($_POST['discount'])){
    $error['discount']="Enter Discount Code";
  }


  if(empty($error)){
$invoice = selectContent($conn,"invoice",['hash_id'=>$_GET['id']]);
$invoiceInfo = selectContent($conn,"panel_discount_code",['input_discount_code'=>$_POST['discount']]);

$invoiceInfoCheck = selectContent($conn,"panel_discount_code",['event_id'=>$invoice[0]['event_id']]);

// die(var_dump($_POST));
if ($invoiceInfo[0]['status'] !== NULL) {
header("Location:/payment_invoice?id=".$_GET['id']."&type=".$_GET['type']);
$_SESSION['failed'] = "Code already used or invalid";
  exit();
}
if (count($invoiceInfoCheck) > 0) {
  header("Location:/payment_invoice?id=".$_GET['id']."&type=".$_GET['type']);
  $_SESSION['failed'] = "Code already used or invalid";
    exit();
}

try {

  $sub = intval($invoice[0]['amount_due']) - intval($invoiceInfo[0]['input_discount_amount']);
    updateContent($conn,"invoice",["amount_due"=>$sub],['hash_id'=>$_GET['id']]);



} catch (PDOException $e) {
  die("Something When Wrong");
  exit();

}

updateContent($conn,"panel_discount_code",['used_by'=>$invoice[0]['name'],"event_id"=>$invoice[0]['event_id'],"status"=>1],['input_discount_code'=>$_POST['discount']]);

header("Location:/payment_invoice?id=".$_GET['id']."&type=".$_GET['type']);






// var_dump($invoice);
// die(var_dump($invoiceInfo));
  }
}

 ?>



<!DOCTYPE html>
<html lang="" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?php echo $site_name ?></title>
  <meta name="theme-color" >
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color:grey">

  <div class="col-md-12">

    <div class="card" style="width:100%;min-height:96vh; Background-color:white;">
      <div class="card-body text-center">

          <div class="mx-auto" style="width:100px; height: 100px;background:url('<?php echo  $logo_directory ?>'); background-size:80%; background-position:center; background-repeat:no-repeat;">
          </div>

        <br>
        <br>
        <h5><?php echo $site_name ?> DISCOUNT SYSTEM</h5>

        <br>
        <!-- <p>Password Recovery</p>
        <br> -->
        <section id="">
          <div class="container">
            <div class="row">

              <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4 mx-auto">
                <div class="page-login-form">
                  <div class="row"><div class="col-md-12">
              <div class=" posting">
            <div class="card mx-auto" role="alert">

              <h3>
              Enter Discount Code
              </h3>
              <form role="form" class="login-form" method="POST" action="">


              <div class="form-group">
                <?php $display = displayErrors($error, 'discount');
                echo $display ?>
              <div class="input-icon">
              <i class="icon fa fa-unlock-alt"></i>
              <input type="text" class="form-control" name="discount" placeholder="Discount">
              </div>
              </div>

              <input type="submit" class="btn btn-common log-btn"  name="submit">

              </form>



              </div>
              </div>
              </div>
              </div>
              </div>




                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

</body>
</html>
