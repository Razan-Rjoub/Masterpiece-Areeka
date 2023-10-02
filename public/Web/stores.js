const slides = document.querySelectorAll('.slide');
let currentSlideIndex = 0;

function showSlide(index) {
  slides.forEach(slide => slide.style.display = 'none');
  slides[index].style.display = 'block';
}

function nextSlide() {
  currentSlideIndex = (currentSlideIndex + 1) % slides.length;
  showSlide(currentSlideIndex);
}

function prevSlide() {
  currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
  showSlide(currentSlideIndex);
}

// Autoplay the slider every 3 seconds
setInterval(nextSlide, 5000);

// Initial display of the first slide
showSlide(currentSlideIndex);