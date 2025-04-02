<?php


#null constant
$first = null;


echo $first; #nothing returned
var_dump($first); #returns and displays NULL
var_dump(is_null($first));
var_dump($first === null);


#a variable can be null if it has not yet been defined
#if we var_dump a varaible that is not defined, it will return an error
#if we go forward with the is_null, we can see that it returns TRUE
var_dump($hhh); #returns undefined variable
var_dump(is_null($hhh)); #returns bool(true)

#type casting

$j = null;

var_dump((int) $j); #returns int(0)

echo nl2br(
    "
    
    USECASES:
     If we dont know the value of a variable, we can assing the value to NULL, and then later we can assign a value to it 
      ");