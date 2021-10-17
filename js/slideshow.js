var slideIndex = 0;
showSlides();

// Next/previous controls
function changeSlide(n) {
    slideIndex += n;
    showSlides();
}

// Thumbnail image controls
function setSlide(n) {
    slideIndex = n;
    showSlides();
}

function showSlides() {
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");

    // Wrap slider when out of bounds
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    // Slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active")
    }
    slides[slideIndex].classList.add("active");

    // Dots
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active")
    }
    dots[slideIndex].classList.add("active");
}