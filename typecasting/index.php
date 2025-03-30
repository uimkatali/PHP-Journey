<?php

/* Data Types & Type Casting */


# PHP WILL DETERMINE THE DATA TYPE DURIN THE RUNTIME - 
# SO THATS HOW IT KNOWS WHAT TYPE OF DATA WE USE WITHOUT SPECIFYING MANUALLY


#4 Scalar Types
    # bool - true / false
    $highlighted = true;
    # int - 1, 2, 3, 4, 0, -5 (no decimals)
    $numOfPpl = 23;
    # float - 1.5, 0.005, -12.9
    $interestRate = 1.24;
    # string - "Cata", "Hello world!"
    $who = 'Catalin';

    echo $highlighted, '<br/>'; #prints 1 instead of bool value, next lesson
    echo $numOfPpl, '<br/>';
    echo $interestRate, '<br/>';
    echo $who, '<br/>';
    
    var_dump($highlighted); 
    var_dump($numOfPpl); 
    var_dump($interestRate); 
    var_dump($who); 
    echo gettype($highlighted);

    echo "<br/>";

    # 4 Compund Types
    # array
    
    $dataTypes = [1, 2, 3, 0.5, -9.32332, 'a', 'B', false];
    print_r($dataTypes); #human readable content of an array

    # object
    # callable
    # iterable

# 2 Special Types - used for visibility
    # resource
    # null




    echo "<br/>";

#TYPE HINTING EXAMPLE
echo "Type HINTING: <br/>";
function sum(int $x, int $y){
#if you specify a type here in the param settings, there will be returned as that type, not as they are as a result
    var_dump($x,$y);
    return $x + $y;
}

echo var_dump(sum(123,23.04)).'<br/>';

#TYPE JUGGLING / TYPE COERCION
    # php will convert to the specified data type, like from string '3' to int 3
    #if the value cant be converted into the type specified, it will throw an error
function sth(int $x, int $y){
    #we can override the value here for x or y by $x = 7.654, it will return float
    var_dump($x, $y);
    echo "<br/>";
    return $x + $y;
}
echo "<br/> TYPE COERCION: <br/>";

$sum = sth(5, '55');
echo $sum . '<br/>';
var_dump($sum); 