<?php 
$queryAdmin ="";
$msg ="";
if (isset($_POST['reg'])) {
    $doctorFname = $conn->real_escape_string($_POST['doctorFname']);
    $doctorLname = $conn->real_escape_string($_POST['doctorLname']);
    $doctorSpecialization = $conn->real_escape_string($_POST['doctorSpecialization']);
    $doctorEmail = $conn->real_escape_string($_POST['doctorEmail']);
    $doctorPnumber = $conn->real_escape_string($_POST['doctorPnumber']);
    $doctorPassword = $conn->real_escape_string($_POST['doctorPassword']);
    $confirmPassword = $conn->real_escape_string($_POST['ConfirmPassword']);
    $hashedPassword = $conn->real_escape_string(password_hash($doctorPassword, PASSWORD_DEFAULT));
    $checkEmail = mysqli_query($conn, "SELECT * FROM doctors WHERE doctorEmail = '$doctorEmail'");
    if ($checkEmail->num_rows > 0) {
        $msg = '<p class="text-danger msg">Email has already been Used</p>';
    } else {
        if ($doctorPassword === $confirmPassword) {
            $insertDoctor = "INSERT INTO doctors(doctorFname,doctorLname,doctorSpecialization,doctorEmail,doctorPnumber,doctorPassword)VALUES('$doctorFname','$doctorLname','$doctorSpecialization','$doctorEmail','$doctorPnumber','$hashedPassword')";
            $queryDoctor = $conn->query($insertDoctor);
            $DoctorId = $conn->insert_id;
        }
    }if ($queryDoctor === TRUE) {
        $msg = '<p class="text-success msg">Registration completed</p>';
        header('refresh:2 ; url =../admin/dashboard.php');
    }
}