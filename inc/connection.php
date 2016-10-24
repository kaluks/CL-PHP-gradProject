<?php

require("credentials.php");

try{
$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
  echo "Unable to connect to db";
  exit;
}

 ?>
