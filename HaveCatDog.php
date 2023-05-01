<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    echo '<script>alert("Please log in first to see this page")</script>';
    echo("<script>location.href = 'login_createAcc.php';</script>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet Give Away - Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/give_style.css">
</head>

<body>

    <div class="navbar">

    <ul class="sidebar">
        <li><a href="login_createAcc.php">Login \ Create an Account</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="DogCare.php">Dog Care</a></li>
        <li><a href="CatCare.php">Cat Care</a></li>
        <li><a href="FindCatDog.php">Find a Dog/Cat</a></li>
        <li><a class="active" href="HaveCatDog.php">Have a Pet to Give Away?</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    </div>

    <div class="header">
        <?php include 'header.php' ?>
    </div>

    <div class="f_content">

        <h2 class="form_title">Pet Give Away</h2>

        <div class="form_container">

        <form class="find_form" onsubmit="return formValidator(document.getElementsByClassName('find_form')[0])" 
            method="post" action="pet_submission.php">

            <h3>Type of pet:</h3><br>
    
            <label for="dog">
            <input type="radio" name="pet" value="dog" id="dog">Dog
            </label>
    
            <label for="cat">
            <input type="radio" name="pet" value="cat" id="cat">Cat
            </label><br><br>
    
            <h3>Breed of pet:</h3><br>

            <select name = "breed" id="breed">
                <option disabled selected>Select your option</option>
                <option> Siamese Cat </option>
                <option> Sphynx Cat </option>
                <option> Burmese Cat </option>
                <option> German Shepherd Dog </option>
                <option> French Bull Dog </option>
                <option> Golden Retriever Dog </option>
                <option> Mixed Breed</option>
            </select><br><br>

            <h3>Age group of pet:</h3><br>
            
            <select name = "age" id="age">
                <option disabled selected>Select your option</option>
                <option> Infant (6-7 months) </option>
                <option> Junior (1-2 years) </option>
                <option> Adult (3-6 years) </option>
                <option> Mature (7-10 years) </option>
                <option> Senior (11-14 years) </option>
                <option> Geriatric (15+ years) </option>
            </select><br><br>

            <h3>Gender of your pet:</h3><br>
            
            <label for="female">
            <input type="radio" name="gender" value="female" id="female">Female
            </label>
        
            <label for="male">
            <input type="radio" name="gender" value="male" id="male">Male
            </label><br><br>
            
            <h3>Does your pet to get along with other dogs:</h3><br>
            
            <label for="gd_yes">
            <input type="radio" name="get_along_dog" value="yes" id="gd_yes">Yes
            </label>
                
            <label for="gd_no">
            <input type="radio" name="get_along_dog" value="no" id="gd_no">No
            </label><br><br>

            <h3>Does your pet to get along with other cats:</h3><br>
            
            <label for="gc_yes">
            <input type="radio" name="get_along_cat" value="yes" id="gc_yes">Yes
            </label>
                
            <label for="gc_no">
            <input type="radio" name="get_along_cat" value="no" id="gc_no">No
            </label><br><br>

            <h3>Is your pet suitable for a family with small children:</h3><br>
            
            <label for="g_yes">
            <input type="radio" name="get_along" value="yes" id="g_yes">Yes
            </label>
                
            <label for="g_no">
            <input type="radio" name="get_along" value="no" id="g_no">No
            </label><br><br>

            <h3>Describe your pet:</h3><br>

            <label for="description">
            <textarea name="description" id="description" rows="10" cols="100" 
                    placeholder="Enter Description...."></textarea>
            </label><br><br>

            <h3>Current Owner's Full Name:</h3><br>

            <label for="name">
            <input type="text" name="name" id="name" size="60" placeholder="Enter Full Name....">
            </label><br><br>

            <h3>Current Owner's Email Address:</h3><br>

            <label for="email">
            <input type="text" name="email" id="email" size="60" placeholder="Enter Email Address....">
            </label><br><br>

            <br><input type = "submit" value = "Submit" id="submit">
            <br><input type = "reset" value = "Reset" id="reset">

        </form>

        </div>

    </div>

    <div class="footer">
        <?php include 'footer.php' ?>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>
    <script src="scripts/FormValidator.js"></script>

</body>
</html>