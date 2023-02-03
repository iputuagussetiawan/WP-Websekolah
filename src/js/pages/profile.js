import Testimonial from '../sections/testimonial'
const testimonial=new Testimonial();
testimonial.initTestimonialSlider();
window.addEventListener("scroll", function () {
	const parallax = document.querySelector(".parallax");
	let scrollPosition = window.pageYOffset;
	parallax.style.transform = "translateY(" + scrollPosition * 0.7 + "px)";
});