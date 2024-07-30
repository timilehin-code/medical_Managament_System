<?php
$Servername = "localhost";
$Username = "root";
$Password = "";
$Dbname = "medical_managment_system";


// Create connection
$conn = mysqli_connect($Servername, $Username, $Password, $Dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
