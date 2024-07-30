<?php 
if (isset($_POST['update']) && $doctorId = $_GET['doctorId'] ) {
    $doctorId = $_GET['doctorId'];
    $fileDir = 'uploads/';
    $checkFile = $fileDir . basename($_FILES['DocImage']['name']);
    $breakPart = pathinfo($_FILES['DocImage']['name']);
    $fileName = $breakPart['filename'];
    $fileExt = $breakPart['extension'];
    $tempfile = $_FILES['DocImage']['tmp_name'];

    if (file_exists($checkFile)) {
        rand(00, 99);
        $NewPicName = $fileName . '-' . $rand . '.' . $fileExt;
    } else {
        $NewPicName = $fileName . '.' . $fileExt;
    }
    $preparedPic = '../uploads/' . $NewPicName;
    
    if (move_uploaded_file($tempfile, $preparedPic)) {
        $updateProfile = "UPDATE doctors SET docImage='$preparedPic' WHERE doctorId = '$doctorId'";    
        $queryDoctor = $conn->query($updateProfile);
    }
    if ($queryDoctor === TRUE) {
        $msg = '<p class="text-success msg">Update completed</p>';
        header('refresh:2 ; url =doctorProfile.php?doctorId='.$doctorId.'');
    }
}