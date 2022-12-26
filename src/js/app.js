
//1. Import Export 
import { Tooltip, Toast,Modal,Offcanvas} from 'bootstrap';
import AOS from 'aos';
import Navbar from './modules/Navbar'

//2. init
AOS.init({
    duration: 1000,
    once: true,
});
const navbar=new Navbar();
navbar.events();

window.addEventListener("resize", function(){
    if (window.innerWidth >=992 ) {
        navbar.dropdownHover();
    }else{
        navbar.dropdownClick();
    }
});





