<?php
session_start();
require 'connect.php';

if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $query = "INSERT INTO users (name,surname,email,mobile,location) VALUES ('$name','$surname','$email','$mobile','$location')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION["message"] = "student created successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION["message"] = "student not created successfully";
        header("Location: index.php");
        exit(0);
    }

}