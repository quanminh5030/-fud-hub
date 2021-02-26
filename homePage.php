<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile first -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--for the social media-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- my CSS-->
    <link rel="stylesheet" href="CSS/end_recipe_css.css">
    <link rel="stylesheet" href="CSS/frontPage1.css">

     <!--favicon link-->
     <link rel="shortcut icon" href="image/favicon.ico" />

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <a href="homePage.php">
                    <img src="image/fud-hub_logo_ns.png" alt="fud-hub_logo" id="logo">
                </a>
            </div>
            <div class="col-sm-7 user">
                <a href="signUp.php">Sign Up</a> |
                <a href="login.php ">Login</a>
                <!-- <button type="button" class="btn btn-primary" onclick="myFunction()">Post a Recipe</button> -->


            </div> <!-- sign up and login -->
        </div>

        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a class="navbar-brand" href="homePage.php">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Follow us

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item fa fa-facebook" href="#"> Facebook</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item fa fa-instagram" href="#"> Instagram</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item fa fa-twitter" href="#"> Twitter</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item fa fa-youtube" href="#"> Youtube</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item fa fa-linkedin" href="#"> Linkedin</a>

                                </div>
                            </li>

                            <li class="nav-item">
                                <a style="margin-left: 20px; font-size: large;" class="nav-link" href="#" onclick="myFunction()">
                                    Post a Recipe </a>
                            </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0" id="search">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-10">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>                        

                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/cooking2.jpg" alt="cooking1" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cooking4.jpeg" alt="cooking3" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cooking1.jpg" alt="cooking2" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cooking6.jpg" alt="cooking3" width="1100" height="500">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <div class="col-sm-2 advertisement">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="https://www.hamk.fi/applicants/?lang=en">
                                <img src="image/hamk.jpg" alt="hamk" class="img-fluid">
                                <button class="btn btn-danger">Apply Now</button>
                            </a>
                            <hr>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.aalto.fi/en/admission-services/bachelors-admissions">
                                <img src="image/aalto.png" alt="aalto" class="img-fluid">
                                <button class="btn btn-danger">Apply Now</button>
                            </a>
                            <hr>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.aalto.fi/en/admission-services/bachelors-admissions">
                                <img src="image/lamk.png" alt="lamk" class="img-fluid">
                                <button class="btn btn-danger">Apply Now</button>
                            </a>
                            <hr>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.haaga-helia.fi/en/for-applicant/applicant?userLang=en">
                                <img src="image/haaga.png" alt="haaga" class="img-fluid">
                                <button class="btn btn-danger">Apply Now</button>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-lg-12">
                <h1 class="heading" style="color: white;">I'm a foodie looking for a recipe for:</h1>
            </div> <!-- col -->
        </div> <!-- row -->

        <div class="row image">
            <div class="col-lg-4">
                <img class="option" src="image/breakfast.jpg" alt="breakfast" class="img-fluid">
                <a class="breakfast" onclick="myFunction()">
                    <h3><b>Breakfast</b></h3>
                </a>
            </div> <!-- col -->

            <div class="col-lg-4">
                <img class="option" src="image/lunch1.jpg" alt="lunch" class="img-fluid">
                <a class="breakfast" onclick="myFunction()">
                    <h3><b>Lunch</b></h3>
                </a>
            </div> <!-- col -->

            <div class="col-lg-4">
                <img class="option" src="image/dinner2.jpg" alt="dinner" class="img-fluid">
                <a class="breakfast" onclick="myFunction()">
                    <h3><b>Dinner</b></h3>
                </a>
            </div> <!-- col -->

        </div> <!-- row -->
    </div>




    <?php include 'footer.php' ?>