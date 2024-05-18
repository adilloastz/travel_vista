<?php
include "db_connect.php";
session_start();

$username = trim($_POST['username']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = trim($_POST['password']);

$_SESSION['username'] = $username;

mysqli_query($mysqli, "INSERT INTO login (username, name, email, phone, password) VALUES ('$username', '$name','$email', $phone, '$password')");
mysqli_query($mysqli, "INSERT INTO kontak (username) VALUES ('$username')");
header("location:../login.html");
