<!--SWIPER-->
<link href="http://localhost/coffee-cake/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/pic.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!--file css cho chỗ này đâu, có đó k, k t out à có-->
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/pic12.jpg" alt=""></div>
        <div class="swiper-slide"><img src="https://trasuapcute.com/wp-content/uploads/2020/06/website2-1024x480.png" alt=""></div>
        <div class="swiper-slide"><img src="images/pic13.jpg" alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });
</script>