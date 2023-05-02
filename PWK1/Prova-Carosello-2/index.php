<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
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

<script src="./node_modules/jquery/dist/jquery.min.js"></script> 
<script src="./node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
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
        
    })
</script>



</body>
<footer>
</footer>
</html>