<?php
	include_once '../includes/config.php';
		$msg='';
			if (isset($_POST['save'])) {
				$p_name = $_POST['proprty'];
				$p_type = $_POST['type'];
				$p_loc = $_POST['location'];
				$p_price = $_POST['price'];
				$p_area= $_POST['area'];
				$p_desc = $_POST['desc'];
				$p_img = $_POST['images'];
				$query = mysqli_query($connection,"INSERT INTO property (title,price,description,location,property_type,land_area) VALUES ('$p_name','$p_price','$p_desc','$p_loc','$p_type','$p_area')") or die($query->error_reporting());
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
								<h3>House Form</h3>
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
											<label class="control-label" for="basicinput">Property Name</label>
											<div class="controls">
												<input type="text" name="proprty" id="basicinput" placeholder="Type something here..." class="span8">
												<!-- <span class="help-inline">Minimum 5 Characters</span> -->
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
											<label class="control-label" for="basicinput">Location</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="location" placeholder="Location of the proprty…" data-original-title="" class="span8 tip">
											</div>
										</div>
 
										<div class="control-group">
											<label class="control-label" for="basicinput">Price</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" placeholder="prpoerty price" name="price" class="span8"><span class="add-on">Birr</span>
												</div>
											</div>
										</div>

										<!-- <div class="control-group">
											<label class="control-label" for="basicinput">Dropdown Button</label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#">First Row</a></li>
														<li><a href="#">Second Row</a></li>
														<li><a href="#">Third Row</a></li>
														<li><a href="#">Fourth Row</a></li>
													</ul>
												</div>
											</div>
										</div> -->

										<div class="control-group">
											<label class="control-label" for="basicinput">Land Area</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name ="area">
													<option >Select here...</option>
													<option value="Urban">Urban</option>
													<option value="Rular">Rular</option>
													<!-- <option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option> -->
												</select>
											</div>
										</div>

										<!-- <div class="control-group">
											<label class="control-label">Radiobuttons</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div> -->

										<!-- <div class="control-group">
											<label class="control-label">Inline Radiobuttons</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div> -->
<!-- 
										<div class="control-group">
											<label class="control-label">Features</label>
											<div class="controls">
												<label class="checkbox">
													<input type="checkbox" value="balcony">
													Balcony
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div> -->

										<!-- <div class="control-group">
											<label class="control-label">Inline Checkboxes</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div> -->

										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="desc"></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Images</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="file" name="images" disabled data-original-title="" class="span8 tip">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" name="save" class="btn">Submit Form</button>
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