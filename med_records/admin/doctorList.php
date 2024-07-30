<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../includes/adminDashNav.php';
require '../processors/doctorsList.php';
$counter = 1;
?>

<body style="overflow-x: hidden;">
    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light"></i>
            <h3 class="text-light mx-3">Doctors</h3>
        </div>
        <div class="form-section">
            <a href="doctorRegistration.php" class="mt-5"><button class="btn btn-success ">+ Add Doctor</button></a>
        </div>
        <div class="text-center">
            <h2>Doctors List</h2>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Specialization</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($resultDoctors->num_rows > 0) {
                        while ($rowDoctor = $resultDoctors->fetch_assoc()) {
                            ?>
                    <tr>
                        <th scope="row">
                            <?php echo $counter++ ?>
                        </th>
                        <td>
                            <?php echo $rowDoctor['doctorFname'] ?>
                        </td>
                        <td>
                            <?php echo $rowDoctor['doctorLname'] ?>
                        </td>
                        <td>
                            <?php echo $rowDoctor['doctorSpecialization'] ?>
                        </td>
                        <td>
                            <a href="../public/doctorProfile.php?doctorId=<?php echo $rowDoctor['doctorId'] ?>"
                                class="text-dark"><i class="fa-solid fa-eye"></i> View more</a>
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