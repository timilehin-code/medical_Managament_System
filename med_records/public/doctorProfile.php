<?php
require '../includes/header.php';
require '../includes/doctorDashNav.php';
require '../processors/doctorProfile.php';

?>

<body style="overflow-x: hidden;">
    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Profile</h3>
        </div>
        <div class="profile-card mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profie">
                            <div class="d-flex">
                                <div class="d-block">
                                    <img src="<?php echo $rowDoctor['docImage']?>" class="rounded-circle mt-2" alt="">
                                    <h5><?php echo $rowDoctor['doctorFname'] ?> <?php echo $rowDoctor['doctorLname'] ?> </h5>
                                    <p class="text-center">Doctor</p>
                                </div>
                                <div class="d-block mx-5">
                                    <div class="d-flex">
                                        <h1>Details</h1>
                                        <a href="updateDoc.php?doctorId=<?php echo $rowDoctor['doctorId'] ?>" class="edit-btn mt-1"><button
                                                class=" btn btn-success">Update</button></a>
                                    </div>
                                    <ul class="list-unstyled mt-5">
                                        <li class="">
                                            <p><b>Email :</b> <?php echo $rowDoctor['doctorEmail'] ?></p>
                                        </li>
                                        <li class="">
                                            <p><b>Phone Number :</b> <?php echo $rowDoctor['doctorPnumber'] ?></p>
                                        </li>
                                        <!-- <li class="">
                                            <p><b>matric Number :</b> </p>
                                        </li> -->
                                        <li class="">
                                            <p><b> Specialization :</b> <?php echo $rowDoctor['doctorSpecialization'] ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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