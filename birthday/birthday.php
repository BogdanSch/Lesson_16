<?php
    $message = "";

    if(isset($_GET['submit'])){
        $user_birthday = ($_GET['date']);
        $date = DateTime::createFromFormat("Y-m-d", $user_birthday);
        $year = $date->format("Y");
        $month = $date->format("m");
        $days = $date->format("d");

        if(checkdate($month, $days, $year)){
            $message = "Date {$date->format("Y-m-d")} is valid";
        }
        else{
            $message = "Date {$date->format("Y-m-d")} isn't valid";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <?= $message ?><br>
        <label for="date">
            Enter your birthday
            <input type="date" name="date">
        </label>
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>