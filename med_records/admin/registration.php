<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../processors/AdminReg.php';

?>

<body>
    <div class="container">
        <div class="form-bg mt-5  w-50" style="margin-left:25%;">
            <div class="text-center">
                <h2>Registration</h2>
            </div>
            <form action="" method="post">
                <?php 
                    echo $msg;
                ?>
                <input type="text" name="uName" id="" class="w-100 form-control mt-2" placeholder="User Name">
                <input type="email" name="email" id="" class="mt-3 w-100 form-control " placeholder="Email">
                <input type="Password" name="password" id="" class="mt-3 w-100 form-control " placeholder="Password">
                <input type="Password" name="ConfirmPassword" id="" class="mt-3 w-100 form-control "
                    placeholder="Confirm Password">
                <div class="form-section">
                    <button type="submit" class="btn btn-success login mt-3 w-100" name="reg">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>