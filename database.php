<?php
$hostname='localhost';
$username="root";
$password="";
$database="gaiapark";

$db = mysqli_connect($hostname,$username, $password, $database)
    or die('Error:' .mysqli_error($db));


//require_once 'includes/databse.php';
///* @var mysqli $db */
?>