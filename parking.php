<?php 
session_start();
    $activePage = "parking";
    require "./header.php";
    include "./sidebar.php";
    
    include "./navbar.php"; 

    require "./config.php";

    $sqlParkSpot = "SELECT * FROM parking_spots ORDER BY spot DESC";
                        
    if ($resultParkData = $conn->query($sqlParkSpot)) {

        while ($row = $resultParkData->fetch_assoc()) {
            $_SESSION['parkSpot'] = $row['spot'];

        }
    }
    $conn->close();
?>
<div class="content">
  <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
          <div class="card">
          <div class="card-header card-header-rose">
              <h4 class="card-title">Guest Parking Spot Booking</h4>
              <p class="card-category">You need to be logged in to use this feature</p>
          </div>
          <div class="card-body">
              <form method="post" action="./park.php">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="tName"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></label>
                          <input type="text" class="form-control" name="tName" id="tName" disabled>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="suiteNum">Suite <?php echo $_SESSION['unit']; ?></label>
                          <input type="number" class="form-control" id="suiteNum" name="suiteNum" disabled>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="plateNo">Plate No</label>
                          <input type="text" class="form-control" id="plateNum" name="plateNum">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="pDate">Date</label>
                          <input type="date" class="form-control" id="pDate" name="pDate">
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="pStartTime">Time(start)</label>
                          <input type="time" class="form-control" id="pStartTime" name="pStartTime">
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="pEndTime">Time(end)</label>
                          <input type="time" class="form-control" id="pEndTime" name="pEndTime">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="vModel">Model of vehicle</label>
                          <input type="text" class="form-control" id="vModel" name="vModel">
                      </div>
                  </div>
              </div>
              <input type="submit" class="btn btn-rose pull-right" name="book" value="Send">
              <div class="clearfix"></div>
                <?php if(isset($_SESSION["parkDone"])) : ?>
                <div class="alert alert-success" role="alert" id="regerror">
                <?php echo $_SESSION["parkDone"];echo $_SESSION['parkSpot']; ?>
                </div>
                <?php endif; ?>
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