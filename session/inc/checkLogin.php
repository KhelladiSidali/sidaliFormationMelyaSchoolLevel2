<?php

    session_start();
    
    $email = "khlld.sidali@gmail.com";
    $password = "123456789";
    $validData = true;

    /*Type de method */
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        if(!isset($_POST['email']) || (strlen($_POST['email'])<=0) ){
            echo "Email field is resuired <br>";
            $validData = false;
        }
        if(!isset($_POST['password']) || (strlen($_POST['password'])<=0) ){
            echo "Password field is resuired <br>";
            $validData = false;
        }
        if($_POST['email'] == $email && $_POST['password'] == $password){
            $_SESSION['email'] = $_POST['email'];
            header("Location: ../home.php");
        }elseif($validData){
            echo "<p style='color : red'>invalid email or password";
        }
    }
?>