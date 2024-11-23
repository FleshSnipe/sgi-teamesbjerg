const carousel = document.getElementById('carousel');
const slides = carousel.children;
const totalSlides = slides.length;
let index = 0;

function autoSlide() {
    index = (index + 1) % totalSlides;
    updateCarousel();
}

function updateCarousel() {
    carousel.style.transform = `translateX(-${index * 100}%)`;
}

setInterval(autoSlide, 3200);