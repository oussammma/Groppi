const up = document.querySelector('.goToTop');
window.onscroll = function () {
    if (this.scrollY >= 500) {
        up.classList.add('up-show')
    } else {
        up.classList.remove('up-show')
    }
}