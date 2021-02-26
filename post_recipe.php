<?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "post-a-recipe";
// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error){

    die("Connection failed; " . $conn->connect_error);

}
?>
