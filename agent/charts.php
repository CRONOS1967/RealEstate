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
                                    Chart - flot</h3>
                            </div>
                            <div class="module-body">
                                <div class="chart">
                                    <div id="placeholder" class="graph">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Chart - flot</h3>
                            </div>
                            <div class="module-body">
                                <div class="chart inline-legend grid">
                                    <div id="placeholder2" class="graph">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Default</h3>
                            </div>
                            <div class="module-body">
                                <div class="chart pie donut">
                                    <div id="pie-default" class="graph">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Donut</h3>
                            </div>
                            <div class="module-body">
                                <div class="chart pie donut">
                                    <div id="pie-donut" class="graph">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Donut & Interactive</h3>
                            </div>
                            <div class="module-body">
                                <div class="chart pie donut interactive">
                                    <div id="pie-interactive" class="graph">
                                    </div>
                                    <div id="hover">
                                    </div>
                                </div>
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