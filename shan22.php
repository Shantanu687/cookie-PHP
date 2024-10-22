<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}
$number = intval(readline("Enter a number: "));

if (isPrime($number)) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}
?>