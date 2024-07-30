<?php
require '../includes/header.php';
require '../processors/doctorsRegistration.php';
?>

<body>
    <div class="container">
        <div class="form-bg mt-5  w-50" style="margin-left:25%;">
            <div class="text-center">
                <h2>Doctors Registration</h2>
            </div>
            <form action="" method="post">
                <?php
                echo $msg;
                ?>
                <input type="text" name="doctorFname" id="" class="w-100 form-control mt-2" placeholder="First Name">

                <input type="text" name="doctorLname" id="" class="w-100 form-control mt-2" placeholder="Last Name">
                <select name="doctorSpecialization" id="" class="W-100 form-control mt-2">
                    <option value="" disabled selected="true"> Doctor's Specialization</option>
                    <option value="Dental Care">Dental Care</option>
                    <option value="General Surgery">General Surgery</option>
                    <option value="Optician">Optician</option>
                    <option value="Darmatologist">Darmatologist</option>
                    <option value="Gynecologyist">Gynecologyist</option>
                    <option value="Anesthesia">Anesthesia</option>
                    <option value="Dermatology">Dermatology</option>
                </select>
                <input type="email" name="doctorEmail" id="" class="mt-3 w-100 form-control " placeholder="Email">
                <input type="text" name="doctorPnumber" id="" class="mt-3 w-100 form-control "
                    placeholder="Phone Number">
                <input type="password" name="doctorPassword" id="" class="mt-3 w-100 form-control "
                    placeholder="Password">
                <input type="Password" name="ConfirmPassword" id="" class="mt-3 w-100 form-control "
                    placeholder="Confirm Password">
                <div class="form-section">
                    <button type="submit" class="btn btn-success login mt-3 w-100" name="reg">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>