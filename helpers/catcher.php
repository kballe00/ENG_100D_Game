<?php
  header('Content-type: application/json');

  include_once "../engine/global.php";
  
  $r;
  
  $amt = $_SESSION['amt'];
  $var = $_SESSION['var'];
  
  $status = $_POST['status'];
  
  if( $status === "positive" ){
    
    if( $var == "wages"){
      $user->put( $_SESSION['username'], 'wages', $amt );
    } elseif ( $var == "carPayment" ) {
      $user->put( $_SESSION['username'], 'carPayment', $amt );
    } else {
      $user->put( $_SESSION['username'], 'bank', $amt );
    }
    
    $r['response'] = "success";
    $r['amt'] = $amt;
    $r['var'] = $var;
    
    $r[ $var ] = $user->pull( $_SESSION['username'], $var );
    
  } else {
  
    $r['response'] = "failure";
  }
  
  echo json_encode( $r );

?>