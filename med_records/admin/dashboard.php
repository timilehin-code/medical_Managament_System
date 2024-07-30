<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../includes/adminDashNav.php';
require '../processors/stats.php';

?>

<body style="overflow-x: hidden;">
    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Dashboard</h3>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="text-center">
                        <i class="fa-solid fa-user-tie fa-xl"></i>
                        <h3>Manage Admins</h3>
                        <p>total Users : <?php echo  $numbAdmin ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="text-center">
                        <i class="fa-solid fa-user-doctor fa-xl"></i>
                        <h3>Manage Doctors</h3>
                        <p>total Users : <?php echo  $numbDoc ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="text-center">
                        <i class="fa-solid fa-hospital-user fa-xl"></i>
                        <h3>Manage Patient</h3>
                        <p>total Users : <?php echo  $numbPatient ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="stats-card">
                    <div class="text-center">
                        <i class="fa-solid fa-hospital-user fa-xl"></i>
                        <h3> Appointments</h3>
                        <p>total : <?php echo  $numbApp ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>