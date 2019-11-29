<?php 
    session_start();
    $activePage = "index";
    require "./header.php";
    include "./sidebar.php";
    include "./navbar.php"; 
?>

<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose">
                        <h3 class="card-title">425 Bloor St East</h3>
                        <h4 class="card-title">Welcome to our community!</h4>
                    </div>
                    <div class="card-body">
                        
                        
                        <p>Please feel free to register new tenant account to be able to submit maintenance work order, book guest parking, update your profile, and get community news every week!</p>
                        <p>If you already have an account please go to the login page, log in and enjoy!</p>
                        <h4>About the community</h4>
                        <p>As one of Canada's largest residential landlords, CAPREIT is a growth-oriented investment trust managing 63,452 suites and sites across Canada, the Netherlands and Ireland. It owns, directly in Canada and indirectly in Netherlands through its investment in ERES, a total of 59,908 residential units, comprising 48,231 residential suites and 72 manufactured home communities comprising 11,677 sites located in and near major urban centres.</p>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>
<?php 
    include "./footer.php";
?>