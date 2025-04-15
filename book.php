<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

     <!--swiper css link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- css file link-->
     <link rel="stylesheet" href="style.css">

     
</head>

<body>

<!-- header section start -->
<section class="header">

    <a href="home.php" class="logo">TRAVELIO.</a>

    <nav class="navbar">
        <a href="home.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="package.php">PACKAGES</a>
        <a href="book.php">BOOK</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"> </div>

</section>


 <!-- header section end -->

 <div class="heading" style="background:url('Travel.jpg') no-repeat;" > 
 <h1>BOOK NOW</h1>
 </div>


<!--booking sections starts-->

<section class="booking">

 <h1 class="heading-title">Book your trip!</h1>

 

<form action="book_form.php" method="post" class="book-form">

  <div class="flex">
    <div class="inputBox">
        <span> Name :</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="inputBox">
        <span> Email :</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>

    <div class="inputBox">
        <span> Phone :</span>
        <input type="text" placeholder="enter your number" name="phone">
    </div>

    <div class="inputBox">
        <span> Address :</span>
        <input type="text" placeholder="enter your address" name="address">
    </div>

    <div class="inputBox">
        <span> Where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
    </div>

    <div class="inputBox">
        <span> How many :</span>
        <input type="number" placeholder="number of guests" name="guests">
    </div>

    <div class="inputBox">
    <span> Arrivals :</span>
    <input type="date" name="arrivals">
</div>

<div class="inputBox">
    <span> Leaving :</span>
    <input type="date" name="leaving"> <!-- Corrected name attribute -->
</div>


  </div>
  
   <input type="submit" value="submit" class="btn" name="send">

</form>

</section>


<!--booking sections end-->





<!--footer section starts-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> HOME</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>PACKAGE</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>BOOK</a>  
        </div>

        <div class="box">
            <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +94 77 496 2983</a>
        <a href="#"> <i class="fas fa-phone"></i> +94 11 796 1183</a>
        <a href="#"> <i class="fas fa-envelope"></i> travelio@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>No 98, Flower Road, Colombo 0004.</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook"></i>Travelio</a>
            <a href="#"><i class="fab fa-twitter"></i>Travelio.twi</a>
            <a href="#"><i class="fab fa-instagram"></i>._Travelio_.</a>
            <a href="#"><i class="fab fa-linkedin"></i>Travelio</a>
        </div>


    </div>

    <div class="credit"> created by <span> Vihanga Madushamini </span> | all right reserved! </div>
    

</section>       

<!--footer section end-->



<!-- swiper js  link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link-->
<script src="script.js"></script>

</body>
</html>