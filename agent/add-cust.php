<?php
	include_once '../includes/config.php';
						
		if (isset($_POST['save'])) {
									 
			$p_name = $_POST['name'];
			$p_email = $_POST['email'];
			$p_phone= $_POST['phone'];
			$p_type = $_POST['type'];
											 

			$query = mysqli_query($connection,"INSERT INTO customer (name,email,phone,property_type) VALUES ('$p_name','$p_email','$p_phone','$p_type')") or die($query->error_reporting());
			$msg = "Property Added Successfully";
										}
									?>
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
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                    <div class="module">
				
							<div class="module-head">
								<h3>Customer Form</h3>
							</div>
							<?php if (isset($msg)): 
print	'<div class="alert alert-success">';
print	'<button type="button" class="close" data-dismiss="alert">×</button>';
		'<strong> ';
print	$msg;
print 	'</strong>';
print	'</div>'; endif;?>
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
							
									<form class="form-horizontal row-fluid" method="POST">
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="name" require placeholder="Customer Name...." class="span8">
												<!-- <span class="help-inline">Minimum 5 Characters</span> -->
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input data-title="A tooltip for the input" require name="email" type="email" placeholder="Customer email…" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Phone</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">+251</span><input require class="span8" name="phone" type="number" min="100000000" placeholder="phone number">       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Property Type</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="type">
													<option >Select type here...</option>
													<option value="Apartama">Apartama</option>
													<option value="Studio">Studio</option>
													<option value="Vila">Vila</option>
													 
													<!-- <option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option> -->
												</select>
											</div>
										</div>
 
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" name="save">Submit Form</button>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="reset" class="btn">Reset Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>
                        <!--/.module-->
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <?php include_once 'includes/footer.php'?>