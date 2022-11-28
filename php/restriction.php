<?php
  session_start();
  if(!isset($_SESSION["username"]) AND !isset($_SESSION["password"])){
    header("Location: login.php");
    exit(); 
  }
?>