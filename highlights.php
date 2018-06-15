<?php
    include "functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
        <style> @import url("css/style.css");</style>
       
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- nav Bar --> 
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="teams.php">Teams</a></li>
        <li><a href="bracket.php">Bracket</a></li>
        <li><a href="winners.php">Previous Winners</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="highlights.php">Highlights</a></li>
        </ul>
        <br>
        Highlight page is currently under construction. You can currently only submit a video from a computer. 
        <br>
        By next week you will be able to submit a highlight video from a mobile device.
        <br></br>
        <form action="submithighlight.php" method="post">
            PSN name: <input type="text" name="name"><br>
            Youtube URL link: <input type="text" name="video"><br>
            <input type="submit" value="Submit">
        </form>
        <!--<iframe width="420" height="315"-->
        <!--    src="https://www.youtube.com/embed/tgbNymZ7vqY">-->
        <!--</iframe>-->
        <!--<iframe width="420" height="315"-->
        <!--    src="https://www.youtube.com/embed/gxoaLgCETgE">-->
        <!--</iframe>-->
        <?php
            getItems();
        ?>
        
    </body>
    <footer>
        
    </footer>
</html>