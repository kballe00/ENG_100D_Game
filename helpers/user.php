<?php

  /* User class
   *
   * File: user.php
   * Contents: 
   */
  
  require_once(dirname(__FILE__)."/../engine/db.php");
  
  global $user;
  
  class user {
    
    public function hasJob(){
      return ($wage > 0) ? true : false;
    }
    
    
    public function hasCar(){
      return ($carPayment > 0) ? true : false;
    }
    
    
    public function pull( $username, $key ){
      global $dbh;
    
      $sth = $dbh->prepare("SELECT $key FROM users WHERE username='$username'");
      $sth->execute();
      
      $fetch = $sth->fetch(PDO::FETCH_ASSOC);
      return $fetch[ $key ];
    }
    
    
    public function put( $username, $key, $val ){
      global $dbh;
    
      $old = $this->pull( $user, $key );
      $new = $old + $val;
      
      $sth = $dbh->prepare("UPDATE users SET $key = '$new' WHERE username = '$username'");
      
      $sth->execute();
    }
    
    
    
    public function validate( $u, $p ){
      global $dbh;
    
      $p = md5( $p );
      
      $sth = $dbh->prepare("SELECT * FROM users WHERE username='$u' AND password='$p'");
      $sth->execute();
      
      return $sth->rowCount();
    }
    
  }
  
?>
