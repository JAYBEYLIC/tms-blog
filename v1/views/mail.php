<?php

$request_headers = getallheaders();
if($_SERVER['REQUEST_METHOD'] !=="POST"){
   http_response_code(502);
   die;
}

if( !in_array($request_headers['Host'],["astrocybernet.com"]) ){
  http_response_code(502);
  die;
}


$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json,true);
// die(var_dump($data));

$result = [];

// print_r($data);
// die;

extract($data);



$subject = "Astrocybernet";
$to = $site_email;

// $userMessage = "Dear $name, We are glad to receive your message, we'll get in touch with you soonest.";




try {

require APP_PATH.'/phpm/PHPMailerAutoload.php';

$userMessage = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="/logo.png" type="image/x-icon">

    <title>McKodev TechLab </title>

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: "Rubik", sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        .mb-3 {
            margin-bottom: 30px;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
            color: #C4262E;
        }

        h5 {
            margin: 10px;
            color: #777;
        }

        .text-center {
            text-align: center
        }

        .welcome-name h5 {
            font-weight: normal;
            margin: 10px 0 0;
            color: #232323;
            text-align: justify;
            line-height: 1.6;
            letter-spacing: 0.05em;
        }

        .welcome-details p span {
            color: #8c1ca7;
            font-weight: 700;
            margin: 0 2px;
            text-decoration: underline;
        }

        .welcome-details p {
            font-weight: normal;
            font-size: 14px;
            color: #8c1ca7;
            line-height: 1.6;
            letter-spacing: 0.05em;
            margin: 0;
            text-align: justify;
        }

        button {
            padding: 12px 30px;
            border: none;
            background-color: #0dc143;
            color: #ffffff;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 1.3px;
            border-radius: 5px;
        }
        button a{
          color: #fff;
        }
        .how-work li {
            margin: 0 20px;
            color: #232323;
            position: relative;
        }

        .how-work li:after {
            content: "";
            position: absolute;
            top: 50%;
            left: -21px;
            width: 2px;
            height: 70%;
            background-color: #7e7e7e;
            transform: translateY(-50%);
        }

        .how-work li:first-child::after {
            content: none;
        }

        .main-bg-light {
            background-color: #fafafa;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
        <tbody>
            <tr>
                <td style="padding: 25px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                            <tr class="header">
                                <td align="left" valign="top">
                                     

                                       

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="background-color: white; width: 100%; padding: 0 30px; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
        <tbody>
            <tr>
                <td class="welcome-image mb-3" style="display: block;">
                   
                </td>

                <td class="welcome-name mb-3" style="text-align: left; display: block;">
                    <h4 style="text-transform: capitalize; margin: 0; font-weight: 500; color: #232323">Hi,'.$name.'
                        Welcome to '.$site_name.'</h4>
                    <h5>We have received your request.We will respond to you shortly.</h5>
                    <h5>Thank you.We cannot wait to discuss your issues and create magic with you.</h5>
                </td>

                <td class="welcome-details mb-3" style="display: block;">
                    <p>If you have any question, please email us at <span> <a href="mailto:'.$site_email.'">'.$site_email.'</a> </span> You can also chat with us on whatsapp by clicking on the link below.</p>
                    <button><a href="https://wa.me/'.$site_phone.'"><i class="fab fa-whatsapp"></i> Whatsapp</a></button>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="text-center" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
        style="background-color: #eff2f7; color: #232323; padding: 40px 30px;">
        <tr>
            <td>
                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon text-center" align="center"
                    style="margin: 8px auto 20px;">
                    <tr>
                        <td>
                            <a href='.$fbLink.'">
                                <i class="fab fa-facebook" style="font-size: 25px; margin: 0 18px 0 0;width: 22px; color:#0D8AF0"></i>
                            </a>
                        </td>
                        <td>
                            <a href="'.$twitterLink.'">
                                <i class="fab fa-twitter" style="font-size: 25px; margin: 0 18px 0 0;width: 22px; color:#1D9BF0"></i>
                            </a>
                        </td>
                       
                        <td>
                            <a href="'.$igLink.'">
                                <i class="fab fa-instagram" alt="" style="font-size: 25px; width: 22px; color:#F60078"></i>
                            </a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>
';

// var_dump($site_email);

$mail = new PHPMailer;
$mail->isSMTP(); // Set mailer to use SMTP
// $mail->SMTPDebug = 2; // Enable verbose debug output
$mail->Host = $site_email_smtp_host; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = $site_email_from; // SMTP username
$mail->Password = $site_email_password; // SMTP password
$mail->SMTPSecure = $site_email_smtp_secure_type;; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
$mail->Port = $site_email_smtp_port;
$mail->setFrom($site_email, $site_name);
$mail->addAddress($email, $name); // Add a recipient
// $mail->addAddress($site_email); // Name is optional
$mail->addReplyTo($site_email, $site_name);
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = $subject;
$mail->Body = $userMessage;

// var_dump($mail);
$mail2admin = new PHPMailer;
$mail2admin->isSMTP(); // Set mailer to use SMTP
// $mail2admin->SMTPDebug = 2; // Enable verbose debug output
$mail2admin->Host = $site_email_smtp_host; // Specify main and backup SMTP servers
$mail2admin->SMTPAuth = true; // Enable SMTP authentication
$mail2admin->Username = $site_email_from; // SMTP username
$mail2admin->Password = $site_email_password; // SMTP password
$mail2admin->SMTPSecure = $site_email_smtp_secure_type;; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
$mail2admin->Port = $site_email_smtp_port;
$mail2admin->setFrom($site_email, $site_name);
// $mail->addAddress($email, $name); // Add a recipient
$mail2admin->addAddress($site_email); // Name is optional
$mail2admin->addReplyTo($site_email, $site_name);
$mail2admin->isHTML(true); // Set email format to HTML
$mail2admin->Subject = $subject;
$mail2admin->Body = "<h3>Welcome</h3><p>Message from Astrocybernet </p>";

$mail2admin->AltBody = "Do not send a reply to this mail";

if (isset($name) && !empty($name)) {
    $mail2admin->Body.="<p>Name: ".$name."</p>";
}
if (isset($email) && !empty($email)) {
    $mail2admin->Body.="<p>Email: ".$email."</p>";
}
if (isset($message) && !empty($message)) {
    $mail2admin->Body.="<p>Message: ".$message."</p>";
}



if($mail->send() && $mail2admin->send()) {
  $result['success'] = "Message Sent Successfully, we'll get in touch with you Quickly.";
}else{
  $result['failed'] = "the email was not sent .";
}
$result['sent']="here is the main thing";

} catch (\Exception $e) {
  // echo $e->getMessage();
  $result['failed'] = "Sorry, an error occured, please try again.";

}


$result = json_encode($result);
echo $result;







 ?>
