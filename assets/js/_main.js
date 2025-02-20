const slides = document.querySelectorAll('.hero__slider--slide');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const prevButtonTablet = document.getElementById('prev-tablet');
const nextButtonTablet = document.getElementById('next-tablet');
const prevButtonMobile = document.getElementById('prev-mob');
const nextButtonMobile = document.getElementById('next-mob');
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
  });

  slides[index].classList.add('active');

  const offset = -index * 100;
  document.querySelector('.hero__slider--wrapper').style.transform = `translateX(${offset}%)`;

  updateButtonsState();
}

function updateButtonsState() {
  if (currentIndex === 0) {
    prevButton.disabled = true;
    prevButtonTablet.disabled = true;
    prevButtonMobile.disabled = true;
  } else {
    prevButton.disabled = false;
    prevButtonTablet.disabled = false;
    prevButtonMobile.disabled = false;
  }

  if (currentIndex === slides.length - 1) {
    nextButton.disabled = true;
    nextButtonTablet.disabled = true;
    nextButtonMobile.disabled = true;
  } else {
    nextButton.disabled = false;
    nextButtonTablet.disabled = false;
    nextButtonMobile.disabled = false;
  }
}

nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
});

nextButtonTablet.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
});

nextButtonMobile.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
});

prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
});
prevButtonTablet.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
});
prevButtonMobile.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
});

showSlide(currentIndex);




// carer slider

let currentSlide = 0;

const secondaryCards = document.querySelectorAll(".career__slide--secondary");


secondaryCards.forEach((card, index) => {
  const parentSlide = card.closest(".career__slide");
  const nextSlide = parentSlide?.nextElementSibling;

  if (!nextSlide || nextSlide.querySelector(".career__slide--basic")) {
    card.style.setProperty("--before-width", "314px");
  }
});


const prevSlideButton = document.getElementById('prev-career');
const nextSlideButton = document.getElementById('next-career');
const prevSlideButtonMobile = document.getElementById('prev-career-mobile');
const nextSlideButtonMobile = document.getElementById('next-career-mobile');

prevSlideButton.addEventListener('click', () => changeSlide(-1));
nextSlideButton.addEventListener('click', () => changeSlide(1));
prevSlideButtonMobile.addEventListener('click', () => changeSlide(-1));
nextSlideButtonMobile.addEventListener('click', () => changeSlide(1));

updateNavigationButtons();

function updateNavigationButtons() {
  const slides = document.querySelectorAll('.career__slide');

  const isAtStart = currentSlide === 0;
  const isAtEnd = currentSlide === slides.length - 1;

  prevSlideButton.disabled = isAtStart;
  nextSlideButton.disabled = isAtEnd;
  prevSlideButtonMobile.disabled = isAtStart;
  nextSlideButtonMobile.disabled = isAtEnd;
}

function changeSlide(direction) {
  const slides = document.querySelectorAll('.career__slide');
  const totalSlides = slides.length;

  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
  slides[currentSlide].classList.add('active');

  const sliderContent = document.querySelector('.career__slider-content');

  sliderContent.style.transform = `translateX(-${currentSlide * (354 + 20)}px)`;

  updateNavigationButtons();
}




// copy promo to clipboard
document.querySelectorAll(".copy-button").forEach((button) => {
  button.addEventListener("click", function () {
    const input = this.previousElementSibling;
    if (input && input.tagName === "INPUT") {
      navigator.clipboard.writeText(input.value);
    }
  });
});


