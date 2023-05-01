<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // check if the form is submitted

    // get the form data
    $userID = $_SESSION['username'];
    $data1 = $_POST['pet'];
    $data2 = $_POST['breed'];
    $data3 = $_POST['age'];
    $data4 = $_POST['gender'];
    $data5 = $_POST['get_along_dog'];
    $data6 = $_POST['get_along_cat'];
    $data7 = $_POST['get_along'];
    $data8 = $_POST['description'];
    $data9 = $_POST['name'];
    $data10 = $_POST['email'];

    // read the last serial number from the file
    $filename = 'serialNumber.txt';
    $file = fopen($filename, 'r');
    $serialNumber = fgets($file); 
    fclose($file);
    $serialNumber++;
    $file = fopen($filename, 'w');
    fwrite($file, $serialNumber); 
    fclose($file);

    $dataString = "$serialNumber:$userID:$data1:$data2:$data3:$data4:$data5:$data6:$data7:$data8:$data9:$data10:";

    $filename = 'petData.txt';
    $file = fopen($filename, 'a');
    fwrite($file, $dataString . PHP_EOL);
    fclose($file);

    echo '<script>alert("Pet Successfully Registered.")</script>';
    echo("<script>location.href = 'HaveCatDog.php';</script>");;
    exit;
}
?>
