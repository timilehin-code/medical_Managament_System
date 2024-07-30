<?php 
$patientId = $_GET['patientId'];
$selectApp = "SELECT * FROM appointment INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE patientId = '$patientId'";
$queryApp = $conn->query($selectApp);




