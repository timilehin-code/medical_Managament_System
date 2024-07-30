<?php
$alert = "";
if (isset($_POST['pSubmit'])) {
    $pEmail = $conn->real_escape_string($_POST['pEmail']);
    $pPassword = $conn->real_escape_string($_POST['pPassword']);

    $selectPatient = "SELECT * FROM patient_info WHERE PatientEmail  = '$pEmail'";
    $queryPatient = $conn->query($selectPatient);
    $rowPatient = $queryPatient->fetch_assoc();
    $hashedPassword = $rowPatient['PatientPassword'];

    if ($queryPatient->num_rows === 1) {
        if (password_verify($pPassword, $hashedPassword)) {
            session_start();
            $_SESSION['Login'] = "yes";
            $_SESSION['patientId'] = $rowPatient['patientId'];
            $_SESSION['PatientEmail'] = $rowPatient['PatientEmail'];
            header('location:dashboard.php?patientId=' . $_SESSION['patientId'] . '');
        } else {
            $alert = '<p class="text-danger">INCORRECT LOGIN DETAILS </p>';
        }
    } else {
        $alert = '<p class="text-danger">INCORRECT LOGIN DETAILS </p>';
    }
}