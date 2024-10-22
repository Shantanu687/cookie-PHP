<?php

$n1 = 0;
$n2 = 1;
$limit = 10;
$count = 0;

while($count<$limit){
    echo"$n1<br>";
    $next = $n1+$n2;
    $n1 = $n2;
    $n2 = $next;
    $count++;
}
?>