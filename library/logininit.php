<?php
  require_once("loginconfig.php");

  try{
    $conn = new mysqli($host,
     $username,
     $password,
     $dbname);
     echo "Connected to $dbname successfully </br>"; 
  } catch (Exception $e){
    die("Could not connect to $dbname" . $e->getMessage());
  }

 ?>
