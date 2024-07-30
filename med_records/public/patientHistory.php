<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../includes/header.php';
require '../processors/profile.php';
require '../includes/doctorDashNav.php';
require '../processors/patientHistory.php';
require '../processors/history.php';
$counter = 1;
?>
<title>Patient Medical Hostory </title>
</head>

<body>
    <!-- history form -->
    <div class="history-bg ">
        <form action="" class="bg-light h-form" method="POST">
            <?php echo $msg ?>
            <div class="form-heading">
                <p class="text-left">Add Medical History</p>
                <i class="fa-solid fa-x mt-1 text-right close"></i>
            </div>
            <hr>
            <div class="data">
                <p>Blood Pressure :</p>
                <input type="text" name="bloodPressure" id="" class="form-control w-100">
            </div>
            <div class="data ">
                <p> Blood Suger :</p>
                <input type="text" name="bloodSuger" id="" class="form-control w-100">
            </div>
            <div class="data">
                <p>weight :</p>
                <input type="text" name="weight" id="" class="form-control w-100">
            </div>
            <div class="data">
                <p>Body Temprature :</p>
                <input type="text" name="bloodTemprature" id="" class="form-control w-100">
            </div>
            <div class="data">
                <p>Notes :</p>
                <textarea name="notes" id="" cols="30" rows="3" class="form-control w-100"></textarea>
            </div>
            <hr>
            <div class="text-right">
                <button type="submit" name="add" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>


    <div class="main-dash mt-5">
        <div class="d-flex mt-4 mx-2">
            <i class="fa-solid fa-bars fa-2xl  mt-3 text-light "></i>
            <h3 class="text-light mx-3">Dashboard</h3>
        </div>
        <div class="text-center mt-3">
            <h3 class="text-center">
                Medical History
            </h3>
        </div>

        <div class="table-responsive">
            <table class="table  w-100">
                <thead>
                    <tr>
                        <th class="text-center border border-dark" colspan="4">Patient Details</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border border-dark">Patient Name</th>
                        <td class="border border-dark"> <?php echo $rowPatient['PatientFname'] ?>
                            <?php echo $rowPatient['PatientLname'] ?>
                        </td>
                        <th class="border border-dark">Patient Email</th>
                        <td class="border border-dark"> <?php echo $rowPatient['PatientEmail'] ?> </td>
                    </tr>
                    <tr>
                        <th class="border border-dark">Patient Gender</th>
                        <td class="border border-dark"> <?php echo $rowPatient['PateintSex'] ?> </td>
                        <th class="border border-dark">Patient Adress</th>
                        <td class="border border-dark"> <?php echo $rowPatient['PatientAdress'] ?> </td>
                    </tr>
                    <tr>
                        <th class="border border-dark">Patient Phone Number</th>
                        <td class="border border-dark"> <?php echo $rowPatient['PatientPnumber'] ?> </td>
                        <th class="border border-dark">Patient DOB</th>
                        <td class="border border-dark"> <?php echo $rowPatient['PatientDob'] ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table  w-100">
                <thead>
                    <tr>
                        <th class=" border border-dark" colspan="8">Medical History</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th class=" border border-dark">S/N</th>
                        <th class=" border border-dark">Blood Pressure</th>
                        <th class=" border border-dark">Weight</th>
                        <th class=" border border-dark">Blood suger</th>
                        <th class=" border border-dark">Body Temprature</th>
                        <th class=" border border-dark">Notes</th>
                        <th class=" border border-dark">Vistation Date</th>
                        <th class=" border border-dark">Vistation Time</th>
                    </tr>
                </thead>
                <?php
                if ($queryHistory->num_rows > 0) {
                    while ($rowHistory = $queryHistory->fetch_assoc()) {
                        ?>
                        <tbody>
                            <tr>
                                <td class="border border-dark"><?php echo $counter++ ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["bloodPressure"] ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["weight"] ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["bloodSuger"] ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["bloodTemprature"] ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["notes"] ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["date"] ?></td>
                                <td class="border border-dark"><?php echo $rowHistory["time"] ?></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
                ?>

            </table>
            <div class="text-center">
                <button class="btn btn-success history">Add new History</button>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>