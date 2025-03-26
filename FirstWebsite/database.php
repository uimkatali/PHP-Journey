<!-- Connects php to a DB -->
<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "php_form_db";

$connection = new mysqli($host, $dbname, $user, $pass);

if($connection->connect_error){
    die("Connection failed: ", $connection->connection_error);
}

?>