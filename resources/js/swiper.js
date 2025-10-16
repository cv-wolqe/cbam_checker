// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle'; 

let swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,           
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
          1000: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1200: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1600: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
          2500: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
});