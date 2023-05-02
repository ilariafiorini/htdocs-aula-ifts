<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owncarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <title>Document</title>
</head>
<body>
<div class="owl-carousel owl-theme">
    <div class="item"><img src="./img/img1.jpg" alt=""></div>
    <div class="item"><img src="./img/img2.jpg" alt=""></div>
    <div class="item"><img src="./img/img3.jpg" alt=""></div>
    <div class="item"><img src="./img/img4.jpg" alt=""></div>
    <div class="item"><img src="./img/img5.jpg" alt=""></div>
    <div class="item"><img src="./img/img6.jpg" alt=""></div>
    <div class="item"><img src="./img/img7.jpg" alt=""></div>
    <div class="item"><img src="./img/img8.jpg" alt=""></div>
    <div class="item"><img src="./img/img9.jpg" alt=""></div>
    <div class="item"><img src="./img/img10.jpg" alt=""></div>
    <div class="item"><img src="./img/img11.jpg" alt=""></div>
    <div class="item"><img src="./img/img12.jpg" alt=""></div>
</div>

    <?php


    ?>

<script type="text/javascript" 
    src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
</script> 
<script src="./owncarousel/owl.carousel.min.js"></script>


<!-- <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
</script>
 -->

<!-- <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script> -->

<script>
    $('.owl-carousel').owlCarousel({
    rtl:false,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

</body>
<footer>
</footer>
</html>