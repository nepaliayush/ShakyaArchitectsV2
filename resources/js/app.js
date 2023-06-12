import './bootstrap';
import '@fortawesome/fontawesome-free/js/all';
import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import swal from 'sweetalert';


// Initialize Swiper
var swiper = new Swiper(".swiper", {
  direction:'horizontal',
  loop: true,
  effect:"fade",

  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar

  // And if we need scrollbar
});
