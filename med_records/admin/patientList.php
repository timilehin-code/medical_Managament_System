<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../includes/adminDashNav.php';
require '../processors/patientList.php';

$counter = 1;
?>

<body style="overflow-x: hidden;">
    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Patients</h3>
        </div>
        <div class="text-center mt-5">
            <h2>Patient List</h2>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Department</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($resultPatient->num_rows > 0) {
                        while ($rowPatient = $resultPatient->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $counter++ ?></th>
                                <td><?php  echo $rowPatient['PatientFname'] ?> <?php  echo $rowPatient['PatientLname'] ?></td>
                                <td>Student</td>
                                <td><?php  echo $rowPatient['DepartmentName'] ?></td>
                                <td>
                                    <a href="../public/dashboard.php?patientId=<?php  echo $rowPatient['patientId'] ?>" class="text-dark"><i class="fa-solid fa-eye"></i> View more</a>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>