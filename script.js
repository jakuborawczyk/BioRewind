
/*------------------------- HERO SLIDER----------------------------------- -----*/
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.hero-slide');
    const slides = carousel.querySelectorAll('.slide');
    const indicators = carousel.querySelectorAll('.spanCircle');
    const leftArrow = carousel.querySelector('.arrow.left');
    const rightArrow = carousel.querySelector('.arrow.right');
    
    let currentSlideIndex = 0;
    const totalSlides = slides.length;

    function updateCarousel() {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        slides[currentSlideIndex].classList.add('active');
        indicators[currentSlideIndex].classList.add('active');
    }

    function moveSlide(direction) {
        currentSlideIndex += direction;
        
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = totalSlides - 1;
        }
        
        updateCarousel();
    }

    /*----- Click event listener for carousel -----*/
    carousel.addEventListener('click', (event) => {
        /*----- Carousel width -----*/
        const carouselWidth = carousel.offsetWidth;
        
        /*----- Calculate the click position relative to the carousel -----*/
        const clickPosition = event.clientX - carousel.getBoundingClientRect().left;
        
        /*----- 50% of image react to click -----*/
        if (clickPosition < carouselWidth / 2) {
            moveSlide(-1);
        } else {
            moveSlide(1);
        }
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', (e) => {
            e.stopPropagation();
            currentSlideIndex = index;
            updateCarousel();
        });
    });
});

/*-------------------------------FOR POPUP-----------------------------------------------------*/
window.addEventListener("DOMContentLoaded", () => {
    // Show popup after 10 seconds
    setTimeout(() => {
      const popupContainer = document.querySelector(".popup-container");
      popupContainer.classList.add("show");
    }, 10000); /* 10  sec to show */
  
    // Close popup with fade-out animation
    const closePopup = () => {
      const popupContainer = document.querySelector(".popup-container");
      popupContainer.classList.remove("show");
      popupContainer.classList.add("hide"); // Trigger fade-out animation
    };
  
    // Close button functionality
    document.querySelector(".close-btn").addEventListener("click", closePopup);
  
    // "Nej Tack" functionality
    document.querySelector(".nej-tack").addEventListener("click", closePopup);
  });
  
  // Form validation
  document.getElementById("popup-form").addEventListener("submit", (e) => {
    e.preventDefault(); // Prevent form submission
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
  
    // Simple validation
    if (name === "" || email === "") {
      alert("Fyll i alla fält."); // Alert if fields are empty
      return;
    }
  
    if (!validateEmail(email)) {
      alert("Ange en giltig e-postadress.");
      return;
    }
  
    alert("Tack för att du registrerade dig!");
    closePopup(); // Close popup after successful submission
  });
  
  // Email validation function
  function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }
  
  // JavaScript for Slideshow Navigation
  const slides = document.querySelectorAll(".slide");
  const prevButtons = document.querySelectorAll(".arrow.left");
  const nextButtons = document.querySelectorAll(".arrow.right");
  let currentSlide = 0;
  
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
    });
  }
  
  prevButtons.forEach((button) => {
    button.addEventListener("click", () => {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    });
  });
  
  nextButtons.forEach((button) => {
    button.addEventListener("click", () => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    });
  });
  
  /* FOR NON POPUP SUBMISSION FOR NEWSLETTER */
  document.querySelector("#newsletter-form").addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Tack för att du registrerade dig!");
  });

  

