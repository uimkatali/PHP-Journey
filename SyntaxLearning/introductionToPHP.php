<?php 
echo "Hello World\n";
$name = 'Johnny';
$age = 25;
$price = 19.99;
$is_admin = true;
//operators
$totalPrice = $age + $price;

echo "Name: $name\nAge: $age\nTotal Price: $totalPrice\n";
echo $totalPrice + $price;

//comparison operators

var_dump($totalPrice);
var_dump(10 == "10");
var_dump(10 === "10");
echo"\n";
//Logical Operators

$is_logged_in = false;
if($is_admin && !$is_logged_in){
	echo "Admin but not logged in\n";
}

//Control Structures
$score = 78;
if($score >= 99){
	echo"BIG";
} elseif ($score >=85) {
	echo"MEDIUM";
}else{
	echo "SMALL";
}


//Switch Case
$day = "Monday";
switch($day){
	case "":
		// code...
		break;
}

?>