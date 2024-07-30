<?php
require '../connection/conx.php';
if (!empty($_GET['doctorId'])) {
    $doctorId = $_GET['doctorId'];
    $selectDoctor= "SELECT * FROM doctors WHERE doctorId = '$doctorId'";
    $queryDoctor = $conn->query($selectDoctor);
    $rowDoctor = $queryDoctor->fetch_assoc();
} else {
    echo "error";
}