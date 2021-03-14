<?php 
session_start();
require_once 'includes/config.php'; 
 ?>
<?php	
if (isset($_POST['signin'])) {
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	 $wrong =false;
	$result = mysqli_query($connection,"SELECT * FROM signin ") or die($sql_q->error_reporting());
	// if(mysqli_num_rows($result)){
		while($row = $result->fetch_assoc()){
			$de_pass = password_verify($pass,$row['password']);
			if ($email == $row['email'] && $de_pass) {
				$wrong = false;
						$_SESSION["id"] = $row['id'];
						$_SESSION["role"] = $row['level'];
						$_SESSION["email"] = $row['email'];
						if ($row['password']==1234) {
							$_SESSION['msg'] = 'Your password is Default, Please Change Your Password';
						}
						require_once 'includes/auth.php';
			}else {
				$wrong =true;
				$err="Please Enter Valid Email or Password";
			}
		}

	// 	 session_write_close();
	// }
	// if ( $row['level'] == 1) {
	// 	header('location:Admin/index.php');
	// 	print $_SESSION['role'];
	// }elseif( $row['level'] == 2){
	// 	header('location:agent/index.php');
	// 	print $_SESSION['role'];
	// }else {
	// 	$err="Please Enter Valid Email or Password";
	// }
		
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link type="text/css" href="Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="Admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="Admin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="Admin/images/icons/css/font-awesome.css" rel="stylesheet">
	<!-- <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'> -->
</head>
<body>


	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="../index.php">
			  		TRE
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="#">
							Sign Up
						</a></li>

						

						<li><a href="#">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" name="signin" method="POST">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12"required type="email" name="email" id="inputEmail" placeholder="Enter email">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="pass" required id="inputPassword" placeholder="Password">
								</div>
							</div>
							<?php 
		  if($wrong)
		  {
			echo '<div class="form-group" style="margin:10px;background-color:red;">
            <h5 style="padding:10px;">'.$err.'</h5></div>';	  
		  }
		  ?>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<input type="submit" name="signin" value="Login" class="btn btn-primary pull-right">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
	<!-- <script type="text/javascript">
		function submit1() {
		var user = document.signin.user.value;
		var pass = document.signin.pass.value;
	if (user =="admin" && pass == "123") {
		document.location.href="index.php";
			
	}
	if(user =="agent" && pass == "123"){
		document.location.href="../agent/index.php";
	}
	
			
		}
	</script>
	  -->
	<?php include_once 'Admin/includes/footer.php'?>