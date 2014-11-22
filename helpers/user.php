<?php

  /* User class
   *
   * File: user.php
   * Contents: 
   */
  
  require_once(dirname(__FILE__)."/../engine/db.php");
  
  global $user;
  
  class user {
    private $name,
            $age,
            $sex,
    		$has_job,
    		$job_title,
    		$is_student,
    		$school_name,
    		$has_bank_account,
    		$account_balance,
    		$round;
    		
    
    public function hasJob(){
      return $has_job;
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