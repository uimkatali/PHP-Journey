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
	echo"BIG\n";
} elseif ($score >=85) {
	echo"MEDIUM\n";
}else{
	echo "SMALL\n";
}


//Switch Case
$day = "Tuesday";
switch($day){
	case "Monday":
		echo"It's Monday!!!\n";
		break;
	case "Tuesday":
		echo "It's Turesday!\n";
		break;
	default:
		echo"ETC, you choose what day it is, I wont write more non-sense\n";
	
}

//For loops
for($i = 1; $i <= 5 ; $i++){
	echo "Number: $i\n";
}


//While loops
$i=1;
while ($i <=6){
	echo"Num: $i\n";
	$i++;
}

//Functions

function greet($name){
	return "Hello, $name";
}

echo greet("something\n");


//Arrays

$fruits=["mere\n", "pere\n","piersici\n"];
echo $fruits[1];

//Associate array
$person = ["name" => "John\n", "age" => 35];
echo $person["name"];

//Looping thrtough an Array
$colors = ["Red", "A","B", 213];
foreach ($colors as $color){
	echo "$color \n";
}


// SUPER GLOBALS

// URL: example.com/index.php?name=John
echo $_GET['name']; 



//Workling with forms - check other files
?>