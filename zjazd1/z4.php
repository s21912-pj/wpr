<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad4</title>
    <style>
        html {
            background: #565556;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="z4.php" method="POST">
    <label>PODAJ PIERWSZĄ LICZBĘ: <input type="number" name="num_1"></label>
    <br />
    <label>PODAJ DRUGĄ LICZBĘ: <input type="number" name="num_2"></label>
    <br />
    <input type="submit" name="submit">
    <br />
</form>

<?php

if (isset($_POST['num_1']) &&
    isset($_POST['num_2']) &&
    !empty($_POST['num_1']) &&
    !empty($_POST['num_2'])
) {

    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];

    echo "<br />dodawanie: " . ($num_1 + $num_2);
    echo "<br />odejmowanie: " . ($num_1 - $num_2);
    echo "<br />mnozenie: " . ($num_1 * $num_2);
    echo "<br />modulo: " . ($num_1 % $num_2);

} else {
    echo "<br />blad";
}

?>

</body>
</html>