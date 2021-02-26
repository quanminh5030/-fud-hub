<?php

$server = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "admin";

//connect to db
$conn = new mysqli($server,$username,$password,$dbname);

//check the connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}



?>