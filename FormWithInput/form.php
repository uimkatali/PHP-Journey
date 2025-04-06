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

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $name = htmlspecialchars($_GET["name"]);
            echo "<h3> Hello, " . $name . " !<h3/>";
        }
    ?>

</body>
</html>