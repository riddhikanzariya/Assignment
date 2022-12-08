<?php

$Physics = 95;
$Chemistry = 85;
$Biology = 74;
$Mathematics = 64;
$Computer = 53;

$total = $Physics+ $Chemistry + $Biology + $Mathematics + $Computer;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 75)
    $grade = "A";
else if ($average >= 60 && $average < 75)
    $grade = "B";
else if ($average >= 50 && $average < 60)
    $grade = "C";
else if ($average >= 35 && $average < 50)
    $grade = "D";
else
    $grade = "Fail";


echo "The Total marks   = " . $total . "/500 <br>";
echo "The Average marks = " . $average . "<br>";
echo "The Percentage    = " . $percentage . "% <br>";
echo "The Grade         = '" . $grade . "'";

?>