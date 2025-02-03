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

