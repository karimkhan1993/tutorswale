@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Poppins';
    }

    body{
        background-color: #f8f8ff;
    }

    .top-features {
        /* background-color: #f7f7f7; */
    }

    .features {
        text-align: center;
        padding: 30px 0;
        /* background-color: #f9f9f9; */
        max-width: 1200px;
        margin: auto;
    }

    .features h2 {
        margin-bottom: 20px;
        font-size: 32px;
        color: #02224E;
    }

    .subheading {
        margin-bottom: 30px;
        font-size: 16px;
        color: #333;
    }

    .features-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .feature-card {
        flex: 1 1 calc(30.33% - 40px);
        /* Make each card take up a third of the container */
        /* min-width: 250px; */
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s;
        margin: 10px;
    }

    .feature-card:hover {
        transform: translateY(-10px);
    }

    .feature-card .icon img {
        width: 60px;
        height: 60px;
    }

    .feature-card h3 {
        margin: 10px 0;
        font-size: 18px;
    }

    .feature-card p {
        font-size: 14px;
        color: #666;
    }

    /* Tablet responsiveness (for screens up to 1024px) */
    @media (max-width: 1150px) {
        .feature-card {
            flex: 1 1 calc(25% - 40px);
            /* Two cards per row */
        }

        .features-container {
            gap: 0;
        }
    }

    /* 
    @media (max-width: 920px){
        .features-container{
            gap: 0;
        }
    } */

    /* Phone responsiveness (for screens up to 768px) */
    @media (max-width: 640px) {
        .feature-card {
            flex: 1 1 100%;
            /* One card per row */
        }
    }
</style>
@section('content')

<style>
    .banner {
        background-image: url('assets/about-us.png');
        background-size: cover;
        background-position: center;
        padding: 70px 20px;
        text-align: center;
        color: black;
    }

    .banner h1 {
        margin: 0;
        font-size: 32px;
        color: #fff;
    }

    .banner nav {
        margin-top: 10px;
    }

    .banner nav a {
        color: #fff;
        text-decoration: none;
    }

    .banner nav a:hover {
        text-decoration: underline;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .banner h1 {
            font-size: 2.5em;
        }
    }

    @media (max-width: 480px) {
        .banner h1 {
            font-size: 2em;
        }
    }
</style>

<div class="banner">
    <h1>About Us</h1>
    <nav>
        <a href="#">Home</a> / <a href="#">About Us</a>
    </nav>
</div>



<!-- end of banner section -->


<!-- cards section -->
<div class="top-features">
    <section class="features">

        <h2>Online Education Tailored to You</h2>
        <p class="subheading">Empowering you with knowledge anytime, anywhere.</p>
        <div class="features-container">
            <div class="feature-card">
                <div class="icon"><img src="assets/knowledge.png" alt="Learn From Anywhere"></div>
                <h3>Learn From Anywhere</h3>
                <p>Competently unleash competitive initiatives for alternative interfaces. Enthusiastically supply
                    resource leveling platforms.</p>
            </div>
            <div class="feature-card">
                <div class="icon"><img src="assets/expert.png" alt="Expert Instructor"></div>
                <h3>Expert Instructor</h3>
                <p>Competently unleash competitive initiatives for alternative interfaces. Enthusiastically supply
                    resource leveling platforms.</p>
            </div>
            <div class="feature-card">
                <div class="icon"><img src="assets/customer-service.png" alt="24/7 Live Support"></div>
                <h3>24/7 Live Support</h3>
                <p>Competently unleash competitive initiatives for alternative interfaces. Enthusiastically supply
                    resource leveling platforms.</p>
            </div>
        </div>

    </section>
</div>
<!-- end of card section -->


<!-- about us section -->

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
            /*margin-bottom: 30px;*/
            margin-left: 0px;
            /*background-color: #EDF2FA;*/
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

        .blueDots {
            position: absolute;
            top: 150px;
            right: 15%;
            z-index: -1;
            left: auto;
            width: 80%;
            height: 500px;
            object-fit: cover;
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
            background-color: #fff;
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

            .blueDots {
                width: 100%;
                left: 0px;
                top: 0px;
                bottom: auto;
                right: auto;
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

            .blueDots {
                bottom: 0px;
                width: 100%;
                height: 80%;
                top: 10%;
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
                    <img class="blueDots"
                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/aw3.svg">
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


<!-- end of about us section -->

<!-- counter section -->

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
    }

    .counter-container {
        display: flex;
        justify-content: space-around;
        width: 100%;
        /* max-width: 1200px; */
        background-color: #48A7FF;
        color: white;
        /* border-radius: 10px; */
        padding: 20px;
    }

    .counter {
        text-align: center;
        flex: 1;
    }

    .number {
        font-size: 2em;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .counter-container {
            /*flex-direction: column;*/
            align-items: center;
        }

        .counter {
            margin-bottom: 20px;
        }
    }
    
    @media (max-width: 572px) {
        .counter-container{
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="container">
    <div class="counter-container">
        <div class="counter">
            <span class="number" data-target="3900">0</span>
            <p>Successfully Trained</p>
        </div>
        <div class="counter">
            <span class="number" data-target="15800">0</span>
            <p>Classes Completed</p>
        </div>
        <div class="counter">
            <span class="number" data-target="97500">0</span>
            <p>Satisfaction Rate</p>
        </div>
        <div class="counter">
            <span class="number" data-target="100200">0</span>
            <p>Students Community</p>
        </div>
    </div>
</div>
<script>
    const counters = document.querySelectorAll('.number');

    counters.forEach(counter => {
        counter.innerText = '0+';
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const current = +counter.innerText.replace('+', '');
            const increment = target / 200;

            if (current < target) {
                counter.innerText = `${Math.ceil(current + increment)}+`;
                setTimeout(updateCounter, 30);
            } else {
                counter.innerText = `${target}+`;
            }
        };
        updateCounter();
    });

</script>

<!-- end of counter section -->

<!-- Tutor section -->
<style>
    /* styles.css */

    .instructor-carousel {
        text-align: center;
        padding: 30px 0;
        position: relative;
        background: #fff;
    }

    .section-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #02224E;
    }

    .carousel {
        display: flex;
        overflow: hidden;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        scroll-behavior: smooth;
    }

    .carousel-item {
        flex: 0 0 25%;
        max-width: 25%;
        padding: 10px;
        box-sizing: border-box;
    }

    .profile {
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background: #fff;
        text-align: center;
    }

    .profile img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .profile h3 {
        font-size: 1.2rem;
        color: #333;
        margin: 10px 0;
    }

    .profile p {
        font-size: 0.9rem;
        color: #666;
    }

    #tutor-button {
        position: absolute;
        top: 65%;
        transform: translateY(-50%);
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 50%;
    }

    #tutor-button:hover {
        background: #0056b3;
    }

    #tutor-button.prev {
        left: 10px;
    }

    #tutor-button.next {
        right: 10px;
    }

    @media screen and (max-width: 768px) {
        .carousel-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .profile img {
            width: 80px;
            height: 80px;
        }
    }

    @media screen and (max-width: 480px) {
        .carousel-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        /* button {
            display: none;
        } */
    }

    .instructor-carousel p {
        color: #333;
        margin-bottom: 30px;
    }

</style>
<section class="instructor-carousel">
    <h2 class="section-title">Meet Our Expert Instructor</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quo!</p>
    <div class="carousel">
        <div class="carousel-item">
            <div class="profile">
                <img src="assets/icon/teacher.png" alt="Jai Rai Sir">
                <h3>Jai Rai Sir</h3>
                <p>Founder & CEO</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="profile">
                <img src="assets/icon/teacher.png" alt="Dr. Sarin Vijay Mythry">
                <h3>Dr. Sarin Vijay Mythry</h3>
                <p>B.Tech, M.E, PhD</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="profile">
                <img src="assets/icon/teacher.png" alt="Ranjeet Kumar">
                <h3>Ranjeet Kumar</h3>
                <p>BTech from NIT</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="profile">
                <img src="assets/icon/teacher.png" alt="Satykam Sir">
                <h3>Satykam Sir</h3>
                <p>MSc for chemistry</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="profile">
                <img src="assets/icon/teacher.png" alt="Dr. Pravesh Kumar">
                <h3>Dr. Pravesh Kumar</h3>
                <p>PhD chemistry</p>
            </div>
        </div>
    </div>
    <button class="prev" id="tutor-button" onclick="prevSlide()">&#10094;</button>
    <button class="next" id="tutor-button" onclick="nextSlide()">&#10095;</button>
</section>

<script>
    /* script.js */
    const carousel = document.querySelector('.carousel');
    let currentIndex = 0;
    let autoplayInterval;

    // Function to show the next slide
    function nextSlide() {
        const items = document.querySelectorAll('.carousel-item');
        currentIndex = (currentIndex + 1) % items.length;
        carousel.scrollLeft = carousel.offsetWidth * currentIndex;
    }

    // Function to show the previous slide
    function prevSlide() {
        const items = document.querySelectorAll('.carousel-item');
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        carousel.scrollLeft = carousel.offsetWidth * currentIndex;
    }

    // Function to start autoplay
    function startAutoplay() {
        autoplayInterval = setInterval(nextSlide, 3000); // Change slides every 3 seconds
    }

    // Function to stop autoplay
    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    // Add event listeners for hover to stop and start autoplay
    carousel.addEventListener('mouseover', stopAutoplay);
    carousel.addEventListener('mouseout', startAutoplay);

    // Start autoplay on page load
    startAutoplay();

</script>
<!-- end of the tutor section -->

<!-- CTA Buttons -->


<style>
    /* General Reset */
.popular-courses {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
  padding: 30px 0;
}

.course-card {
  position: relative;
  width: 550px;
  height: 250px;
  border-radius: 15px;
  overflow: hidden;
  text-align: left;
  color: #fff;
}

.course-card img {
  width: 50%;
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  object-fit: cover;
}

.course-card .content {
  padding: 60px;
  z-index: 2;
  position: relative;
  max-width: 60%;
}

.course-card h4 {
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
}

.course-card h2 {
  margin: 10px 0;
  font-size: 18px;
}

.course-card .btn {
  display: inline-block;
  margin-top: 10px;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  background-color: rgba(255, 255, 255, 0.2);
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.course-card .btn:hover {
  background-color: rgba(255, 255, 255, 0.4);
}

.course-card.blue {
  background: linear-gradient(135deg, #007bff, #0056b3);
}

.course-card.red {
  background: linear-gradient(135deg, #ff4b5c, #d72638);
}

/* Responsive Design */
@media (max-width: 768px) {


 .course-card .content{
    padding: 60px 0 60px 17px !important;
    /* padding: 60px !important; */
 }

 .course-card h2{
    font-size: 15px;
    font-weight: 600;
 }

  .course-card {
    width: 100%;
    height: auto;
  }

  .course-card img {
    width: 40%;
  }

  .course-card .content {
    max-width: 100%;
  }
  .popular-courses{
    flex-wrap: wrap !important;
  }

}

@media (max-width: 1160px) {
    .course-card .content {
        padding: 30px;
    }
    .popular-courses{
        flex-wrap: nowrap;
    }

}


  </style>

  <section class="popular-courses">
    <div class="course-card blue">
      <div class="content">
        <h4>POPULAR COURSES</h4>
        <h2>Get The Best Courses & Upgrade Your Skills</h2>
        <a href="#" class="btn">JOIN WITH US →</a>
      </div>
      <img src="assets/student-img.png" alt="Student">
    </div>
    <div class="course-card red">
      <div class="content">
        <h4>POPULAR COURSES</h4>
        <h2>Engaging Courses for Intellectual Exploration</h2>
        <a href="#" class="btn">EXPLORE COURSES →</a>
      </div>
      <img src="assets/student-img1.png" alt="Student">
    </div>
  </section>

@endsection

