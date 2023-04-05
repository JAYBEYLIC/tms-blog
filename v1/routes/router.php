<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);


if (count($uri) > 2) {


  if (!empty($_GET)) {
  $query_string = explode("?",$uri[2])[1];
}else{
  $query_string = "";
}

  switch ($uri[1]."/".$uri[2]) {

    // case 'portfolio/'.$query_string:
    // include APP_PATH."/views/single_portfolio.php";
    // break;

  }



}else{
  if (!empty($_GET)) {
  $query_string = explode("?",$uri[1])[1];
}else{
  $query_string = "";
}
  // $query_string = explode("?",$uri[1])[1];
  switch ($uri[1]) {


//     case '':
//      include APP_PATH."/views/jayhome.php";
//       break;

//   case 'main':
//   include APP_PATH."/views/jayhome.php";
//   break;

//   case 'explore':
//     include APP_PATH."/views/services.php";
//     break;

//     case 'plan':
//       include APP_PATH."/views/projects.php";
//       break;

//       case 'blogs':
//         include APP_PATH."/views/blog.php";
//         break;

//       case 'about':
//         include APP_PATH."/views/about.php";
//         break;

//         case 'info':
//           include APP_PATH."/views/contact.php";
//           break;

//         case 'team':
//           include APP_PATH."/views/team.php";
//           break;

//         case 'faq':
//           include APP_PATH."/views/faqs.php";
//           break;

        

//         case 'review':
//           include APP_PATH."/views/testimonial.php";
//           break;

//           case 'contact-us-mail':
//           include APP_PATH."/views/mail.php";
//           break;


//         case 'team':
//           include APP_PATH."/views/team.php";
//           break;

//           default:
//           include APP_PATH."/views/404.php";
//             break;
        
// }

}



// case 'test':
// include APP_PATH."/views/test.php";
// break;
// case 'test?'.$query_string:
// include APP_PATH."/views/test.php";
// break;







 ?>
