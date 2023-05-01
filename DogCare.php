<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Care - Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/dogcatcare_style.css">
</head>

<body>

    <div class="navbar">

    <ul class="sidebar">
        <li><a href="login_createAcc.php">Login \ Create an Account</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="DogCare.php">Dog Care</a></li>
        <li><a href="CatCare.php">Cat Care</a></li>
        <li><a href="FindCatDog.php">Find a Dog/Cat</a></li>
        <li><a href="HaveCatDog.php">Have a Pet to Give Away?</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    </div>

    <div class="header">
        <?php include 'header.php' ?>
    </div>

    <div class="content">

        <h1 class="c_title">Dog Care</h1>
        <p class="dogcare_stuff">
            Taking the responsibility of caring for an animal is a very brave 
            and courageous step. It requires a lot of dedication and patience 
            along the way to care and nurture another creature. Below provided
            are some tips and tricks from various renowned websites about 
            effectively caring for a dog.
        </p>

        <table class="dc">
            <tr>
                <td><a class="link" href="https://www.aspca.org/pet-care/dog-care/general-dog-care">
                    <img class="images" src="images/general.jpg" alt="https://pixabay.com/photos/dog-female-dog-bernese-mountain-dog-2668993/"><br>
                    <br><h2 class="headings">General Dog Care</h2><br>
                    <p class="writings">Click here to know more about general dog care from ASCPA</p>
                </a></td>

                <td><a class="link" href="https://vcacanada.com/know-your-pet/nutrition-general-feeding-guidelines-for-dogs">
                    <img class="images" src="images/food.jpg" alt="https://pixabay.com/photos/english-cocker-spaniel-dog-puppy-5937760/"><br>
                    <br><h2 class="headings">Nutrition Gudelines</h2><br>
                    <p class="writings">Click here to know more about dog nutrition from VCA Canada</p>
                </a></td>

                <td><a class="link" href="https://www.merckvetmanual.com/dog-owners/routine-care-and-breeding-of-dogs/routine-health-care-of-dogs">
                    <img class="images" src="images/dogdoc.jpg" alt="https://pixabay.com/photos/dog-female-dog-bernese-mountain-dog-2668993/"><br>
                    <br><h2 class="headings">Health Care</h2><br>
                    <p class="writings">Click here to know more about health care of dogs from Merck Vet Manual</p>
                </a></td>

            </tr>
            
        </table>




    </div>

    <div class="footer">
        <?php include 'footer.php' ?>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>

</body>
</html>