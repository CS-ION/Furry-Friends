<?php

// get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

// validate username
if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    echo '<script>alert("Invalid Username. Please try again.")</script>';
    echo("<script>location.href = 'login_createAcc.php';</script>");
    exit;
}

// validate password
if (strlen($password) < 4 || !preg_match('/^[a-zA-Z0-9]+$/', $password) || 
    !preg_match('/[a-zA-Z]/', $password) || !preg_match('/[0-9]/', $password) || !($password===$confirm)) {
    echo '<script>alert("Invalid Password. Please try again.")</script>';
    echo("<script>location.href = 'login_createAcc.php';</script>");
    exit;
}

// check if the username already exists in the file
$users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($users as $user) {
    list($stored_username, $stored_password) = explode(':', $user);
    if ($username === $stored_username) {
        echo '<script>alert("Username already exists. Please try again.")</script>';
        echo("<script>location.href = 'login_createAcc.php';</script>");
        exit;
    }
}

// if the username doesn't exist and the password is valid, add it to the file
$new_user = $username . ':' . $password . PHP_EOL; // add a new line after each user
file_put_contents('users.txt', $new_user, FILE_APPEND);

echo '<script>alert("Account created successfully. Log in to access your account.")</script>';
echo("<script>location.href = 'login_createAcc.php';</script>");

?>
