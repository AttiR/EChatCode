<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - EChatCode</title>
</head>


<?php include './config/dbcon.php';?>
<header><?php include 'view/header.php'?></header>
<div class="container-fluid">
    <img class="about-img1" src="./view/images/About1.jpg" alt="image">
</div>

<!---............................About Us...................-->
<section class="about-section" id="about">
    <div class="container">

        <div class="title">
            <h2 class="u-mb-medium">
                About us
            </h2>
        </div>

        <div class="about">
            <div class="about-text">
                <p class="u-mb-medium">

                    EChatCode, a disscussion forum where one can share, ask the question and ideas.
                    The aim is to serves as a resource to help developers of all skill sets.
                    Our mission is to help each other learn, build and share using code. Lets share and help each
                    others.
                </p>

            </div>
            <div class="about-image">
                <img src="./view/images/about.png" alt="image">
            </div>
        </div>

    </div>
</section>
<?php include 'view/footer.php'?>