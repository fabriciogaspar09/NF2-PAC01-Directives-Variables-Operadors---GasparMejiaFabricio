<?php

session_start();

$_SESSION['username']=$_POST['user'];
$_SESSION['userpass']=$_POST['pass'];
$_SESSION['usercolor']=$_POST['color'];
$_SESSION['authuser']=0;

if(($_SESSION['username']=='sampleFabricio')and ($_SESSION['userpass']=='phpSample')and($_SESSION['usercolor']=='red')){
    $_SESSION['authuser']=1;
    setcookie("username","sampleFabricio",time()+10);
}else{
    $nombre_usuario = $_POST['user'] ?? 'no one';
    $nombre_usuario = $_POST['user'] ?? $_POST['user'] ?? ' no one';
    exit();};

?>

<html>
    <head>
        <title>Sub, favorite movie</title>
    </head>
    <body>
        <?php
            $myfavMovie=urlencode("I'm legend");
            echo $_COOKIE["username"];            
            echo "<p><a href='userStart.php?myfavMovie=$myfavMovie'>More about my favorite movie";
            echo "</a></p>";
            echo "<p></p>";
            
            date_default_timezone_set('Europe/Andorra');
            $month = date('n');
            if ($month ==1) {echo '31';}
            if ($month ==2) {echo '28 (unless it\'s a leap year)';}
            if ($month ==3) {echo '31';}
            if ($month ==4) {echo '30';}
            if ($month ==5) {echo '31';}
            if ($month ==6) {echo '30';}
            if ($month ==7) {echo '31';}
            if ($month ==8) {echo '31';}
            if ($month ==9) {echo '30';}
            if ($month ==10) {echo '31';}
            if ($month ==11) {echo '30';}
            if ($month ==12) {echo '31';}
        ?>
    <body>
</html>        