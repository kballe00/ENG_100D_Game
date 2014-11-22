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
  
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/login.js"></script>
  
</head>
<body>
  
  <?php
    if( $session->isActive() ){
      
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
      echo $session->isActive();
      include_once "templates/login.php";
      
    }
  
  ?>
</body>
</html>