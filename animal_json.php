<?php
session_start();
/** @var mysqli $db */
require_once 'includes/database.php';

$query = "SELECT * FROM `gaia_animals`;";

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$animal_info = [];
//create array from database return
while($row = mysqli_fetch_assoc($result))
{
    $animal_info[] = $row;
}
echo json_encode($animal_info);
?>