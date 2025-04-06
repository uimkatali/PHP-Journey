<?php

echo 'OPERATORS <br/>';

echo '<br/>';

echo (
    'Arithmetic Operators->  + - * / % **
    <br/>
    Assignment operators -> = += -= /= %= *= **=
    <br/>
    String operators-> . *=
    <br/>
    Comparison operators -> == === != <> !== < > <= >= <==> ?? ?:
    <br/>
    Error control Operator -> @
    <br/>
    Incerement/decrement operators-> ++ --
    <br/>
    Logical operators -> && || ! and or xor
    <br/>
    Bitwise operators -> & | ^ ~ << >>
    <br/>
    Array operators ->  + == === != <> !==
    <br/>
    Execution operators ->  ``
    <br/>
    Type operators -> instanceof
    <br/>
    Nullsafe operators -> ?
    '
);

$int = 10;
$int2 = 23;
$bool = true;
$float = 2.43;
$array = ['1', '2', '3'];
$null = null;

//Arithmetic operators

echo '<br/>';

echo '<br/>';
var_dump($int * $int2);
echo '<br/>';
var_dump($int - $int2);
echo '<br/>';
var_dump($int + $int2);
echo '<br/>';
var_dump($int / $int2);
echo '<br/>';
var_dump($int % $int2);
echo '<br/>';
var_dump($int ** $int2);
echo '<br/>';
var_dump(-$int);
echo '<br/>';
var_dump(+$int2);
echo '<br/>';
var_dump(fdiv($int, $float));
echo '<br/>';
var_dump(fmod($float, $int2));

echo '<br/>';
echo '<br/>';

echo 'Assignment operators';

echo '<br/>';

if($int = 5){
    echo $int; #returns 5, because this = sign is to assign a value
}

echo '<br/>';
echo '<br/>';

echo 'String operators';

echo '<br/>';

$int = $int2 . 'World';
echo $int;
echo '<br/>';
 
echo '<br/>';
echo 'Comparison operators';
echo '<br/>';

var_dump($int <=> $int2);  
#returns 0 if int== int2, 
#returns -1 if int < int2
#returns 1 if int > int2

#find position of string


