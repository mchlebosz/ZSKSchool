<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    <?php
    $name = "Anne";
    $surname = "Johnsonn";
    echo 'Imię: ' . $name . '<br>';
    echo "Nazwisko: $surname <br>";

    /* data Types
    boolean;
    */
    $true = true;
    echo $true;

    $fałsz = false;
    echo $fałsz;

    $❤😂🤣🤣 = true;
    echo $❤😂🤣🤣;

    //integer
    $bin = 0b1011; //11;
    $dec = 11;
    $oct = 011; //9
    $hex = 0x11;//17

    echo "<br>$bin<hr>";

    //składania heredoc
    $name = 'Janusz';
    $text = <<<ETYKIETA
    heredoc
    <hr>
    ETYKIETA;

    echo "<br>$text";

    echo <<<L
    Herredocccc
        Imię: $name
    L;


    //Składnia nowdoc

    echo <<<'L'
    <br>
    nowdoc
        Imię: $name
    L;

    $city="Poznań";
    echo "<br> Nazwa Zmiennej: \$city, wartość: $city"

    ?>



</body>
</html>