<?php

$dsn = 'mysql:dbname=expense;host=localhost;';
$user = 'root';
$password = '';
try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}



