<?php
    //date
    echo 'rok - miesiąc - dzień', date('j-M-Y'),'<br>';
    echo date('Y-m-d'),'<br>';
    echo date('G:i:s'),'<br>';
    echo date('H:i:s'),'<br>';
    echo date('G:i:sa'),'<br>';
    echo date('Y-m-d G:i:s'),'<br>';
    echo date('w'),'<br>';

    $date= getdate();
    print_r($date);

    $day = $date['mday'];
    echo $day;

    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $wday = $date['wday'];

    switch($month) {
        case 11:
            $month = "listopad";
        break;
    }

    switch($wday) {
        case 1:
            $wday = "poniedziałek";
    }

    echo "$day $month $year | $wday"


?>