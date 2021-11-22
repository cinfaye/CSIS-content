<?php
session_start();
unset($_SESSION['badPass']);

//get username and password from form
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

//Connect to server and select databse
require_once 'DataBaseConnection.php';

//Protects MySQL injection
$myusername = mysql_fix_string($con, $myusername);
$mypassword = mysql_fix_string($con, $mypassword);

//hashing 
$Hashed = hash("ripemd128", $mypassword);

$sql = "SELECT * FROM CSIS2440.FinalUsers where Email = '$myusername' AND Password = '$Hashed'";
$result = $con->query($sql);

if(!$result) {
    $message = "Whole query" . $sql;
    echo $message;
    die ('Invalid query'.mysqli_error());
}
//Mysql_num_row is countingtable row
$count = $result->num_rows;

//if returns row == 1 then succesful login
if ($count == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $myusername;
    $_SESSION['password'] = $mypassword;
    $_SESSION['username'] = $row['Username'];
    
    header ("Location:Catalog.php");
    
} else 
{
    header("Location:LoginPage.php");
    $_SESSION['badPass']++;
}
?>
