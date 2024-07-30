<?php 
$patientId = $_GET['patientId'];
$selectHistory = "SELECT * FROM medical_details INNER JOIN patient_info ON medical_details.patientId = patient_info.patientId INNER JOIN doctors ON medical_details.doctorId = doctors.doctorId WHERE medical_details.patientId = '$patientId'";
$queryHistory = $conn->query($selectHistory);
