<?php include 'post_recipe.php';
$username = isset($_POST['username']) ;
$cuisine = isset($_POST['cuisine']) ;
$ingredients = isset($_POST['ingredients']) ;
$instructions = isset($_POST['instructions']) ;
$nandn = isset($_POST['nandn']) ;
$video =  isset($_POST['video']) ;
$image = isset($_POST  ['image']) ;

$sql = "insert into post_recipe ( username , cuisine , ingredients , instructions , nandn , video , image)
values ('$username','$cuisine', '$ingredients', '$instructions','$nandn','$video','$image')";
if ($conn->query($sql) === TRUE){

   ?>
    <script>
        alert("Recipe posted Sucessfully");
    </script>
<?php
    include 'post.php';

}
else
{

    echo "ERROR: " .$sql . "<br>" . $conn->error;

}
$conn->close();

