<?php 
    require '../processors/profile.php';
?>
<nav class="top-bar navbar fixed-top navbar-expanded">
        <div class="container-fluid">
            <div class="navbar-brand">
                <h3 class="text-dark text-center">logo</h3>
            </div>
            <div class="d-flex">
                <h6><i class="fa-solid fa-user"></i> <b><?php echo $rowPatient['PatientFname']?> <?php echo $rowPatient['PatientLname'] ?>  </b> <i class="fa-solid fa-caret-down"></i></h6>
            </div>
        </div>
    </nav>
    <!-- the top bar of the dashboard ends  -->
    <div class="d-flex">
        <!-- the side nav of the dashboard -->
        <div class="side-nav active">
            <div class="profile">
                <div class="text-center mt-5">
                    <img src="../uploads/<?php echo $rowPatient['patientImage']?>" alt="" class="mt-4">
                    <h6 class="text-center "><b><?php echo $rowPatient['PatientFname']?> <?php echo $rowPatient['PatientLname'] ?></b></h6>
                    <p class="text-center">patient</p>
                </div>
            </div>
            <ul class="d-block mx-3 list-unstyled">
                <li><a href="../public/dashboard.php?patientId=<?php echo $rowPatient['patientId']?>"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="../public/appointmentList.php?patientId=<?php echo $rowPatient['patientId']?>"><i class="fa-regular fa-clipboard"></i> Appointment</a></li>
                <li><a href="../public/history.php?patientId=<?php echo $rowPatient['patientId']?>"><i class="fa-solid fa-book-medical"></i> Medical records</a></li>
                <li><a href=""><i class="fa-regular fa-credit-card"></i> Payments</a></li>
                <li><a href="../public/profile.php?patientId=<?php echo $rowPatient['patientId'] ?>"><i class="fa-solid fa-id-badge"></i>Profile</a></li>
                <li><a href="../processors/logout.php"><i class="fa-solid fa-power-off"></i> log out</a></li>
            </ul>
        </div>
        <!-- the side nav of the dashboard ends -->

        <!-- the mini  side nav of the dashboard  -->

        <div class="mini-side-nav">
            <div class="mini-profile mt-5 text-center">
                <img src="../uploads/<?php echo $rowPatient['patientImage']?>" alt="" class="mt-5">
                <h6><?php echo $rowPatient['PatientFname']?></h6>
            </div>
            <ul class="d-block mt-3 mx-4 list-unstyled">
                <li><a href="../public/dashboard.php"><i class="fa-solid fa-house"></i></a></li>
                <li><a href=""><i class="fa-regular fa-clipboard"></i></a></li>

                <li><a href=""><i class="fa-solid fa-book-medical"></i></a></li>

                <li><a href=""><i class="fa-regular fa-credit-card"></i></a></li>

                <li><a href="../public/profile.php"><i class="fa-solid fa-id-badge"></i></a></li>


                <li><a href="../processors/logout.php"><i class="fa-solid fa-power-off"></i></a></li>
            </ul>
        </div>
        <!-- the mini  side nav of the dashboard ends -->
         