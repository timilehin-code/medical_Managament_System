<?php 
 // processing appointment
$selectApp = "SELECT * FROM appointment INNER JOIN patient_info ON appointment.patientId = patient_info.patientId INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE appointment.appointmentStatus = '<p class=\"text-warning alert alert-warning p-1 rounded\">Processing</p>'";
$resultApp = $conn->query($selectApp);



// completed appointment
$selectCApp = "SELECT * FROM appointment INNER JOIN patient_info ON appointment.patientId = patient_info.patientId INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE appointment.appointmentStatus ='<p class=\"text-succcess alert-success p-1 rounded\">Completed</p>'";
 $cApp = $conn->query($selectCApp);

// booked appointments 
$selectBApp = "SELECT * FROM appointment INNER JOIN patient_info ON appointment.patientId = patient_info.patientId INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE appointment.appointmentStatus ='<P class=\"text-success alert-success p-1 rounded\">booked</p>'";
$bApp = $conn->query($selectBApp);

// missed appointements;
$selectMApp = "SELECT * FROM appointment INNER JOIN patient_info ON appointment.patientId = patient_info.patientId INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE appointment.appointmentStatus ='<p class=\"text-danger alert-danger p-1 rounded\">Missed</p>'";
$mApp = $conn->query($selectMApp);

// cancelled appointment

// $cancelled = ;

$selectCaApp = "SELECT * FROM appointment INNER JOIN patient_info ON appointment.patientId = patient_info.patientId INNER JOIN doctors ON appointment.doctorId = doctors.doctorId WHERE appointment.appointmentStatus ='<p class =\"text-danger alert-danger rounded p-1\">Canceled</p>'";
$cAapp= $conn->query($selectCaApp);
