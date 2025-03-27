
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo "This is also a paragraph"; ?>
    </p>
    <?php 
    //Scalar Types
        $name = "Catalin Miu";
        $fullName = $name;
        $int = 123445;
        $float = 2.564432;
        $bool = false;
        echo "This is a paragraph, and this paragraph is $fullName's paragraph <br/>";

        //Array types
        $array = [];
        $nameArray = array("Catalin", "Miu");

        // display php info
        //this displays also the super global variables
        // echo phpinfo();

        //SUPER GLOBAL variables

        //$_SERVER - display user's browser
        echo $_SERVER["HTTP_USER_AGENT"];
        
        //Check if the browser contains Chrome/Firefox
        ?>
    <?php 
        if(str_contains($_SERVER["HTTP_USER_AGENT"], '6')){
            echo "<br/>You are displaying a text that contains 6<br/>";
            //also we can swith between php and html
            ?>
            <h3>str_contains() returned true</h3>
            <p>there is a 6 in your version of Chrome</p>
            <?php
        } else {
            ?>
            <h3>str_contains() returned false</h3>
            <p>You are not using Chrome version that contains a 6</p>
            <?php
        }
        ?>
    


    
</body>
</html>