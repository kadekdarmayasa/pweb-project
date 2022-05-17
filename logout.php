<?php  
  require 'connection.php';
  session_destroy();
  $_SESSION = [];
  setcookie('id', '');
  setcookie('key', '');
  header("Location: login.php");
  exit;
?>