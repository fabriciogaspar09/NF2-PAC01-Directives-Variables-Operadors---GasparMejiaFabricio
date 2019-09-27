<?php
session_unset();


?>


<html>
    <head>
        <title>Main, favorite movie</title>
    </head>
    <body>
        <form method="post" action="sub.php">
            <p>Enter your username <input type="text" name="user"/></p>
            <p>Enter your password <input type="text" name="pass"/></p>
            <p>Enter your color <input type="text" name="color"/></p>
            <p><input type="submit" name="submit" value="submit"/></p>
        </form>
            <?php
                echo $_COOKIE["username"];
                echo "<p>My favorite movie is ";
                echo $_GET["myfavMovie"];
                echo "</p>";
                
                
                echo "<ul><li>Integrating HTML with PHP</li><li>Using Constants and Variables</li><li>Passing Variables between Pages</li><li>Passing Variables through a URL</li><li>Passing Variables with Sessions</li><li>Passing Variables with Cookies</li><li>Setting a Cookie</li><li>Using Forms to Get Information</li><li>Using if/else Arguments</li><li>Using if and else Together</li></ul>";
                echo "<p>Qualifies the document (0-10), and the teacher's explanation (0-10): Document/10; Explanation/10</p>";
                echo "<p>As a student, put a mark to yourself: dies de dies</p>";
                echo "<p>Explain an improvement: Nothing to add</p>"
            ?>
    </body>
</html>