<?php
session_start();
require './config.php';
    
    if (isset($_POST["register"])) {    
        $_SESSION['fname'] = filter_var(trim( $_POST["fname"], " "),FILTER_SANITIZE_STRING);
        $_SESSION['lname'] = filter_var(trim( $_POST["lname"], " "),FILTER_SANITIZE_STRING);
        $_SESSION['email'] = strtolower(trim( $_POST["email"], " "));
        $_SESSION['password'] = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $_SESSION['unit'] = filter_var(trim($_POST["unit"], " "),FILTER_SANITIZE_STRING);

        $sqlSelect = "SELECT * FROM users where email = '{$_SESSION["email"]}'";

        $result = $conn->query($sqlSelect);
        if ($result->num_rows > 0) {
            $_SESSION["regErr"] = "Email already exists. Please try a different email address.";
            header("Location: register.php");
        } else {
            $sqlInsert = "INSERT INTO users (id, email, password, fname, lname, unit)
            VALUES (null, '{$_SESSION["email"]}', '{$_SESSION["password"]}', '{$_SESSION["fname"]}', '{$_SESSION["lname"]}', {$_SESSION["unit"]})";

            if ($conn->query($sqlInsert) === TRUE) {
                header("Location: dashboard.php");
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
    }
    ?>