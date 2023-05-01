<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matching Pets</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/Display_Pets.css">
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

        <table class="head_table"><tr>
            <td><h1>FURRY FRIENDS</h1></td>
            <td><a href="index.php">
            <img class = "head_image" src="images/header.png" alt="https://pixabay.com/vectors/animal-cat-dog-pet-1295976/">
            </a></td>
            <td class="clock"></td></tr>
        </table>

    </div>

    <div class="container">
        <?php include 'match.php';?>
    </div>

    <div class="footer">
        <p> <strong>© Furry Friends Inc.<br>
            All images taken from Pixabay<br>
        <a href="policy.html">Privacy Policy</a></strong></p>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>
    
</body>
</html>