<?php
	include_once '../includes/config.php';
		$msg='';
			if (isset($_GET['edit'])) {
				$id = $_GET['edit'];
				$query=mysqli_query($connection,"SELECT * FROM property WHERE id=$id")or die($query->error_reporting());
				$row=$query->fetch_assoc();
				$p_name=$row['title'];
				$p_type =$row['property_type'];
				$p_loc = $row['location'];
				$p_price = $row['price'];
				$p_area= $row['land_area'];
				$p_desc = $row['description'];
										}
			if (isset($_POST['update'])) {
				$p_name = $_POST['proprty'];
				$p_type = $_POST['type'];
				$p_loc = $_POST['location'];
				$p_price = $_POST['price'];
				$p_area= $_POST['area'];
				$p_desc = $_POST['desc'];
				$p_img = $_POST['images'];
				$query=mysqli_query($connection,"UPDATE property SET title='$p_name',price='$p_price',description='$p_desc',location='$p_loc',property_type='$p_type',land_area='$p_area' WHERE id=$id")or die($query->error_reporting());
				$msg="Update Succesfully";
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
												<input type="text" name="proprty" value="<?php print $row['title'];?>" id="basicinput" placeholder="Type something here..." class="span8">
												<!-- <span class="help-inline">Minimum 5 Characters</span> -->
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Property Type</label>
											<div class="controls">
												<input type="text" id="basicinput" value="<?php print $p_type;?>"  name="type" placeholder="Property type" class="span8" >
											</div>
										</div>
										 
										<div class="control-group">
											<label class="control-label" for="basicinput">Location</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" value="<?php print $p_loc;?>" name="location" placeholder="Location of the proprty…" data-original-title="" class="span8 tip">
											</div>
										</div>
 
										<div class="control-group">
											<label class="control-label" for="basicinput">Price</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" placeholder="prpoerty price" value="<?php print $p_price;?>" name="price" class="span8"><span class="add-on">Birr</span>
												</div>
											</div>
										</div>

				 
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
												<button type="submit" name="update" class="btn">Update House</button>
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