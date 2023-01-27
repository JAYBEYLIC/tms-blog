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


  case 'main':
  include APP_PATH."/views/home.php";
  break;

  case 'features':
    include APP_PATH."/views/features.php";
    break;

    case 'jayhome':
      include APP_PATH."/views/index1.php";
      break;

      case 'jaynews':
        include APP_PATH."/views/news.php";
        break;

      case 'jayprice':
        include APP_PATH."/views/pricing.php";
        break;

        case 'info':
          include APP_PATH."/views/contact.php";
          break;

        case 'morein':
          include APP_PATH."/views/newsdetails.php";
          break;

        case 'faq':
          include APP_PATH."/views/faq.php";
          break;

        case '404':
          include APP_PATH."/views/404.php";
          break;

        case 'review':
          include APP_PATH."/views/testimonial.php";
          break;

        case 'team':
          include APP_PATH."/views/team.php";
          break;
}

}



// case 'test':
// include APP_PATH."/views/test.php";
// break;
// case 'test?'.$query_string:
// include APP_PATH."/views/test.php";
// break;







 ?>
