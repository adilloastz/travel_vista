<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vista | My Bookings</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section starts  -->
    <?php require('inc/header.php') ?>
    <!-- header section ends -->
    <div class="heading" style="background:url(images/mybookings.png) no-repeat">
        <h1>Your Booking Order</h1>
    </div>
    <!-- booking section starts  -->
    <section class="mybookings">
        <?php
        if (isset($_GET["message"])) {
            echo "<div class=\"alert alert-success my3\">" . $_GET["message"] . "</div>";
        }
        ?>
        <div class="table-responsive">
            <table class="table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Location</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Arrivals</th>
                        <th scope="col">Leaving</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("auth/db_connect.php");
                    $query = "SELECT * FROM book_form ORDER BY ID ASC";
                    $result = mysqli_query($link, $query);
                    if (!$result) {
                        die("Query Error:" . mysqli_errno($link) . " -" . mysqli_error($link));
                    }
                    $i = 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<th scope=\"row\"> $i </th>";
                        echo "<td>" . $data['name'] . "</td>";
                        echo "<td>" . $data['email'] . "</td>";
                        echo "<td>" . $data['phone'] . "</td>";
                        echo "<td>" . $data['address'] . "</td>";
                        echo "<td>" . $data['location'] . "</td>";
                        echo "<td>" . $data['guests'] . "</td>";
                        echo "<td>" . date('Y-m-d', strtotime($data['arrivals'])) . "</td>";
                        echo "<td>" . date('Y-m-d', strtotime($data['leaving'])) . "</td>";
                        echo "<th scope=\"row\" class=\"text-center\">
<form action=\"auth/deleteData.php\"
method=\"post\"class=\"d-inline-block\">
<input type=\"hidden\" name=\"id\" value=\"" . $data['id'] . "\">
<input type=\"submit\" name=\"submit\"
value=\"CANCEL\"style=\"width:120px\"
class=\"btn btn-danger\">
</form>
</th>";
                        echo "</tr>";
                        $i++;
                    }
                    mysqli_free_result($result);
                    mysqli_close($link);

                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- booking section ends -->
    <!-- footer section starts  -->
    <?php require('inc/footer.php') ?>
    <!-- footer section ends -->

</body>

</html>