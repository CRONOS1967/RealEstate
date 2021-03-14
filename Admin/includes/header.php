<?php 
        require_once 'signin.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teshay</title>
    <link
      type="text/css"
      href="bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      type="text/css"
      href="bootstrap/css/bootstrap-responsive.min.css"
      rel="stylesheet"
    />
    <link type="text/css" href="css/theme.css" rel="stylesheet" />
    <link
      type="text/css"
      href="images/icons/css/font-awesome.css"
      rel="stylesheet"
    />
    <link
      type="text/css"
      href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a
            class="btn btn-navbar"
            data-toggle="collapse"
            data-target=".navbar-inverse-collapse"
          >
            <i class="icon-reorder shaded"></i></a
          ><a class="brand" href="../index.php">TSC </a>
          <div class="nav-collapse collapse navbar-inverse-collapse">
            <ul class="nav nav-icons">
              <li class="active">
                <a href="#"><i class="icon-envelope"></i></a>
              </li>
              <li>
                <a href="#"><i class="icon-eye-open"></i></a>
              </li>
              <li>
                <a href="#"><i class="icon-bar-chart"></i></a>
              </li>
            </ul>
            <form class="navbar-search pull-left input-append" action="#">
              <input type="text" class="span3" />
              <button class="btn" type="button">
                <i class="icon-search"></i>
              </button>
            </form>
            <ul class="nav pull-right">
               
              <li><a href="#"><?php print $_SESSION['email']?></a></li>
              <li class="nav-user dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="images/user.png" class="nav-avatar" />
                  <b class="caret"></b
                ></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Your Profile</a></li>
                  <li><a href="#">Edit Profile</a></li>
                  <li><a href="#">Account Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="../logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.nav-collapse -->
        </div>
      </div>
      <!-- /navbar-inner -->
    </div>
  </body>
</head>
