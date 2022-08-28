const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button
nextBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });

    slideNumber++;

    if (slideNumber > (numberOfSlides - 1)) {
        slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });

    slideNumber--;

    if (slideNumber < 0) {
        slideNumber = numberOfSlides - 1;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});

//image slider autoplay
var playSlider;

var repeater = () => {
    playSlider = setInterval(function () {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumber++;

        if (slideNumber > (numberOfSlides - 1)) {
            slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
    }, 4000);
}
repeater();

//stop the image slider autoplay on mouseover
slider.addEventListener("mouseover", () => {
    clearInterval(playSlider);
});

//start the image slider autoplay again on mouseout
slider.addEventListener("mouseout", () => {
    repeater();
});
var swiper = new Swiper('.marqueswiper', {
    slidesPerView: 4,
    spaceBetween: 20,
    slidesPerGroup: 1,
    // loop: true,
    autoplay: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        420: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is >= 480px
        680: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        // when window width is >= 640px
        988: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 40
        }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
var swiper = new Swiper(".cardswiper", {
    effect: "cards",
    grabCursor: true,
    autoplay: true,
});
var swiper = new Swiper('.proswiper', {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 4,
    // loop: true,
    autoplay: true,
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        420: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is >= 480px
        680: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        // when window width is >= 640px
        988: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 40
        }
    },
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
