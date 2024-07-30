<?php 
$doctorId = $_GET['doctorId'];
 $selectApp = "SELECT * FROM appointment INNER JOIN patient_info ON appointment.patientId = patient_info.patientId INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE appointment.doctorId = $doctorId";
$queryApp = $conn->query($selectApp);