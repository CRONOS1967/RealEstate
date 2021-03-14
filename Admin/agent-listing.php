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
                                <h3>
                                    All Members</h3>
                            </div>
                            <div class="module-option clearfix">
                                <form>
                                <div class="input-append pull-left">
                                    <input type="text" class="span3" placeholder="Filter by name...">
                                    <button type="submit" class="btn">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                                </form>
                                <div class="btn-group pull-right" data-toggle="buttons-radio">
                                    <button type="button" class="btn">
                                        All</button>
                                    <button type="button" class="btn">
                                        Male</button>
                                    <button type="button" class="btn">
                                        Female</button>
                                </div>
                            </div>
                            <div class="module-body">
                                <?php include '../includes/config.php';
                                     $query = mysqli_query($connection,"SELECT * FROM agent") or die($query->error_reporting());
                                     while($row = $query->fetch_assoc()): ?>
                                        <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="images/user.png">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                   <?php print $row['name'];?>
                                                </h3>
                                                <p>
                                                    <small class="muted"><?php print $row['email']?></small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <button class="btn btn-small">
                                                        <i class="icon-envelope"></i>
                                                    </button>
                                                    <button class="btn btn-small">
                                                        <i class="icon-share-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <?php endwhile;?>
                                </div>
                                <!--/.row-fluid-->
                                <br />
                                < 
                                <br />
                                <div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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