<?php
  require_once("engine/global.php");

  $page = isset($_GET["page"]) ? $_GET["page"] : null;
  
  $page = ucfirst( $page );

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>
    <?php
      if( $page != null)
        echo $page . " - ";
    ?>
    Intuit Hackathon
  </title>
  
  <link href="http://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/login.js"></script>
  <script src="js/game.js"></script>
  
</head>
<body>
  <nav id="primary">
    <a href="about">ABOUT</a>
    <?php
      if( $session->isActive() ){
        echo '<a href="logout">LOGOUT</a>';
      }
    ?>
  </nav>
  <?php
    if( $session->isActive() ){
      
      include_once "templates/sidebar.php";
      
      if ($page == 'Home') {
      	include('templates/home.php');
        
      } elseif ($page == 'Game') {
      	include('templates/game-scene.php');
        
      } elseif ($page == 'Profile') {
      	include('templates/profile.php');
        
      } elseif ($page == 'Report') {
      	include('templates/report.php');
        
      } elseif ($page == 'Logout') {
        $session->terminate();
        header("Location: login");
      
      }
      
      
    } else {
    
      include_once "templates/login.php";
      
    }
  
  ?>
</body>
</html>