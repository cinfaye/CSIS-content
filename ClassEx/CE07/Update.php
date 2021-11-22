<?php

$update = "UPDATE `CSIS2440`.`Planets` SET `Active` = 'Y' ";//write the update statment
if ($desc != "A short description of the planet") {
    $update .= ", `Desc` = '$desc' ";//add the description
}
$update .= "WHERE (`PlanetName` = '".$name."')";//add the where clause
$success = $con->query($update);
if ($success == FALSE) {
    //error if query did not run
    $failmess = "Whole Query: ". $update ."<br>";
    echo $failmess;
    print('Invalid Query: '.mysqli_error($con).'<br>');
} else {
    //let user know it worked
    echo $name." was given a station<br>";
}
