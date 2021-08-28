<?php
    $age =[27,29,21,29];
    echo $age[0];
    echo "<br>";
    print_r ($age);
    echo "<br>";
    echo count($age); // la taille du tableau

    //dexieme type pour declarer un tableau

    $t1 = array('');

    // type de tableau
    // tableau indexé
    $age =[27,29,21,29];

    // tableau associé
    $t2 = ['nom' => 'khelladi','prenom' => 'sidali'];

    $t2['password'] = '123456';/*bch nzido element f tableau a la fin*/

    $names = ['khelladi','sidali','2001'];

    foreach($names as $name){ 
    echo "$name <br>";
    };
    /*$name na9adro nsamiwha autrement mais de preference bch
    yafahmo li ji ya9ra*/

?>
