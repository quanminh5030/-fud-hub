<?php include "login_header.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 form">
            <h1>Change Password</h1>
            <form method="POST" action="changePassAction.php">
                <input type="text" name="username" placeholder="  Enter your username" class="text" required><br>
                <input type="password" name="password" placeholder="  Enter your password" class="text" required><br>
                <input type="password" name="newPassword" placeholder="  Enter your new password" class="text" required><br>
                <input type="submit" name="submit" value="Update Password" class="btn btn-outline-success btn-success login">
            </form>

        </div>

        <div class="col-lg-2"> </div>
        <div class="col-lg-5 avatarLog">
            <img src="image/Avatar.png" alt="avatar" class="image-fluid mx-auto d-block">
        </div>
    </div>


    <?php include "footer.php" ?>