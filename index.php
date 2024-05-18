<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Vista | Explore the World</title>
   <link rel="stylesheet" href="css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
   <!-- header section starts  -->
   <section class="header">
      <a href="index.php" class="logo"><img src="images/Travel_Vista.png"></a>
      <nav class="navbar">
         <a href="index.php" class="active">home</a>
         <a href="login.html">about</a>
         <a href="login.html">packages</a>
         <a href="login.html">booking</a>
         <a href="login.html">login</a>
      </nav>
   </section>
   <!-- header section ends -->
   <!-- home section starts  -->
   <header>
      <div class="section__container header__container">
         <div class="header__image">
            <img src="images/h1.jpg" alt="header" />
            <img src="images/h2.jpg" alt="header" />
         </div>
         <div class="header__content">
            <div>
               <h1>Travel Vista<br />Explore The World</h1>
               <p class="section__subtitle" align="justify">
                  Make your travel more enjoyable with us. We are the best travel
                  agency and we are providing the best travel services for our
                  clients.
               </p>
               <div class="action__btns">
                  <a href="login.html"><button class="btn">Plan a Trip</button></a>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- home section ends -->
   <!-- home about section starts  -->
   <section class="home-about">
      <div class="image">
         <img src="images/rinjani.JPG" alt="">
      </div>
      <div class="content">
         <h3>About Travel Vista</h3>
         <p>TravelVista is an online platform that provides travel agency services and open trips. Customers can easily search, choose, and register for travel packages that match their interests. We also offer knowledgeable local guides for a better travel experience.</p>
         <a href="login.html" class="btn">READ MORE</a>
      </div>
   </section>
   <!-- home about section ends -->
   <!-- home packages section starts  -->
   <section class="home-packages">
      <h1 class="heading-title"> TRAVEL VISTA PACKAGES </h1>
      <div class="box-container">
         <div class="box">
            <div class="image">
               <img src="images/pulau bali.JPG" alt="">
            </div>
            <div class="content">
               <h3>Bali Island Tour Packages</h3>
               <p>Bali is renowned for its beautiful beaches, rich culture, and recreational activities. Travel packages often include visits to beaches like Kuta, cultural experiences in Ubud, and hikes up volcanic Mount Agung.</p>
               <h2>Rp. 1.500.000</h2>
               <a href="login.html" class="btn">BOOK NOW</a>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/komodo.JPG" alt="">
            </div>
            <div class="content">
               <h3>Komodo Island Tour Packages</h3>
               <p>Komodo Island and its surroundings offer incredible adventures. Tours usually involve visits to the Komodo National Park to see Komodo Dragons, snorkeling in diverse marine life, and hiking on various islands.</p>
               <h2>Rp. 1.800.000</h2>
               <a href="login.html" class="btn">BOOK NOW</a>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/raja ampat.JPG" alt="">
            </div>
            <div class="content">
               <h3>Raja Ampat Tour Packages</h3>
               <p>Raja Ampat is a haven for divers and nature enthusiasts. Beyond diving and snorkeling, activities in Raja Ampat include kayaking, birdwatching, trekking to viewpoints, and experiencing the unique Papuan cuisine.</p>
               <h2>Rp. 3.000.000</h2>
               <a href="login.html" class="btn">BOOK NOW</a>
            </div>
         </div>
      </div>
      <div class="load-more"> <a href="login.html" class="btn">LOAD MORE</a> </div>
   </section>
   <!-- home packages section ends -->
   <!-- home offer section starts  -->
   <section class="home-offer home-packages">
      <div class="content">
         <div class="offerimage">
            <img src="images/pulau bali.JPG">
         </div>
      </div>
      <div class="content">
         <h3>Reasonable Price</h3>
         <p>Bali Dynasty Resort is centrally located within walking distance to the nightlife and excitement of the Kuta area. This popular Bali accommodation offers a wide range of room types to suit families and couples. The kids can enjoy the kids club while the adults spoil themselves at Ashoka Spa or the Beach Club. For a memorable and relaxing stay in Kuta why not stay at Bali Dynasty Resort.</p>
         <a href="login.html" class="btn">BOOK NOW</a>
      </div>
   </section>
   <!-- home offer section ends -->
   <!-- footer section starts  -->
   <?php require('inc/footer.php'); ?>
   <!-- footer section ends -->
</body>

</html>