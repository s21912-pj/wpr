<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
</head>
<body>
<form action="z1.php" method="post">
    <p>A: <input type="number" name="input_a" /></p>
    <p>B: <input type="number" name="input_b" /></p>
    <p>
        <input type="submit" name="input_f" value="Add" />
        <input type="submit" name="input_f" value="Subtract" />
        <input type="submit" name="input_f" value="Multiply" />
        <input type="submit" name="input_f" value="Divide" />
    </p>
</form>
<?php
if(isset($_POST['input_f'])){
    echo 'Result: ';
    if($_POST['input_f'] == "Add")
        echo add($_POST['input_a'],$_POST['input_b']);
    else if($_POST['input_f'] == "Sub")
        echo sub($_POST['input_a'],$_POST['input_b']);
    else if($_POST['input_f'] == "Mul")
        echo mul($_POST['input_a'],$_POST['input_b']);
    else if($_POST['input_f'] == "Div")
        echo diva($_POST['input_a'],$_POST['input_b']);
    echo '<br/>';
}
?>
</body>
</html>