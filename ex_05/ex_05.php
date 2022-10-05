<?php
function my_swap(mixed &$a, mixed &$b) {
$temp = $a;
$a = $b;
$b = $temp;
}

//$c ="test";
//$d ="test1";
//my_swap($c,$d);
//echo "$c $d";

?>