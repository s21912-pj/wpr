<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_8</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="z8.php" method="POST">
    <label>Podaj 1. Liczbe: <input type="number" name="a"></label>
    <br />
    <label>Podaj 2. Liczbe: <input type="number" name="b"></label>
    <br />
    <label>Podaj 3. Liczbe: <input type="number" name="c"></label>
    <br />
    <input type="submit" name="submit">
    <br /><br />
</form>
<?php

if (isset($_POST['a']) &&
    isset($_POST['b']) &&
    isset($_POST['c']) &&
    !empty($_POST['a']) &&
    !empty($_POST['b']) &&
    !empty($_POST['c']) &&
    $_POST['a'] > 0 &&
    $_POST['b'] > 0 &&
    $_POST['c'] > 0
) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    function swap(&$x, &$y)
    {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
// 10 9 4
    if ($a > $b) {
        swap($a, $b);
    }

    if ($b > $c) {
        swap($b, $c);
    }

    if ($a > $b) {
        swap($a, $b);
    }

    echo "ASC " . $a . ", " . $b . ", " . $c . "<br />";
    echo "DESC: " . $c . ", " . $b . ", " . $a;

}

?>
</body>
</html>