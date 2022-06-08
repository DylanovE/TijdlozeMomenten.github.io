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

<body>
    <div id="menuBtn" class="z-index position-absolute c-burgermenu clickable">
        <svg xmlns="http://www.w3.org/2000/svg" class="svgmenu"  viewBox="0 0 49.201 24">
            <g id="Menu" transform="translate(3 3)">
                <path id="Path_1423" data-name="Path 1423" d="M-12137.377-9972h42.858" transform="translate(12137.377 9972)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="6"/>
                <path id="Path_1424" data-name="Path 1424" d="M-12137.377-9972h32.2" transform="translate(12148.377 9990)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="6"/>
            </g>
        </svg>
    </div>
        <div class="custom-row">
            <div class="col-sm" id="part-one">
            <h1 class="centeredtxt clickable c-font-size-jumbo c-hudson-bold-font ">text</h1>
            </div>
            <div class="col-sm" id="part-two">
            <h1 class="centeredtxt clickable c-font-size-jumbo c-hudson-bold-font ">text</h1>
            </div>
            <div class="col-sm" id="part-three">
            <h1 class="centeredtxt clickable c-font-size-jumbo c-hudson-bold-font ">text</h1>
            </div>
        </div>
    <script>
        const menuBtn = document.getElementById("menuBtn");
        const menuExitBrn = document.getElementById("menuExitBtn");
        var menu = document.getElementById("menubody");

        menuBtn.addEventListener("click", () => {
            menu.style.visibility = "visible";
        });

        menuExitBtn.addEventListener("click", () => {
            menu.style.visibility = "hidden";
        });
    </script>
</body>

</html>