<?php

/* INTEGERS */

$x = (int)0x4a;
// $x = PHP_INT_MAX;
// $x = (integer) PHP_INT_MAX + 1;
$x = (int) '543312ad2s';


echo $x;
echo'<br/>';
var_dump(is_int($x));
var_dump(is_bool($x));