<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'travel_db'; // Nama Database

$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "<script>console.log('Database connected');</script>";
}
