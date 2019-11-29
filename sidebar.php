<div class="sidebar" data-color="azure" data-background-color="white" data-image="./assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">   
        <img src="./assets/img/logo.svg" width="60" alt="Logo"><br>    
          Apartment Management
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <?php if(!isset($_SESSION['email'])): ?>
        <li class="nav-item <?php if ($activePage == "login"){
            echo "active";
            }?>">
            <a class="nav-link" href="./login.php">
              <i class="material-icons">input</i>
              <p>Login</p>
            </a>
          </li>
          <li class="nav-item <?php if ($activePage == "register"){
            echo "active";
            }?>">
            <a class="nav-link" href="./register.php">
              <i class="material-icons">person</i>
              <p>Register</p>
            </a>
          </li>
          <?php else: ?>
          <li class="nav-item <?php if ($activePage == "dashboard"){
            echo "active";
            }?>">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if ($activePage == "mrequest"){
            echo "active";
            }?>">
            <a class="nav-link" href="./mrequest.php">
              <i class="material-icons">insert_comment</i>
              <p>Maintenance request</p>
            </a>
          </li>
          <li class="nav-item <?php if ($activePage == "parking"){
            echo "active";
            }?>">
            <a class="nav-link" href="./parking.php">
              <i class="material-icons">local_parking</i>
              <p>Parking manager</p>
            </a>
          </li>
          <?php endif; ?>
          <li class="nav-item <?php if ($activePage == "support"){
            echo "active";
            }?>">
            <a class="nav-link" href="./support.php">
              <i class="material-icons">live_help</i>
              <p>Technical support</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel"> 