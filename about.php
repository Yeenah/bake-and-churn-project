<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/store.png" alt="">
      </div>

      <div class="content">
         <h3>Jacen Enterprise Authorized Reseller – Bake & Churn Ice Cream Cakes</h3>
         <p>It was established was on the 8th day of August year 2020 in Tabang, Plaridel, Bulacan, and owned by forty-eight year old Mrs. Sajime D. Talipan who has been managing her pastry shop business.</p>

         <p>This Website is an academic project that I created recently April 2024.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/cl 3.jpg" alt="">
         <p>Sweet Scoops ice cream cake delivers a delightful mix of textures and flavors with their ice cream cakes, making each slice an indulgent experience. The rich ice cream is perfectly complemented by moist cake layers, and the customization options are fantastic. Their cakes always look stunning and taste even better.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tammara Savyon</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/cl 1.jpg" alt="">
         <p>The ice cream cakes from Frosty Delights are a heavenly treat, perfectly blending creamy, rich ice cream with soft, fluffy cake layers. The creative flavors and vibrant decorations make each cake a showstopper at any celebration. Excellent customer service and timely delivery make them my go-to choice for special occasions.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Twain</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/cl 2.jpg" alt="">
         <p>Frozen Fantasy Cakes offers a unique twist on the classic ice cream cake, with inventive flavors and eye-catching designs that never fail to impress. Each cake is a beautiful blend of rich ice cream and fluffy cake, making it a hit at every party. The quality and creativity keep me coming back for more.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Russ Lucero</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/cl 4.jpg" alt="">
         <p>Chill & Thrill Creamery serves up some of the most delicious ice cream cakes I've ever had, with a balance of creamy, smooth ice cream and light, airy cake. The attention to detail in both taste and decoration is impressive, and the friendly staff makes the ordering process a breeze. Perfect for any occasion.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit Cullen</h3>
      </div>


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
   autoplay: {
      delay: 5000, 
      disableOnInteraction: false, 
   },
});

</script>

</body>
</html>