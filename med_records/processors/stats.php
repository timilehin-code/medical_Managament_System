<?php 
// doctors count
$selectDoc = "SELECT *  FROM doctors";

($queryDoc  = $conn->query($selectDoc)) ? $numbDoc = $queryDoc->num_rows : "error";

// patients count
$selectPatient = "SELECT *  FROM patient_info";

($queryPatient  = $conn->query($selectPatient)) ? $numbPatient = $queryPatient->num_rows : "error";


// Admin count
$selectAdmin = "SELECT *  FROM admin";

($queryAdmin  = $conn->query($selectAdmin)) ? $numbAdmin = $queryAdmin->num_rows : "error";

// Appointment count
$selectApp = "SELECT *  FROM appointment";

($queryApp  = $conn->query($selectApp)) ? $numbApp = $queryApp->num_rows : "error";