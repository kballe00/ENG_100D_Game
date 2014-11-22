<?php

  /* Global setup
   *
   * File: global.php
   * Contents: 
   */
  
  // database info
  require_once("db.php");
   
  // user class
  require_once("/../helpers/user.php");
  
  // session class
  require_once("/../helpers/session.php");
  
  // new user object
  $user = new user();
  $session;
   
?>