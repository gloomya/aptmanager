<?php 
session_start();
    $activePage = "support";
    require "./header.php";
    include "./sidebar.php";
    
    include "./navbar.php"; 
?>
<div class="content">
  <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
          <div class="card">
          <div class="card-header card-header-primary">
              <h4 class="card-title">Technical Support</h4>
              <p class="card-category">If you expiriencing problems with registration or logging in feel free to fill the form to contact the technical administrator.</p>
          </div>
          <div class="card-body">
              <form method="post" action="./contact.php">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="name">Name</label>
                          <input type="text" class="form-control" name="name" id="name">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="email">
                      </div>
                  </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating" for="subject">Subject</label>
                          <input type="text" class="form-control" id="subject" name="subject">
                      </div>
                  </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Problem</label>
                        <div class="form-group">
                        <label class="bmd-label-floating">Cannot login with my credentials.</label>
                        <textarea class="form-control" rows="5" name="message" required></textarea>
                        </div>
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Send</button>
              <div class="clearfix"></div>
                <?php if(isset($_SESSION["contactDone"])) : ?>
                    <div class="alert alert-success" role="alert" id="contactsuccess">
                    <?php echo $_SESSION["contactDone"]; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION["contactErr"])) : ?>
                    <div class="alert alert-danger" role="alert" id="contacterror">
                    <?php echo $_SESSION["contactErr"]; ?>
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