<?php 
$msg3= '';
if (isset($_POST['log'])) {
  $email = $conn->real_escape_string($_POST['email']);
  $password = $conn->real_escape_string($_POST['password']);

  $selectDoctor = "SELECT * FROM doctors WHERE doctorEmail = '$email'";
  $queryDoctor = mysqli_query($conn, $selectDoctor);
  $rowDoctor = mysqli_fetch_assoc($queryDoctor);
  if ($rowDoctor) {
    if (password_verify($password, $rowDoctor['doctorPassword'])) {
      session_start();
      $_SESSION['Login'] = "yes";
      $_SESSION['doctorId'] = $rowDoctor['doctorId'];
      $_SESSION['doctorEmail'] = $rowDoctor['doctorEmail'];
      header('location:doctorProfile.php?doctorId='.$_SESSION['doctorId'].'');
    } else {
      $msg3 = '<p class="text-danger msg">Incorrect Log in Details</p>';
    }
  } else {
    $msg3 = '<p class="text-danger msg">Incorrect Log in Details</p>';
  }

}