
import 'swiper/css/bundle';
import Swiper from 'swiper/bundle';

class Testimonial {
    constructor() {
        //this.testimonial = '';
        // this.dropdowns = document.querySelectorAll(".dropdown")
        // this.scrollToTopBtn=document.querySelector(".button-gotop");
        // this.lastScrollTop = 0;
    }

    initTestimonialSlider(){
        let testimonial = new Swiper('.testimonial', {
            slidesPerView: 1,
                spaceBetween: 30,
                dynamicBullets: true,
                loop: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                },
                pagination: {
                    el: ".testimonial-pagination",
                    clickable: true,
                },
          });
    }
}
  
export default Testimonial