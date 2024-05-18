<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Vista | Booking</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- header section starts  -->
   <?php require('inc/header.php') ?>
   <!-- header section ends -->
   <div class="heading" style="background:url(images/pantai\ 2.jpg) no-repeat">
      <h1>book your trip!</h1>
   </div>
   <!-- booking section starts  -->
   <section class="booking">
      <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
         <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
         unset($_SESSION['success_message']);
      }
      ?>

      <form action="auth/book_form.php" method="post" class="book-form">
         <div class="flex">
            <div class="inputBox">
               <span>Name :</span>
               <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="inputBox">
               <span>Email :</span>
               <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBox">
               <span>Phone :</span>
               <input type="number" placeholder="Enter your number" name="phone" required>
            </div>
            <div class="inputBox">
               <span>Address :</span>
               <input type="text" placeholder="Enter your address" name="address" required>
            </div>
            <div class="inputBox">
               <span>Where to :</span>
               <input type="text" placeholder="Place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
               <span>How many :</span>
               <input type="number" placeholder="Number of guests" name="guests" required>
            </div>
            <div class="inputBox">
               <span>Arrivals :</span>
               <input type="date" name="Arrivals">
            </div>
            <div class="inputBox">
               <span>Leaving :</span>
               <input type="date" name="Leaving">
            </div>
         </div>
         <input type="submit" value="SUBMIT" class="btn" name="send">
      </form>
   </section>
   <!-- booking section ends -->
   <!-- footer section starts  -->
   <?php require('inc/footer.php') ?>
   <!-- footer section ends -->

</body>

</html>