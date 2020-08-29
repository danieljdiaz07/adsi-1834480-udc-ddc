<?php
  session_start();

  if (isset($_SESSION['udec'])) {
 
 } else {

  header('location:index.php');
} 

?>