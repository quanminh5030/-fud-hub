<?php include "db.php";
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['newPassword'])) {
    $username = htmlentities($_POST['username']);
    $password = md5(htmlentities($_POST['password']));
    $newPassword = md5(htmlentities($_POST['newPassword']));

    $sql = "SELECT * FROM userinfo WHERE username='$username'";
    $result = $conn->query($sql);

    if (!$result) {
        echo "something is wrong";
    } else {
        while ($row = $result->fetch_assoc()) {
            if ($username == $row['username'] && $password == $row['password']) {
                $query = mysqli_query($conn, "UPDATE userinfo SET password = '$newPassword' WHERE username = '$username'");

                if ($query) {
?>
                    <script>
                        alert("Password is changed successfully");
                        location.replace('login.php');
                    </script>
                <?php
                }
            } else if ($username == $row['username'] && $password != $row['password']) {
                ?>
                <script>
                    alert("Password is wrong!");
                    location.replace('changePassForm.php');
                </script>
            <?php
            } else if ($username != $row['username'] && $password == $row['password']) {
            ?>
                <script>
                    alert("Username is wrong!");
                    location.replace('changePassForm.php');
                </script>
<?php
            }
        }
    }
}

$conn->close();
?>