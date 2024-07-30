<?php
require '../includes/header.php';
require '../includes/doctorDashNav.php';
require '../connection/conx.php';
require '../processors/doctorAppointment.php';
// require '../processors/appointmentStatus.php';

$counter = 1;
?>


<body style="overflow-x: hidden;">
    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Appointments</h3>
        </div>
        <div class="text-center mt-5">
            <h2>Appointment List</h2>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Appointment day</th>
                        <th scope="col">Appointment Time</th>
                        <th scope="col">Status</th>
                        <th scope="col" colspan="3">Actions </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($queryApp->num_rows > 0) {
                        while ($rowApp = $queryApp->fetch_assoc()) {
                            // $appointmentStatus =  $rowApp['appointmentStatus'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $counter++ ?></th>
                                <td><?php echo $rowApp['PatientFname'] ?>         <?php echo $rowApp['PatientLname'] ?> </td>
                                <td><?php echo $rowApp['appointmentDate'] ?></td>
                                <td><?php echo $rowApp['appointmentTime'] ?></td>
                                <td class="appointStatus "><?php echo $rowApp['appointmentStatus'] ?>
                            </td>

                                <td class="actions"><a href="../public/patientHistory.php?patientId=<?php echo $rowApp['patientId'] ?>&&doctorId=<?php echo $rowApp['doctorId']?>" class="p-2 text-dark actions"><i class="fa-solid fa-book actions"></i ></a>
                                <span class="tooltipText text-center">Medical History</span>
                            </td>
                                  <td class="actions"><a href="../processors/completedAppointment.php?appointmentId=<?php echo $rowApp['appointmentId'] ?>&&doctorId=<?php echo $rowApp['doctorId'] ?>" class="p-2 text-success"><i class="fa-solid fa-check"></i></a>
                                  <span class="tooltipText text-center">completed</span>
                                </td> 
                                   <td class="actions"><a href="../processors/missedAppointment.php?appointmentId=<?php echo $rowApp['appointmentId'] ?>&&doctorId=<?php echo $rowApp['doctorId'] ?>" class="p-2 text-danger"><i class="fa-solid fa-xmark"></i></a>
                                  <span class="tooltipText text-center">Appointment missed</span>
                                </td>
                                
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.js"></script>
</body>