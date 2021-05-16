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
        header.classList.add("header");
    } else {
        let header = document.querySelector("header");
        let navbar = document.querySelectorAll(".nav-link");
        let navList = [...navbar];
        header.classList.remove(".header");
        navList.forEach((val) => {
            val.style.color = "black";
        });
    }
})();
