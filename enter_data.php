<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fud-hub 2.0</title>
</head>

<body>
    <?php include 'fud_hub_db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $sql = "insert into comments (name, email, comment, rating)
    values('$name', '$email', '$comment', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Your comment has been uploaded" . "<br>". "<a href='javascript:history.back()'>Go Back</a>";

       
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>

</html>