<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cat Care - Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/dogcatcare_style.css">
</head>

<body>

    <div class="navbar">

    <ul class="sidebar">
        <li><a href="login_createAcc.php">Login \ Create an Account</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="DogCare.php">Dog Care</a></li>
        <li><a class="active" href="CatCare.php">Cat Care</a></li>
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

        <h1 class="c_title">Cat Care</h1>
        <p class="dogcare_stuff">
            Taking the responsibility of caring for an animal is a very brave 
            and courageous step. It requires a lot of dedication and patience 
            along the way to care and nurture another creature. Below provided
            are some tips and tricks from various renowned websites about 
            effectively caring for a cat.
        </p>

        <table class="dc">
            <tr>
                <td><a class="link" href="https://www.aspca.org/pet-care/cat-care/general-cat-care">
                    <img class="images" src="images/gencat.jpg" alt="https://pixabay.com/photos/cat-animal-cat-portrait-cat-s-eyes-1045782/"><br>
                    <br><h2 class="headings">General Cat Care</h2><br>
                    <p class="writings">Click here to know more about<br>general cat care from ASCPA</p>
                </a></td>

                <td><a class="link" href="https://vcacanada.com/know-your-pet/nutrition-feeding-guidelines-for-cats">
                    <img class="images" src="images/catfood.jpg" alt="https://pixabay.com/photos/cat-feed-british-shorthair-4376782/"><br>
                    <br><h2 class="headings">Nutrition Gudelines</h2><br>
                    <p class="writings">Click here to know more about<br>cat nutrition from VCA Canada</p>
                </a></td>

                <td><a class="link" href="https://www.merckvetmanual.com/cat-owners/routine-care-and-breeding-of-cats/routine-health-care-of-cats">
                    <img class="images" src="images/catty.jpg" alt="https://pixabay.com/photos/cat-collar-spayed-tortoiseshell-19106/"><br>
                    <br><h2 class="headings">Health Care</h2><br>
                    <p class="writings">Click here to know more about health care of cats from Merck Vet Manual</p>
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