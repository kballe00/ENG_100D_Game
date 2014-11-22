<?php

  /* User class
   *
   * File: user.php
   * Contents: 
   */
  
  require_once("/../engine/db.php");
  
  global $user;
  
  class user {
    private $name,
            $age,
            $sex;
    
    public function hasJob(){
      
    }
    
    public function validate( $u, $p ){
      global $dbh;
    
      $p = md5( $p );
      
      $sth = $dbh->prepare("SELECT * FROM users WHERE name='$u' AND password='$p'");
      $sth->execute();
      
      return $sth->rowCount();
    }
    
  }
  
?>