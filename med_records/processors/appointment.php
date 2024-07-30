<?php
require '../connection/conx.php';
    $patientId = $_GET['patientId'];
    $insertApp = "INSERT INTO appointment(patientId)VALUE('$patientId')";
    $resultApp = $conn->query($insertApp);
    header("location:../public/appointmentList.php?patientId=$patientId");

