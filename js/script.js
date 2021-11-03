//MENU RESPONSIVE
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});


//Video Slider Nav
const btnsSlide = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

let sliderNav = function (manual) {
    btnsSlide.forEach((btn) => {
        btn.classList.remove("active")
    });

   slides.forEach((slide) => {
        slide.classList.remove("active")
    });

    contents.forEach((content) => {
        content.classList.remove("active")
    });

    btnsSlide[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
}

btnsSlide.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    })
});
