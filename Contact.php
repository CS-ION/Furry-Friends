<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/contact_style.css">
</head>

<body>

    <div class="navbar">

    <ul class="sidebar">
        <li><a href="login_createAcc.php">Login \ Create an Account</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="DogCare.php">Dog Care</a></li>
        <li><a href="CatCare.php">Cat Care</a></li>
        <li><a href="FindCatDog.php">Find a Dog/Cat</a></li>
        <li><a href="HaveCatDog.php">Have a Pet to Give Away?</a></li>
        <li><a class="active" href="Contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    </div>

    <div class="header">
        <?php include 'header.php' ?>
    </div>

    <div class="info">

        <div class="form_container">

            <h2 class="form_title">Fill out this form to get in touch</h2>

            <form class="con_form" onsubmit="return formValidator(document.getElementsByClassName('con_form')[0])" method="get">

            <h3>Full Name:</h3><br>

            <label for="name">
            <input type="text" name="name" id="name" size="60" placeholder="Enter Full Name....">
            </label><br><br>

            <h3>Email Address:</h3><br>

            <label for="email">
            <input type="text" name="email" id="email" size="60" placeholder="Enter Email Address....">
            </label><br><br>

            <h3>Message:</h3><br>

            <label for="description">
            <textarea name="description" id="description" rows="10" cols="100" 
                    placeholder="Enter Message...."></textarea>
            </label><br><br>

            <br><input type = "submit" value = "Submit" id="submit">
            <br><input type = "reset" value = "Reset" id="reset">

            </form>

        </div>

        <div class="details">

            <table class="tb">
    
                <tr>
                    <td>
                        <a href="https://pixabay.com/vectors/membership-icon-member-card-id-6394673/">
                            <img src="images/idcard.png" alt="https://pixabay.com/vectors/membership-icon-member-card-id-6394673/"
                            height="200" width="200">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                    Syed Ayaan Jilani <br>
                    Student ID: 40209519<br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="https://pixabay.com/vectors/reply-all-e-mail-email-letter-post-97621/">
                            <img src="images/email.png" alt="https://pixabay.com/vectors/reply-all-e-mail-email-letter-post-97621/"
                            height="200" width="200">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                    s_jilani@live.concordia.ca<br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="https://pixabay.com/vectors/icons-phone-round-connect-service-1831921/">
                            <img src="images/phone.png" alt="https://pixabay.com/vectors/icons-phone-round-connect-service-1831921/"
                            height="200" width="200">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                    514-208-0055<br><br>
                    </td>
                </tr>
    
            </table>

        </div>


    
    </div>

    <div class="footer">
        <?php include 'footer.php' ?>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>
    <script src="scripts/FormValidator.js"></script>
    
</body>
</html>