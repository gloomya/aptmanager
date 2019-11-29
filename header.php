<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php switch ($activePage) { 
            case "index": echo "Apartment Management - Home";
            break;
            case "login": echo "Login – Apartment Management";
            break;
            case "register": echo "Register – Apartment Management";
            break;
            case "dashboard": echo "Dashboard – Apartment Management";
            break;
            case "mrequest": echo "Maintenance Request Form – Apartment Management";
            break;
            case "parking": echo "Guest Parking Form – Apartment Management";
            break;
            case "support": echo "Send Message to Tech Support – Apartment Management";
            break;
            default: echo "Apartment Management System";
        } 
        ?>
    </title>
    <meta name="description" content="Apartment Managment System and Dashboard" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Material Dashboard CSS -->
    <link href="./assets/css/material-dashboard.min.css?v=2.1.1" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
     <!--   Core JS Files   -->
     <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="wrapper ">
