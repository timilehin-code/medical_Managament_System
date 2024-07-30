<?php
require 'connection/conx.php';
require 'processors/registration.php';
require 'processors/login.php';
require 'processors/doctorLog.php';
?>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ===responsive css=== -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Home</title>
</head>

<body>
    <!-- registration page -->
    <div class="d-flex home" id="registration">
        <div class="bg-registration">
            <h1 class="text-dark mt-5">Patient Registration</h1>
        </div>
        <div class="login-forms">
            <div class="container">
                <div class="heading">
                    <h3 class="mt-5">Sign Up</h3>
                    <h5>Enter details to create your account</h5>
                    <?php echo  $alert;
                    ?>
                </div>
                <div class="form-section">
                    <form action="" class="" method="POST">
                     
                        <div class="form-group">
                            <input type="text" name="PatientFname" id="email" class="w-100 p-2 mt-3"
                                placeholder="First name">
                            <label class="form-label">First name </label>
                            <p class="text-danger msg"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" name="PatientEmail" id="email" class="w-100 p-2" placeholder="Email">
                            <label class="form-label">Email</label>
                            <p class="text-danger msg"></p>
                        </div>
                        <div class="form-group">
                            <input type="password" name="PatientPassword" id="password" class="w-100 p-2 "
                                placeholder="Password">
                            <label class="form-label">Password</label>
                            <p class="text-danger msg2"></p>
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmPassword" id="password" class="w-100 p-2"
                                placeholder="ConfirmPassword">
                            <label class="form-label">Confirm Password</label>
                            <p class="text-danger msg2"></p>
                        </div>
                        <div class="heading">
                            <p class="need">all ready registered ? <span><a href="#SignIn">Sign In</a></span></p>
                        </div>
                        <button type="submit" name="register" class="btn login w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>