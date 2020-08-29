<?php
  session_start();

  if (isset($_SESSION['udecadmi'])) {
 
 } else {

  header('location:index.php');
} 

?>