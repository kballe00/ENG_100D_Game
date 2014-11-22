<?php

  /* Global setup
   *
   * File: db.php
   * Contents: 
   */
   
  global $dbh;

  // create class
  class db {
      public $pdo;
  
      public function connect(){
          // database credentials
          $server = '192.254.224.75';
          $name = 'hampur_intuithack';
          $username = 'hampur_intuit';
          $password = 'ucsd2014';
          
          // connect
          $this->pdo = new PDO( "mysql:host=$server;dbname=$name;port=3306",
                                $username, $password );
      }
  }
   
  // instantiate PDO
  $db = new db();
  $db->connect();
  $dbh = $db->pdo;
  
?>