<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--CSS link-->
    <link href='https://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/end_recipe_css.css">

    <!-- Navbar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <!--favicon link-->
    <link rel="shortcut icon" href="favicon.ico" />

    <title>FUD-HUB 2.0</title>
</head>

<body>
    <div class="container">
        <?php include "web_header.php"
        ?>

        <div class="row">
            <div class="col-sm-12" id=rec_name>
                <p><b>
                        <h1>Chicken & Plum Salad</h1>
                    </b></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="rec_desc">
                <p>
                    <h6>Sweet, juicy plums pair up with chicken warmed by a blend of spices,<br>
                        cinnamon, cloves, fennel, star anise and Szechuan peppercorns - in this fresh and zingy salad.</h6>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" id="ingredients">
                <p><b>
                        <h2>Ingredients </h2>
                        <hr>
                    </b></p>
                <p>
                    <ul>
                        <li> 4 6-oz boneless, skinless chicken breasts</li>
                        <li>2 tbsp. plus 1 tsp olive oil</li>
                        <li>1/4 tsp. salt</li>
                        <li>1/4 tsp. pepper</li>
                        <li>4 red plums, cut into 1-inch wedges)</li>
                        <li>2 scallions, thinly sliced</li>
                        <li>6 c. baby arugula</li>
                        <li>1/2 c. fresh dill, very roughly chopped</li>
                        <li>1/4 c. roasted almonds, chopped</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="rec_vid">
                <iframe src="https://www.youtube.com/embed/bTht1zQq-Bs?start=23" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="instructions">
                <br><br>
                <p><b>
                        <h2>Instructions</h2>
                        <hr>
                    </b></p>

                <p>
                    <ul>
                        <li> Heat grill to medium.</li>
                        <li> Rub the chicken with 1 teaspoon olive oil and season with 1/4 teaspoon each salt and pepper.</li>
                        <li>In large bowl, toss red plums with 1 tablespoon oil and 1/4 teaspoon each salt and pepper.</li>
                        <li>Grill chicken until cooked through, 5 to 7 minutes per side. Transfer to cutting board and let rest 5 minutes before slicing.</li>
                        <li>Add plums to grill and cook until just charred, 2 to 3 minutes per side; return to bowl and toss with remaining 1 tablespoon oil and scallions.</li>
                        <li>Add chicken (and any juices) to bowl, and toss to combine. Fold in arugula, dill, and almonds.</li>
                    </ul>
                </p>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" id="notes_nutrition">
                <p><b>
                        <h2>Notes & Nutrition Info </h2>
                        <hr>
                    </b></p>
                <p>
                    <ul>
                        <li>Plum, avocado, onion, coriander and mint make this a flavoursome chicken salad.</li>
                        <li> It is perfect for lunches and weeknight dinners when you're looking for something quick and easy to make.</li>
                        <li>Calories: 120</li>
                        <li>Total Fat: 7.1g</li>
                        <li>Cholesterol: 43.1mg</li>
                        <li>Sodium: 317.2mg</li>
                        <li>Potassium: 106.3mg</li>
                        <li>Carbohydrates: 22.3g</li>
                        <li>Protein 4.7g</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="nutrition_img">
                <img src="image/pancakes_info.jpg" alt="nutritional information">
            </div>
        </div>

        <?php include "comments.php"
        ?>

        <?php include "footer.php"
        ?>


    </div>
    <!--container-->


</body>

</html>