<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
</head>
<body>
<form action="z2.php" method="post">
    <textarea cols="30" rows="10" name="textsv">Enter text </textarea> <br />
    <input type="submit" name="action" value="Save to file" />
</form>
<?php
if (isset($_POST['action'])) {
    $text = $_POST["textsv"];
    if (file_put_contents('z2.txt', $text . "\n", FILE_APPEND)) {
        echo "File saved with no error.";
    } else {
        echo "Something went wrong.";
    }
    echo '<br/>';
}
?>
</body>
</html>