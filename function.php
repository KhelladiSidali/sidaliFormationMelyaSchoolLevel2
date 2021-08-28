<?php

    function addition($a,$b){
        return $a+$b;
    }

    echo addition(2,3);

    echo '<br>';

    // exercice dune fonction qui returne le nom complet

    function fullName($firstName,$lastName){

        return $firstName." ".$lastName;

    }

    echo fullName("Khelladi","Sidali");

    echo '<br>';

    function multiplication($x){

        for($i=1;$i<=10;$i++){

            echo $x."*".$i."=".$i*$x ."<br>";

        }

    }
    
    multiplication(6);



?>