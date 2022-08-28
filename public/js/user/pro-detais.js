var show_more = document.getElementById('show-more');
var height = document.getElementById('descri');
var down = document.getElementById('down');
var shwo = document.getElementById('show');
show_more.addEventListener('click', function () {
    height.classList.toggle('active');
    if (height.classList.contains('active')) {
        down.classList.remove('fa-chevron-down')
        down.classList.add('fa-angle-up')
        shwo.innerText = "montre Moins"
    } else {
        down.classList.add('fa-chevron-down')
        down.classList.remove('fa-angle-up')
        shwo.innerText = "montre plus"
    }
});

const imageEl = document.querySelector('.image-container');
const image = document.querySelector('.image-container img');
const listImageEl = document.querySelector('.list-image');

//Precentage of the zoom
const ZOOM = 250;

//Event Mouse Enter
imageEl.addEventListener('mouseenter', function () {
    image.style.width = ZOOM + '%'
})

//Event Mouse Leave
imageEl.addEventListener('mouseleave', function () {
    image.style.width = '100%'
    image.style.top = '0'
    image.style.left = '0'
})

//Event mouse Move
imageEl.addEventListener('mousemove', function (mouseEvent) {
    let obj = imageEl;
    let obj_left = 0;
    let obj_top = 0;
    let xpos;
    let ypos;
    while (obj.offsetParent) {
        obj_left += obj.offsetLeft;
        obj_top += obj.offsetTop;
        obj = obj.offsetParent;
    }
    if (mouseEvent) {
        //FireFox
        xpos = mouseEvent.pageX;
        ypos = mouseEvent.pageY;
    } else {
        //IE
        xpos = window.event.x + document.body.scrollLeft - 2;
        ypos = window.event.y + document.body.scrollTop - 2;
    }
    xpos -= obj_left;
    ypos -= obj_top;

    const imgWidth = image.clientWidth;
    const imgHeight = image.clientHeight;

    image.style.top = -(((imgHeight - this.clientHeight) * ypos) / this.clientHeight) + 'px';
    image.style.left = -(((imgWidth - this.clientWidth) * xpos) / this.clientWidth) + 'px';
});

//change the current image
Array.from(listImageEl.children).forEach((listImg, i, list) => {
    listImg.addEventListener('click', function () {
        const newSrc = listImg.querySelector('img').src;
        image.src = newSrc;

        list.forEach(prod => prod.classList.remove('image-active'));
        listImg.classList.add('image-active');
    })
});

//change height of the image container
function changeHeight() {
    imageEl.style.height = imageEl.clientWidth + 'px';
}
changeHeight();
window.addEventListener('resize', changeHeight);

var swiper = new Swiper('.proswiper', {
    slidesPerView: 5,
    spaceBetween: 50,
    slidesPerGroup: 1,
    // loop: true,
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
        880: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 40
        }
    },
    autoplay: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});