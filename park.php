<?php 
session_start();
    require './config.php';
    if (isset($_POST["book"])) {    
        $plateNum = filter_var($_POST["plateNum"],FILTER_SANITIZE_STRING);
        $vModel = filter_var($_POST["vModel"],FILTER_SANITIZE_STRING);
        $pDate = $_POST["pDate"];
        $pStartTime = $_POST["pStartTime"];
        $pEndTime = $_POST["pEndTime"];
        
        $pStartTime=date('H:i:s',strtotime($pStartTime));
        $pEndTime=date('H:i:s',strtotime($pEndTime));
        

            $sqlInsert = "INSERT INTO parking_spots (spot, dstart, tstart, tend, model, plate, unit)
            VALUES (null, '$pDate', '$pStartTime', '$pEndTime', '$vModel', '$plateNum', {$_SESSION['unit']})";



            if ($conn->query($sqlInsert) === TRUE) {

                $_SESSION['parkDone']="Your guest parking reguest has been sent! Your spot is ";
                header ("Location: parking.php");
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
    }
?>