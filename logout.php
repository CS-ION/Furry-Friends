<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    session_destroy();
    echo '<script>alert("Successfully logged out")</script>';
    echo("<script>location.href = 'index.php';</script>");
} else {
    echo '<script>alert("You are not logged in. Please log in first.")</script>';
    echo("<script>location.href = 'index.php';</script>");
} 

?>