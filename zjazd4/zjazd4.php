<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad23</title>
</head>
<body>
<form action="zjazd4.php" method="post">
    <?php
    session_start();
    $isStep1Completed = isset($_POST['s_action']) && $_POST['s_action'] == 'Set number of people';
    $isFormCompleted = isset($_POST['s_action']) && $_POST['s_action'] == 'Send';

    if ($isStep1Completed) {
        $numberOfPeople = $_POST['2_number_of_people'];
        echo '<input type="number" name="2_number_of_people" hidden value="' . $numberOfPeople . '" />';
        for ($i = 0; $i < $numberOfPeople; $i++) {
            $prsNumber = $i + 1;
            echo '<h3> Personal data ' . $prsNumber . '</h3>';
            echo '<input type="text" name="s_' . $i . 'fName" placeholder="First name" required/><br />';
            echo '<input type="text" name="s_' . $i . 'lName" placeholder="Last name" required/><br />';
            echo '<input type="text" name="s_' . $i . 'address" placeholder="Address" required/><br />';
            echo '<input type="email" name="s_' . $i . 'email" placeholder="Email" required/><br />';
            echo '<input type="date" name="s_' . $i . 'startDate" placeholder="Start date" required/><br />';
            echo '<input type="time" name="s_' . $i . 'startTime" placeholder="Start time" required/><br />';
            echo '<input type="tel" name="s_' . $i . 'creditCard" id="ccn" inputmode="numeric" maxlength="19" placeholder="1111 2222 3333 4444" required/><br />';
            echo 'Additional extra bed: <input type="checkbox" name="s_' . $i . 'extraBed" /><br />';
            echo 'Additional extra bed for child: <input type="checkbox" name="s_' . $i . 'extraBedForChild" /><br />';
            echo 'Air conditioning: <input type="checkbox" name="s_' . $i . 'airCondition" /><br />';
            echo 'Ashtray: <input type="checkbox" name="s_' . $i . 'ashTray" /><br />';
            echo 'Jacuzzi: <input type="checkbox" name="s_' . $i . 'jacuzzi" /><br />';
        }
        echo '<br />
<input type="submit" name="s_action" value="Send" />
';
    } else if ($isFormCompleted) {
        $numberOfPeople = $_POST['2_number_of_people'];
        for ($i = 0; $i < $numberOfPeople; $i++) {
            echo '<h3> Personal data: ' .
                $_POST['s_' . $i . 'fName']
                . ' ' .
                $_POST['s_' . $i . 'lName']
                . '</h3>';
            echo 'Address: ' . $_POST['s_' . $i . 'address'] . '<br />';
            echo 'Credit card: ' . $_POST['s_' . $i . 'creditCard'] . '<br />';
            echo 'Email: ' . $_POST['s_' . $i . 'email'] . '<br />';
            echo 'Start: ' . $_POST['s_' . $i . 'startDate'] . ' ' . $_POST['s_' . $i . 'startTime'] . '<br />';
            if (isset($_POST['s_' . $i . 'extraBed'])) {
                echo 'Additional Extra bed: Yes<br />';
            } else {
                echo 'Additional Extra bed?: No<br />';
            }
            if (isset($_POST['s_' . $i . 'extraBedForKid'])) {
                echo 'Additional Extra bed for Child: Yes<br />';
            } else {
                echo 'Additional Extra bed for Child: No<br />';
            }

            if (isset($_POST['s_' . $i . 'airCondition'])) {
                echo 'Air condition: Yes<br />';
            } else {
                echo 'Air condition: No<br />';
            }
            if (isset($_POST['s_' . $i . 'ashTray'])) {
                echo 'Ashtray: Yes<br />';
            } else {
                echo 'Ashtray: No<br />';
            }
            if (isset($_POST['s_' . $i . 'jacuzzi'])) {
                echo 'Jacuzzi: Yes<br />';
            } else {
                echo 'Jacuzzi: No<br />';
            }
        }
    } else {
        echo 'People:
    <select name="2_number_of_people">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br />
    <input type="submit" name="s_action" value="Set number of people" />
        ';
    }
    session_destroy();
    ?>
</body>
</html>
