<?php
include("db_connect.php");
if (isset($_POST["submit"])) {
    $id = htmlentities(strip_tags(trim($_POST["id"])));
    $id = mysqli_real_escape_string($link, $id);
    $query = "SELECT name, email FROM book_form WHERE id='$id' ";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
    $name = $data["name"];
    $email = $data["email"];
    $query = "DELETE FROM book_form WHERE id='$id' ";
    $result = mysqli_query($link, $query);
    if ($result) {
        $message = "Booking atas nama \"<b>$name</b>\" dengan email \"<b>$email</b>\" sudah berhasil dibatalkan";
        $message = urlencode($message);
        header("Location:../mybookings.php?message={$message}");
    } else {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}
