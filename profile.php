<?php 
session_start();
    $activePage = "index";
    require "./header.php";
    include "./sidebar.php";
    include "./navbar.php";

    require './config.php';
    
    //getting data from db

    if (!isset($_SESSION["email"])){
        header("location: index.php");
    }
          
        $sqlUser = "SELECT * FROM users WHERE users.id = {$_SESSION["user_id"]}";
        
        if ($resultUser = $conn->query($sqlUser)) {

            while ($row = $resultUser->fetch_assoc()) {
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['unit'] = $row['unit'];
            $_SESSION['phone'] = $row['phone'];

            }
        }
    
    $conn->close();
?>

<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                <form method="post" action="./edit.php">
                <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="bmd-label-floating">Suite <?php echo $_SESSION["unit"];?></label>
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $_SESSION["email"];?></label>
                    <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating" for="phone">
                            <?php 
                            if(isset($_SESSION["phone"])) {
                                echo $_SESSION["phone"];
                            } else {
                                echo "Phone number";
                            }
                            
                            
                            ?>   
                            </label>
                            <input type="tel" class="form-control" name="phone" id="phone" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating"><?php echo $_SESSION["fname"];?></label>
                            <input type="text" class="form-control" name="fname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating"><?php echo $_SESSION["lname"];?></label>
                            <input type="text" class="form-control" name="lname" required>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <p>Do you have any pets? </p>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="petYesNo" id="petYes" value="Y"> Yes
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="petYesNo" id="petNo" value="N"> No
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating" for="petType">Type? </label>
                            <input type="text" class="form-control" name="petType" id="petType">
                        </div>
                    </div>
                </div> -->
                <input type="submit" class="btn btn-primary pull-right" name="update" value="Update Profile">
                <div class="clearfix"></div>
                </form>
                </div>
                </div>
                <?php if(isset($_SESSION["updateErr"])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["updateErr"]; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION["updateDone"])) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION["updateDone"]; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-body">
                        <h6 class="card-category text-gray">
                        <?php if ($_SESSION["unit"] >= 200){
                                echo "Tenant";
                            } else echo "Staff";
                            ?>
                        </h6>
                        <h4 class="card-title"><?php echo $_SESSION["fname"];?> <?php echo $_SESSION["lname"];?></h4>
                        <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="./logout.php" class="btn btn-danger btn-round">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include "./footer.php";
?>