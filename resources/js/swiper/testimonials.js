import Swiper from 'swiper';
import { Autoplay,Navigation,Pagination } from 'swiper/modules';
import 'swiper/swiper-bundle.css';

//TESTIMONIALS CAROUSEL
new Swiper(".testimonial-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay, Navigation, Pagination],
});