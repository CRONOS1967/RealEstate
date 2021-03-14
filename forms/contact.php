<?php
  require_once 'includes/config.php';
  if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subj = $_POST['subject'];
      $mes =$_POST['message'];
      $query = mysqli_query($connection,"INSERT INTO feedback VALUES ('','$name','$email','$subj','$mes')") or die($query->error_reporting());
	
  }
?>
