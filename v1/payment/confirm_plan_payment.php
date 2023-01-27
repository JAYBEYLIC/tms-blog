<?php

if(!isset($_GET['invoice'])){
if(isset($webhook)){
  $_GET['invoice'] = $invoice[0]['invoice_id'];
}else{
  exit();
}
}

require APP_PATH.'/phpm/PHPMailerAutoload.php';


$invoice =  selectContent($conn,"invoice",['hash_id'=>$_GET['invoice'],"status"=>"paid"]);
// die(var_dump($invoice));

if(count($invoice) < 1 ){
  die("ERROR_CODE:DTN|NV|NFD");
  exit();
}
if($invoice[0]['amount_paid'] !== NULL) {
    die("ERROR_CODE:DTN|NV|ALRD|ISSD");
  exit();
}
extract($invoice[0]);

$date = getdate(date("U"));
if($date['mon'] < 10){
  $mon = "0".$date['mon'];
}else{
  $mon = $date['mon'];
}
$now =  $date['year']."-".$mon."-".$date['mday'] ;





//Give Value
    // updateContent($conn,"read_product_order",['bool_status'=>1],["input_order_id"=>$invoice[0]['event_id']]);


// Update INVOICECODE
    updateContent($conn,"invoice",['amount_paid'=>1],["hash_id"=>$_GET['invoice']]);

$to_mail = $invoice[0]['email'];
$subject1 = "Payment Confirmation";
$message1 = "<div><b>Hello, ".$invoice[0]['name'].".</b></div><br><p>Your Payment for ".$invoice[0]['title']." has been recorded. Our Admin will get back to you on further steps.</p><br> <p>Regards, ".$site_name." Team</p>";


$subject2 = "New Payment";
$message2 = "<div><b>Hello, Admin.</b></div><br><p>".$invoice[0]['name']." Just made a payment for ".$invoice[0]['title'].". You can find the details below: <br>
  Name: ".$invoice[0]['name']." <br>
  Email: ".$invoice[0]['email']."<br>
  Invoice Number: ".$invoice[0]['invoice_number']."<br>
  Title: ".$invoice[0]['title']."<br> </p>";

//send mail to the user
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 3;
// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$mail->setFrom($site_email_from, $site_name);
$mail->AddReplyTo($site_email_from, $site_name);

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
// Also note that you can include several addAddress() lines to send
// email to multiple recipients.
$mail->addAddress($to_mail);

// Replace smtp_username with your Amazon SES SMTP user name.
$mail->Username = $site_email_from;

// Replace smtp_password with your Amazon SES SMTP password.
$mail->Password = $site_email_password;
 // die(var_dump($mail->Password));

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
// $mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$mail->Host = $site_email_smtp_host;

// The subject line of the email
$mail->Subject = $subject1;

// The HTML-formatted body of the email
$mail->Body = $message1;



// Tells PHPMailer to use SMTP authentication
$mail->SMTPAuth = true;

// Enable TLS encryption over port 587
$mail->SMTPSecure = $site_email_smtp_secure_type;
$mail->Port = $site_email_smtp_port;

// Tells PHPMailer to send HTML-formatted email
$mail->isHTML(true);

// The alternative email body; this is only displayed when a recipient
// opens the email in a non-HTML email client. The \r\n represents a
// line break.
$mail->AltBody = "Do not send a reply to this mail";

if(!$mail->send()) {
  // die(var_dump($mail->Body));
  $_SESSION['failed'] = "Message not sent. Please try again after some time";
  header("Location:".$_SERVER['REQUEST_URI']);
    exit();
     // die(var_dump("Email not sent. " , $mail->ErrorInfo , PHP_EOL));
} else {
 // var_dump($mail);
 // die("Sent");
   // $_SESSION['success'] = "Message Sent. Thanks for contacting us. We'll reach out to you as soon as possible.";
   // header("Location:".$_SERVER['REQUEST_URI']);
   //  exit();
   // echo "Email sent!" , PHP_EOL;
   // exit();
}


$mail2 = new PHPMailer;
$mail2->isSMTP();
$mail2->SMTPDebug = 3;
// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$mail2->setFrom($site_email_from, $site_name);
$mail2->AddReplyTo($site_email_from, $site_name);

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
// Also note that you can include several addAddress() lines to send
// email to multiple recipients.
$mail2->addAddress($site_email);

// Replace smtp_username with your Amazon SES SMTP user name.
$mail2->Username = $site_email_from;

// Replace smtp_password with your Amazon SES SMTP password.
$mail2->Password = $site_email_password;
 // die(var_dump($mail->Password));

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
// $mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$mail2->Host = $site_email_smtp_host;

// The subject line of the email
$mail2->Subject = $subject2;

// The HTML-formatted body of the email
$mail2->Body = $message2;


// Tells PHPMailer to use SMTP authentication
$mail2->SMTPAuth = true;

// Enable TLS encryption over port 587
$mail2->SMTPSecure = $site_email_smtp_secure_type;
$mail2->Port = $site_email_smtp_port;

// Tells PHPMailer to send HTML-formatted email
$mail2->isHTML(true);

// The alternative email body; this is only displayed when a recipient
// opens the email in a non-HTML email client. The \r\n represents a
// line break.
$mail2->AltBody = "Do not send a reply to this mail";

if(!$mail2->send()) {
  // die(var_dump($mail->Body));
  // $_SESSION['failed'] = "Message not sent. Please try again after some time";
  // header("Location:".$_SERVER['REQUEST_URI']);
  //   exit();
     // die(var_dump("Email not sent. " , $mail->ErrorInfo , PHP_EOL));
} else {
 // var_dump($mail);
 // die("Sent");
 $_SESSION['success'] = "Payment Successful";
 header("Location:/pricing");
 exit();
   // echo "Email sent!" , PHP_EOL;
   // exit();
}
    // if (count($admin) < 1) {
    //   die("Error! User Not Found");
    // }else{

    // }
