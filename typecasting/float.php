<?php

/* FLOATS */

$x = 13.56666;
$x = 13.5e-3;
$x = 13_000.5e2; # _ for better readability
$x = PHP_FLOAT_MAX;
$x = floor((0.6 + 0.123) * 32.12312);
$x = ceil(0.2 + 123.443); #124

$x = ceil((0.1 + 0.2)*10); #4

//no comaprations on floating numbers


$u = 0.23;
$i = 1 - 0.77;

echo $x;

var_dump($x);
echo '<br/>';

echo $u;
echo '<br/>';
var_dump($u);
echo '<br/>';
echo $i;

var_dump($i);
echo '<br/>';

if($u === $i){
    echo 'Yes';
}else {
    echo 'NO';
}

#NAN - Not a number
echo '<br/>';
echo NAN;


#INFINITY
$t = ceil((0.1+0.3) *10);
echo '<br/>';
echo (PHP_FLOAT_MAX * 2);

var_dump(is_finite($t));
echo '<br/>';

var_dump(is_infinite($t));
echo '<br/>';

var_dump(is_nan($t));
echo '<br/>';

var_dump(is_finite(log(-1)));
echo '<br/>';



#CASTING
$p = 5;

var_dump((float)$x);
var_dump(floatval( $x)); #better the normal casting, no unnecessary functions called
