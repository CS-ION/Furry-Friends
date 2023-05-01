<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find A Pet - Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/find_style.css">
</head>

<body>

    <div class="navbar">

    <ul class="sidebar">
        <li><a href="login_createAcc.php">Login \ Create an Account</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="DogCare.php">Dog Care</a></li>
        <li><a href="CatCare.php">Cat Care</a></li>
        <li><a class="active" href="FindCatDog.php">Find a Dog/Cat</a></li>
        <li><a href="HaveCatDog.php">Have a Pet to Give Away?</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    </div>

    <div class="header">
        <?php include 'header.php' ?>
    </div>

    <div class="f_content">

        <div class="form_container">

        <h2 class="form_title">Find your companion</h2>

        <form class="find_form" onsubmit="return formValidator(document.getElementsByClassName('find_form')[0])" 
        method="post" action="Display_Pets.php">

            <h3>Choose your pet:</h3><br>
    
            <label for="dog">
            <input type="radio" name="pet" value="female" id="dog">Dog
            </label>
    
            <label for="cat">
            <input type="radio" name="pet" value="cat" id="cat">Cat
            </label><br><br>
    
            <h3>Select the preferred breed for your pet:</h3><br>

            <select name = "breed" id="breed">
                <option disabled selected>Select your option</option>
                <option> Siamese Cat </option>
                <option> Sphynx Cat </option>
                <option> Burmese Cat </option>
                <option> German Shepherd Dog </option>
                <option> French Bull Dog </option>
                <option> Golden Retriever Dog </option>
                <option> Does Not Matter</option>
            </select><br><br>

            <h3>Select the preferred age-group for your pet:</h3><br>
            
            <select name = "age" id="age">
                <option disabled selected>Select your option</option>
                <option> Infant (6-7 months) </option>
                <option> Junior (1-2 years) </option>
                <option> Adult (3-6 years) </option>
                <option> Mature (7-10 years) </option>
                <option> Senior (11-14 years) </option>
                <option> Geriatric (15+ years) </option>
                <option> Does Not Matter</option>
            </select><br><br>

            <h3>Choose the preffered gender for your pet:</h3><br>
            
            <label for="female">
            <input type="radio" name="gender" value="female" id="female">Female
            </label>
        
            <label for="male">
            <input type="radio" name="gender" value="male" id="male">Male
            </label>
            
            <label for="g_dnm">
            <input type="radio" name="gender" value="dnm" id="g_dnm">Does Not Matter
            </label><br><br>
            
            <h3>Do you need your pet to get along with<br>
            other dogs, other cats, small children:</h3><br>
            
            <label for="ga_yes">
            <input type="radio" name="get_along" value="yes" id="ga_yes">Yes
            </label>
                
            <label for="ga_no">
            <input type="radio" name="get_along" value="no" id="ga_no">No
            </label>
            
            <label for="ga_dnm">
            <input type="radio" name="get_along" value="dnm" id="ga_dnm">Does Not Matter
            </label><br><br>

            <br><input type = "submit" value = "Submit" id="submit">
            <br><input type = "reset" value = "Reset" id="reset">

        </form>
    
        </div>

        <a href="https://pixabay.com/illustrations/man-lying-dog-playing-casual-idea-3030653/">
        <img class="form_img" src="images/homie.jpg" alt="https://pixabay.com/illustrations/man-lying-dog-playing-casual-idea-3030653/">
        </a>

    </div>

    <div class="footer">
        <?php include 'footer.php' ?>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>
    <script src="scripts/FormValidator.js"></script>

</body>
</html>