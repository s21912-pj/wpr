<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_7</title>
    <style>
        html {
            background: #565556;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="z7.php" method="POST">
    <label>PODAJ LICZBĘ od 1 do 12: <input type="number" name="month"></label>
    <br />
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['month']) &&
    !empty($_POST['month']) &&
    $_POST['month'] > 0 &&
    $_POST['month'] < 13
) {
    $month = $_POST['month'];

    switch ($month) {
        case 1:
            echo "styczen 31 dni";
            break;
        case 2:
            echo "luty 28 dni";
            break;
        case 3:
            echo "marzec 31 dni";
            break;
        case 4:
            echo "kwiecien 30 dni";
            break;
        case 5:
            echo "maj 31 dni";
            break;
        case 6:
            echo "czerwiec 30 dni";
            break;
        case 7:
            echo "lipiec 31 dni";
            break;
        case 8:
            echo "sierpien 31 dni";
            break;
        case 9:
            echo "wrzesien 30 dni";
            break;
        case 10:
            echo "pazdziernik 31 dni";
            break;
        case 11:
            echo "listopad 30 dni";
            break;
        case 12:
            echo "grudzien 31 dni";
            break;
        default:
            break;
    }
} else {
    echo "blad";
}
?>

</body>
</html>