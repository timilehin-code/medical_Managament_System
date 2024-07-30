<?php
require '../connection/conx.php';
$msg ="";
    
    if (isset($_POST['update']) && $patientId = $_GET['patientId'] ) {
    $patientId = $_GET['patientId'];
    $PatientLname = $conn->real_escape_string($_POST['PatientLname']);
    $matricNumber = $conn->real_escape_string($_POST['matricNumber']);
    $PatientDob = $conn->real_escape_string($_POST['PatientDob']);
    $PateintSex = $conn->real_escape_string($_POST['PateintSex']);
    $PatientPnumber = $conn->real_escape_string($_POST['PatientPnumber']);
    $PatientAdress = $conn->real_escape_string($_POST['PatientAdress']);
    $PatientDeprt = $conn->real_escape_string($_POST['PatientDeprt']);

    $fileDir = 'uploads/';
    $checkFile = $fileDir . basename($_FILES['patientImage']['name']);
    $breakPart = pathinfo($_FILES['patientImage']['name']);
    $fileName = $breakPart['filename'];
    $fileExt = $breakPart['extension'];
    $tempfile = $_FILES['patientImage']['tmp_name'];

    if (file_exists($checkFile)) {
        rand(00, 99);
        $NewPicName = $fileName . '-' . $rand . '.' . $fileExt;
    } else {
        $NewPicName = $fileName . '.' . $fileExt;
    }
    $preparedPic = '../uploads/' . $NewPicName;

    if (move_uploaded_file($tempfile, $preparedPic)) {
        $updateProfile = "UPDATE patient_info SET PatientLname = '$PatientLname', matricNumber = '$matricNumber', PatientDob='$PatientDob', PateintSex = '$PateintSex', PatientPnumber = '$PatientPnumber', PatientAdress ='$PatientAdress', PatientDeprt ='$PatientDeprt', patientImage = '$NewPicName' WHERE patientId = $patientId";
        $queryPatient = $conn->query($updateProfile);
    }
    if ($queryPatient == TRUE) {
        $msg = '<p class="text-success msg">Registration completed</p>';
        header('refresh:2 ; url =../public/profile.php?patientId='.$patientId.'');
    }

} 



$selectDept = "SELECT * FROM departments";
$queryDept = $conn->query($selectDept);
