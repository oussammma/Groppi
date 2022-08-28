const get_serash = document.querySelector('.get-searsh');
const serash = document.querySelector('.searsh');
get_serash.addEventListener('click', function () {
    serash.classList.toggle('show');
});

// nav slide
const nav_toggle = document.querySelector('.toggle button');
const navbar = document.querySelector('.phone-nav');
nav_toggle.addEventListener('click', function () {
    navbar.classList.toggle('nav-slide');
    if (navbar.classList.contains('nav-slide')) {
        nav_toggle.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        serash.classList.remove('show');
    } else {
        nav_toggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }
})

window.addEventListener('scroll', function() {
    var header = this.document.querySelector('.nav3')
    var body = this.document.querySelector('.body-cont')
    header.classList.toggle('sticky', this.window.scrollY > 160)
    body.classList.toggle('sticky', this.window.scrollY > 160)
})