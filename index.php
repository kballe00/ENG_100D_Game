<?php
  require_once("engine/global.php");

  $page = isset($_GET["page"]) ? $_GET["page"] : null;
  
  $page = ucfirst( $page );

?>
<!doctype html>
<html>
<head>
  <title>
    <?php
      if( $page != null)
        echo $page . " - ";
    ?>
    Intuit Hackathon
  </title>
  
  <link href="fonts/creteround.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  
  <script src="login.js"></script>
  
</head>
<body>
  
  <?php
  
    if( $session->isActive(true) ){
      
      include_once "templates/sidebar.php";
      
      if ($page == 'Home') {
      	include('templates/home.php');
        
      } elseif ($page == 'Game') {
      	include('templates/game.php');
        
      } elseif ($page == 'Profile') {
      	include('templates/profile.php');
        
      } elseif ($page == 'Report') {
      	include('templates/report.php');
        
      }
      
      
    } else {
      
      include_once "templates/login.php";
      
    }
  
  ?>
  
  <script>
    (function( d ){
      var jQ = d.createElement("script"),
          l  = d.head.getElementsByTagName("link")[0];
      
      jQ.src = "http://code.jquery.com/jquery-latest.min.js";
      
      d.head.appendChild( jQ, l );
    })( document );
  </script>
</body>
</html>