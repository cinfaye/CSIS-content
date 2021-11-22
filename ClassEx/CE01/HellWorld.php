<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
        <?php
            //practice creating different types of variables
            $name = "Cindy M.";
            $age = 26;
            $favorite = "Bob's Burgers";
            $imageFile = "img/bob-grill.jpg";
        ?>
    </head>
    <body>
        <div>
            <?php
                // Practice printing to html
                echo "<p>Hello World. This is my first PHP page.</p>";
                print("<p>My name is".$name." I am $age years old and I love $favorite.</p>");
                print('<p>I am using the variables $name, $age, and $favorite.</p>');
                print("<img src = '$imageFile' height = '250'>");
            ?>
        </div>
    </body>
</html>