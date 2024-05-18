<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="header">
        <a href="welcome.php" class="logo"><img src="images/travel_vista.png"></a>
        <nav class="navbar">
            <a href="welcome.php" class="active">home</a>
            <a href="about.php">about</a>
            <a href="package.php">packages</a>
            <a href="book.php">booking</a>
            <a href="mybookings.php">my bookings</a>
            <a href="contact.php">Contact</a>
            <a href="profil.php"><?php
                                    session_start();
                                    echo "{$_SESSION['username']}" ?></a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
</body>