<?php
//write your insert statment
$insert = "INSERT INTO `CSIS2440`.`Planets` (`PlanetName`, `PosX`, `PosY`, `PosZ`, `Desc`, `Faction`) "."VALUES ('$name', '$posx', '$posy', '$posz', '$desc', '$faction')";
//echo $insert;
$success = $con->query($insert);

if ($success == FALSE) {
    $failmess = "Whole Query: ". $insert ."<br>";
    echo $failmess;
    print('Invalid Query: '.mysqli_error($con).'<br>');
}
else {
    echo $name." was added <br>";
}
