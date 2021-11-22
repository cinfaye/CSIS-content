<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//get post variable
$CapName = htmlentities($_POST['CapName']);
$CapName = strtolower($CapName);
$CapName = ucwords($CapName);
$ShipName = htmlentities($_POST['ShipName']);
$ShipName = strtolower($ShipName);
$ShipName = ucwords($ShipName);
$CapAge = $_POST['CapAge'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <?php
                        // put your code here
                        $pos = 0;
                        print("<p class = 'title'>Captain $CapName, at the age of $CapAge, took over the ship, $ShipName, "
                                . "and here is some of their story.</p>");
                        $EarlyFile = fopen("EarlyYears.txt", "r") or die("Unable to open file!");
                        while (!feof($EarlyFile)) {
                            $randomEarly[$pos] = fgets($EarlyFile);
                            $pos++;
                        }
                        fclose($EarlyFile);
                        //print_r($randomEarly);
                        shuffle($randomEarly);
                        print("<p>The beginning of their career started with:<ul><li>$randomEarly[0]</li>"
                                . "<li>$randomEarly[1]</li></ul></p>");
                        if($CapAge > 25) {
                            $tours = 4 + ($CapAge - 26);
                        }
                        else {
                            $tours = floor($CapAge - 17) / 2;
                        }
                        $randomTours = explode("\n", file_get_contents("Tours.txt"));
                        //print_r($randomTours);
                        shuffle($randomTours);
                        print("<p>The rest of their career includes: <ul>");
                        for($y = 0; $y < $tours; $y++) {
                            print("<li>$randomTours[$y]</li>");
                        }
                        print("</ul></p>");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
