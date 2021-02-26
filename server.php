<?php
session_start();


$username = "";
$cuisine = "";
$ingredients = "";
$instructions = "";
$nandn = "";

$url = "";
$image = "";

$db = mysqli_connect('localhost', 'admin', 'admin123', 'post-a-recipe');


if (isset($_POST['pos-a-recipe'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $cuisine = mysqli_real_escape_string($db, $_POST['cuisine']);
    $ingredients = mysqli_real_escape_string($db, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($db, $_POST['instructions']);
    $nandi = mysqli_real_escape_string($db, $_POST['nandn']);
    
    $url = mysqli_real_escape_string($db, $_POST['url']);
    $image = mysqli_real_escape_string($db, $_POST['image']);


    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($cuisine)) { array_push($errors, "Cuisine is required"); }
    if (empty($ingredients)) { array_push($errors, "Ingredients is required"); }
    if (empty($instructions)) { array_push($errors, "Instructions is required"); }
    if (empty($nandn)) { array_push($errors, "Notes are required"); }
    
    if (empty($url)) { array_push($errors, "URL is required"); }
    if (empty($image)) { array_push($errors, "Image is required"); }

    }




?>
