<?php 
    session_start();
    if ( isset( $_POST["login"] ) ) {
        $email = strtolower(trim($_POST["logemail"] , " "));
        $pass = $_POST["logpassword"];

        require './config.php';

        $sqlSelect = "SELECT * FROM users where email = '$email'";
        $result = $conn->query($sqlSelect);
        if ($result->num_rows == 0) {
                $_SESSION["logErr"] = "Your email is wrong!";
                header("Location: login.php");
                
        } else {
            while($row = $result->fetch_assoc()) {
                $_SESSION["fname"] = $row["fname"];
                $_SESSION["lname"] = $row["lname"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["phone"] = $row["phone"];
                $_SESSION["unit"] = $row["unit"];
                $_SESSION["user_id"] = $row["id"];
                $passFromDb = $row["password"];
            }
            if (password_verify($pass, $passFromDb)){
                header("Location: dashboard.php");
            }
            else {
                $_SESSION["logErr"] = "Your password is wrong!";
                header("Location: login.php");
            }
        }
        $conn->close();
    }
?>

