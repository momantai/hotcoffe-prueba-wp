let barfloat = false;
let head = document.getElementById("header-sticky");

window.onscroll = (evt) => {
    if(!barfloat && document.documentElement.scrollTop >= 300) {
        barfloat = true;
        head.classList.toggle('h-scroll');
    }

    if(barfloat && document.documentElement.scrollTop <= 300) {
        barfloat = false;
        head.classList.toggle('h-scroll')
    }
}