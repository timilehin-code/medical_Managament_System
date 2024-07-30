<?php
$queryAdmin ="";
$msg ="";
if (isset($_POST['reg'])) {
    $uName = $conn->real_escape_string($_POST['uName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirmPassword = $conn->real_escape_string($_POST['ConfirmPassword']);
    $hashedPassword = $conn->real_escape_string(password_hash($password, PASSWORD_DEFAULT));
    $checkEmail = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $msg = '<p class="text-danger msg">Email has already been Used</p>';
    } else {
        if ($password === $confirmPassword) {
            $insertAdmin = "INSERT INTO admin(uName,email,password)VALUES('$uName','$email','$hashedPassword')";
            $queryAdmin = $conn->query($insertAdmin);
            $adminId = $conn->insert_id;
        }
    }if ($queryAdmin === TRUE) {
        $msg = '<p class="text-success msg">Registration completed</p>';
        header('refresh:2 ; url =login.php');

    }
}