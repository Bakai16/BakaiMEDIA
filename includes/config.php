<?php
  ob_start; //turn on output buffering
  session_start();

  date_default_timezone_set("Europe/Istanbul");

try{
    $con = new PDO("mysql:dbname=Bakai;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }

catch (PDOException $e){
    exit("Connection failed: " .$e->getMessage());
  }
?>