<?php
$host       = "localhost";
$database   = "gaiapark";
$user       = "root";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());

//require_once 'includes/databse.php';
///* @var mysqli $db */
