<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadsql</title>
</head>
<body>
<?php
if (!$db = mysqli_connect("localhost", "root", "", "moviedatabase", "3306")) {
    exit("Nie uda³o siê po³¹czyæ");
} else {
    echo "Uda³o siê po³¹czyæ";
}
echo "</br>";
$query = 'select * from movie';
if (!$result = mysqli_query($db, $query)) {
    echo "Zapytanie nie powiodlo sie.";
} else {
    echo "Wynik zapytania:";
}
echo "</br>";
while ($rows = mysqli_fetch_row($result)) {
    foreach ($rows as $row) {
        echo $row;
        echo "</br>";
    }
}
if ($result = mysqli_query($db, $query)) {
    $row_count = mysqli_num_rows($result);
    printf("Jest %d rekordow\n", $row_count);
}
echo "</br>";
$result = mysqli_query($db, $query);
while ($r = mysqli_fetch_array($result)) {
    echo $r['ID'] . "<br/>";
}
echo "</br>";
$insert = 'insert into movie (ID, name, description, category, movieYear) values (1, "TOMB RIDER", "Film akcji, ktory jest prowadzony bla bla", "ACTION", 1995)';
if (mysqli_query($db, $insert)) {
    echo "Rekord poprawnie dodany.";
} else {
    echo "Cos poszlo nie tak.";
}
echo "</br>";
$rowsnum = mysqli_affected_rows($db);
echo "Liczba dodanych rekordow do bazy: $rowsnum"
?>
</body>
</html>