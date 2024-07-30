<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../processors/updateAppointments.php';
?>
<div class="container">
    <div class="form-bg mt-5  w-50" style="margin-left:25%;">
        <div class="text-center">
            <h2>Registration</h2>
        </div>
        <form action="" method="post">
            <?php
            // echo $msg;
            ?>
            <select name="doctor" id="" class="W-100 form-control mt-2">
                <option value="" disabled selected="true"> Choose A Doctor</option>
                <option value="<?php echo $rowAppointment['doctorId']?>" selected> Dr. <?php echo $rowAppointment['doctorFname']?> <?php echo $rowAppointment['doctorLname']?></option>
                <?php
                if ($resultDoctors->num_rows > 0) {
                    while ($rowDoctors = $resultDoctors->fetch_assoc()) {
                        ?>             
                <option value="<?php echo $rowDoctors['doctorId']?>"> Dr. <?php echo $rowDoctors['doctorFname']?> <?php echo $rowDoctors['doctorLname']?></option>
                    <?php
                    }
                }
                ?>
            </select>
            <input type="Date" name="appointDate" id="" class="mt-3 w-100 form-control " placeholder="appointDate" value="<?php echo $rowAppointment['appointmentDate']?>">
            <input type="time" name="appointTime" id="" class="mt-3 w-100 form-control "
                placeholder="appoint Time" value="<?php echo $rowAppointment['appointmentTime']?>">
            <div class="form-section">
                <button type="submit" class="btn btn-success login mt-3 w-100" name="reg">Update</button>
            </div>
        </form>
    </div>
</div>