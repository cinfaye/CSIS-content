<?php
//get post and connect to DataBase
require_once 'DataBaseConnection.php';
//post variables
$pname = $_POST['pname'];
$cost = $_POST['cost'];
$desc = $_POST['desc'];
$image = $_POST['image'];
$submit = $_POST['requestType'];
//print_r($_POST);

if ($submit == "Search"){
    //SEARCH
    $search = "SELECT * FROM CSIS2440.ProductInv where pname like '%$pname%' Order By pname";
    $return = $con->query($search);
    if (!$return) {
        $message = "Whole query " . $search;
        echo $message;
        die('Invalid query: ' . mysqli_error($con));
    }
    echo "<table><th>Name</th><th width='10%'>Price</th><th>Description</th><th>Image</th>";
    while ($row = $return->fetch_assoc()) {
        //print out a table row with the data in it
        echo "<tr><td>".$row['pname'].
                "</td><td style='text-align: center;'>".$row['Cost'].
                "</td><td style='padding: 0px 5px;'>".$row['Description'].
                "</td><td><img src ='".$row['Image']."' class = \"img-responsive\" style='height: 100px; width: 150px; margin: 5px;'</td></tr>";
    }
    echo "</table>";
} elseif ($submit == "Update") {
    //UPDATE
    $update = "UPDATE `CSIS2440`.`ProductInv` SET";//write the update statment
    if ($desc != "Just something about the item" && $cost != null ) {
        $update .= " `Description` = '$desc', `Cost` = '$cost' ";
    } elseif ($cost != null) {
        $update .= " `Cost` = '$cost' ";
    } else {
        $update .= " `Description` = '$desc'";
    }
    $update .= "WHERE (`pname` = '".$pname."')";//add the where clause
    $success = $con->query($update);
    if ($success == FALSE) {
        //error if query did not run
        $failmess = "Whole Query: ". $update ."<br>";
        echo $failmess;
        print('Invalid Query: '.mysqli_error($con).'<br>');
    } else {
        //let user know it worked
        echo $pname." was updated<br>";
    }
    echo "<table><th>Name</th><th width='10%'>Price</th><th>Description</th><th>Image</th>";
    while ($row = $return->fetch_assoc()) {
        //print out a table row with the data in it
        echo "<tr><td>".$row['pname'].
                "</td><td style='text-align: center;'>".$row['Cost'].
                "</td><td style='padding: 0px 5px;'>".$row['Description'].
                "</td><td><img src ='".$row['Image']."' class = \"img-responsive\" style='height: 100px; width: 150px; margin: 5px;'</td></tr>";
    }
} else {
    //ADD
    $insert = "INSERT INTO `CSIS2440`.`ProductInv` (`pname`, `Description`, `Cost`, `Image`) VALUES ('$pname', '$desc', '$cost', '$image')";
    echo $insert;
    $success = $con->query($insert);
    if ($success == FALSE) {
        $failmess = "Whole Query: ". $insert ."<br>";
        echo $failmess;
        print('Invalid Query: '.mysqli_error($con).'<br>');
    }
    else {
        echo $name." was added to inventory. <br>";
    }
    echo "<table><th>Name</th><th width='10%'>Price</th><th>Description</th><th>Image</th>";
    while ($row = $return->fetch_assoc()) {
        //print out a table row with the data in it
        echo "<tr><td>".$row['pname'].
                "</td><td style='text-align: center;'>".$row['Cost'].
                "</td><td style='padding: 0px 5px;'>".$row['Description'].
                "</td><td><img src ='".$row['Image']."' class = \"img-responsive\" style='height: 100px; width: 150px; margin: 5px;'></td></tr>";
    }
}
?>



