<?php

$host = "localhost";
$user = "root";
$password = "DBAdmin";
$dbname = "CSIS2440";
$con = new mysqli($host, $user, $password, $dbname)
        or die ('Could not connect to database server. '. mysqli_connect_error($con));

if ($con->connect_error == FALSE) {
    //echo '<h2>We Connected</h2>';
}
else {
    echo $con->connect_error;
}
//print_r($con);
?>










