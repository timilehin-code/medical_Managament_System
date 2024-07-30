<?php 
require '../connection/conx.php';
$doctorId = $_GET['doctorId'];
$appointmentId  = $_GET['appointmentId'];
$status = '<p class="text-danger alert-danger p-1 rounded">Missed</p>';
$updateStatus = "UPDATE appointment SET appointmentStatus='$status' WHERE appointmentId= '$appointmentId'";
$queryStatus = $conn->query($updateStatus);

($queryStatus === TRUE) ? header("location:../public/doctorAppointment.php?doctorId=$doctorId") : "error";
