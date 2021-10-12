<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Css -->
    <link rel="stylesheet" href="css/styles.css?<?php echo time(); ?>">

    <!-- Bootsrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootsrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fontawsome -->
    <script src="https://kit.fontawesome.com/d54712eab9.js" crossorigin="anonymous"></script>
    <title>ChatCodeE - Contact Us</title>
</head>
<body>
<header>
<?php include('view/header.php') ?>
</header>
<section id="feedback">
    <div class="contact-form">
        <h1 id="title" class="text-center" style="color: orange;">Contact Us</h1>
        <h4 class="text-center" style="margin-bottom: 40px;">We valued your Feedback</h4>
        <!-- <p id="description" class="description text-center">
            <?php
                if ($insert == true) {
                echo "<p class='submitMsg'>Thanks for submitting your Feedback. We valued your opinion!</p>";
                }
            ?>
            </p>-->

        
            <form action="" id="feedback-form" method="post">
                <div class="form-group">
                    <label id="name-label" for="name">First Name</label>
                    <input type="text" name="f-name" id="f-name" class="form-control" placeholder="Enter your first name" required />
                </div>
                <div class="form-group">
                    <label id="name-label" for="name">Last Name</label>
                    <input type="text" name="l-name" id="l-name" class="form-control" placeholder="Enter your last name" required />
                </div>
                <div class="form-group">
                    <label id="email-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" required />
                </div>
                <div class="form-group">
                    <label id="number-label" for="number">Age<span class="clue">(optional)</span></label>
                    <input type="number" name="age" id="age" min="10" max="99" class="form-control" placeholder="Age" />
                </div>



                <div class="form-group">
                    <p>Any comments or suggestions?</p>
                    <textarea name="comments" id="comments" class="input-textarea" name="comment" placeholder="Enter your comment here..."></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" class="submit-button">
                    Submit
                    </button>
                </div>
            </form>    
    </div>
</section>

<section id="contact-info">
   <div class="container">

        <div class="contact-information" style="margin-left: 175px;">

            <h2 style="color: orange;">Contact Information</h2> 
            <p>Adress: Helsinki 234X <br> P.O.Box xx34 <br>  Finland
            <br> Email: chatcodee@gmail.com <br>Cell: +3584324xxx2
            </p>

        </div>


   </div>

</section>




<?php include('view/footer.php') ?>
    
</body>
</html>
