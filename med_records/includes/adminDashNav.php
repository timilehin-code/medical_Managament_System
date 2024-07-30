<?php 
    // require '../processors/profile.php';
?>
<nav class="top-bar navbar fixed-top navbar-expanded">
        <div class="container-fluid">
            <div class="navbar-brand">
                <h3 class="text-dark text-center">logo</h3>
            </div>
            <div class="d-flex">
                <h6><i class="fa-solid fa-user"></i> <b>  </b> <i class="fa-solid fa-caret-down"></i></h6>
            </div>
        </div>
    </nav>
    <!-- the top bar of the dashboard ends  -->
    <div class="d-flex">
        <!-- the side nav of the dashboard -->
        <div class="side-nav active">
            <div class="profile" style="margin-top: 75px;">
                <div class="text-center mt-5">
                    <!-- <img src="../uploads/" alt="" class="mt-4"> -->
                    <h6 class="text-center "><b>John Doe</b></h6>
                    <p class="text-center">Admin</p>
                </div>
            </div>
            <ul class="d-block mt-1 mx-3 list-unstyled">
                <li><a href="../admin/dashboard.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="patientList.php"><i class="fa-regular fa-clipboard"></i> Patients</a></li>
                <li><a href="doctorList.php"><i class="fa-solid fa-book-medical"></i>Doctors</a></li>
                <li><a href="appointments.php"><i class="fa-regular fa-credit-card"></i> Appointment</a></li>
                <li><a href=""><i class="fa-solid fa-id-badge"></i>Profile</a></li>
                <li><a href="../processors/logoutA.php"><i class="fa-solid fa-power-off"></i> log out</a></li>
            </ul>
        </div>
        <!-- the side nav of the dashboard ends -->

        <!-- the mini  side nav of the dashboard  -->

        <div class="mini-side-nav" >
            <div class="mini-profile mt-5 text-center">
                <img</h6>
            </div>
            <ul class="d-block  mx-4 list-unstyled" style="margin-top: 75px;">
                <li><a href="../public/dashboard.php"><i class="fa-solid fa-house"></i></a></li>
                <li><a href=""><i class="fa-regular fa-clipboard"></i></a></li>

                <li><a href=""><i class="fa-solid fa-book-medical"></i></a></li>

                <li><a href=""><i class="fa-regular fa-credit-card"></i></a></li>

                <li><a href="../public/profile.php"><i class="fa-solid fa-id-badge"></i></a></li>


                <li><a href="../processors/logoutx.php"><i class="fa-solid fa-power-off"></i></a></li>
            </ul>
        </div>
        <!-- the mini  side nav of the dashboard ends -->