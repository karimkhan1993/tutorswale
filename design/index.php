<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- google-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Tutor wallah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }
    </style>

<!--header-->
<?php include('header.php');?>
<!--header end-->


    <!--banner-->

    <style>
        .carousel {
            position: relative;
            width: 100%;
            max-height: 500px;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            flex: 0 0 100%;
            width: 100%;
            height: 500px;
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-content {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
            color: white;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
        }

        .carousel-content h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .carousel-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .carousel-content a {
            padding: 10px 20px;
            background-color: #48A7FF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .carousel-content a:hover {
            background-color: #A3D6F5;
        }

        /* Navigation Controls */
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        /* Indicators */
        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border: none;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }

        .carousel-indicators button.active {
            background-color: white;
        }

        @media (max-width: 768px) {
            #main-banner {
                display: none;
            }
        }
    </style>

    <div class="carousel" id="main-banner">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item">
                <img src="assets/final-banner.png" alt="First Slide">
                <div class="carousel-content">
                    <h1>Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam!</p>
                    <a href="#read-more-1">Read More</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="assets/banner(2).png" alt="Second Slide">
                <div class="carousel-content">
                    <h1>Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, nesciunt!</p>
                    <a href="#read-more-2">Read More</a>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="assets/banner(3).png" alt="Third Slide">
                <div class="carousel-content">
                    <h1>Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, facere!</p>
                    <a href="#read-more-3">Read More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-control-next" onclick="moveSlide(1)">&#10095;</button>
        <div class="carousel-indicators">
            <button onclick="setSlide(0)" class="active"></button>
            <button onclick="setSlide(1)"></button>
            <button onclick="setSlide(2)"></button>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll(".carousel-item");
        const indicators = document.querySelectorAll(".carousel-indicators button");
        const carouselInner = document.querySelector(".carousel-inner");
        let currentIndex = 0;
        let autoPlayInterval;

        function updateCarousel() {
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle("active", index === currentIndex);
            });
        }

        function moveSlide(direction) {
            currentIndex += direction;
            if (currentIndex < 0) {
                currentIndex = slides.length - 1;
            } else if (currentIndex >= slides.length) {
                currentIndex = 0;
            }
            updateCarousel();
        }

        function setSlide(index) {
            currentIndex = index;
            updateCarousel();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                moveSlide(1);
            }, 5000);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        // Initialize Carousel
        slides[currentIndex].classList.add("active");
        updateCarousel();

        // Auto Slide
        startAutoPlay();

        // Stop autoplay on hover
        document.querySelector(".carousel").addEventListener("mouseover", stopAutoPlay);
        document.querySelector(".carousel").addEventListener("mouseout", startAutoPlay);
    </script>


    <!--Phone banner-->

    <style>
        #imageSlider {
            display: none;
        }

        @media (max-width: 768px) {
            #imageSlider {
                display: block;
                width: 100%;
                overflow: hidden;
                position: relative;
                height: 300px;
            }

            .sliderContainer {
                display: flex;
                transition: transform 0.5s ease-in-out;
                height: 100%;
            }

            .sliderContainer img {
                width: 100%;
                flex-shrink: 0;
                height: 100%;
                object-fit: cover;
            }

            .navigationButtons {
                position: absolute;
                top: 50%;
                width: 100%;
                display: flex;
                justify-content: space-between;
                transform: translateY(-50%);
            }

            .navButton {
                background-color: transparent;
                border: none;
                color: white;
                font-size: 15px;
                cursor: pointer;
                padding: 10px;
            }
        }
    </style>

    <div id="imageSlider">
        <div class="sliderContainer">
            <img src="assets/phoneBanner.png" alt="Image 1">
            <img src="assets/banner-phone (1).png" alt="Image 2">
            <img src="assets/phoneBanner(2).png" alt="Image 3">
        </div>
        <div class="navigationButtons">
            <button class="navButton" onclick="previousSlide()">&#10094;</button>
            <button class="navButton" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <script>
        let currentSlideIndex = 0;

        function displaySlide(index) {
            const slides = document.querySelectorAll('.sliderContainer img');
            const totalSlides = slides.length;
            currentSlideIndex = (index + totalSlides) % totalSlides;
            const offset = -currentSlideIndex * 100;
            document.querySelector('.sliderContainer').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            displaySlide(currentSlideIndex + 1);
        }

        function previousSlide() {
            displaySlide(currentSlideIndex - 1);
        }

        // Auto-slide every 5 seconds
        setInterval(nextSlide, 5000);

        // Initial display
        displaySlide(currentSlideIndex);
    </script>



    <!--Phone banner end-->

    <!-- card section  -->

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 30px;
        }

        .text-center {
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
            margin-bottom: 20px;
            color: #02224E;
        }

        .text-muted {
            color: #333;
        }

        .cards-container {
            display: grid;
            margin: 50px 0;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #E5EFF8;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .card-subtitle {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 15px;
        }

        .btns {
            display: inline-block;
            padding: 10px 20px;
            background-color: #48A7FF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btns:hover {
            background-color: #A3D6F5;
        }



        /* 
        @media (max-width: 1024px) {
            .cards-container {
            margin: 50px 20px;
            grid-template-columns: repeat(auto-fit, minmax(234px, 1fr));
            gap: 10px;
        }
        } */

        @media (max-width: 1024px) {
            .cards-container {
                margin: 50px 20px;
                grid-template-columns: repeat(auto-fit, minmax(184px, 1fr));
                gap: 10px;
            }
        }

        @media (max-width: 848px) {
            .container {
                padding: 10px;
            }

            .cards-container {
                grid-template-columns: repeat(auto-fit, minmax(260px, 2fr));
            }
        }
    </style>



    <div class="container">
        <!-- Main Heading -->
        <div class="text-center mb-4">
            <h1 class="fw-bold">Our Exclusive Classes</h1>
            <p class="text-muted">Explore the best learning opportunities for students of all grades</p>
        </div>

        <!-- Cards -->
        <div class="cards-container">
            <!-- Card 1 -->
            <div class="card">
                <h5 class="card-title">Class: XII</h5>
                <h6 class="card-subtitle">Subjects: Physics</h6>
                <p class="card-text">
                    Sessions: Five Classes a Week<br>
                    Location: xxxxx<br>
                    Date: November 9, 202X
                </p>
                <a href="#" class="btns">Contact Now</a>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <h5 class="card-title">Class: XI</h5>
                <h6 class="card-subtitle">Subjects: Physics</h6>
                <p class="card-text">
                    Sessions: Three Classes a Week<br>
                    Location: yyyy<br>
                    Date: November 10, 202X
                </p>
                <a href="#" class="btns">Contact Now</a>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <h5 class="card-title">Class: X</h5>
                <h6 class="card-subtitle">Subjects: Physics</h6>
                <p class="card-text">
                    Sessions: Two Classes a Week<br>
                    Location: zzzz<br>
                    Date: November 11, 202X
                </p>
                <a href="#" class="btns">Contact Now</a>
            </div>
            <!-- Card 4 -->
            <div class="card">
                <h5 class="card-title">Class: IX</h5>
                <h6 class="card-subtitle">Subjects: Physics</h6>
                <p class="card-text">
                    Sessions: Four Classes a Week<br>
                    Location: wwww<br>
                    Date: November 12, 202X
                </p>
                <a href="#" class="btns">Contact Now</a>
            </div>
        </div>
    </div>


    <!-- end of card section -->




    <!-- about us sections -->



    <style>
        .text-blk {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            line-height: 25px;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .responsive-cell-block {
            min-height: 75px;
        }

        .responsive-container-block {
            min-height: 75px;
            height: fit-content;
            width: 100%;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            justify-content: flex-start;
        }

        .responsive-container-block.bigContainer {
            padding: 50px 20px;
            margin-top: 10px;
            margin-right: 0px;
            margin-bottom: 30px;
            margin-left: 0px;
            background-color: #EDF2FA;
        }

        .responsive-container-block.Container {
            max-width: 1320px;
            justify-content: space-evenly;
            align-items: center;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 0px;
            padding-left: 10px;
            position: relative;
            overflow-x: hidden;
            overflow-y: hidden;
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            max-width: 1200px;
        }

        .mainImg {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 7px;
        }


        .imgContainer {
            position: relative;
            width: 48%;
        }

        .responsive-container-block.textSide {
            width: 48%;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            z-index: 100;
        }

        .text-blk.heading {
            font-size: 32px;
            line-height: 40px;
            font-weight: 700;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
            color: #02224E;
        }

        .text-blk.subHeading {
            font-size: 16px;
            line-height: 26px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
            color: #333;
        }

        .cardImg {
            width: 50px;
            height: 50px;
        }

        .cardImgContainer {
            padding-top: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            /*border-top-style: solid;*/
            /*border-right-style: solid;*/
            /*border-bottom-style: solid;*/
            /*border-left-style: solid;*/
            /*border-top-color: rgb(229, 229, 229);*/
            /*border-right-color: rgb(229, 229, 229);*/
            /*border-bottom-color: rgb(229, 229, 229);*/
            /*border-left-color: rgb(229, 229, 229);*/
            border-image-source: initial;
            border-image-slice: initial;
            border-image-width: initial;
            border-image-outset: initial;
            border-image-repeat: initial;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-top: 0px;
            margin-right: 10px;
            margin-bottom: 0px;
            margin-left: 0px;
            /*background-color: #fff;*/
        }

        .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 15px 10px 0;
        }

        .text-blk.cardHeading {
            font-size: 18px;
            line-height: 12px;
            font-weight: 700;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-left: 0px;
            color: #333;
        }

        .text-blk.cardSubHeading {
            color: rgb(153, 153, 153);
            line-height: 20px;
            font-size: 14px;
        }

        .about-us {
            background-color: #f7f7f7;
        }


        #ixvck {
            margin-top: 60px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }


        @media (max-width: 1024px) {
            .responsive-container-block.Container {
                position: relative;
                align-items: flex-start;
                justify-content: center;
            }

            .mainImg {
                bottom: 0px;
            }

            .imgContainer {
                position: absolute;
                bottom: 0px;
                left: 0px;
                height: auto;
                width: 60%;
            }

            .responsive-container-block.textSide {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: auto;
                width: 70%;
            }

            .responsive-container-block.Container {
                flex-direction: column-reverse;
            }

            .imgContainer {
                position: relative;
                width: auto;
                margin-top: 0px;
                margin-right: auto;
                margin-bottom: 0px;
                margin-left: auto;
            }

            .responsive-container-block.textSide {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
                width: 100%;
            }

            .responsive-container-block.Container {
                flex-direction: row-reverse;
            }

            .responsive-container-block.Container {
                flex-direction: column-reverse;
            }
        }

        @media (max-width: 768px) {
            .responsive-container-block.textSide {
                width: 100%;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }

            .text-blk.subHeading {
                text-align: center;
                font-size: 17px;
                max-width: 520px;
            }

            .text-blk.heading {
                text-align: center;
            }

            .imgContainer {
                opacity: 0.8;
            }

            .imgContainer {
                height: 500px;
            }

            .imgContainer {
                width: 30px;
            }

            .responsive-container-block.Container {
                flex-direction: column-reverse;
            }

            .responsive-container-block.Container {
                flex-wrap: nowrap;
            }

            .responsive-container-block.textSide {
                width: 100%;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }

            .imgContainer {
                width: 90%;
            }

            .imgContainer {
                height: 450px;
                margin-top: 5px;
                margin-right: 33.9062px;
                margin-bottom: 0px;
                margin-left: 33.9062px;
            }

        }

        @media (max-width: 500px) {
            .imgContainer {
                position: static;
                height: 450px;
            }

            .mainImg {
                height: 100%;
                object-fit: cover;
                object-position: 24% 100%;
                border-radius: 15px;
            }


            .imgContainer {
                width: 100%;
            }

            .responsive-container-block.textSide {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
            }

            .responsive-container-block.Container {
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 40px;
                padding-left: 0px;
                overflow-x: visible;
                overflow-y: visible;
            }

            .responsive-container-block.bigContainer {
                padding-top: 10px;
                padding-right: 20px;
                padding-bottom: 10px;
                padding-left: 20px;
                padding: 0 10px 0 10px;
            }



            .text-blk.subHeading {
                font-size: 16px;
                line-height: 23px;
            }

            .text-blk.heading {
                font-size: 28px;
                line-height: 28px;
            }

            .responsive-container-block.textSide {
                margin-top: 40px;
                margin-right: 0px;
                margin-bottom: 50px;
                margin-left: 0px;
            }

            .imgContainer {
                margin-top: 5px;
                margin-right: auto;
                margin-bottom: 0px;
                margin-left: auto;
                width: 100%;
                position: relative;
            }


            #ixvck {
                width: 90%;
                margin-top: 40px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
                font-size: 15px;
            }


            .text-blk.cardHeading {
                font-size: 16px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 8px;
                margin-left: 0px;
                line-height: 25px;
            }

            .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
                padding-top: 10px;
                padding-right: 0px;
                padding-bottom: 10px;
                padding-left: 0px;
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }



        .wk-desk-1 {
            width: 8.333333%;
        }

        .wk-desk-2 {
            width: 16.666667%;
        }

        .wk-desk-3 {
            width: 25%;
        }

        .wk-desk-4 {
            width: 33.333333%;
        }

        .wk-desk-5 {
            width: 41.666667%;
        }

        .wk-desk-6 {
            width: 50%;
        }

        .wk-desk-7 {
            width: 58.333333%;
        }

        .wk-desk-8 {
            width: 66.666667%;
        }

        .wk-desk-9 {
            width: 75%;
        }

        .wk-desk-10 {
            width: 83.333333%;
        }

        .wk-desk-11 {
            width: 91.666667%;
        }

        .wk-desk-12 {
            width: 100%;
        }

        @media (max-width: 1024px) {
            .wk-ipadp-1 {
                width: 8.333333%;
            }

            .wk-ipadp-2 {
                width: 16.666667%;
            }

            .wk-ipadp-3 {
                width: 25%;
            }

            .wk-ipadp-4 {
                width: 33.333333%;
            }

            .wk-ipadp-5 {
                width: 41.666667%;
            }

            .wk-ipadp-6 {
                width: 50%;
            }

            .wk-ipadp-7 {
                width: 58.333333%;
            }

            .wk-ipadp-8 {
                width: 66.666667%;
            }

            .wk-ipadp-9 {
                width: 75%;
            }

            .wk-ipadp-10 {
                width: 83.333333%;
            }

            .wk-ipadp-11 {
                width: 91.666667%;
            }

            .wk-ipadp-12 {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .wk-tab-1 {
                width: 8.333333%;
            }

            .wk-tab-2 {
                width: 16.666667%;
            }

            .wk-tab-3 {
                width: 25%;
            }

            .wk-tab-4 {
                width: 33.333333%;
            }

            .wk-tab-5 {
                width: 41.666667%;
            }

            .wk-tab-6 {
                width: 50%;
            }

            .wk-tab-7 {
                width: 58.333333%;
            }

            .wk-tab-8 {
                width: 66.666667%;
            }

            .wk-tab-9 {
                width: 75%;
            }

            .wk-tab-10 {
                width: 83.333333%;
            }

            .wk-tab-11 {
                width: 91.666667%;
            }

            .wk-tab-12 {
                width: 100%;
            }
        }

        @media (max-width: 500px) {
            .wk-mobile-1 {
                width: 8.333333%;
            }

            .wk-mobile-2 {
                width: 16.666667%;
            }

            .wk-mobile-3 {
                width: 25%;
            }

            .wk-mobile-4 {
                width: 33.333333%;
            }

            .wk-mobile-5 {
                width: 41.666667%;
            }

            .wk-mobile-6 {
                width: 50%;
            }

            .wk-mobile-7 {
                width: 58.333333%;
            }

            .wk-mobile-8 {
                width: 66.666667%;
            }

            .wk-mobile-9 {
                width: 75%;
            }

            .wk-mobile-10 {
                width: 83.333333%;
            }

            .wk-mobile-11 {
                width: 91.666667%;
            }

            .wk-mobile-12 {
                width: 100%;
            }
        }
    </style>


    <div class="about-us">
        <div class="responsive-container-block bigContainer">
            <div class="responsive-container-block Container">
                <div class="imgContainer">
                    <img class="mainImg" src="assets/best-physics-teacher-jai-rai-sir.png">
                </div>
                <div class="responsive-container-block textSide">
                    <h2 class="text-blk heading">
                        About Us
                    </h2>
                    <p class="text-blk subHeading">
                        He is a Gold Medalist in M.Sc and has trained students out of which two of his students have
                        cleared
                        their IIT-JEE Exams and two students have cleared the NEET exam. Get the best Preparation Before
                        Examinations. Clear your doubts in Physics.
                    </p>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <div class="cardImgContainer">
                            <img class="cardImg" src="assets/icon/course.png">
                        </div>
                        <div class="cardText">
                            <p class="text-blk cardHeading">
                                Qualified Tutors
                            </p>
                            <p class="text-blk cardSubHeading">
                                We offer a wide range of highly qualified tutors across various subjects.
                            </p>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <div class="cardImgContainer">
                            <img class="cardImg" src="assets/icon/graduated.png">
                        </div>
                        <div class="cardText">
                            <p class="text-blk cardHeading">
                                Student Approach
                            </p>
                            <p class="text-blk cardSubHeading">
                                Our platform offers an easy, flexible, and enjoyable learning.
                            </p>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <div class="cardImgContainer">
                            <img class="cardImg" src="assets/icon/student-grades.png">
                        </div>
                        <div class="cardText">
                            <p class="text-blk cardHeading">
                                Proven Results
                            </p>
                            <p class="text-blk cardSubHeading">
                                We aim for real academic improvement. With the right tutor by your side.
                            </p>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                        <div class="cardImgContainer">
                            <img class="cardImg" src="assets/icon/authentication.png">
                        </div>
                        <div class="cardText">
                            <p class="text-blk cardHeading">
                                Trusted Reviews
                            </p>
                            <p class="text-blk cardSubHeading">
                                Transparency is key. Read real feedback from other students or tutors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Counter section -->

          <style>
        /* Section Styles */
        .about-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .containered {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            gap: 20px;
        }

        /* Content Section */
        .content-section {
            flex: 1;
            min-width: 280px;
            max-width: 50%;
            padding-right: 20px;
        }

        .section-heading {
            font-size: 32px;
            color: #02224E;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.6;
            text-align: justify;
            padding-right: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #48A7FF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #A3D6F5;
        }

        /* Counter Section */
        .counter-section {
            flex: 1;
            min-width: 280px;
            max-width: 49%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .counter {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .counter-icon {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .counter-content {
            text-align: left;
        }

        .counter-value {
            font-size: 40px;
            color: #02224E;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .counter-label {
            font-size: 14px;
            color: #555;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .containered {
                flex-direction: column; /* Stack sections vertically */
            }

            .content-section {
                max-width: 100%;
                padding-right: 0;
            }

            .counter-section {
                max-width: 100%;
                grid-template-columns: repeat(2, 1fr); /* Group counters in pairs */
            }
        }

        @media (max-width: 480px) {
            .btn {
                font-size: 14px;
                margin-bottom: 15px;
            }

            .section-heading {
                font-size: 20px;
            }

            .content p {
                font-size: 14px;
            }

            .counter-section {
                grid-template-columns: 1fr; /* One counter per row */
            }
        }
    </style>

    <section id="about-prestige" class="about-section">
        <div class="containered">
            <div class="content-section">
                <h2 class="section-heading">Why Choose us?</h2>
                <div class="content">
                    <p>Learning, Tailored for You</p>
                    <p>
                        At TutorWale, we understand that every student is unique. That’s why we connect you with tutors
                        who tailor lessons to fit your learning style and pace. Whether you prefer in-depth discussions
                        or quick, focused sessions, our platform helps you find the perfect tutor to meet your individual
                        needs. With us, learning is always personal, flexible, and effective.
                    </p>
                    <a href="#" class="btn">SEE DETAILS &rarr;</a>
                </div>
            </div>
            <div class="counter-section">
                <div class="counter">
                    <img src="assets/icon/talent.png" alt="Years of Excellence" class="counter-icon">
                    <div class="counter-content">
                        <h3 class="counter-value" data-target="18" data-suffix="+">0</h3>
                        <p class="counter-label">Years of Excellence</p>
                    </div>
                </div>
                <div class="counter">
                    <img src="assets/icon/course.png" alt="Students Taught" class="counter-icon">
                    <div class="counter-content">
                        <h3 class="counter-value" data-target="10000" data-suffix="+">0</h3>
                        <p class="counter-label">Students Taught</p>
                    </div>
                </div>
                <div class="counter">
                    <img src="assets/icon/student-grades.png" alt="Result" class="counter-icon">
                    <div class="counter-content">
                        <h3 class="counter-value" data-target="99" data-suffix="%">0</h3>
                        <p class="counter-label">Result</p>
                    </div>
                </div>
                <div class="counter">
                    <img src="assets/icon/management.png" alt="Team" class="counter-icon">
                    <div class="counter-content">
                        <h3 class="counter-value" data-target="500" data-suffix="+">0</h3>
                        <p class="counter-label">Team</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Function to animate counters
        function animateCounters() {
            const counters = document.querySelectorAll(".counter-value");
            const animationDuration = 2000; // Duration of animation in milliseconds

            counters.forEach((counter) => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "";
                const increment = target / (animationDuration / 50);

                let currentValue = 0;

                const updateCounter = () => {
                    currentValue += increment;
                    if (currentValue >= target) {
                        counter.textContent = target + suffix;
                    } else {
                        counter.textContent = Math.ceil(currentValue) + suffix;
                        requestAnimationFrame(updateCounter);
                    }
                };

                updateCounter();
            });
        }

        function observeCounters() {
            const counterSection = document.querySelector(".counter-section");
            const observer = new IntersectionObserver(
                (entries) => {
                    if (entries[0].isIntersecting) {
                        animateCounters();
                        observer.disconnect();
                    }
                },
                { threshold: 0.5 }
            );

            observer.observe(counterSection);
        }

        // Run observer on page load
        document.addEventListener("DOMContentLoaded", observeCounters);
    </script>





<!-- Hiring A Tutor Easy section -->
    <style>
        .tutoring-section {
            text-align: center;
            padding: 40px 20px;
            background-color: #EDF2FA;

        }

        .tutoring-header {
            font-size: 32px;
            margin-bottom: 20px;
            color: #02224E;
        }

        /* .tutoring-highlight {
  color:#EE3233;
} */

        .tutoring-description {
            color: #333;
            margin-bottom: 30px;
        }

        /* Tutoring Cards Container */
        .tutoring-cards-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px 0;
            max-width: 1200px;
            margin: auto;
        }

        .tutoring-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .tutoring-card:hover {
            transform: translateY(-5px);
        }

        .tutoring-card-icon {
            width: 65px;
            margin-bottom: 15px;
        }

        .tutoring-card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .tutoring-card-description {
            font-size: 0.9rem;
            color: #666;
        }

        /* Responsiveness */
        @media (max-width: 1024px) {
            .tutoring-cards-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .tutoring-cards-container {
                grid-template-columns: 1fr;
            }

            .tutoring-card {
                padding: 15px;
            }
        }
    </style>

    <section class="tutoring-section">
        <h2 class="tutoring-header">Hiring A Tutor Easy</h2>
        <p class="tutoring-description">
                Streamline the Process of Hiring a Tutor with These Easy Steps.
        </p>
        <div class="tutoring-cards-container">
            <div class="tutoring-card">
                <img src="assets/icon/tutor-blue.png" alt="Search Icon" class="tutoring-card-icon">
                <h3 class="tutoring-card-title">Find Your Ideal Tutor</h3>
                <p class="tutoring-card-description">
                    Discovering the right tutor has never been easier. Simply share your preferences and requirements,
                    and
                    we’ll connect you with the perfect tutor who meets your needs. You’ll be hearing from them in no
                    time!
                </p>
            </div>
            <div class="tutoring-card">
                <img src="assets/icon/presentation.png" alt="Schedule Icon" class="tutoring-card-icon">
                <h3 class="tutoring-card-title">Set Up Your Sessions </h3>
                <p class="tutoring-card-description">
                    Whether you need a single lesson or ongoing tutoring, we make scheduling a breeze. Choose the time
                    that
                    works best for you, and we’ll handle the communication with the tutor to ensure everything runs
                    smoothly.
                </p>
            </div>
            <div class="tutoring-card">
                <img src="assets/icon/customer-review-blue.png" alt="Review Icon" class="tutoring-card-icon">
                <h3 class="tutoring-card-title">Check Tutor Reviews</h3>
                <p class="tutoring-card-description">
                    It’s important to know who you’re working with. We provide detailed profiles of each tutor,
                    including
                    their qualifications, background, and student reviews. Make an informed decision by reading honest
                    feedback from others.
                </p>
            </div>
            <div class="tutoring-card">
                <img src="assets/icon/reading-book.png" alt="Focus Icon" class="tutoring-card-icon">
                <h3 class="tutoring-card-title">Stay Focused on Learning</h3>
                <p class="tutoring-card-description">
                    Leave the administrative tasks to us. We manage the payments, booking, and other details, so you can
                    focus solely on your lessons and academic success.
                </p>
            </div>
        </div>
    </section>



    <!-- end tutor hiring section -->

    <!-- mentors section -->

    <style>
        /* General Styles */
        .mentor-section-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .mentor-section-heading {
            text-align: center;
            color: #02224E;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .mentor-section-subtitle {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .mentor-cards-wrapper {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .mentor-profile-card {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(25% - 20px);
            text-align: center;
            padding: 20px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .mentor-profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .mentor-profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .mentor-profile-name {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .mentor-profile-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            margin-top: 10px;
        }

        .mentor-profile-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .mentor-profile-social-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #48A7FF;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .mentor-profile-social-icon:hover {
            background: #A3D6F5;
        }

        .mentor-profile-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #28a745;
            color: white;
            font-size: 12px;
            padding: 3px 8px;
            border-radius: 5px;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .mentor-profile-card {
                width: calc(33.333% - 20px);
            }
        }

        @media (max-width: 895px) {
            .mentor-profile-card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 574px) {
            .mentor-profile-card {
                width: 100%;
            }

            .mentor-cards-wrapper {
                flex-wrap: wrap;
            }
        }
    </style>

    <section>
        <div class="mentor-section-container">
            <h2 class="mentor-section-heading">Mentor Profiles</h2>
            <p class="mentor-section-subtitle">Our Dedicated Team of Mentors</p>
            <div class="mentor-cards-wrapper">
                <!-- Mentor Card 1 -->
                <div class="mentor-profile-card">
                    <span class="mentor-profile-badge">Verified</span>
                    <span class="mentor-profile-social-icon">&#x21AA;</span>
                    <img class="mentor-profile-image" src="assets/icon/teacher.png" alt="Mentor 1">
                    <h3 class="mentor-profile-name">Jai Rai Sir</h3>
                    <div class="mentor-profile-info">
                        <span>&#x1F465; 35+</span>
                        <span>&#x2B50;&#x2B50;&#x2B50;&#x2B50;&#x2B50;</span>
                    </div>
                </div>
                <!-- Mentor Card 2 -->
                <div class="mentor-profile-card">
                    <span class="mentor-profile-badge">Verified</span>
                    <span class="mentor-profile-social-icon">&#x21AA;</span>
                    <img class="mentor-profile-image" src="assets/icon/teacher.png" alt="Mentor 2">
                    <h3 class="mentor-profile-name">Dr. Sarin Vijay Mythry</h3>
                    <div class="mentor-profile-info">
                        <span>&#x1F465; 70+</span>
                        <span>&#x2B50;&#x2B50;&#x2B50;&#x2B50;&#x2B50;</span>
                    </div>
                </div>
                <!-- Mentor Card 3 -->
                <div class="mentor-profile-card">
                    <span class="mentor-profile-badge">Verified</span>
                    <span class="mentor-profile-social-icon">&#x21AA;</span>
                    <img class="mentor-profile-image" src="assets/icon/teacher.png" alt="Mentor 3">
                    <h3 class="mentor-profile-name">Satykam Sir</h3>
                    <div class="mentor-profile-info">
                        <span>&#x1F465; 81+</span>
                        <span>&#x2B50;&#x2B50;&#x2B50;&#x2B50;&#x2B50;</span>
                    </div>
                </div>
                <!-- Mentor Card 4 -->
                <div class="mentor-profile-card">
                    <span class="mentor-profile-badge">Verified</span>
                    <span class="mentor-profile-social-icon">&#x21AA;</span>
                    <img class="mentor-profile-image" src="assets/icon/teacher.png" alt="Mentor 4">
                    <h3 class="mentor-profile-name">Tarun Prakash</h3>
                    <div class="mentor-profile-info">
                        <span>&#x1F465; 96+</span>
                        <span>&#x2B50;&#x2B50;&#x2B50;&#x2B50;&#x2B50;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mentors section end -->

    <!-- testimonials section start -->
    <style>
        .testimonials-carousel {
            width: 90%;
            /* Set width to 90% of the screen width */
            max-width: 800px;
            /* Maximum width */
            overflow: hidden;
            position: relative;
            margin: 0 auto;
            /* Center the carousel */
            padding-bottom: 80px;
        }

        .carousel-slide-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .testimonial-item {
            min-width: 100%;
            box-sizing: border-box;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin: 10px 0;
            background-color: #E5EFF8;
        }

        .testimonial-quote {
            font-size: 2rem;
            color: #48a7ff;
        }

        .testimonial-item h5 {
            margin: 15px 0 5px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .testimonial-item p {
            color: #333;
            margin: 5px 0;
        }

        .carousel-nav-buttons {
            position: absolute;
            top: 83%;
            width: 100%;
            display: flex;
            justify-content: center;
            transform: translateY(-50%);
        }

        .carousel-nav-buttons button {
            background-color: #48a7ff;
            border: none;
            margin: 10px;
            padding: 5px 13px;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            border-radius: 50%;
            outline: none;
            transition: 0.3s ease;
        }

        .carousel-nav-buttons button:hover {
            background-color: #e5eff8;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .testimonials-carousel {
                width: 95%;
            }

            .testimonial-item h5 {
                font-size: 1rem;
                /* Adjust text size for smaller screens */
            }

            .testimonial-item p {
                font-size: 0.9rem;
            }

            .carousel-nav-buttons button {
                font-size: 1rem;
                /* Adjust button size for smaller screens */
            }


        }

        @media (max-width: 480px) {
            .testimonials-carousel {
                width: 100%;
            }

            .testimonial-item h5 {
                font-size: 0.9rem;
            }

            .testimonial-item p {
                font-size: 0.8rem;
            }

            .testimonial-item {
                border-radius: 0;
            }
        }

        /* Additional Styles for Heading */
        .main-heading {
            text-align: center;
            font-size: 32px;
            font-weight: 700px;
            color: #02224E;
            margin-bottom: 20px;
            padding-top: 30px;
        }

        .subheading {
            text-align: center;
            font-size: 16px;
            color: #333;
            margin-bottom: 30px;
        }
    </style>

    <!-- Main Heading and Subheading -->
    <h1 class="main-heading">Your Trusted Tutor, Just a Click Away</h1>
    <p class="subheading">Your path to better grades starts here.</p>

    <div class="testimonials-carousel">
        <div class="carousel-slide-track">
            <div class="testimonial-item">
                <div class="testimonial-quote">❝</div>
                <p>
                    Working with TutorWale has been a rewarding experience. The platform connects me with students who
                    genuinely want to learn and succeed. It’s fulfilling to see the progress my students make, and the
                    support from the team at TutorWale has always been fantastic!
                </p>
                <h5>Shikha D.</h5>
                <p>Tutor</p>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote">❝</div>
                <p>
                    TutorWale offers great flexibility, and I enjoy the opportunity to work with students from diverse
                    backgrounds. The platform makes it easy to connect with students and manage my schedule. I’ve helped
                    students improve their grades and build a deeper understanding of Math, which has been extremely
                    gratifying.
                </p>
                <h5>Arvind S. </h5>
                <p>Tutor</p>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote">❝</div>
                <p>
                    Thanks to TutorWale, I was able to get the help I needed for my SAT preparation. The tutor I was
                    matched with tailored every session to my needs, and I saw a huge improvement in my scores. The
                    personalized approach truly made a difference!
                </p>
                <h5>Ayesha Kumar</h5>
                <p>High School Student</p>
            </div>
        </div>
        <div class="carousel-nav-buttons">
            <button id="prev">❮</button>
            <button id="next">❯</button>
        </div>
    </div>

    <script>
        const track = document.querySelector(".carousel-slide-track");
        const items = document.querySelectorAll(".testimonial-item");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        let testimonialIndex = 0;

        function updateTestimonialCarousel() {
            const offset = -testimonialIndex * 100;
            track.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener("click", () => {
            testimonialIndex = (testimonialIndex - 1 + items.length) % items.length;
            updateTestimonialCarousel();
        });

        nextButton.addEventListener("click", () => {
            testimonialIndex = (testimonialIndex + 1) % items.length;
            updateTestimonialCarousel();
        });

        // Auto-slide every 3 seconds
        setInterval(() => {
            testimonialIndex = (testimonialIndex + 1) % items.length;
            updateTestimonialCarousel();
        }, 6000);
    </script>
    <!-- testimonials section end -->
    
    <!--FAQ-->
    
    
  <style>


    /* Main container */
    .main-container {
      padding: 20px;
      font-family: Arial, sans-serif;
      color: #333;
    }

    /* Heading section */
    .title-section {
      text-align: center;
      margin-bottom: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .title-section h1 {
      font-size: 32px;
      color: #02224E;
      margin-bottom: 10px;
    }

    .title-section p {
      font-size: 16px;
      color: #333;
      margin: 0 auto;
      line-height: 1.6;
      margin-bottom:20px;
    }

    /* FAQ and Image Section */
    .faq-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 40px;
      max-width: 1200px;
      margin: auto;
    }

    /* Image container */
    .faq-image-container {
      flex: 1;
      min-width: 300px;
    }

    .faq-image-container img {
      width: 90%;
      height: auto;
    }

    /* FAQ content */
    .faq-content-container {
      flex: 1;
      min-width: 300px;
    }

    .faq-entry {
      margin-bottom: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      background-color: #fff;
    }

    .faq-header {
      font-size: 16px;
      width: 100%;
      text-align: left;
      padding: 10px;
      cursor: pointer;
      background-color: #fff;
      border: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #333;
      transition: background-color 0.3s, color 0.3s;
    }

    .faq-header:hover {
      background-color: #e8f5ff;
    }

    .faq-header.active {
      background-color: #48A7FF;
      color: #fff;
    }

    .faq-body {
      display: none;
      font-size: 1rem;
      color: #555;
      padding: 10px;
      border-left: 2px solid #48A7FF;
      background-color: #f9f9f9;
    }

    /* Icon styling */
    .toggle-icon {
      font-size: 1.5rem;
      font-weight: bold;
      transition: transform 0.3s;
    }

    .toggle-icon.active {
      transform: rotate(45deg); /* Changes "+" to "-" */
    }

    /* Responsive behavior */
    @media (max-width: 768px) {
      .faq-container {
        flex-direction: row;
      }
    }
  </style>

  <div class="main-container" style="background-color:#F8F8FF;">
    <!-- Main Heading and Sub-content -->
    <div class="title-section">
      <h1>Frequently Asked Questions</h1>
      <p>Here are answers to some of the most common questions about education, learning, and self-development. Expand each question to see the detailed answer!</p>
    </div>

    <!-- FAQ and Image Section -->
    <div class="faq-container">
      <!-- FAQ Section -->
      <div class="faq-content-container">
        <div class="faq-entry">
          <button class="faq-header" onclick="toggleFAQ(this)">
            <span>What Does It Take to Be an Excellent Author?</span>
            <span class="toggle-icon">+</span>
          </button>
          <div class="faq-body">The time it takes to repair a roof depends on the extent of the damage. For minor repairs, it might take an hour or two. For significant repairs, a team might be at your home for half a day.</div>
        </div>
        <div class="faq-entry">
          <button class="faq-header" onclick="toggleFAQ(this)">
            <span>Is the purpose of education integral development?</span>
            <span class="toggle-icon">+</span>
          </button>
          <div class="faq-body">Education serves to foster the holistic growth of individuals, enabling them to reach their full potential.</div>
        </div>
        <div class="faq-entry">
          <button class="faq-header" onclick="toggleFAQ(this)">
            <span>Can education contribute to betterment?</span>
            <span class="toggle-icon">+</span>
          </button>
          <div class="faq-body">Yes, education equips individuals with the skills and knowledge to improve society and achieve progress.</div>
        </div>
        <div class="faq-entry">
          <button class="faq-header" onclick="toggleFAQ(this)">
            <span>Can education contribute to betterment?</span>
            <span class="toggle-icon">+</span>
          </button>
          <div class="faq-body">Yes, education equips individuals with the skills and knowledge to improve society and achieve progress.</div>
        </div>
        <div class="faq-entry">
          <button class="faq-header" onclick="toggleFAQ(this)">
            <span>Can education contribute to betterment?</span>
            <span class="toggle-icon">+</span>
          </button>
          <div class="faq-body">Yes, education equips individuals with the skills and knowledge to improve society and achieve progress.</div>
        </div>
      </div>

      <!-- Image Section -->
      <div class="faq-image-container">
        <img src="assets/FQA.webp" alt="FAQ Illustration">
      </div>
    </div>
  </div>
  
  <script>
    function toggleFAQ(button) {
      const answer = button.nextElementSibling;
      const icon = button.querySelector(".toggle-icon");

      // Toggle active class
      button.classList.toggle("active");
      icon.classList.toggle("active");

      // Show or hide the answer
      if (answer.style.display === "block") {
        answer.style.display = "none";
      } else {
        answer.style.display = "block";
      }
    }
  </script>
  
  
  <!--FAQ End-->
    

    <!-- Contact us -->

    <style>
        .contact-section {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .contact-image-container {
            flex: 1;
            max-width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .contact-image-container img {
            width: 100%;
            height: auto;
        }

        .contact-info {
            flex: 1;
            padding: 10px;
            text-align: center;
            max-width: 100%;
            /* Full-width on smaller screens */
        }

        .contact-info p {
            color: #333;
        }

        .contact-info h3 {
            color: #02224E;
            font-size: 32px;
            font-weight: 700px;
        }

        .contact-form-wrapper {
            width: 100%;
            padding: 20px;
            background-color: rgba(72, 167, 255, 0.1);
            ;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-form button {
            padding: 10px;
            background-color: #48A7FF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #ff4b3a;
        }

        /* Center form and set max-width to 70% on laptops */
        @media (min-width: 1024px) {
            .contact-form-wrapper {
                max-width: 70%;
                margin: 40px auto;
                /* Center horizontally */
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
                text-align: center;
            }

            .contact-image-container,
            .contact-info {
                max-width: 100%;
            }
        }
    </style>

    <div class="contact-section">
        <div class="contact-image-container">
            <img src="assets/why_choose_us.png" alt="Why Choose Us">
        </div>
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p>We’d love to hear from you! Fill out the form below and we’ll get back to you as soon as possible.</p>
            <div class="contact-form-wrapper">
                <form class="contact-form">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="tel" name="phone" placeholder="Your Phone Number" required>
                    <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <!-- contact end -->

<!--CTA button-->
<div class="learner-support-container">
    <div class="cta-btn">
    <h2 class="learner-support-title">Tutor wale <span>Learner Support</span></h2>
    <p class="learner-support-description">Talk to our experts. We’re available 24/7.</p>
    <div class="learner-support-contacts">
      <div class="learner-contact-item">
        <div class="learner-label-with-icon">
          <img src="assets/icon/phone-call-blue.png" alt="Indian Flag" class="learner-label-icon" />
          <p class="learner-label">Call Support</p>
        </div>
        <div class="learner-contact-card">
          <a href="tel:#" class="learner-phone-link">+91 123456987</a>
        </div>
      </div>
      <div class="learner-contact-item">
        <div class="learner-label-with-icon">
          <img src="assets/icon/email-blue.png" alt="Globe Icon" class="learner-label-icon" />
          <p class="learner-label">Email Support</p>
        </div>
        <div class="learner-contact-card">
          <a href="mailto:#" class="learner-phone-link">Supportmail@gmail.com</a>
        </div>
      </div>
    </div>
    </div>
  </div>

<style>
.cta-btn {
  max-width: 1200px;
  margin: auto;
}


.learner-support-container {
  padding: 40px 0;
  text-align: center;
}


.learner-support-title {
  font-size: 28px;
  font-weight: bold;
  color: #02224E;
  margin: 0 0 10px 0;
}

.learner-support-highlight {
  color: #48A7FF;
}

.learner-support-description {
  font-size: 16px;
  margin-bottom: 30px;
  color: #333;
}


.learner-support-contacts {
  display: flex;
  flex-wrap: wrap; 
  gap: 40px;
  justify-content: center; 
}

.learner-contact-item {
  display: flex; 
  align-items: center; 
  gap: 20px; 
  /*flex: 1 1 calc(50% - 20px); */
  min-width: 300px; 
  justify-content: center; 
}

/* Label with Icon */
.learner-label-with-icon {
  display: flex;
  align-items: center;
  gap: 10px; 
}

.learner-label-icon {
  width: 40px;
  height: 40px;
}

.learner-label {
  font-size: 16px;
  font-weight: bold;
  color: #333;
  margin: 0;
  text-align: left;
}

/* Contact Card */
.learner-contact-card {
  border: 1px solid #48A7FF;
  border-radius: 10px;
  padding: 10px 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: 250px;
}

.learner-phone-link {
  font-size: 16px;
  color: #333;
  text-decoration: none;
  font-weight: bold;
}

.learner-phone-link:hover {
  text-decoration: none;
}

/* Responsive Design */
@media (max-width: 768px) {
  .learner-support-contacts {
    flex-direction: row;
    gap: 15px;
    /*margin: 0 15px;*/
  }

  .learner-contact-item {
    flex-direction: column; 
    align-items: flex-start; 
    gap: 10px; 
  }

  .learner-contact-card {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .learner-support-title {
    font-size: 24px; 
  }

  .learner-contact-item {
    gap: 15px;
  }

  .learner-support-description {
    font-size: 14px;
  }
}
</style>

<!--end of CTA button-->

<!--new code-->



<!--end of this code -->


    <!-- footer  -->
<?php include('footer.php');?>
