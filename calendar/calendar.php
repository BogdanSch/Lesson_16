<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$month_start = strtotime("1.11.2022");

$month_days = 30;
$month_weeks_count = floor(30 / 7);
$day_start = 1;

echo "<table><tr><th>Monday</th><th>Tuesday</th><th>Wendnesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr>";
for ($i=1; $i <= $month_weeks_count; $i++) {
    echo "<tr>";
    for ($y=$day_start; $y <= $day_start + 7; $y++) { 
        echo "<td>$y<td>";
    }
    $day_start += 7;
    echo "</tr>";
}?>
</body>
</html>