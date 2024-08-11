let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   profile.classList.remove('active');
}

let mainImage = document.querySelector('.quick-view .box .row .image-container .main-image img');
let subImages = document.querySelectorAll('.quick-view .box .row .image-container .sub-image img');

subImages.forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      mainImage.src = src;
   }
});
window.addEventListener('scroll', function() {
   var header = document.querySelector('.header');
   if (window.scrollY > 50) {
      header.classList.add('transparent');
   } else {
      header.classList.remove('transparent');
   }
});

document.getElementById('sign-up-btn').addEventListener('click', function() {
   window.location.href = 'user_register.php';
});
/*
document.addEventListener('DOMContentLoaded', function() {
   var swiperHome = new Swiper(".home-slider", {
      loop: true,
      spaceBetween: 20,
      pagination: {
         el: ".swiper-pagination-home",
         clickable: true,
      },
      autoplay: {
         delay: 5000,
         disableOnInteraction: false,
      },
   });
   
   var swiperCategory = new Swiper(".category-slider", {
      loop: true,
      spaceBetween: 20,
      pagination: {
         el: ".swiper-pagination-category",
         clickable: true,
      },
      breakpoints: {
         0: {
            slidesPerView: 2,
         },
         650: {
            slidesPerView: 3,
         },
         768: {
            slidesPerView: 4,
         },
         1024: {
            slidesPerView: 5,
         },
      },
      autoplay: {
         delay: 5000,
         disableOnInteraction: false,
      },
   });

   // Ensure this section is only present if you have the `products-slider` section in your HTML
   var swiperProducts = new Swiper(".products-slider", {
      loop: true,
      spaceBetween: 20,
      pagination: {
         el: ".swiper-pagination-products",
         clickable: true,
      },
      breakpoints: {
         550: {
            slidesPerView: 2,
         },
         768: {
            slidesPerView: 2,
         },
         1024: {
            slidesPerView: 3,
         },
      },
      autoplay: {
         delay: 5000,
         disableOnInteraction: false,
      },
   });
}); */
