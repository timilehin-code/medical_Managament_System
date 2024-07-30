<?php 
require'../connection/conx.php';
require '../processors/doctorLog.php';
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- ===responsive css=== -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>Login</title>
</head>

<body>
    <div class="d-flex home" id="SignIn">
        <div class="bg-login">
            <h1 class="text-dark mt-5 ">Medical Portal</h1>
        </div>
        <div class="login-forms">
            <div class="container">
                <div class="heading">
                    <h2 class=" mt-5 ">Welcome</h1>
                        <h5 class="need">Need an account ? <span><a href="#registration">Sign Up</a></span></h5>
                </div>
                <div class="d-flex sub mt-5">
                </div>
                <div class="px-5 form-section">
                    <!-- admin login -->
                    <div class="">
                        <!-- admin -->
                        <!-- DOCTOR -->
                    <form action="" class="active mt-3" method="POST">

                            <h4 class="text-center">Doctor</h4>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="w-100 p-2 mt-1" placeholder="Email">
                                <label class="form-label">Email</label>
                                <p class="text-danger msg"></p>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="w-100 p-2 mt-1"
                                    placeholder="Password">
                                <label class="form-label">Password</label>
                                <p class="text-danger msg2"></p>
                            </div>
                            <div class="save d-flex">
                                <div class="d-flex">
                                    <input type="checkbox" name="" id="" class="mt-1">
                                    <h6 class="mx-2">Remember me</h6>
                                </div>
                            </div>
                            <button type="submit" name="log" class="btn login w-100 mt-3">Log In</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>