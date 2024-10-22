<?php
function reverseNumber($number) {
    $reversedNumber = 0;

    while ($number > 0) {
        $lastDigit = $number % 10;
        $reversedNumber = $reversedNumber * 10 + $lastDigit;
        $number = floor($number / 10);
    }

    return $reversedNumber;
}

$inputNumber = readline("Enter a number: ");

if (is_numeric($inputNumber)) {
    $reversedNumber = reverseNumber($inputNumber);
    echo "The reversed number is: $reversedNumber";
} else {
    echo "Please enter a valid number.";
}
?>