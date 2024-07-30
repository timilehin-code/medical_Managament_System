<?php
// session begings
session_start();

// reset all of the session variable
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to the login page
header('location:../admin/login.php');