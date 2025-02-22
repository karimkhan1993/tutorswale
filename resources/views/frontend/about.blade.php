@extends('frontend.layouts.app')
<link href="{{ asset(path: 'assets/css/about.css') }}" rel="stylesheet" />

@section('title') {{app_name()}} @endsection

@section('content')

<style>
    .banner {
        background-image: url('{{ Storage::url($aboutUs->banner_image) }}');
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
        <a href="{{ route('frontend.home') }}">Home</a> / <a href="javascript:void(0)">About Us</a>
    </nav>
</div>



<!-- end of banner section -->


<!-- cards section -->
<div class="top-features">
    <section class="features">

        <h2>Online Education Tailored to You</h2>
        <p class="subheading">Empowering you with knowledge anytime, anywhere.</p>
        <div class="features-container">
            @foreach($feature as $features)
            <div class="feature-card">
                <div class="icon"><img src="{{Storage::url($features->icon)}}" alt="Learn From Anywhere"></div>
                <h3>{{$features->title}}</h3>
                <p>{{$features->description}}</p>
            </div>
            @endforeach
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
                    <img class="mainImg" src="{{ asset( setting('aboutus_image')) }}">
                </div>
                <div class="responsive-container-block textSide">
                    <h2 class="text-blk heading">
                        About Us
                    </h2>
                    {!! setting('aboutus_description') !!}
                </div>
            </div>
        </div>
    </div>


<!-- end of about us section -->

<!-- counter section -->


<div class="container">
    <div class="counter-container">
        <div class="counter">
            <span class="number" data-target="{{$aboutUs->successfully_trained}}">0</span>
            <p>Successfully Trained</p>
        </div>
        <div class="counter">
            <span class="number" data-target="15800">{{$aboutUs->classes_completed}}</span>
            <p>Classes Completed</p>
        </div>
        <div class="counter">
            <span class="number" data-target="97500">{{$aboutUs->satisfaction_rate}}</span>
            <p>Satisfaction Rate</p>
        </div>
        <div class="counter">
            <span class="number" data-target="100200">{{$aboutUs->student_community}}</span>
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
        @foreach ($TutorManagement as $tutor)

        <div class="carousel-item">
            <div class="profile">
                <img src="{{asset('storage/tutorimage/'.$tutor->profile_image)}}" alt="Jai Rai Sir">
                <h3>{{$tutor->full_name}}</h3>
                <p>{{$tutor->qualification}}</p>
            </div>
        </div>
        @endforeach

        {{-- <div class="carousel-item">
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
        </div> --}}
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
        <h4>{{$aboutUs->popular_course_title1}}</h4>
        <h2>{{$aboutUs->popular_course_description1}}</h2>
        <a href="{{$aboutUs->popular_course_cta_link1}}" class="btn">{{$aboutUs->popular_course_cta_text1}} →</a>
      </div>
      <img src="{{Storage::url( $aboutUs->student_image_1)}}" alt="Student">
    </div>
    <div class="course-card red">
      <div class="content">
        <h4>{{$aboutUs->popular_course_title2}}</h4>
        <h2>{{$aboutUs->popular_course_description2}}</h2>
        <a href="{{$aboutUs->popular_course_cta_link2}}" class="btn">{{$aboutUs->popular_course_cta_text2}} →</a>
      </div>
      <img src="{{Storage::url( $aboutUs->student_image_2)}}" alt="Student">
    </div>
  </section>

@endsection

