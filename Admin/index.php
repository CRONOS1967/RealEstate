 
<!DOCTYPE html>
<html lang="en">
       <?php include_once 'includes/header.php'?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php include_once 'includes/sidebar.html';include_once '../includes/config.php';?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                             
                            <!--/#btn-controls-->
                          
                            <!--/.module-->
                         
                            <div class="module">
                                <div class="module-head">
                                    <h3>Property Table</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                   Property Name
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Location
                                                </th>
                                                <th>
                                                    Land Area
                                                </th>
                                                <th>
                                                   Property Type
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $query = mysqli_query($connection,"SELECT * FROM property") or die($query->error_reporting());
                                        while($row = $query->fetch_assoc()): ?>
                                        <tr>
                                                <td><?php print $row['title'];?></td>
                                                <td><?php print $row['price'];?></td>
                                                <td><?php print $row['location'];?></td>
                                                <td><?php print $row['land_area'];?></td>
                                                <td><?php print $row['property_type'];?></td>
                                                <td><?php print $row['description'];?></td>
                                                <td>
												<a href="task.php?edit=<?php echo $row['id'];?>"class="btn btn-info">edit</a>
<a href="#?delete=<?=$row ['id'];?>" onclick="return confirm"('are you shure delate this item?');" role="button" class="btn btn-danger">delete</a>
</td>
												</td>
                                        </tr>       
                                             <?php endwhile;?>
                                        </tbody>
                                         
                                    </table>
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
       