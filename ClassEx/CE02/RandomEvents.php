<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random Events</title>
    </head>
    <body>
        <?php
        
            $score = 0;
            print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
            //for loop, Ten rounds, compares computer and players scores
            for($round = 0; $round < 10; $round++){
                //assigns player and computer a random number 1-100
                $playerscore = rand(1, 100);
                $compscore = rand(1, 100);
                //displays the random number assigned in first two columns
                print("<tr><td>$playerscore</td><td>$compscore</td>");
                //if statement determines winner and displays in the third column and adjust player's score
                if ($playerscore < $compscore) {
                    print("<td>Player Loses</td></tr>\n");
                    $score--;
                }
                elseif($playerscore > $compscore) {
                    print("<td>Player Wins</td></tr>\n");
                    $score++;
                }
                else {
                    print("<td>Player Ties</td></tr>\n");
                }
            }
            //Display final score, and close the table
            print("<tr><td colspan = 2>Player Score:</td><td>$score</td></tr></table>");
            //If the score is above zero, player wins
            ($score>0)? print("<p>Good Job!</p>"): print("<p>You lost...</p>");
            
            //year of the ___
            $year = date("Y");
            print("<p>It is the year of:<br>");
            //switch determines where we are in the cycle by taking the remainder of year/12
            switch($year % 12){
                case 0:
                    echo 'Monkey</p>';
                    break;
                case 1:
                    echo 'Rooster</p>';
                    break;
                case 2:
                    echo 'Dog</p>';
                    break;
                case 3:
                    echo 'Boar</p>';
                    break;
                case 4:
                    echo 'Rat</p>';
                    break;
                case 5:
                    echo 'Ox</p>';
                    break;
                case 6:
                    echo 'Tiger</p>';
                    break;
                case 7:
                    echo 'Rabbit</p>';
                    break;
                case 8:
                    echo 'Dragon</p>';
                    break;
                case 9:
                    echo 'Snake</p>';
                    break;
                case 10:
                    echo 'Horse</p>';
                    break;
                case 11:
                    echo 'Lamb</p>';
                    break;
                default:
                    echo 'something broke...</p>';   
            }
            print("<h2><a href = 'http://ec2-34-220-115-163.us-west-2.compute.amazonaws.com/index.php'>Back to Lucinda's Page</a></h2>");
        ?>
    </body>
</html>
