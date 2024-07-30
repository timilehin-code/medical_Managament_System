<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>personal profile</title>
</head>

<body style="overflow-x: hidden;">
    <?php
    include '../includes/dashboardNav.php';
    require '../processors/profile.php';
    session_start();
    if (isset($_SESSION['Login'])) {
    } else {
        header('location:../index.php');
    }
    ?>
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
                                    <img src="../uploads/<?php echo $rowPatient['patientImage']?>" class="rounded-circle" alt="">
                                    <h5><?php echo $rowPatient['PatientFname']?> <?php echo $rowPatient['PatientLname'] ?> </h5>
                                    <p class="text-center">Student</p>
                                </div>
                                <div class="d-block mx-5">
                                    <div class="d-flex">
                                        <h1>Details</h1>
                                        <a href="updateProfile.php?patientId=<?php echo $rowPatient['patientId']?>" class="edit-btn mt-1"><button
                                                class=" btn btn-success">Update</button></a>
                                    </div>
                                    <ul class="list-unstyled mt-5">
                                        <li class="">
                                            <p><b>Email :</b> <?php echo $rowPatient['PatientEmail'] ?></p>
                                        </li>
                                        <li class="">
                                            <p><b>Phone Number :</b> <?php echo $rowPatient['PatientPnumber'] ?></p>
                                        </li>
                                        <li class="">
                                            <p><b>matric Number :</b> <?php echo $rowPatient['matricNumber'] ?></p>
                                        </li>
                                        <li class="">
                                            <p><b> Deprtment :</b> <?php echo $rowPatient['DepartmentName'] ?></p>
                                        </li>
                                        <li class="">
                                            <p><b> Adress :</b> <?php echo $rowPatient['PatientAdress'] ?></p>
                                        </li>
                                        <li class="">
                                            <p><b> Date of Birth :</b> <?php echo $rowPatient['PatientDob'] ?></p>
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
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>