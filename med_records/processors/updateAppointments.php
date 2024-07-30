<?php
$selectDoctors = "SELECT * FROM doctors";
$resultDoctors = $conn->query($selectDoctors);
$appointmentId = $_GET['appointmentId'];
if (isset($_POST['reg'])) {
    $doctor = $conn->real_escape_string($_POST['doctor']);
    $appointDate = $conn->real_escape_string($_POST['appointDate']);
    $appointTime = $conn->real_escape_string($_POST['appointTime']);
    $appointmentStatus = '<P class="text-success alert-success p-1 rounded">booked</p>';

    $updateApp = "UPDATE appointment SET doctorId = '$doctor', appointmentDate = '$appointDate', appointmentTime ='$appointTime', appointmentStatus = '$appointmentStatus' WHERE appointmentId = $appointmentId";

    $queryApp = $conn->query($updateApp);

    if ($queryApp === TRUE) {
        $msg = '<p class="text-success msg">Appointment Booked !!!</p>';
        header('refresh:2 ; url =appointments.php');
    }
}
$selectAppointment = "SELECT * FROM appointment INNER JOIN doctors ON appointment.doctorId = doctors.doctorId  WHERE appointment.appointmentId = $appointmentId ";
$queryAppointment = $conn->query($selectAppointment);
$rowAppointment = $queryAppointment->fetch_assoc();

