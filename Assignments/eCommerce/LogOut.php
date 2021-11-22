<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logged Off</title>
        </head>
    <body>
        <div align="center" padding="20px">
            <h1 align="center">You have successfully logged out.</h1>
            <h3 align="center">Do you want to log back in? <a href="LoginPage.php">Back to Login</a></h3>
        </div>
    </body>
</html>
    

