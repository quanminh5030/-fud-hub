<?php include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f = test_input($_POST['fname']);
    $l = test_input($_POST['lname']);
    $e = test_input($_POST['email']);
    $u = test_input($_POST['username']);
    $p = md5(test_input($_POST['password']));
    $g = $_POST['gender'];
    $m = $_POST['month'];
    $d = $_POST['day'];
    $y = $_POST['year'];
    $bd = "$y-$m-$d";
}

//check the input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



//add data into db
$sql = "INSERT INTO userinfo(fname, lname, email, username, password, birthday, gender)
VALUES ('$f','$l','$e','$u','$p','$bd','$g')";

//check the action
if ($conn->query($sql) === true) {
?>
    <script>
        alert("Sign Up Sucessfully");
        location.replace('login.php');
    </script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
