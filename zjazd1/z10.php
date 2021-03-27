<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_10</title>
</head>
<body>
<form method="POST" action="z10.php">
<label>Dlugosc: </label><input type="number" name="post_num">
<input type="submit" value="Zatwierdz">
</form>

<?php
$varnum = $_POST['post_num'];
function process(int $size) {
	
	for($i=1; $i<=$size; $i++){
		for($j=1; $j<=$i; $j++) {
			echo("*");
		}
		echo("<br>");
	}
	for($i=$size; $i>=1; $i--){
		for($j=1; $j<=$i; $j++) {
			echo("*");
		}
		echo("<br>");
	}
	for($i=$size; $i>0; $i--){
		for($j=$i; $j<$size; $j++){
			echo str_repeat("&nbsp;", 2);
		}
		for($x=0; $x<$i; $x++) {
				echo("*");
			}
		echo("<br>");
	}
	for($i=0; $i<$size; $i++){
		for($j=$size; $j>$i+1; $j--){
			echo str_repeat("&nbsp;", 2);
		}
		for($x=0; $x<=$i; $x++) {
				echo("*");
			}
		echo("<br>");
	}
}
process($varnum);
?>
</body>
</html>