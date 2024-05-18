<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Travel Vista | Profile</title>
</head>

<body>
    <?php require('inc/header.php'); ?>
    <?php
    include "auth/db_connect.php";
    $email = "";
    $pass = "";
    $phone = "";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $updateQuery = "UPDATE login SET email = '$email', name = '$name', password = '$password', phone = '$phone' WHERE username = '{$_SESSION['username']}'";
        $updateResult = mysqli_query($mysqli, $updateQuery);

        if ($updateResult) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Berhasil Mengubah Data Diri")';
            echo '</script>';
        }
    }

    ?>

    <div class="profil">
        <form action="profil.php" method="POST">
            <?php
            $sql = "SELECT username, name, email, phone, password FROM login WHERE username = '{$_SESSION['username']}'";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                $row = mysqli_fetch_array($result);

                echo '
                    <label for="username">Username :</label>
                    <input class="username" type="text" placeholder="username" name="username" value="' . $row['username'] . '"  readonly>

                    <label for="name">Full Name :</label>
                    <input class="fullname" type="text" placeholder="nama lengkap" name="name" value="' . $row['name'] . '">

                    <label for="email">Email :</label>
                    <input class="email" type="email" name="email" placeholder="email" value="' . $row['email'] . '">

                    <label for="phone">Phone :</label>
                    <input class="phone" type="tel" name="phone" placeholder="Nomor Telepon" value="' . $row['phone'] . '">

                    <label for="password">Password :</label>
                    <input class="pass" type="password" name="password" placeholder="password" value="' . $row['password'] . '">

                    <div class="tombol">
                        <button type="submit" name="submit">Save</button>
                    </div>';
            };
            ?>
        </form>
        <div class="tombol" id="logout">
            <a href="index.php"><button type="submit" name="Logout">Logout</button></a>
        </div>
    </div>
    <!-- footer section starts  -->
    <?php require('inc/footer.php') ?>
    <!-- footer section ends -->
</body>

</html>