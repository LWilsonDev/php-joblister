<?php
// redirect to page
function redirect($page = FALSE, $message = NULL, $message_type = NULL){
    if (is_string ($page)) {
      $location = $page;
    } else {
      $location = $_SERVER ['SCRIPT_NAME'];
    }

    // check for message
    if($message != NULL){
      //set message
      $_SESSION['message_type'] = $message_type;
    }
     // redirect
      header ('Location: ' .$location);
      exit;

}



?>
