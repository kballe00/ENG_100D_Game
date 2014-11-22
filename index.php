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
  <link href="style.css" rel="stylesheet">
</head>
<body>
  
  <?php
  
    if( $session ){
      
      include_once "templates/sidebar.php";
      
      if ($page == 'Home') {
      	include('Templates/home.php');
      } elseif ($page == 'Game') {
      	include('Templates/game.php');
      } elseif ($page == 'Profile') {
      	include('Templates/profile.php');
      } elseif ($page == 'Report') {
      	include('Templates/reports.php');
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