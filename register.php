<?php 
session_start();
    $activePage = "register";
    require "./header.php";
    include "./sidebar.php";
    include "./navbar.php"; 
?>
    <div class="content">
        <div class="container-fluid mx-auto">
            <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Registration Form</h4>
                  <p class="card-category">Please register to use the service</p>
                </div>
                <div class="card-body">
                <form action="./signup.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="inputEmail">Email address</label>
                                <input type="email" class="form-control" for="inputEmail" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating" for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fist Name</label>
                                <input type="text" class="form-control" name="fname" required>
                                <small>like in lease agreement</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Last Name</label>
                                <input type="text" class="form-control" name="lname" required>
                                <small>like in lease agreement</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-floating">Suite No</label>
                                <input type="number" class="form-control" name="unit" required>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="Y" checked>
                        I would like to receive community news and updates
                        <span class="form-check-sign">
                        <span class="check"></span>
                        </span>
                        </label>
                    </div> -->
                    <input type="submit" class="btn btn-warning pull-right" value="Register" name="register">
                </form>
                </div>
            </div>
            <?php if(isset($_SESSION["regErr"])) : ?>
                <div class="alert alert-danger" role="alert" id="regerror">
                    <?php echo $_SESSION["regErr"]; ?>
                </div>
            <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
<?php 
    include "./footer.php";
?>