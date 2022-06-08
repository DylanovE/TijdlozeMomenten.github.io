<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- website intro -->
    <title>Tijdloze Momenten</title>
    <meta name="description" content="Welkom bij Tijdeloze Momenten">
    <meta name="author" content="SitePoint">

    <!-- website icons -->
    <link rel="apple-touch-icon" type="image/png" href="./assets/images/logo/favicon.png">

    <link rel="icon" type="image/png" href="./assets/images/logo/favicon.png">

    <!-- soial media cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Welkom bij Tijdeloze Momenten!">
    <meta name="twitter:image" content="https://d36iur3orme9ke.cloudfront.net/wp-content/uploads/2016/06/blog_top-image_Open-Source-Photography.jpg">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Tijdeloze Momenten">
    <meta property="og:title" content="Welkom bij Tijdeloze Momenten">
    <meta property="og:image" content="./assets/images/twitter/sunset.png">
    <meta property="og:url" content="http://www.tijdlozemomenten.nl/index.html">

    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- bootrap link v4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<?php include 'menu.html'?>
<body class="c-homepage-bg">
    <audio id="homepage_audio" src="./assets/audio/forest-lullaby-110624.mp3" loop="loop"></audio>
    <div id="menuBtn" class="position-absolute c-burgermenu clickable" onclick="myFunction()">
    <svg xmlns="http://www.w3.org/2000/svg" class="svgmenu" viewBox="0 0 49.201 24">
  <g id="Menu" transform="translate(3 3)">
    <path id="Path_1423" data-name="Path 1423" d="M-12137.377-9972h42.858" transform="translate(12137.377 9972)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="6"/>
    <path id="Path_1424" data-name="Path 1424" d="M-12137.377-9972h32.2" transform="translate(12148.377 9990)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="6"/>
  </g>
</svg>

    </div>


    <div class="c-row c-vh-100 c-margin-1">
        <div class="c-container w-75 mx-auto ">
            <img src="./assets/images/tijdloze-momenten-logo-black.webp" style="margin-left: 3.5%;"  class="i-w-50" alt="website header image">
            <div class="c-vertical-center w-100">
                <h1 class="c-font-size-jumbo c-hudson-bold-font text-center c-line-height-150">Deze website maakt<br>gebruik van audio om<br>uw ervaring te verbeteren</h1>
                <button onclick="myFunction()" onfocus="if(this.blur)this.blur()" id="audioBtn" class="c-link clickable c-font-size-small c-hudson-bold-font text-center">Gebruik zonder audio</button>
            </div>
        </div>
    </div>

    <div class="avontuurknop position-absolute">
        <h1 class="c-font-size-small c-hudson-bold-font clickable" id="startavontuur" >Start het avontuur ></h1>
    </div>
    <script>
        var audio = document.getElementById("homepage_audio");
        var menu = document.getElementById("menubody");

        const audioBtn = document.getElementById("audioBtn");
        const menuBtn = document.getElementById("menuBtn");
        const menuExitBrn = document.getElementById("menuExitBtn");
        const start = document.getElementById("startavontuur");

        audioBtn.addEventListener("click", () => {

            if (audioBtn.innerText === "Gebruik zonder audio") {
                audioBtn.innerText = "Gebruik met audio";
                audio.volume = 0.0;
            } else {
                audioBtn.innerText = "Gebruik zonder audio";
                audio.volume = 0.5;
            }
        });

        start.addEventListener("click", () => {
        window.location.href = 'avonturen.php';
        });


        menuBtn.addEventListener("click", () => {
                    menu.style.visibility = "visible";
                });

        menuExitBtn.addEventListener("click", () => {
            menu.style.visibility = "hidden";
        });

        setTimeout(function() {
            audio.play();
            audio.volume = 0.5;
        }, 3000);
    </script>
</body>

</html>