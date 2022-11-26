<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students age</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

require "db.php";

$months = array("Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень");
$days = array("Понеділок", "Вівторок", "Середа", "Четвер", "П'ятница", "Субота", "Неділя");

function age($a, $b){
    return $a['age'] <=> $b['age'];
}

uasort($students, "age");

echo "<table><tr><th>Name</th><th colspan=\"3\">Bitrthday</th></tr>";
foreach ($students as $key => $student) {
    $student_name = $student['name'];
    $student_age = getdate($student["age"]);

    $day = 'Число: '. $student_age['mday'].", ";
    $month = 'місяць: '.$months[$student_age['mon']-1].", ";
    $week_day = 'день тижня: '. $days[$student_age['wday']-1];

    echo "<tr><td>$student_name</td><td colspan=\"3\">$day $month $week_day</td></tr>";
}
echo "</table>";?>
</body>
</html>

