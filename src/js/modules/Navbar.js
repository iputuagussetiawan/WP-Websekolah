import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
gsap.registerPlugin(ScrollToPlugin);
class Navbar {
    constructor() {
        this.navHeader = document.querySelector('.navbar-custom');
        this.dropdowns = document.querySelectorAll(".dropdown")
        this.scrollToTopBtn=document.querySelector(".button-gotop");
        this.lastScrollTop = 0;
    }
    // 2. events
    events() {
        window.addEventListener("load", (event) => {
            if (window.innerWidth >=992 ) {
                this.dropdownHover();
            }else{
                this.dropdownClick();
            }
        });
        document.addEventListener("scroll", (event) => {
            let currentScrollPosition = window.scrollY;
            this.sticky(currentScrollPosition);
        });

        this.scrollToTopBtn.addEventListener('click', (event)=>{  
            event.preventDefault();
            gsap.to(window, {duration: 0.1, scrollTo: 0, ease: "power2.inOut"});
        });
    }
    // 3. methods (function, action...)
    sticky(currentScrollPosition) {
        if(currentScrollPosition<=0){
            this.navHeader.classList.remove('hide');
            this.navHeader.classList.remove('show');
        }
        else if(currentScrollPosition > this.lastScrollTop){
            this.navHeader.classList.add('hide');
            this.navHeader.classList.remove('show');
        } else {
            this.navHeader.classList.add('show');
            this.navHeader.classList.remove('hide');
        }
        this.lastScrollTop = currentScrollPosition;
        if(currentScrollPosition>750){
            this.scrollToTopBtn.classList.add('active')
          
        }else{
            this.scrollToTopBtn.classList.remove('active')
        }
    }

    dropdownHover = () => {
        this.dropdowns.forEach(dropdown => {
            dropdown.addEventListener("mouseenter", e => {
                e.preventDefault()
                let target=e.target
                let dropdownToggle=target.querySelector('.dropdown-toggle')
                let dropdownMenu=target.querySelector('.dropdown-menu')
                target.classList.add('show');
                dropdownToggle.classList.add('show');
                dropdownMenu.classList.add('show');
            })
            dropdown.addEventListener("mouseleave", e => {
                e.preventDefault()
                let target=e.target
                let dropdownToggle=target.querySelector('.dropdown-toggle')
                let dropdownMenu=target.querySelector('.dropdown-menu')
                target.classList.remove('show');
                dropdownToggle.classList.remove('show');
                dropdownMenu.classList.remove('show');
            })
        })
    }

    dropdownClick = () => {
        console.log('return click dropdown');
    }
}
  
export default Navbar