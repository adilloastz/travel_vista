<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'travel_db');

date_default_timezone_set('Asia/Jakarta');

function tgl_db($tgl)
{
   $tgl        = date_create($tgl);
   $tanggal    = date_format($tgl, "Y-m-d");
   return $tanggal;
}

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = tgl_db($_POST['arrivals']); // Menggunakan fungsi tgl_db() untuk mengonversi ke format yang sesuai
   $leaving = tgl_db($_POST['leaving']); // Menggunakan fungsi tgl_db() untuk mengonversi ke format yang sesuai

   $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
   mysqli_query($mysqli, $request);
   session_start();
   $_SESSION['success_message'] = "Room Booked Successfully.";
   header('location:../book.php');
} else {
   echo 'something went wrong please try again!';
}
