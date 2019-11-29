<?php 
session_start();
    $activePage = "login";
    require "./header.php";
    include "./sidebar.php";
    
    include "./navbar.php"; 
?>
<div class="content">
    <div class="container-fluid mx-auto">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Login</h4>
                        <p class="card-category">Please login to your profile</p>
                    </div>
                    <div class="card-body">
                        <form action="./auth.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="inputEmail">Email address</label>
                                    <input type="email" name="logemail" class="form-control" for="inputEmail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="inputPassword">Password</label>
                                    <input type="password" name="logpassword" class="form-control" id="inputPassword">
                                </div>
                            </div>
                        </div>
                            <!-- <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">Remember me
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div> -->
                            <input type="submit" name="login" class="btn btn-info pull-right" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($_SESSION["logErr"])) : ?>
            <div class="alert alert-danger" role="alert" id="regerror">
                <?php echo $_SESSION["logErr"]; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php 
    include "./footer.php";
?>