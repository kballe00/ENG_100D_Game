<?php

  /* Global setup
   *
   * File: global.php
   * Contents: 
   */
  
  session_start();
  
  // database info
  require_once("db.php");
   
  // user class
  require_once(dirname(__FILE__)."/../helpers/user.php");
  
  // session class
  require_once(dirname(__FILE__)."/../helpers/session.php");
  
  // game class
  require_once(dirname(__FILE__)."/../helpers/game.php");
  
  // new user object
  $user = new user();
  $session = new session();
  $game = new game();
?>