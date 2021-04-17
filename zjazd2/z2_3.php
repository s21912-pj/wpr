<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad23</title>
</head>
<body>
<form action="z2_3.php" method="post">
    <?php
    $setNumOfBookingPeople = isset($_POST['action']) && $_POST['action'] == 'Set number of people';
    $isFormCompleted = isset($_POST['action']) && $_POST['action'] == 'Send';

    if ($setNumOfBookingPeople) {
        $numOfResPeople = $_POST['numOfPeople'];
        echo '<input type="number" name="numOfPeople" hidden value="' . $numOfResPeople . '" />';
        for ($i = 0; $i < $numOfResPeople; $i++) {
            $pNumber = $i + 1;
            echo '<h3> Personal data ' . $pNumber . '</h3>';
            echo '<input type="text" name="action' . $i . 'fName" placeholder="First name" required/><br />';
            echo '<input type="text" name="action' . $i . 'lName" placeholder="Last name" required/><br />';
            echo '<input type="text" name="action' . $i . 'address" placeholder="Address" required/><br />';
            echo '<input type="email" name="action' . $i . 'email" placeholder="Email" required/><br />';
            echo '<input type="date" name="action' . $i . 'startDate" placeholder="Start date" required/><br />';
            echo '<input type="time" name="action' . $i . 'startTime" placeholder="Start time" required/><br />';
            echo '<input type="tel" name="action' . $i . 'creditCard" id="ccn" inputmode="numeric" maxlength="19" placeholder="1111 2222 3333 4444" required/><br />';
            echo 'Additional extra bed: <input type="checkbox" name="action' . $i . 'extraBed" /><br />';
            echo 'Additional extra bed for child: <input type="checkbox" name="action' . $i . 'extraBedForChild" /><br />';
            echo 'Air conditioning: <input type="checkbox" name="action' . $i . 'airCondition" /><br />';
            echo 'Ashtray: <input type="checkbox" name="action' . $i . 'ashTray" /><br />';
            echo 'Jacuzzi: <input type="checkbox" name="action' . $i . 'jacuzzi" /><br />';
        }
        echo '<br /><br />
<input type="submit" name="action" value="Send" />';
    } else if ($isFormCompleted) {
        $numOfResPeople = $_POST['numOfPeople'];
        for ($i = 0; $i < $numOfResPeople; $i++) {
            echo '<h3> Personal data: ' .
                $_POST['action' . $i . 'fName']
                . ' ' .
                $_POST['action' . $i . 'lName']
                . '</h3>';
            echo 'Address: ' . $_POST['action' . $i . 'address'] . '<br />';
            echo 'Credit card: ' . $_POST['action' . $i . 'creditCard'] . '<br />';
            echo 'Email: ' . $_POST['action' . $i . 'email'] . '<br />';
            echo 'Start: ' . $_POST['action' . $i . 'startDate'] . ' ' . $_POST['action' . $i . 'startTime'] . '<br />';
            if (isset($_POST['action' . $i . 'extraBed'])) {
                echo 'Additional Extra bed: Yes<br />';
            } else {
                echo 'Additional Extra bed?: No<br />';
            }
            if (isset($_POST['action' . $i . 'extraBedForKid'])) {
                echo 'Additional Extra bed for Child: Yes<br />';
            } else {
                echo 'Additional Extra bed for Child: No<br />';
            }

            if (isset($_POST['action' . $i . 'airCondition'])) {
                echo 'Air condition: Yes<br />';
            } else {
                echo 'Air condition: No<br />';
            }
            if (isset($_POST['action' . $i . 'ashTray'])) {
                echo 'Ashtray: Yes<br />';
            } else {
                echo 'Ashtray: No<br />';
            }
            if (isset($_POST['action' . $i . 'jacuzzi'])) {
                echo 'Jacuzzi: Yes<br />';
            } else {
                echo 'Jacuzzi: No<br />';
            }
        }
    } else {
        echo 'Number of People:
    <select name="numOfPeople">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br />
    <input type="submit" name="action" value="Number of people" />
        ';
    } ?>
</body>
</html>
