function displayTime() {
    let dateTime = new Date();
    let hrs = dateTime.getHours();
    let min = dateTime.getMinutes();
    if (min < 10) {
        min = `0${min}`
    } else {
        min = min
    }
    document.getElementById('time').innerHTML = `${hrs}:${min}`;
}

setInterval(displayTime, 1000);

function displayDate() {
    let dateTime = new Date();
    let lang = 'ja-JP',
        month = dateTime.toLocaleString(lang, { month: 'short' }),
        day = dateTime.toLocaleString(lang, { day: 'numeric' }),
        dayName = dateTime.toLocaleString(lang, { weekday: 'long' });
    document.getElementById('date').innerHTML = `${month}${day}(${dayName[0]})`
}

setInterval(displayDate, 1000)


let eventItems = document.querySelectorAll('.event-item');


let rows = 5;
let paginations = Math.ceil(eventItems.length / rows)

const contain = document.querySelector(".events .pagination");

for (let index = 0; index < paginations; index++) {
    let pagBtn = `<div class="btn">${index + 1}</div>`
    contain.insertAdjacentHTML("beforeend", pagBtn);
}

let pagBtns = document.querySelectorAll('.pagination .btn')
activePag = pagBtns[0]
activePag.classList.toggle('active')
let num = 0;

setInterval(() => {

    for (const item of eventItems) {
        item.style = 'display: none'
    }

    if (num < pagBtns.length) {
        num += 1;
    }
    if (num == pagBtns.length) {
        num = 0
    }
    console.log(num);

    activePag.classList.remove('active')
    pagBtns[num].classList.toggle('active')
    activePag = pagBtns[num];


    let start = num * rows;
    if ((num * rows) + rows < eventItems.length) {
        end = start + rows
    } else {
        end = eventItems.length
    }

    for (j = start; j < end; j++) {
        const item = eventItems[j];
        item.style = 'display: flex'
    }

}, 8300);

$(window).click(function () {

    clearTimeout(next);

    next = setTimeout(() => {
        location.reload(true)
    }, 49000);

});

$(document).ready(function () {

    next = setTimeout(() => {
        location.reload(true)
    }, 49000);


    $('.owl-carousel').owlCarousel({
        items: 1,
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        slideTransition: 'linear',
        animateOut: 'fadeOut',
    });
});

let myslide = document.querySelectorAll('.main-show');
let counter = 1;

let timer = setInterval(autoSlide, 24500);
function autoSlide() {
    counter += 1;
    slidefun(counter);
}
function currentSlide(n) {
    counter = n;
    slidefun(counter);
    resetTimer();
}
function resetTimer() {
    clearInterval(timer);
    timer = setInterval(autoSlide, 24000);
}
function slidefun(n) {

    let i;
    for (i = 0; i < myslide.length; i++) {
        myslide[i].style.display = "none";
    }

    if (n > myslide.length) {
        counter = 1;
    }
    if (n < 1) {
        counter = myslide.length;
    }
    setTimeout(() => {
        myslide[counter - 1].style.display = "block";
    }, 1000);
}


