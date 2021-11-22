<!DOCTYPE html>
<?php
$HeroName = htmlentities($_POST['HeroName']);
$HeroName = strtolower($HeroName);
$HeroName = ucwords($HeroName);
$Race = $_POST['Race'];
$Class = $_POST['Class'];
$Age = $_POST['Age'];
$Gender = $_POST['gender'];
$KingdomName = htmlentities($_POST['KingdomName']);
$KingdomName = strtolower($KingdomName);
$KingdomName = ucwords($KingdomName);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>A made Adventurer</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
        <style>
            img {
                height: 250px;
                padding: 3pt;
            }
            p{
                margin-left: 8px;
            }
        </style>
    </head>

    <body>
        <div id="CharacterSheet" class="container">
            <div class="row">
                <h3 class="Content">The Brave Adventurer</h3>
            </div>
            <div class="row">
                 <div class="col-md-3">
                    <?php
                    //array of stat catagories
                    $stats = ["Str:", "Con:", "Dex:", "Wis:", "Int:","Cha: "];
                    
                    //loop to print each stat with a random value 1-20
                    print("<p><ul style = 'list-style-type: none;'>");
                    for ($f = 0; $f < sizeof($stats); $f++) {
                        $num = rand(1, 20);
                        print("<li>$stats[$f] $num</li>");
                    }
                    print("</ul></p>");
                    ?>
                </div>
                <div class="col-md-5">
                    <?php
                   //print Name, Kingdom, Race, Class and age
                    print("<div style = 'text-align: center;'><h6>$HeroName from $KingdomName</h6>"
                            . "<p>$Race $Class at the age of $Age</p></div>");
                    
                    //explode file into numerical array, then push into Associative array where the positions match the string value of the user options
                    $raceInfo = explode("}", file_get_contents("RaceInfo.txt"));
                    $asRaceInfo = ["Human" => $raceInfo[0], "Elf" => $raceInfo[1], "Dwarf" => $raceInfo[2], "Halfling" => $raceInfo[3]];
                    
                    $classInfo = explode("}", file_get_contents("ClassInfo.txt"));
                    $asClassInfo = ["Fighter" => $classInfo[0], "Cleric" => $classInfo[1], "Thief" => $classInfo[2], "Magic-User" => $classInfo[3]];
                    
                    //print using the user string to call info in the associative array
                    print("<div>$asRaceInfo[$Race] $asClassInfo[$Class]</div>");
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    //create an empty string
                    $image = "";
                    
                    // if else to find race selection and concat to string
                    if($Race == "Human"){
                        $image .= "Hu";
                    }
                    elseif ($Race == "Elf") {
                        $image .= "El";
                    }
                    elseif ($Race == "Dwarf") {
                        $image .= "Dw";
                    }
                    else {
                        $image .= "Ha";
                    }
                    
                    // if else to find Class and concat 2nd part of the string
                    if ($Class == "Fighter") {
                        $image .= "Fi";
                    }
                    elseif ($Class == "Cleric") {
                        $image .= "Cl";
                    }
                    elseif ($Class == "Thief") {
                        $image .= "Th";
                    }
                    else {
                        $image .= "Ma";
                    }
                    
                    //final if else to find gender and concat to string
                    if ($Gender == Male) {
                        $image .= "Ma";
                    }
                    else {
                        $image .= "Fe";
                    }
                    //print_r($image);
                    
                    //print img tag using final string to call the right image
                    print("<img src = 'images/$image.jpg' alt = ''/>");
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
