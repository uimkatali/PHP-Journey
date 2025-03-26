<!-- Handles form submission - LOGIC file -->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $name = $_POST["name"];

    //validate
    if(!empty($name)){
        
        $safe_name = htmlspecialchars($name);
        $stmt = $connection->prepare["INSERT INTO users (name) VALUES (?)"];
        $stmt->bind_param("s", $safe_name);
        if($stmt->execute()){
            echo "<h2>Successfully saved: " . $safe_name . "!</h2>";
        }else {
            echo "<h2>Error saving data.</h2>";
        }
        $stmt->close();
    } else {
        echo "<h2>Error: Name field is empty</h2>";
    }
} 
$connection->close();
?>