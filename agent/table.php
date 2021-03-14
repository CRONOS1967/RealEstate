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
								<h3>DataTables</h3>
							</div>
							<div class="module-body table">
							<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Phone Number</th>
											<th>Intersted on</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									include_once '../includes/config.php';
                                        $query = mysqli_query($connection,"SELECT * FROM customer") or die($query->error_reporting());
                                        while($row = $query->fetch_assoc()): ?>
                                        <tr>
                                                <td><?php print $row['name'];?></td>
                                                <td><?php print $row['email'];?></td>
                                                <td><?php print $row['phone'];?></td>
                                                <td><?php print $row['property_type'];?></td>
                                                 
                                        </tr>       
                                             <?php endwhile;?>
									</tbody>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
	<?php include_once 'includes/footer.php'?>