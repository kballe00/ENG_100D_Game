<?php

  /* Global setup
   *
   * File: db.php
   * Contents: 
   */
   
  global $dbh;

  // create class
  class db {
      private $pdo;
  
      public function connect(){
          // database credentials
          $server = '';
          $name = '';
          $username = '';
          $password = '';
          
          // connect
          $this->pdo = new PDO( "mysql:host=$server;dbname=$name;port=3306",
                                $username, $password );
      }
      
      public function getPDO(){
        return $this->pdo;
      }
  }
   
  // instantiate PDO
  $db = new db();
  $db->connect();
  $dbh = $db->getPDO();
  
?>