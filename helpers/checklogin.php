<?php
  header('Content-type: application/json');

  require_once("/../engine/global.php");

  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if( $user->validate($username, $password) ) {
  
    $session->register($username);
    $r['response'] = "success";
    
  } else {
  
    $r['response'] = "failure";
    
  }

  echo json_encode( $r );
  
?>
