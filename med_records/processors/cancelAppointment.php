<?php 
require '../connection/conx.php';
$patientId = $_GET['patientId'];
$appointmentId  = $_GET['appointmentId'];
$status = '<p class ="text-danger alert-danger rounded p-1">Canceled</p>';
$updateStatus = "UPDATE appointment SET appointmentStatus='$status' WHERE appointmentId= '$appointmentId'";
$queryStatus = $conn->query($updateStatus);

($queryStatus === TRUE) ? header("location:../public/appointmentList.php?patientId=$patientId") : "error";
