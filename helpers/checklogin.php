<?php
  header('Content-type: application.json');

  require_once("/../engine/global.php");

  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if( $user->validate($username, $password) ) {
    $session->register($username, $password);
    $r['response'] = "success";
  } else {
    $r['response'] = "failure";
    //http_response_code(404);
  }

  echo json_encode( $r );
  
?>
