<?php
$year = 2024;

if (($year % 4 == 0 && $year % 100 ! = 0)|| ($year % 400 == 0))
{
    echo "Year is a leap year";
}
else {
    echo "Year is not a leap year";
}
?>