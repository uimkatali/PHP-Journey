<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Form</title>
</head>
<body>
    <h1  >
        First Form
    </h1>
    <br/>
    <form action="form.php" method="get">
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" required >
        <br/>
        <input type="submit" value="Submit" >
    </form>
    <br/>
    <form method="post">
        <label for="firstNumber">First Number here: </label>
        <input type="number" name="firstNumber" required>
        <br/>
        <label for="secondNumber">Second number here:</label>
        <input type="number" name="secondNumber" required>
        <input type="submit" value="Calculate">
    </form>
    <br/>
    <form method="post">
        <input name="userInput" required >
        <input type="submit" value="Check" >
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $name = htmlspecialchars($_GET["name"]);
            echo "<h3> Hello, " . $name . " !<h3/>";
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(isset($_POST["userInput"]) && !is_null($_POST["userInput"])){
            $num = $_POST["userInput"];
                if(is_numeric($num)){
                    if($num %2 == 0){
                        echo "<p>$num "."is even.</p>";
                    } else {
                        echo "<p>$num is an odd number, heeei!</p>";
                    }
                }else{
                    echo "<h3>`$num` is not a number</h3>";
                }
            }

            if( 
                (isset($_POST["firstNumber"]) && isset($_POST["secondNumber"]))
                 && 
                 (!is_null($_POST["secondNumber"]) && !is_null($_POST["firstNumber"]))
                 )
                 {
                $firstNumber = $_POST["firstNumber"];
                $secondNumber = htmlspecialchars($_POST["secondNumber"]);

                $sum = $firstNumber + $secondNumber;
                echo "Sum of $firstNumber and $secondNumber equals: " . $sum;

            }
            



        }
    ?>

</body>
</html>