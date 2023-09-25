<link rel="stylesheet" href="carrossel-style.css">
<script src="https://kit.fontawesome.com/02eeda6330.js" crossorigin="anonymous"></script>

<div id="slider-wrapper">
    <!--Slider-->
    <div id="slider">
        
        <div class="slide" style="background: #6edf10;">
            <img class="img-carrossel" src="./img/carrossel-1.jpg" alt="carrossel imagem">
        </div>

        <div class="slide" style="background:dodgerBlue;">
            <img class="img-carrossel" src="./img/carrossel-2.jpg" alt="carrossel imagem">
        </div>

        <div class="slide" style="background:coral;">
            <img class="img-carrossel" src="./img/carrossel-3.jpg" alt="carrossel imagem">
        </div>

        <div class="slide" style="background:crimson;">
            <img class="img-carrossel img-4" src="./img/carrossel-4.jpg" alt="carrossel imagem">
        </div>

        <!--Controlling arrows-->
        <span class="controls" onclick="prevSlide(-1)" id="left-arrow">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </span>
        <span class="controls" id="right-arrow" onclick="nextSlide(1)">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </span>
    </div>
    <div id="dots-con">
        <span class="dot"></span><span class="dot"></span>
        <span class="dot"></span><span class="dot"></span>
    </div>
</div>
<script src="carrossel-script.js"></script>
