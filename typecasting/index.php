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

