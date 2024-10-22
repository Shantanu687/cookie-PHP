<?php
function factorial($n) {
if ($n == 0 || $n == 1) {
return 1;
} else {
return $n * factorial($n - 1);
}
}

// Calculate factorials from 2 to 10
for ($i = 2; $i <= 10; $i++) {
echo "Factorial of $i: " . factorial($i) . PHP_EOL;
}
?>