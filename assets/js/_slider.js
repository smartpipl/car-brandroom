import Swiper from "swiper";
import 'swiper/css';

const swiper = new Swiper('.insta-slider', {
  direction: 'horizontal',
  loop: true,
  spaceBetween: 10,
  slidesPerView: 'auto',
  freeMode: false,
  speed: 8000,
});

let scrollInterval = setInterval(() => {
  swiper.slideNext();
}, 50);


swiper.el.addEventListener('mouseenter', () => {
  clearInterval(scrollInterval);
});


swiper.el.addEventListener('mouseleave', () => {
  scrollInterval = setInterval(() => {
    swiper.slideNext();
  }, 50);
});
