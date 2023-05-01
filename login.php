<?php

// get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// read the user file and check if the username and password match
$users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($users as $user) {
    list($stored_username, $stored_password) = explode(':', $user);
    if ($username === $stored_username && $password === $stored_password) {
        // login successful
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        echo '<script>alert("Successfully logged in")</script>';
        echo("<script>location.href = 'HaveCatDog.php';</script>");
    }
}

// if the username and password don't match, show an error message
echo '<script>alert("Invalid Username/Password. Please try again")</script>';
echo("<script>location.href = 'login_createAcc.php';</script>");

?>