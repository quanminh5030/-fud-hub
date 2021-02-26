<?php include 'web_header.php' ?>

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
                        <img src="image/cooking1.jpg" alt="cooking1" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="image/cooking4.jpeg" alt="cooking3" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="image/cooking2.jpg" alt="cooking2" width="1100" height="500">
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
            <h1 class="heading">I'm a foodie looking for a recipe for:</h1>
        </div> <!-- col -->
    </div> <!-- row -->

    <div class="row">
        <div class="col-lg-4">
            <img class="option" src="image/breakfast.jpg" alt="breakfast" class="img-fluid">
            <a href="breakfast.php" class="breakfast">
                <h3><b>Breakfast</b></h3>
            </a>
        </div> <!-- col -->

        <div class="col-lg-4">
            <img class="option" src="image/lunch1.jpg" alt="lunch" class="img-fluid">
            <a href="lunch.php" class="breakfast">
                <h3><b>Lunch</b></h3>
            </a>
        </div> <!-- col -->

        <div class="col-lg-4">
            <img class="option" src="image/dinner2.jpg" alt="dinner" class="img-fluid">
            <a href="dinner.php" class="breakfast">
                <h3><b>Dinner</b></h3>
            </a>
        </div> <!-- col -->

    </div> <!-- row -->
</div>
<?php include 'footer.php' ?>