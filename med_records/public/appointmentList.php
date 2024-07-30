<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../includes/dashboardNav.php';
require '../processors/AppointmentList.php';
require '../processors/profile.php';

$counter = 1;
?>

<body style="overflow-x: hidden;">
    <!-- APPOINTMENT BOOKED  -->
    <div class="appointment-modal bg-light p-5">
        <i class="fa-solid fa-circle-check text-center"></i>
        <h3 class="text-center mt-3">Appointment booked.</h3>
    </div>
    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Appointments</h3>
        </div>
        <div class="text-center mt-5">

            <h2>Appointment List</h2>

        </div>
        <a href="../processors/appointment.php?patientId=<?php echo $rowPatient['patientId'] ?>"
            class="btn btn-success book " target="">Book an
            Appointment</a>

        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">doctor</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action </th>

                    </tr>
                </thead>
                <?php
                if ($queryApp->num_rows > 0) {
                    while ($rowApp = $queryApp->fetch_assoc()) {
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <?php echo $counter++ ?>
                                </th>
                                <td>
                                    Dr. <?php echo $rowApp['doctorFname'] ?>
                                </td>
                                <td>
                                    <?php echo $rowApp['appointmentDate'] ?>
                                </td>
                                <td>
                                    <?php echo $rowApp['appointmentTime'] ?>
                                </td>
                                <td>
                                    <?php echo $rowApp['appointmentStatus'] ?>
                                </td>
                                <td>
                                    <p>action</p>
                                    <ul class="d-block bg-light  list-unstyled  p-3">
                                        <li><a href="../processors/cancelAppointment.php?appointmentId=<?php echo $rowApp['appointmentId'] ?>&&patientId=<?php echo $rowPatient['patientId'] ?>"
                                                class="text-decoration-none text-danger">Cancel</a></li>
                                        <li><a href="../processors/rescheduleAppointement.php?appointmentId=<?php echo $rowApp['appointmentId'] ?>&&patientId=<?php echo $rowPatient['patientId'] ?>"
                                                class="text-decoration-none text-warning">Resechedule</a></li>
                                    </ul>
                                </td>
                            </tr>


                        </tbody>
                    <?php
                    }
                }
                ?>
            </table>

        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>