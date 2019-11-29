<?php 
session_start();
    require './config.php';
    if (isset($_POST["sendOrder"])) {    
        $repair_requested = filter_var($_POST["repairReq"],FILTER_SANITIZE_STRING);
        $mdate = $_POST["mDate"];
        $mtime = $_POST["mTime"];
        // $_SESSION['mdate']=$mdate;
        $mtime=date('H:i:s',strtotime($mtime));
        

            $sqlInsert = "INSERT INTO work_orders (order_no, tenant, date, time_requested, repair_requested)
            VALUES (null, {$_SESSION['user_id']}, '$mdate', '$mtime', '$repair_requested')";

            if ($conn->query($sqlInsert) === TRUE) {
                $_SESSION['orderDone']="Your work order has been sent!";
                header ("Location: dashboard.php");
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
    }
?>