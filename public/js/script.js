(function () {
    let path = window.location.href;
    const link = document.querySelectorAll("a.nav-link");
    link.forEach((a) => {
        if (a.href == path) {
            a.classList.add("active");
        }
    });

    if (path.split("/")[4] == undefined) {
        let header = document.querySelector("header");
        let navbarIcon = document.querySelector(".navbar-toggler-icon");
        let nav = document.querySelector("nav");

        navbarIcon.addEventListener("click", () => {
            nav.classList.toggle("bg-dark");
        });

        navbarIcon.style.backgroundImage = "url('/assets/images/light.svg')";
        header.classList.add("header");
    } else {
        let header = document.querySelector("header");
        let navbar = document.querySelectorAll(".nav-link");
        let navbarIcon = document.querySelector(".navbar-toggler-icon");
        navbarIcon.style.backgroundImage = "url('/assets/images/dark.svg')";
        let navList = [...navbar];
        header.classList.remove(".header");
        navList.forEach((val) => {
            val.style.color = "black";
        });
    }
})();
