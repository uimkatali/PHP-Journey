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
        <label for="sth">Enter your name: </label>
        <input type="text" name="sth" id="sth" required >
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

    <h1/>

    <div>
        <?php
        $i = 0;
        while($i <= 10){
            echo $i++;
        
        }
        ?>
    </div>
    <h1/>

    <div>
    <?php 
    $x = 0;
        do{
            echo $x++;
        }while($x <= 12);
    ?>
    </div>

    <br/>

    <div>
        <?php for($z=0; print $z, $z<=$x; $z++){
            echo $z;
        }
        ?>
    </div>

    <div>
        <?php
            //foreach is used for arrays or objects
            $userInfo = ['Catalin', 'CS', 'not a specialist in PHP yet'];
            foreach($userInfo as $key => $item){
                echo $item . "<br/>";
            }
        ?>
    </div>

    <br/>
    <div>
        <?php 
            $user = [
                'name' => "Catalin",
                'username' => "catalinm",
                'skills' => ['PHP', 'Laravel', 'React', 'JavaScript', 'C#'],
            ];

            foreach($user as $key => $item){
                if(is_array($item)){
                    foreach($item as $skill){
                        echo $skill . '-';
                    }
                }else{
                    echo $item;
                }
                echo '<br/>';
            }

        ?>
    </div>
<br/>
    <form method="post">
        <div style="padding:13px;">
            <label for="switchCase">Choose a status</label>
            <br/>
            <select style="padding:13px;" name="statuses" id="switchCase" >
                <Option value="Default" >--Select a status--</Option>
                <Option value="Paid" >Paid</Option>
                <Option value="Declined" >Declined</Option>
                <Option value="Pending" >Pending</Option>
            </select>
            <input type="submit" value="Select" >
        </div>
    </form>
    

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET["sth"]) && !is_null($_GET["sth"])){
                $name = htmlspecialchars($_GET["sth"]);
                echo "<h3> Hello, " . $name . " !<h3/>";
            }else{
                return null;
            }
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

            if(isset($_POST["statuses"]) && $_POST["statuses"] != "Default" && !is_null($_POST["statuses"])){
                $significantValues = $_POST["statuses"];
                switch($significantValues){
                    case 'Paid':
                        echo "Paid";
                        break;
                    case 'Declined':
                        echo "Declined";
                        break;
                    case 'Pending':
                        echo "Pending";
                        break;
                    default:
                        echo "Unknown Payment Status";
                }
            }else{
                $defaultValue = $_POST["statuses"];
                echo "You should select a significant value, you can't go further with " . $defaultValue;
            }
            echo '<br/>';

            #php 8 switch case alternative - match
            if(isset($_POST["statuses"]) && $_POST["statuses"] != "Default" && !is_null($_POST["statuses"])){
                $significantValues = $_POST["statuses"];

                $display = match($significantValues){
                    'Paid' => 'Paid',
                    'Declined'=>'Declined',
                    'Pending' => 'Pending',
                    'Default' => 'Default matching case',
                };
                switch($significantValues){
                    case 'Paid':
                        echo "Paid";
                        break;
                    case 'Declined':
                        echo "Declined";
                        break;
                    case 'Pending':
                        echo "Pending";
                        break;
                    default:
                        echo "Unknown Payment Status";
                }
            }else{
                $defaultValue = $_POST["statuses"];
                echo "You should select a significant value, you can't go further with " . $defaultValue;
            }
    
        }
    ?>

</body>
</html>