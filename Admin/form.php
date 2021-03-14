<!DOCTYPE html>
<html lang="en">
<?php include_once 'includes/header.php'?>
<!-- /navbar -->
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
				<?php include_once 'includes/sidebar.html'?>
				<!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Agent Form</h3>
							</div>
							<div class="module-body">

									<!-- <div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something fishy here!
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div> -->

									<br />
<?php
	require_once '../includes/config.php';
	if (isset($_POST['save'])) {
											$msg;
											$p_name = $_POST['name'];
											$p_email = $_POST['email'];
											$p_age = $_POST['age'];
											$p_phone = $_POST['phone'];
											$p_sex= $_POST['sex'];
											$p_="1234";
											$query = mysqli_query($connection,"INSERT INTO agent (name,email,age,phone,gender) VALUES ('$p_name','$p_email','$p_age','$p_phone','$p_sex')") or die($query->error_reporting());
											$q = mysqli_query($connection,"INSERT INTO signin (email,password) VALUES ('$p_email','$p_')") or die($query->error_reporting());
										
											$msg = "Agent Added Successfully";
										}
if (isset($msg)): {
	# code...
}

								print	'<div class="alert alert-success">';
								print	'<button type="button" class="close" data-dismiss="alert">×</button>';
										'<strong> ';
								print	$msg;
								print 	'</strong>';
								print	'</div>'; endif;?>
									<form class="form-horizontal row-fluid" method="post">
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="name" placeholder="Enter Name" class="span8" require>
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="email" id="basicinput" placeholder="enter email" name="email" class="span8" require >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Age</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="age" type="number" min="18" placeholder="Mininum age is 18" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Phone</label>
											<div class="controls"> 
												<div class="input-prepend">
													<span class="add-on">+251</span><input name="phone" class="span8" type="number" min="100000000" placeholder="Phone number">       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Gender</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="sex" id="optionsRadios1" value="Male" checked="">
													Male
												</label> 
												<label class="radio">
													<input type="radio" name="sex" id="optionsRadios2" value="Female">
													Female
												</label> 
												<label class="radio">
													<input type="radio" name="sex" id="optionsRadios3" value="other">
													other
												</label>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="save" class="btn">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	<?php include_once 'includes/footer.php'?>