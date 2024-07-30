<?php
$alert = "";
$queryPatient = "";
if (isset($_POST['register'])) {
    $PatientFname = $conn->real_escape_string($_POST['PatientFname']);
    $PatientEmail = $conn->real_escape_string($_POST['PatientEmail']);
    $PatientPassword = $conn->real_escape_string($_POST['PatientPassword']);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);
    $hashedPassword = $conn->real_escape_string(password_hash($PatientPassword, PASSWORD_DEFAULT));
    $checkEmail = $conn->query("SELECT * FROM patient_info WHERE PatientEmail = '$PatientEmail'");
    if ($checkEmail->num_rows > 0) {
        $alert = '<P class="text-danger">Email has  already been taken.</p>';
    } else {
        if ($PatientPassword === $confirmPassword) {
            $insertPatient = "INSERT INTO patient_info(PatientFname,PatientEmail,PatientPassword)VALUES('$PatientFname','$PatientEmail','$hashedPassword')";
            $queryPatient = $conn->query($insertPatient);
        } else {
            $alert = '<P class="text-danger">Password doesn\'t match.</p>';
        }
    }
    if ($queryPatient == TRUE) {
        $alert = '<P class="text-success">Patient Registration was successful</p>';
        header('refresh:2 ; url =public/login.php');
    }
}