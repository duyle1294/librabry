var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
});

var bg = document.getElementById("bgHolder");
TweenLite.to(bg, 10, { css: { x: 500, y: 700 } });
TweenLite.to(bg, 10, { css: { scale: 3 } });