<?php 
session_start();
  if (isset($_SESSION['role']) && $_SESSION['role']==1) {
    header('location:Admin/index.php');
  }if (isset($_SESSION['role']) && $_SESSION['role']==2) {
    header('location:agent/index.php');
  } else {
    $wrong=true;
  }
  

?>