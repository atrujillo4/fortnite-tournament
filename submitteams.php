<?php
    include "functions.php";
?>

<html>
    <head>
        
    </head>
    <body>
        <?php
            getDatabaseConnection();
            $player1 = $_POST['first_player'];
            $player2 = $_POST['second_player'];
            $team =  $_POST['team'];
            add($team, $player1, $player2)
        ?>
        <center>
            TEAM successfully added to tournament. 
            <br>
            <form action="signup.php">
                <input type="submit" value="Homepage">
            </form>
            
        </center>
    </body>
    <footer>
        
    </footer>
</html>