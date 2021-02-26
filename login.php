<?php include "login_header.php" ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 form">
                <h1>Fub-Hub</h1>
                <form method="POST" action="auth.php">
                    <input type="text" name="username" placeholder="  Enter your username" class="text" required><br>
                    <input type="password" name="password" placeholder="  Enter your password" class="text" required><br>
                    <input type="checkbox" name="checkbox" style="margin-left: 2.5%"> Remember me
                    <a href="changePassForm.php">Change your password</a>
                    <input type="submit" name="submit" value="Login" class="btn btn-outline-success btn-success login">
                </form>

            </div>
            <div class="col-lg-2"> </div>
            <div class="col-lg-5 avatarLog">
                <img src="image/Avatar.png" alt="avatar" class="image-fluid mx-auto d-block">
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>



z