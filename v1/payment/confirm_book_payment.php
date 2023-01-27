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
    $new_message =  selectContent($conn,"read_email_message",[]);

    $to_mail = $invoice[0]['email'];
    $subject1 = "Payment Confirmation";
    // $message1 = "<div><b>Hello, ".$invoice[0]['name'].".</b></div><br><p>Your Payment for ".$invoice[0]['title']." has been recorded. </p><br>
    //               ".$new_message[0]['text_message']."<br> <p>You can download it using the link below</p><br> ".$invoice[0]['download_link']." <br><p>Regards, ".$site_name." Team</p>";
$message1 = '
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<title>'.$site_name.'</title>

<style type="text/css">

[style*="Open Sans"] {font-family: "Open Sans", Arial, sans-serif !important}

div, p, a, li, td { -webkit-text-size-adjust:none; }

*{-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;}

.ReadMsgBody
{width: 100%; background-color: #ffffff;}
.ExternalClass
{width: 100%; background-color: #ffffff;}
body{width: 100%; height: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
html{width: 100%; background-color: #ffffff;}


p {padding: 0!important; margin-top: 0!important; margin-right: 0!important; margin-bottom: 0!important; margin-left: 0!important; }

.hover:hover {opacity:0.85;filter:alpha(opacity=85);}
.underline:hover {text-decoration: underline!important;}

.jump:hover {opacity:0.75;filter:alpha(opacity=75);padding-top: 10px!important;}

a.rotator img {-webkit-transition: all 1s ease-in-out; -moz-transition: all 1s ease-in-out; -o-transition: all 1s ease-in-out; -ms-transition: all 1s ease-in-out; }

a.rotator img:hover {-webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -o-transform: rotate(360deg); -ms-transform: rotate(360deg); }

@-webkit-keyframes bounceIn { 0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

@keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

#box {-webkit-animation: bounceIn 2s; -moz-animation: bounceIn 2s; -o-animation: bounceIn 2s; animation: bounceIn 2s; }

@-webkit-keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

@keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

#box2 { -webkit-animation: bounceIn 1.5s; -moz-animation: bounceIn 1.5s; -o-animation: bounceIn 1.5s; animation: bounceIn 1.5s; }

@-webkit-keyframes bounceIn { 0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

@keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

#box3 {-webkit-animation: bounceIn 2s; -moz-animation: bounceIn 2s; -o-animation: bounceIn 2s; animation: bounceIn 2s; }

@-webkit-keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

@keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

#box4 { -webkit-animation: bounceIn 1.5s; -moz-animation: bounceIn 1.5s; -o-animation: bounceIn 1.5s; animation: bounceIn 1.5s; }

#logo img {width: 125px; height: auto;}
#logo_footer img {width: 100px; height: auto;}
.image175 img {width: 175px; height: auto;}
.icon34 img {width: 34px; height: auto;}
#icon13 img {width: 13px; height: auto;}
.icon30 img {width: 30px; height: auto;}
.image191 img {width: 191px; height: auto; border-radius: 4px;}
.avatar83 img {width: 83px; height: auto;}
.image194 img {width: 194px; height: auto; border-radius: 4px;}
.icon37 img {width: 37px; height: auto;}
.image400 img {width: 400px; height: auto;}
.image600 img {width: 600px; height: auto; border-radius: 4px;}
.image185 img {width: 185px; height: auto; border-radius: 4px;}
.image352 img {width: 352px; height: auto;}
.icons17 img {width: 17px; height: auto;}

@media only screen and (max-width: 640px){
    body{width:auto!important;}
    table[class=full] {width: 100%!important; clear: both; }
    table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
    table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
    td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
    *[class=erase] {display: none;}
    *[class=buttonScale] {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
    .[class=textLeft] {text-align: left!important; float: left!important;}
    .h10 {height: 10px!important;}
    table[class=scale33] {width: 30%!important;}
    table[class=scale33Right] {width: 30%!important;}
    table[class=scale33_2] {width: 32%!important;}
    table[class=scale33Right_2] {width: 32%!important;}
    table[class=scale50] {width: 46%!important;}
    table[class=scale50Right] {width: 46%!important;}
    .image185 img {width: 100%!important; height: auto;}
    .image194 img {width: 100%!important; height: auto;}
    .pad {width: 100%!important; padding-left: 15px!important; padding-right: 15px!important;}
    table[class=w10] {width: 5%!important; }
    table[class=w5] {width: 2%!important; }
    .image600 img {width: 100%!important; height: auto!important; border-radius: 4px;}
    .image400 img {width: 100%!important; height: auto;}
    .image352 img {width: 100%!important; height: auto;}
    .h40 {height: 40px!important;}
    .h30 {height: 30px!important;}
    td[class=pad20] {width: 100%!important; padding-left: 20px!important; padding-right: 20px!important; clear: both; }
}

@media only screen and (max-width: 479px){
    body{width:auto!important;}
    table[class=full] {width: 100%!important; clear: both; }
    table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
    table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
    td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
    *[class=erase] {display: none;}
    *[class=buttonScale] {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
    .h10 {height: 10px!important;}
    table[class=scale33] {width: 100%!important;}
    table[class=scale33Right] {width: 100%!important;}
    table[class=scale33_2] {width: 100%!important;}
    table[class=scale33Right_2] {width: 100%!important;}
    table[class=scale50] {width: 100%!important;}
    table[class=scale50Right] {width: 100%!important;}
    .image185 img {width: 100%!important; height: auto;}
    .image194 img {width: 100%!important; height: auto;}
    .pad {width: 100%!important; padding-left: 15px!important; padding-right: 15px!important;}
    table[class=w10] {width: 100%;}
    .image600 img {width: 100%!important; height: auto!important; border-radius: 4px;}
    .image400 img {width: 100%!important; height: auto;}
    .image352 img {width: 100%!important; height: auto;}
    .h40 {height: 40px!important;}
    .h30 {height: 30px!important;}
    td[class=pad20] {width: 100%!important; padding-left: 20px!important; padding-right: 20px!important; clear: both; }
}
</style>

</head>
<body style="margin: 0; padding: 0;">


  <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tr>
      <td width="100%" valign="top" bgcolor="#ffffff" align="center">


        <!-- Wrapper -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
          <tr>
            <td align="center">

              <!-- Space -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tr>
                  <td width="100%" height="50"></td>
                </tr>
              </table><!-- End Space -->

              <!-- Wrapper -->
              <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tr>
                  <td width="100%" align="center">

                    <!-- Image 600 -->
                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                      <tr>
                        <td width="100%" class="image600">
                          <a target="_blank" href="#" style="text-decoration: none;"><img src="'.$logo_directory.'" alt="" border="0" width="600" height="auto" class="hover" style="border-radius: 4px;"></a>
                        </td>
                      </tr>
                      <tr>
                        <td width="100%" height="25" class="h10"></td>
                      </tr>
                      <tr>
                        <td valign="middle" width="100%">

                          <table width="190" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                            <tr>
                              <td height="35" width="100%" style="text-align: right; font-family: Helvetica, Arial, sans-serif, "Open Sans"; font-size: 13px; color: #fa6f6f; line-height: 24px; font-weight: 400;" class="textLeft" id="icon13">

                                <span style="text-decoration: none;"><img src="images/icon_13_1.png" width="13" alt="" border="0" style="vertical-align: middle; padding-bottom: 2px;"></span>
                                &nbsp;
                                <a target="_blank" href="'.$_SERVER['HTTP_HOST'].'" style="text-decoration: none; color: #f67b7c;">'.$site_name.'</a>
                                &nbsp;&nbsp;
                                <span style="text-decoration: none;"><img src="images/icon_13_2.png" width="13" alt="" border="0" style="vertical-align: middle; padding-bottom: 3px;"></span>
                                &nbsp;
                                <span style="text-decoration: none;"><img src="images/icon_13_3.png" width="13" alt="" border="0" style="vertical-align: middle; padding-bottom: 3px;"></span>
                              </td>
                            </tr>
                          </table>



                        </td>
                      </tr>
                      <tr>
                        <td width="100%" height="25"></td>
                      </tr>
                      <tr>
                        <td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif, '."'Open Sans'".'; font-size: 14px; color: #808080; line-height: 22px; font-weight: 400;">
                        <p>Hello <strong>'.$invoice[0]['name'].',</strong></p>
                        <p>Your Payment for '.$invoice[0]['title'].' has been recorded. </p>
                            <p>'.$new_message[0]['text_message'].'</p>
                            <p>You can download it using the link below</p>
                            <p>Regards</p>

                            <p>'.$site_name.'</p>
                        </td>
                      </tr>
                      <tr>
                        <td width="100%" height="30"></td>
                      </tr>
                      <!-- Button Left -->
                      <tr>
                        <td width="auto" align="left">

                          <table border="0" cellpadding="0" cellspacing="0" align="left">
                            <tr>
                              <td width="auto" align="center" height="37" bgcolor="#fa6f6f" style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; padding-left: 22px; padding-right: 22px; font-weight: bold; font-family: Helvetica, Arial, sans-serif, '."'Open Sans'".'; color: #ffffff; font-weight: 600;">
                                <a target="_blank" href="'.$invoice[0]['download_link'].'" style="color: #ffffff; font-size: 14px; text-decoration: none; line-height: 34px; width: 100%;">Download Here</a>
                              </td>
                            </tr>
                          </table>

                        </td>
                      </tr>
                      <tr>
                        <td width="100%" height="70"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table><!-- End Wrapper 2 -->

            </td>
          </tr>
        </table><!-- End Wrapper -->

      </td>
    </tr>
  </table>
</body>
</html>
';











    $subject2 = "New Payment";
    // $message2 = "<div><b>Hello, Admin.</b></div><br><p>".$invoice[0]['name']." Just made a payment for ".$invoice[0]['title'].". You can find the details below: <br>
    //   Name: ".$invoice[0]['name']." <br>
    //   Email: ".$invoice[0]['email']."<br>
    //   Invoice Number: ".$invoice[0]['invoice_number']."<br>
    //   Title: ".$invoice[0]['title']."<br> </p>";



      $message2 = '
      <html>
      <head>
      <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <title>'.$site_name.'</title>

      <style type="text/css">

      [style*="Open Sans"] {font-family: "Open Sans", Arial, sans-serif !important}

      div, p, a, li, td { -webkit-text-size-adjust:none; }

      *{-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;}

      .ReadMsgBody
      {width: 100%; background-color: #ffffff;}
      .ExternalClass
      {width: 100%; background-color: #ffffff;}
      body{width: 100%; height: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
      html{width: 100%; background-color: #ffffff;}


      p {padding: 0!important; margin-top: 0!important; margin-right: 0!important; margin-bottom: 0!important; margin-left: 0!important; }

      .hover:hover {opacity:0.85;filter:alpha(opacity=85);}
      .underline:hover {text-decoration: underline!important;}

      .jump:hover {opacity:0.75;filter:alpha(opacity=75);padding-top: 10px!important;}

      a.rotator img {-webkit-transition: all 1s ease-in-out; -moz-transition: all 1s ease-in-out; -o-transition: all 1s ease-in-out; -ms-transition: all 1s ease-in-out; }

      a.rotator img:hover {-webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -o-transform: rotate(360deg); -ms-transform: rotate(360deg); }

      @-webkit-keyframes bounceIn { 0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

      @keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

      #box {-webkit-animation: bounceIn 2s; -moz-animation: bounceIn 2s; -o-animation: bounceIn 2s; animation: bounceIn 2s; }

      @-webkit-keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

      @keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

      #box2 { -webkit-animation: bounceIn 1.5s; -moz-animation: bounceIn 1.5s; -o-animation: bounceIn 1.5s; animation: bounceIn 1.5s; }

      @-webkit-keyframes bounceIn { 0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

      @keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

      #box3 {-webkit-animation: bounceIn 2s; -moz-animation: bounceIn 2s; -o-animation: bounceIn 2s; animation: bounceIn 2s; }

      @-webkit-keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);transform: scale(1);}}

      @keyframes bounceIn {0% {opacity: 0;-webkit-transform: scale(.3);-ms-transform: scale(.3);transform: scale(.3);}50% {opacity: 1;-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);}70% {-webkit-transform: scale(.9);-ms-transform: scale(.9);transform: scale(.9);}100% {opacity: 1;-webkit-transform: scale(1);-ms-transform: scale(1);transform: scale(1);}}

      #box4 { -webkit-animation: bounceIn 1.5s; -moz-animation: bounceIn 1.5s; -o-animation: bounceIn 1.5s; animation: bounceIn 1.5s; }

      #logo img {width: 125px; height: auto;}
      #logo_footer img {width: 100px; height: auto;}
      .image175 img {width: 175px; height: auto;}
      .icon34 img {width: 34px; height: auto;}
      #icon13 img {width: 13px; height: auto;}
      .icon30 img {width: 30px; height: auto;}
      .image191 img {width: 191px; height: auto; border-radius: 4px;}
      .avatar83 img {width: 83px; height: auto;}
      .image194 img {width: 194px; height: auto; border-radius: 4px;}
      .icon37 img {width: 37px; height: auto;}
      .image400 img {width: 400px; height: auto;}
      .image600 img {width: 600px; height: auto; border-radius: 4px;}
      .image185 img {width: 185px; height: auto; border-radius: 4px;}
      .image352 img {width: 352px; height: auto;}
      .icons17 img {width: 17px; height: auto;}

      @media only screen and (max-width: 640px){
          body{width:auto!important;}
          table[class=full] {width: 100%!important; clear: both; }
          table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
          table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
          td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
          *[class=erase] {display: none;}
          *[class=buttonScale] {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
          .[class=textLeft] {text-align: left!important; float: left!important;}
          .h10 {height: 10px!important;}
          table[class=scale33] {width: 30%!important;}
          table[class=scale33Right] {width: 30%!important;}
          table[class=scale33_2] {width: 32%!important;}
          table[class=scale33Right_2] {width: 32%!important;}
          table[class=scale50] {width: 46%!important;}
          table[class=scale50Right] {width: 46%!important;}
          .image185 img {width: 100%!important; height: auto;}
          .image194 img {width: 100%!important; height: auto;}
          .pad {width: 100%!important; padding-left: 15px!important; padding-right: 15px!important;}
          table[class=w10] {width: 5%!important; }
          table[class=w5] {width: 2%!important; }
          .image600 img {width: 100%!important; height: auto!important; border-radius: 4px;}
          .image400 img {width: 100%!important; height: auto;}
          .image352 img {width: 100%!important; height: auto;}
          .h40 {height: 40px!important;}
          .h30 {height: 30px!important;}
          td[class=pad20] {width: 100%!important; padding-left: 20px!important; padding-right: 20px!important; clear: both; }
      }

      @media only screen and (max-width: 479px){
          body{width:auto!important;}
          table[class=full] {width: 100%!important; clear: both; }
          table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
          table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
          td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
          *[class=erase] {display: none;}
          *[class=buttonScale] {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
          .h10 {height: 10px!important;}
          table[class=scale33] {width: 100%!important;}
          table[class=scale33Right] {width: 100%!important;}
          table[class=scale33_2] {width: 100%!important;}
          table[class=scale33Right_2] {width: 100%!important;}
          table[class=scale50] {width: 100%!important;}
          table[class=scale50Right] {width: 100%!important;}
          .image185 img {width: 100%!important; height: auto;}
          .image194 img {width: 100%!important; height: auto;}
          .pad {width: 100%!important; padding-left: 15px!important; padding-right: 15px!important;}
          table[class=w10] {width: 100%;}
          .image600 img {width: 100%!important; height: auto!important; border-radius: 4px;}
          .image400 img {width: 100%!important; height: auto;}
          .image352 img {width: 100%!important; height: auto;}
          .h40 {height: 40px!important;}
          .h30 {height: 30px!important;}
          td[class=pad20] {width: 100%!important; padding-left: 20px!important; padding-right: 20px!important; clear: both; }
      }
      </style>

      </head>
      <body style="margin: 0; padding: 0;">


        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
          <tr>
            <td width="100%" valign="top" bgcolor="#ffffff" align="center">


              <!-- Wrapper -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tr>
                  <td align="center">

                    <!-- Space -->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                      <tr>
                        <td width="100%" height="50"></td>
                      </tr>
                    </table><!-- End Space -->

                    <!-- Wrapper -->
                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                      <tr>
                        <td width="100%" align="center">

                          <!-- Image 600 -->
                          <table width="600" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                            <tr>
                              <td width="100%" class="image600">
                                <a target="_blank" href="#" style="text-decoration: none;"><img src="'.$logo_directory.'" alt="" border="0" width="600" height="auto" class="hover" style="border-radius: 4px;"></a>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="25" class="h10"></td>
                            </tr>
                            <tr>
                              <td valign="middle" width="100%">

                                <table width="190" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                  <tr>
                                    <td height="35" width="100%" style="text-align: right; font-family: Helvetica, Arial, sans-serif, "Open Sans"; font-size: 13px; color: #fa6f6f; line-height: 24px; font-weight: 400;" class="textLeft" id="icon13">

                                      <span style="text-decoration: none;"><img src="images/icon_13_1.png" width="13" alt="" border="0" style="vertical-align: middle; padding-bottom: 2px;"></span>
                                      &nbsp;
                                      <a target="_blank" href="'.$_SERVER['HTTP_HOST'].'" style="text-decoration: none; color: #f67b7c;">'.$site_name.'</a>
                                      &nbsp;&nbsp;
                                      <span style="text-decoration: none;"><img src="images/icon_13_2.png" width="13" alt="" border="0" style="vertical-align: middle; padding-bottom: 3px;"></span>
                                      &nbsp;
                                      <span style="text-decoration: none;"><img src="images/icon_13_3.png" width="13" alt="" border="0" style="vertical-align: middle; padding-bottom: 3px;"></span>
                                    </td>
                                  </tr>
                                </table>



                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="25"></td>
                            </tr>
                            <tr>
                              <td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif, '."'Open Sans'".'; font-size: 14px; color: #808080; line-height: 22px; font-weight: 400;">
                              <p>Hello <strong>Admin,</strong></p>
                              <p>'.$invoice[0]['name'].' Just made a payment for '.$invoice[0]['title'].'. </p>
                                  <p>You can find the details below:</p>
                                  <p>Name: '.$invoice[0]['name'].' </p>
                                  <p>Email: '.$invoice[0]['email'].'</p>
                                  <p>Invoice Number: '.$invoice[0]['invoice_number'].'</p>
                                  <p>Title: '.$invoice[0]['title'].'<br></p>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="30"></td>
                            </tr>
                            
                            <tr>
                              <td width="100%" height="70"></td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table><!-- End Wrapper 2 -->

                  </td>
                </tr>
              </table><!-- End Wrapper -->

            </td>
          </tr>
        </table>
      </body>
      </html>
      ';



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
     header("Location:/knowledge-center");
     exit();
       // echo "Email sent!" , PHP_EOL;
       // exit();
    }
