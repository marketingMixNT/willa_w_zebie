const navbar = document.querySelector("#navbar");
let isNavbarShown = false;

const navbarOnScroll = () => {
    let scrollPosition = window.scrollY;

    if (scrollPosition >= 250) {
        if (!isNavbarShown) {
            navbar.classList.add("show");
            navbar.classList.remove("hiddenNavbar");
            isNavbarShown = true;
        }
    } else if (isNavbarShown) {
        navbar.classList.remove("show");
        navbar.classList.add("hiddenNavbar");
        isNavbarShown = false;
    }
};

window.addEventListener("scroll", navbarOnScroll);
