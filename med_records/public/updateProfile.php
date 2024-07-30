<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
    header('Location:login.php');
}
require '../processors/updateProfile.php';
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
    <title>Pateint Dasboard</title>
</head>

<body>
    <div class="container">
        <div class="form-bg mt-5">
            <div class="text-center">
                <h3>Medical Records</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class=" form-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="PatientLname" id="" class="w-100 p-2 mt-1"
                                    placeholder="Last Name">
                                <label class="form-label">Last Name</label>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="matricNumber" id="" class="w-100 p-2 mt-1"
                                    placeholder="Last Name">
                                <label class="form-label">Matric Number</label>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" name="PatientDob" id="" class="w-100 p-2 mt-1"
                                    placeholder="Last Name">
                                <label class="form-label">Date of Birth</label>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="PateintSex" id="" class="W-100 P-2 mt-1">
                                    <option value="">Select Your Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="PatientPnumber" id="" class="w-100 p-2 mt-1"
                                    placeholder="Last Name">
                                <label class="form-label"> Phone Number</label>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="PatientAdress" id="" class="w-100 p-2 mt-1"
                                    placeholder="Last Name">
                                <label class="form-label"> Adress</label>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <input type="text" name="" id="" class="w-100 p-2 mt-1" placeholder="Last Name">
                                <label class="form-label"> Deprtment</label> 
                            -->
                                <select name="PatientDeprt" id="" class="W-100 P-2 mt-1">
                                    <option value="" selected disabled>Select Your Department</option>
                                    <?php
                                    if ($queryDept->num_rows > 0) {
                                        while ($rowDept = $queryDept->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $rowDept['DepartmentId'] ?>">
                                                <?php echo $rowDept['DepartmentName'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>

                                </select>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" name="patientImage" id="" class="w-100 p-2 mt-1" placeholder="image">
                                <label class="form-label"> Image</label>
                                <!-- <p class="text-danger msg"></p> -->
                            </div>

                        </div>
                        <button type="submit" name="update" class="btn btn-success w-100">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>