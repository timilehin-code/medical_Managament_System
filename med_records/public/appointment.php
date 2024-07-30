<title>Appointment Form</title>
<?php
require '../includes/header.php';
require '../processors/appointment.php';

?>

<body>
    <div class="container">
        <div class="form-bg mt-5 w-50" style="margin-left: 25%;">
            <div class="text-center">
                <h3>Appointment Form</h3>
            </div>
            <form action="" method="POST"  class="mt-4">
                <?php 
                    echo $msg;
                ?>
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
                <div class="form-section mt-2">
                    <button type="submit" class="btn btn-success login mt-3 w-100" name="book">Book</button>
                </div>
            </form>

        </div>
    </div>
</body>