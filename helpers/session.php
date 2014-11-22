<?php

  /* Session class
   *
   * File: session.php
   * Contents: 
   */

  global $session;

  class session {
    
  	public function register($username) {
  		session_start();
  		$_SESSION['username'] = $username;
  	}
  	
  	public function terminate() {
  		session_destroy();
  	}
  	
  	public function get($var) {
  		return $_SESSION[$var];
  	}
  	
  	public function isActive() {
  		return session_status() == PHP_SESSION_ACTIVE;
  	}
    
  }
  
?>