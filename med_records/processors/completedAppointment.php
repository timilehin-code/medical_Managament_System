<?php 
require '../connection/conx.php';
$doctorId = $_GET['doctorId'];
$appointmentId  = $_GET['appointmentId'];
$status = '<p class="text-succcess alert-success p-1 rounded">Completed</p>';
$updateStatus = "UPDATE appointment SET appointmentStatus='$status' WHERE appointmentId= '$appointmentId'";
$queryStatus = $conn->query($updateStatus);

($queryStatus === TRUE) ? header("location:../public/doctorAppointment.php?doctorId=$doctorId") : "error";
