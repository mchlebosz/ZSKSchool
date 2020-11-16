<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    // echo'<pre>',print_r($_GET),'</pre>';
    if (!empty($_GET['name'])) {
        $name = $_GET['name'];
    }
    if (!empty($_GET['city'])) {
        $city = $_GET['city'];
        echo <<<CITY
        $city
        CITY;
    }
    else{
        header('Location:./5_form.php');
    }
    ?>

</body>
</html>