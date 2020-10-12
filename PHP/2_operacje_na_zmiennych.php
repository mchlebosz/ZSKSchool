<?php
    //wersja PHP 7.3.10
    echo PHP_VERSION,"<br>";

    echo phpinfo();
    //interpolacja

    $pow=2**10;
    echo $pow;

    echo 'a','b';
    echo 'a'.'b';

    //operatory bitowe
    // and &, or |, or ^, not ~, <<, >>,

    $x = 0b01001;
    echo "<br>$x<br>";
    $x = $x <<2;
    echo "<br>$x<br>";

    //porównanie

    $x = 10;
    $y = 1.0;

    if($x === $y){
        echo '$x jest identyczna $y<br>';
    }
    else{
        echo '$x nie jest identyczna jak $y<br><hr>';
    }

    echo gettype($x);
    echo gettype($y);

    echo $y <=> $x;


    $x =1;
    $x = $x++;
    echo "<hr>$x"; //1


    //operatory rzutowania
    // bool, int, float, string, array, object, unset

    $test1 = '123abc';
    $test2 = 0;
    $test3 = 20;


    echo 'Typ danych $test1' , gettype($test1);
    $test1 = (int)$test2;
    echo 'Typ danych $test1' , gettype($test1);
    echo "<br>$test1    <br>";

    echo 'Typ danych $test2' , gettype($test2);
    $test2 = (bool)$test2;
    echo 'Typ danych $test2' , gettype($test2);


    // rozmiar typu integer

    echo PHP_INT_SIZE, '<hr>'; //8

    // kontrola
    $int;
    echo is_null($int), "<hr>";

    echo @gettype($int);




?>