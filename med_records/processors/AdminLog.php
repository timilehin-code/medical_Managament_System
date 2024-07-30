<?php 
$msg= '';
if (isset($_POST['log'])) {
  $email = $conn->real_escape_string($_POST['email']);
  $password = $conn->real_escape_string($_POST['password']);

  $selectAdmin = "SELECT * FROM admin WHERE email = '$email'";
  $queryAdmin = mysqli_query($conn, $selectAdmin);
  $rowAdmin = mysqli_fetch_assoc($queryAdmin);
  if ($rowAdmin) {
    if (password_verify($password, $rowAdmin['password'])) {
      session_start();
      $_SESSION['Login'] = "yes";
      $_SESSION['AdminId'] = $rowAdmin['AdminId'];
      $_SESSION['email'] = $rowAdmin['email'];
      header('location:dashboard.php?AdminId='.$_SESSION['AdminId'].'');
    } else {
      $msg = '<p class="text-danger msg">Incorrect Log in Details</p>';
    }
  } else {
    $msg = '<p class="text-danger msg">Incorrect Log in Details</p>';
  }

}