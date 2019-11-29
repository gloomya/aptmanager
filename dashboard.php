<?php 
    session_start();
    $activePage = "dashboard";
    require "./header.php";
    include "./sidebar.php";

    include "./navbar.php"; 

    require "./config.php";

    if($_SESSION["unit"] >= 200) {
        include "./user_dashboard.php";
    } else {
        include "./staff_dashboard.php";
    }

    $conn->close();
    include "./footer.php";
?>