@extends('frontend.layouts.app')
<link href="{{ asset(path: 'assets/css/about.css') }}" rel="stylesheet" />

@section('title') {{app_name()}} @endsection

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

