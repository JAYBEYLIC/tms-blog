<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);
// var_dump($uri);

$id= NULL;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$flwref= NULL;
if (isset($_GET['flwref'])) {
  $flwref = $_GET['flwref'];
}
$type= NULL;
if (isset($_GET['type'])) {
  $type = $_GET['type'];
}
$txref= NULL;
if (isset($_GET['txref'])) {
  $txref = $_GET['txref'];
}
$event= NULL;
if (isset($_GET['event'])) {
  $event = $_GET['event'];
}
$cancelled= NULL;
if (isset($_GET['cancelled'])) {
  $cancelled = $_GET['cancelled'];
}


  if (!empty($_GET)) {
  $query_string = explode("?",$_SERVER['REQUEST_URI'])[1];
}else{
  $query_string = "";
}
if(count(explode("?",$uri[1])) > 1){
  $uri[1] = explode("?",$uri[1])[0]."?".$query_string;
}

// die($uri[1]);

switch ($uri[1]){
  case "payment_invoice?id=$id&type=$type":
  include APP_PATH."/payment/invoice.php";
  die;
  break;
  case "confirm_all_payment?".$query_string:
  include APP_PATH."/payment/confirmations.php";
  die;
  break;
  case "confirm_courses?".$query_string:
  include APP_PATH."/payment/confirm_courses.php";
  die;
  break;
  case "confirm_book_payment?".$query_string:
  include APP_PATH."/payment/confirm_book_payment.php";
  die;
  break;
  case "confirm_plan_payment?".$query_string:
  include APP_PATH."/payment/confirm_plan_payment.php";
  die;
  break;
  case "confirm_competition?".$query_string:
  include APP_PATH."/payment/confirm_competition.php";
  die;
  break;
  case "discount?".$query_string:
  include APP_PATH."/payment/discount.php";
  die;
  break;

  // case "confirm_payment?flwref=$flwref&txref=$txref&event=$event&":
  // include APP_PATH."/v1/payment/confirmations.php";
  // die;break;
  // case "confirm_payment?flwref=$flwref&txref=$txref":
  // include APP_PATH."/v1/payment/confirmations.php";
  // die;break;
  // case "confirm_payment?cancelled=$cancelled&txref=$txref&event=$event&":
  // include APP_PATH."/v1/payment/confirmations.php";
  // die;break;
  // case "confirm_payment?cancelled=$cancelled&txref=$txref":
  // include APP_PATH."/v1/payment/confirmations.php";
  // die;break;
  case "rave_new_webhook":
  include APP_PATH."/payment/rave_webhook.php";
  die;break;
}
// die("Got Here");
