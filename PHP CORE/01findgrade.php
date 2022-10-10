<?php

$physics = 90;
$chemistry = 75;
$biology = 64;
$mathematics = 55;
$computer = 45;

$total = $physics + $chemistry + $biology + $mathematics + $computer;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";
echo '<pre>';
echo "The Percentage = " . $percentage . "%\n";
echo "The Grade = '" . $grade . "'\n";

?>