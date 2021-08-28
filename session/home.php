<?php
    session_start();
    if(isset($_SESSION['email'])){

        echo "<h1>welcome home</h1>".$_SESSION['email']."<br>";
        echo "<a href ='inc/logout.php'>Lougout</a>";
    }else{
        header("Location: login.php");
    }
?>