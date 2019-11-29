<?php
session_start();
require './config.php';

if ( isset( $_POST["update"] ) ) {
    $_SESSION['fname'] = filter_var(trim( $_POST["fname"], " "),FILTER_SANITIZE_STRING);
    $_SESSION['lname'] = filter_var(trim( $_POST["lname"], " "),FILTER_SANITIZE_STRING);
    $_SESSION['email'] = strtolower(trim( $_POST["email"], " "));
    $_SESSION['phone'] = filter_var(trim($_POST["phone"], " "),FILTER_SANITIZE_STRING);
    // $pets = $_POST["petYesNo"];

    
    $sqlUpdateUser = "UPDATE users SET fname = '{$_SESSION['fname']}', lname = '{$_SESSION['lname']}', email = '{$_SESSION['email']}', phone = '{$_SESSION['phone']}' WHERE id = {$_SESSION['user_id']}";

    if ($conn->query($sqlUpdateUser) === TRUE) {
        $_SESSION['updateDone'] = "Profile were updated.";
            header("Location: profile.php");
        } else {
            $_SESSION['updateErr'] = "Error: " . $sql . "<br>" . $conn->error;
            header("Location: profile.php");
        }
    
    }

?>