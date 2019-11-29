<?php 
session_start();
    $activePage = "mrequest";
    require "./header.php";
    include "./sidebar.php";
    
    include "./navbar.php"; 
    require "./config.php";

    $sqlOrder = "SELECT * FROM work_orders ORDER BY order_no DESC";
      
    if ($resultOrder = $conn->query($sqlOrder)) {

        while ($row = $resultOrder->fetch_assoc()) {
           $_SESSION['orderNum'] = $row['order_no'];

        }
    }
    $conn->close();
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Maintanance work order form #<?php echo $_SESSION['orderNum'] + 1; ?></h4>
                <p class="card-category">To be filled out by Tenant</p>
            </div>
            <div class="card-body">
                <form method="post" action="./workorder.php">
                <div class="row">
                    <div class="col-md-5">
                    <div class="form-group">
                        <label class="bmd-label-floating" for="suiteNum">Suite <?php echo $_SESSION['unit']; ?></label>
                        <input type="text" name="suiteNum" id="suiteNum" class="form-control" disabled>
                        <small>(autocomplete)</small>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <label for="mDate">Date</label>
                        <input type="date" class="form-control" id="mDate" name="mDate" required>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="mTime">Time</label>
                        <input type="time" min="09:00" max="17:00" class="form-control" id="mTime" name="mTime" required>
                        <small id="timeHelp" class="form-text text-muted">Working hours are 8am to 5pm.</small>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Repair(s) requested</label>
                        <div class="form-group">
                        <label class="bmd-label-floating">My faucet is leaking 10,000 drops a night.</label>
                        <textarea class="form-control" rows="5" name="repairReq" required></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-2">
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
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating" for="petType">Type? </label>
                            <input type="text" class="form-control" name="petType" id="petType" disabled>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating" for="tName"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></label>
                            <input type="text" class="form-control" name="tName" id="tName" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating" for="tPhone">Phone</label>
                            <input type="tel" class="form-control" name="tPhone" id="tPhone" required>
                            <small>required</small>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary pull-right" value="Send" name="sendOrder">
                <div class="clearfix"></div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
<?php 
    include "./footer.php";
?>