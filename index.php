<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/home_style.css">
</head>

<body>

    <div class="navbar">
        
    <ul class="sidebar">
        <li><a href="login_createAcc.php">Login \ Create an Account</a></li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="DogCare.php">Dog Care</a></li>
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

    <div class="home_page">

        <h2 class="mission">Join us in our mission to provide a <br>
            stable and loving home to these animals. </h2>

        <table class="para1_contents">

            <tr>

            <td>
                <p class="para1">
                    According to Canada Humane's 2021 report on Animal Shelter Statistics,
                    a total of around 21000 dogs and 61000 cats were admitted to shelter 
                    centres. Diving furthermore into the stats, a total of more than 50% 
                    admissions to the shelter were stray cats or dogs. These animals were 
                    once promised the whole world by their owners but left on the street 
                    to salvage for themselves. Many of these animals admitted to the shelters
                    were in critical conditions.
                </p>
            </td>

            <td><a href="https://pixabay.com/photos/dog-cat-pets-domestic-stable-5883275/">
                <img class="para1_img" src="images/catto.jpg" alt="Image from Pixabay"></a></td>

            </tr>

            <tr>

                <td><a href="https://pixabay.com/vectors/baby-decoration-cat-dog-stuff-2024311/">
                    <img class="para2_img" src="images/doggos.png" alt="Image from Pixabay"></a></td>
                <td>
                    <p class="para2">
                        Understanding the feelings of these animals, a normal happy-go-lucky
                        university student established the non-profit FURRY FRIENDS to help 
                        provide a stable home and suitable environment for these creatures where 
                        they are loved and feel at peace. Since its establisment in 2001, we have
                        admitted around 20,000 cats and dogs, providing them with the best facilities
                        and medical treatment, and mainatined a success rate of 60% in finding a 
                        loving home for them (these figures are per year figures).
                    </p>
                </td>
            </tr>

        </table>

    </div>

    <div class="footer">
    <?php include 'footer.php' ?>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>

</body>
</html>
