<?php
    echo $_SERVER['REQUEST_METHOD'];

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        /*validate get request */
        if(isset($_POST['first_name']) && strlen($_POST['first_name']) > 0){
            echo "<h1> Your name is : ".$_POST['first_name']."</h1>";
        }else{
            echo "<p style='color : red'>first name is required</p>";
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['phone']) && strlen($_POST['phone']) > 0){
            echo "<h1> Your phone is : ".$_POST['phone']."</h1>";
        }else{
            echo "<p style='color : red'>phone is required</p>";
        }
    }
?>