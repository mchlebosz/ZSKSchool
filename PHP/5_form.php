<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
</head>
<body>
<h3>Dane użytkownika</h3>
<form action="" method="get">
    <label for="surname">Nazwisko:</label>
    <input type="text" name="surname" id="surname"><br><br>
    <input type="submit" value="Submit">
</form>
<?php

    if(!empty($_GET['surname'])) {
        $surname = $_GET["surname"];
        if(strlen(trim($surname)) != 0){
        echo "Nazwisko:".$surname;
        }
        else{
            echo "Jesteś kłamczuszkiem";
        }
    }
?>
<hr><br>

<form action="./5_form_data.php" method="get">
<label for="surname">Imię:</label>
    <input type="text" name="name" id="name" autofocus><br><br>
    <label for="surname">Nazwisko:</label>
    <input type="text" name="surname" id="surname"><br><br>
    <label for="city">Miasto:</label>
    <input type="text" name="city" id="city"><br><br>
    <input type="submit" value="Submit">
</form>
<?php

    if(!empty($_GET['surname'])) {
        $surname = $_GET["surname"];
        if(strlen(trim($surname)) != 0){
        echo "Nazwisko:".$surname;
        }
        else{
            echo "Jesteś kłamczuszkiem";
        }
    }
?>

</body>
</html>