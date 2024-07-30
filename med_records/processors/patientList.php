<?php 

$selectPatient = "SELECT * FROM patient_info INNER JOIN departments ON patient_info.PatientDeprt = departments.DepartmentId";
$resultPatient = $conn->query($selectPatient);