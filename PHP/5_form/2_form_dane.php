<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>data form</h4>
    <pre>
    <?php
    print_r($_POST);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $sex = $_POST['gender'];
    switch ($sex) {
        case 'm':
            $sex = 'man';
            break;
        case 'w':
            $sex = 'woman';
            break;
        case 'o':
            $sex = 'other';
            break;
    }
    $sex = ucfirst($sex);
    $name = ucfirst($name);
    $surname = ucfirst($surname);
    $color = ucfirst($_POST['color']);

    echo <<< OUTPUT
    Imię i nazwisko: $name $surname
    Płeć: $sex
    Ulubiony kolor: $color
    OUTPUT

    ?>
    </pre>
</body>
</html>