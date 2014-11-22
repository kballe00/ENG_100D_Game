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
  		if( session_status() !== PHP_SESSION_ACTIVE ){
        session_start();
        $this->active = true;
        $_SESSION['username'] = $username;
      }
  	}
  	
  	public function terminate() {
  		session_destroy();
      $this->active = false;
  	}
  	
  	public function get($var) {
  		return $_SESSION[$var];
  	}
  	
  	public function isActive() {
  		return $this->active;
  	}
    
  }
  
?>