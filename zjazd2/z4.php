<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
</head>
<body>
<form action="z4.php" method="POST">
    <label>Provide a number: <input type="number" name="num"></label>
    <br />
    <input type="submit" name="submit">
    <br />
</form>
<?php

function checkifPrime($number)
{
    if ($number == 1) {
        return false;
    }
    else if ($number == 2) {
        return true;
    }
    $value = sqrt($number);
    $value = floor($value);
    for ($i = 2; $i <= $value; ++$i) {
        if ($number % $i == 0) {
            break;
        }
    }
   return ($value == $i - 1) ? true : false;
}
if (isset($_POST['num'])) {
    if (!is_numeric($_POST['num']) || $_POST['num'] <= 0) {
        echo 'A Bad number';
    }
    if (checkifPrime($_POST['num'])) {
        echo 'This is a prime number';
    } else {
        echo 'This is not prime number';
    }
}
?>
</body>
</html>
