<?php

/**
* Set Up Configuration
*
* $host  is the host
* $db    is the MYSQL database name
* $user  is the MYSQL user name
* $pw    is the password of the MYSQL user
* $table is the table name in the database
* $file  is the text file with list of domains
*/

function config() {

  // EDIT AND SET CONFIG INFORMATION HERE

  $host   = 'localhost';

  $db     = 'big_meta';

  $user   = 'root';

  $pw     = 'password';

  $table  = 'sites';

  $file   = 'test.txt';

  // DO NOT EDIT BELOW HERE

  $config = array( 'host' => $host, 'db' => $db, 'user' => $user, 'pw' => $pw, 'table' => $table, 'file' => $file );

  return $config;

}
