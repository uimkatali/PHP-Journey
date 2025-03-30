<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    #define constant option 1
    #constants created with a define() - are created at the run time
    #constants created with a const - are created at the compiled time
    define('USERNAME', 'CATALIN ');
    #check if the contant was defined
    echo defined('USERNAME');
    echo USERNAME;

    #define constant option 2
    const USERNAME2 = 'Catalin Miu ';
    echo USERNAME2;

    #define constant optiopn 3
    $three = 'THREE';
    define('USERNAME_' . $three, 'USERNAME_3 ');
    echo USERNAME_THREE;

    echo PHP_VERSION;

    #define magic constants option 4
    echo __LINE__;
    echo __FILE__;

    #define variable variables 
        #takes the value of the variable value and treats that as the name for the variable variable
    $foo = 'hel';
    $$foo = 'JEL';
    echo "  Variable Variable | $foo, $hel | ";
    

    ?>
    <input type="text" name="username" />
    <br />
    <label>Email</label>
    <input type="text" name="email" />
    <br />
    <p>
        <?= "Hello World" ?>
    </p>
    <select name="cars" if="cars">
        <option value="volvo">Volvo</option>
        <option value="DACIA">dacia</option>
    </select>
    <br />
    <button type="submit" name="submit" value="Submit meee!" />
    <br />



</body>

</html>