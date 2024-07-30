<?php
$msg ="";
if (isset($_POST['add'])) {
    $patientId = $_GET['patientId'];
    $doctorId = $_GET['doctorId'];
    $bloodPressure = $conn->real_escape_string($_POST['bloodPressure']);
    $weight = $conn->real_escape_string($_POST['weight']);
    $bloodSuger = $conn->real_escape_string($_POST['bloodSuger']);
    $bloodTemprature = $conn->real_escape_string($_POST['bloodTemprature']);
    $notes = $conn->real_escape_string($_POST['notes']);
    date_default_timezone_set("Africa/Lagos");
    $date = $conn->real_escape_string(date("D d F, Y"));
    $time = $conn->real_escape_string(date("H:i:s"));

    $insertHistory = "INSERT INTO medical_details(PatientId,doctorId,bloodPressure,weight,bloodSuger,bloodTemprature,notes,time,date)VALUES('$patientId','$doctorId','$bloodPressure','$weight','$bloodSuger','$bloodTemprature&deg; C','$notes','$time','$date')";

    $queryHistory = $conn->query($insertHistory);

    if ($queryHistory === TRUE) {
        $msg = '<p class="text-center text-success">Your Report as been uploaded sucessfully.</p>';
        
    }
}
