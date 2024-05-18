<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vista | Contact</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Contact</title>
</head>

<body>
    <?php
    require('auth/db_connect.php');
    require('inc/header.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['nama'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $updateQuery = "UPDATE kontak SET name = '$name', email = '$email', message = '$message' WHERE username = '{$_SESSION['username']}'";
        $updateResult = mysqli_query($mysqli, $updateQuery);

        if ($updateResult) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Pesan Anda Sudah Masuk")';
            echo '</script>';
        }
    }
    ?>
    <div class="sosmed">
        <h1>DON'T FORGET TO FOLLOW!</h1>
        <table>
            <tr>
                <td><a href="#"><img src="images/Instagram.png" alt="Instagram"></a></td>
                <td><a href="#">Travel_Vista</a></td>
            </tr>
            <tr>
                <td><a href="#"><img src="images/youtube.png" alt="youtube"></a></td>
                <td><a href="#">Travel Vista</a></td>
            </tr>
            <tr>
                <td><a href="#"><img src="images/twitter.png" alt="twitter"></a></td>
                <td><a href="#">@travelvista</a></td>
            </tr>
        </table>
    </div>
    <div class="something">
        <form action="contact.php" method="POST">
            <h2>SAY SOMETHING</h2>
            <table>
                <tr>
                    <td>
                        <input type="text" name="nama" placeholder="Your Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="email" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="message" placeholder="Message"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- footer section starts  -->
    <?php require('inc/footer.php'); ?>
    <!-- footer section ends -->
</body>

</html>