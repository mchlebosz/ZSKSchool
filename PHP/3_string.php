<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Początek</h3>
    <?php
        @include ("3_1_file.php");
        @include ("3_1_file.php2");
        @include_once ("3_1_file.php");

        echo '<br> Require:';
        @require ("3_1_fille.php");



     ?>
    <h3>Koniec</h3>
</body>
</html>