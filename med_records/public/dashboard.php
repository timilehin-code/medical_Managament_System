<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- ===responsive css=== -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>Pateint Dasboard</title>
</head>

<body style="overflow-x: hidden;">
    <?php
    session_start();
    if (isset($_SESSION['Login'])) {
    } else {
        header('Location:login.php');
    }
    include '../includes/dashboardNav.php';
    ?>

    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Dashboard</h3>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="tips mt-2">
                    <div class="d-flex">
                        <img src="../assets/img/welcome.png" alt="">
                        <div class="d-block mx-5">
                            <h4><b>Welcome back</b></h4>
                            <h2><b>
                                    <?php echo $rowPatient['PatientFname'] ?>
                                    <?php echo $rowPatient['PatientLname'] ?>
                                </b></h2>
                            <p>To make sure you have sufficient levels of nutrients, taking a daily multivitamin
                                supplement is a good idea,
                                especially when you do not have a variety of vegetables and fruits at home. Many
                                micronutrients are vital to your
                                immune system, including vitamins A, B6, B12, C, D, and E, as well as zinc, iron,
                                copper, selenium, and magnesium.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vitals mx-5 mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="vitals-card">
                        <div class="d-flex">
                            <img src="../assets/img/blood-pressure.png" alt="">
                            <div class="d-block">
                                <h5 class="text-warning mx-5 text-right"><b>Blood Pressure</b></h5>
                                <h5 class="mx-5 text-right text-primary"><b>110/70</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vitals-card">
                        <div class="d-flex">
                            <img src="../assets/img/heart-rate.png" alt="">
                            <div class="d-block">
                                <h5 class="text-warning mx-5 text-right"><b>Pluse rate</b></h5>
                                <h5 class="mx-5 text-right text-primary"><b>110/70</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vitals-card">
                        <div class="d-flex">
                            <img src="../assets/img/glucose.png" alt="">
                            <div class="d-block">
                                <h5 class="text-warning mx-5 text-right"><b>Glucose Level</b></h5>
                                <h5 class="mx-5 text-right text-primary"><b>88-75</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vitals-card">
                        <div class="d-flex">
                            <img src="../assets/img/scale.png" alt="">
                            <div class="d-block">
                                <h5 class="text-warning mx-5 text-right"><b>Current Weight</b></h5>
                                <h5 class="mx-5 text-right text-primary"><b>60kg</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- the main  part of the dashboard ends -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>