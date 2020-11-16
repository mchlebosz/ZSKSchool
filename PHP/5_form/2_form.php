<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Data</h4>
    <form action="./2_form_dane.php" method="post"><!-- novalidate -->
        <input type="text" name="surname" id="surname" placeholder="nazwisko" autofocus autocomplete="off" required="required" pattern="[ab]{2,}"><br>
        <input type="text" name="name" id="name" placeholder="imie" autofocus autocomplete="off" required="required" pattern="[ab]{2,}"><br>
        <select name="gender" id="gender" required>
        <option selected hidden disabled>Choose sex</option>
        <option value="m">Man</option>
        <option value="w">Woman</option>
        <option value="o">Other</option>

        </select><br>
        <label for="red">RED</label><input type="radio" name="color" id="red" value="red" required>
        <label for="green">GREEN</label><input type="radio" name="color" id="green" value="green">
        <label for="blue">BLUE</label><input type="radio" name="color" id="blue" value="blue">

        <br><input type="submit" value="submit">
    </form>
</body>

</html>