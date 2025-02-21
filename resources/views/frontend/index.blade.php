@extends('frontend.layouts.app')
<link href="{{ asset(path: 'assets/css/index.css') }}" rel="stylesheet" />

@section('title') {{app_name()}} @endsection

@section('content')

<div class="carousel" id="main-banner">
    <div class="carousel-inner">
        <?php $slideKeys = ""; ?>
        @foreach ($banners as $key => $banner):
            <?php 
                if($key == 0){
                    $slideKeys .= "<button onclick='setSlide({$key})' class='active'></button>";
                }else{
                    $slideKeys .= "<button onclick='setSlide({$key})'></button>";
                }
             ?>
              <!-- Slide 1 -->
            <div class="carousel-item">
                <img src="{{asset('storage/banners/'.$banner->image)}}" alt="First Slide">
                <div class="carousel-content">
                    <h1>{{$banner->title}}</h1>
                    <p>{{$banner->description}}</p>
                    <a href="{{ url('/'.$banner->link) }}">Read More</a>
                </div>
            </div>  
        @endforeach
    </div>
    <button class="carousel-control-prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="carousel-control-next" onclick="moveSlide(1)">&#10095;</button>
    <div class="carousel-indicators">
        <?php echo $slideKeys; ?>
    </div>
</div>



<!--Phone banner-->



<div id="imageSlider">
    <div class="sliderContainer">
        <img src="{{asset('assets/phoneBanner.png')}}" alt="Image 1">
        <img src="{{asset('assets/banner-phone (1).png')}}" alt="Image 2">
        <img src="{{asset('assets/phoneBanner(2).png')}}" alt="Image 3">
    </div>
    <div class="navigationButtons">
        <button class="navButton" onclick="previousSlide()">&#10094;</button>
        <button class="navButton" onclick="nextSlide()">&#10095;</button>
    </div>
</div>


<!--Phone banner end-->

<!-- card section  -->





<div class="container">
    <!-- Main Heading -->
    <div class="text-center mb-4">
        <h1 class="fw-bold">Our Exclusive Classes</h1>
        <p class="text-muted">Explore the best learning opportunities for students of all grades</p>
    </div>

<!-- Cards -->
<div class="cards-container">
    @foreach($ExclusiveClass as $class)
        <div class="card">
            <h5 class="card-title">Class: {{ $class->class_name }}</h5>
            <h6 class="card-subtitle">Subjects: {{ $class->subject_name }}</h6>
            <p class="card-text">
                Sessions: {{ $class->description }}<br>
                Location: {{ $class->location }}<br>
                Date: {{ \Carbon\Carbon::parse($class->session_date)->format('F j, Y') }} <!-- Format session date -->
            </p>
            <a href="{{ route('frontend.contactus') }}" class="btns">Contact Now</a>
        </div>
    @endforeach
</div>

</div>


<!-- end of card section -->




<!-- about us sections -->



<div class="about-us">
    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container">
            <div class="imgContainer">
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


<!-- Counter section -->



<section id="about-prestige" class="about-section">
    <div class="containered">
        <div class="content-section">
            <h2 class="section-heading">Why Choose us?</h2>
            <div class="content">

                {!! setting('whyChooseUs_description') !!}

                <a href="{{ route('frontend.abutus') }}" class="btn">SEE DETAILS &rarr;</a>
            </div>
        </div>
        <div class="counter-section">
            {!! setting('whyChooseUs_statistic') !!}
        </div>
    </div>
</section>





<!-- Hiring A Tutor Easy section -->


<section class="tutoring-section">
    <h2 class="tutoring-header">Hiring A Tutor Easy</h2>
    <p class="tutoring-description">
            Streamline the Process of Hiring a Tutor with These Easy Steps.
    </p>

    <div class="tutoring-cards-container">
        {{-- @php $i = 0; @endphp --}}
        @foreach ($tutorhiring as $i => $hiring)
        <div class="tutoring-card">

            <img src="{{asset('storage/tutorhirings/'.$hiring->image)}}" alt="Search Icon" class="tutoring-card-icon">
            <h3 class="tutoring-card-title">{{ $hiring->heading }}</h3>
            <p class="tutoring-card-description">
                {{ $hiring->description }}
            </p>

        </div>
        @endforeach

    </div>
</section>



<!-- end tutor hiring section -->

<!-- mentors section -->



<section>
    <div class="mentor-section-container">
        <h2 class="mentor-section-heading">Mentor Profiles</h2>
        <p class="mentor-section-subtitle">Our Dedicated Team of Mentors</p>
        <div class="mentor-cards-wrapper">
            <!-- Mentor Card 1 -->
            <div class="mentor-profile-card">
                <span class="mentor-profile-badge">Verified</span>
                <span class="mentor-profile-social-icon">&#x21AA;</span>
                <img class="mentor-profile-image" src="{{asset('assets/icon/teacher.png')}}" alt="Mentor 1">
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
                <img class="mentor-profile-image" src="{{asset('assets/icon/teacher.png')}}" alt="Mentor 2">
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
                <img class="mentor-profile-image" src="{{asset('assets/icon/teacher.png')}}" alt="Mentor 3">
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
                <img class="mentor-profile-image" src="{{asset('assets/icon/teacher.png')}}" alt="Mentor 4">
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


<!-- Main Heading and Subheading -->
<h1 class="main-heading">Your Trusted Tutor, Just a Click Away</h1>
<p class="subheading">Your path to better grades starts here.</p>

<div class="testimonials-carousel">
    <div class="carousel-slide-track">
        @foreach ($testimonials as $testimonial)
            <div class="testimonial-item">
                <div class="testimonial-quote">❝</div>
                <p>
                    {{$testimonial->description}}
                </p>
                <h5>{{$testimonial->name}}</h5>
                <p>{{$testimonial->profession}}</p>
            </div>
        @endforeach
    </div>
    <div class="carousel-nav-buttons">
        <button id="prev">❮</button>
        <button id="next">❯</button>
    </div>
</div>


<!-- testimonials section end -->

<!--FAQ-->


<div class="main-container" style="background-color:#F8F8FF;">
<!-- Main Heading and Sub-content -->
<div class="title-section">
  <h1>Frequently Asked Questions</h1>
  <p>{!! setting('faq_description') !!}</p>
</div>

<!-- FAQ and Image Section -->
<div class="faq-container">
  <!-- FAQ Section -->
  <div class="faq-content-container">
    @foreach ($faqs as $faq)
        <div class="faq-entry">
        <button class="faq-header" onclick="toggleFAQ(this)">
            <span>{{$faq->title}}</span>
            <span class="toggle-icon">+</span>
        </button>
        <div class="faq-body">{{$faq->description}}</div>
        </div>
    @endforeach
  </div>

  <!-- Image Section -->
  <div class="faq-image-container">
    <img src="{{ url( setting('faq_image')) }}" alt="FAQ Illustration">
  </div>
</div>
</div>


<!--FAQ End-->


<!-- Contact us -->


<div class="contact-section">
    <div class="contact-image-container">
        <img src="{{asset('assets/why_choose_us.png')}}" alt="Why Choose Us">
    </div>
    <div class="contact-info">
        <h3>Contact Us</h3>
        <p>We’d love to hear from you! Fill out the form below and we’ll get back to you as soon as possible.</p>
        <div class="contact-form-wrapper">
            <form class="contact-form" action="{{ route('frontend.contactus.save') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Your Phone Number" required>
                <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
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
      <img src="{{asset('assets/icon/phone-call-blue.png')}}" alt="Indian Flag" class="learner-label-icon" />
      <p class="learner-label">Call Support</p>
    </div>
    <div class="learner-contact-card">
      <a href="tel:#" class="learner-phone-link">+91{{setting('telephone')}}</a>
    </div>
  </div>
  <div class="learner-contact-item">
    <div class="learner-label-with-icon">
      <img src="{{asset('assets/icon/email-blue.png')}}" alt="Globe Icon" class="learner-label-icon" />
      <p class="learner-label">Email Support</p>
    </div>
    <div class="learner-contact-card">
      <a href="mailto:#" class="learner-phone-link">{{setting('email')}}</a>
    </div>
  </div>
</div>
</div>
</div>


@endsection

{{-- @include('frontend.includes.footer') --}}
