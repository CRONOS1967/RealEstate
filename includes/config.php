<?php
    define("DBNAME","RealEstateDB");
    define("SERVER","localhost");
    define("USER","root");
    define("PASSWORD","");
    //creating connection
    $connection = mysqli_connect(SERVER,USER,PASSWORD,DBNAME) or die(mysqli_error($connection));
?>