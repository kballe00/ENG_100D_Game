<?php

  /* Session class
   *
   * File: session.php
   * Contents: 
   */
   
  global $session;

  class session {
    
    private $active;
    
  	public function register($username) {
  		if( !isset($_SESSION['username']) ){
        $_SESSION['username'] = $username;
      }
  	}
  	
  	public function terminate() {
      session_unset();
  		session_destroy();
  	}
  	
  	public function get($var) {
  		return $_SESSION[$var];
  	}
  	
  	public function isActive() {
  		return isset($_SESSION['username']);
  	}
    
  }
  
?>