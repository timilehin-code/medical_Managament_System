<?php
require '../connection/conx.php';
if (!empty($_GET['patientId'])) {
    $patientId = $_GET['patientId'];
    $selectPatient = "SELECT * FROM patient_info INNER JOIN departments ON patient_info.PatientDeprt = departments.DepartmentId  WHERE patientId = '$patientId'";
    $queryPatient = $conn->query($selectPatient);
    $rowPatient = $queryPatient->fetch_assoc();
}else{
    echo "error";
}