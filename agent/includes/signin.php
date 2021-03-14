<?php
session_start();
    if ($_SESSION['role']==2) {
        $_SESSION['msg'] = "Well come Back";
    }else {
        header('location:../login.php');
    }


?>