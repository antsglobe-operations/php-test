<?php

// echo "Hello Heroku! Afshar here..."

$servername = "localhost";
$username = "username";
$password = "password";

try {
//   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
$conn = new PDO("mysql:host=majesticcars.in;dbname=majesv7q_php_vms", 'majesv7q_cab_u1', 'Tech2020$DB');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
