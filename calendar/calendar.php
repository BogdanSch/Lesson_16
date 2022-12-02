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

$month_days = 32;
$month_weeks_count = floor($month_days / 7);
$last_day = 30;
$next_day = 6;

echo "<table><tr><th>Monday</th><th>Tuesday</th><th>Wendnesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr>";
echo "<tr><td>30</td><td>31</td>";

for ($i=1; $i <= 5; $i++) { 
    if($i == 5)
        echo "<td style=\"background: red;\">$i</td>";
    else
        echo "<td>$i</td>";
}
echo "</tr>";

for ($i=0; $i < $month_weeks_count; $i++) {
    echo "<tr>";
    for ($y=$next_day; $y < $next_day + 7; $y++) {
        if($y == $next_day + 6){
            echo "<td style=\"background: red;\">$y</td>";
        }
        else{
            echo "<td>$y</td>";
        }
        if($y >= $last_day) break;
    }
    $next_day += 7;
    echo "</tr>";
}?>
</body>
</html>