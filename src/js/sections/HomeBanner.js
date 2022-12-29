
import 'swiper/css/bundle';
import Swiper from 'swiper/bundle';
import anime from 'animejs/lib/anime.es.js';

class HomeBanner {
    constructor() {
        //this.testimonial = '';
        // this.dropdowns = document.querySelectorAll(".dropdown")
        // this.scrollToTopBtn=document.querySelector(".button-gotop");
        // this.lastScrollTop = 0;
    }
    initBannerHomeSlider(){
        let BannerSlider = new Swiper('.banner-slider', {
            // Optional parameters
            loop: true,
            grabCursor: true,
            effect: "fade",
            // If we need pagination
            pagination: {
                el: '.banner-slider-pagination',
                clickable:true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.banner-slider-next',
                prevEl: '.banner-slider-prev',
            },
        });

        BannerSlider.on("slideChangeTransitionStart", function () {
            // anime({
            //     targets: ".swiper-slide-active .banner__image img",
            //     scale: [1.2, 1],
            //     opacity: [0, 1],
            //     easing: "easeInOutQuart",
            // });
    
            anime({
                targets: ".swiper-slide-active .banner__info-container .element",
                translateY: [50, 0],
                opacity: [0, 1],
                delay: anime.stagger(100, { start: 100 }),
                easing: "easeInOutQuart",
            });
        });
    }
}
  
export default HomeBanner