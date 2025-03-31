
<?php


/* BOOLEANS */


$isComplete = (string) false;

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump($isComplete);

if($isComplete){
    echo "Is True" ;
} else {
    echo "Is False";
}