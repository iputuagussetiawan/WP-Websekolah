
import 'swiper/css/bundle';
import Swiper from 'swiper/bundle';
const swiper = new Swiper('.banner-slider', {
    // Optional parameters
    loop: true,
    grabCursor: true,
    //effect: "fade",
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
  const testimonial = new Swiper('.testimonial', {
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