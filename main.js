var contents = document.querySelectorAll('.switch');
var navBtns = document.querySelectorAll('.nav-item');
activeBtn = navBtns[0];
activeContent = contents[0];

const refreshButton = navBtns[0];

const refreshPage = () => {
  window.location.reload();
}

refreshButton.addEventListener('click', refreshPage)
document.onclick = () => {
  if (!document.onclick) {
    setTimeout(() => {
      refreshPage();
    }, 5000);
  }
}

for (let i = 0; i < contents.length; i++) {

  navBtns[i].onclick = () => {

    activeBtn.classList.remove('active');
    navBtns[i].classList.toggle('active');

    if (activeBtn == navBtns[3]) {
      document.querySelector('.events .heading').style = 'animation: outDown linear 1.5s';
      document.querySelector('.events .event-item.two').style = 'animation: outLeft linear 1.4s .3s';
      document.querySelector('.events .event-item.three').style = 'animation: outLeft linear 1.1s .5s';
      document.querySelector('.events .event-item.four').style = 'animation: outLeft linear  .9s .7s';
      document.querySelector('.events .event-item.five').style = 'animation: outLeft linear .7s .9s';
      document.querySelector('.events .event-item.six').style = 'animation: outLeft linear .5s 1.2s';
      document.querySelector('.events .pagination.six').style = 'animation: outUp linear .4s 1.2s';
      // activeContent.style = 'animation: outLeft linear 1.5s .1s';

      setTimeout(function () {
        activeContent.classList.remove('active');
        contents[i].classList.toggle('active');
        activeBtn = navBtns[i];
        activeContent = contents[i];
      }, 1500)
    } else {
      activeContent.style = 'animation: fadeOut linear 1s';
      setTimeout(function () {
        activeContent.classList.remove('active');
        activeBtn = navBtns[i];
        setTimeout(() => {
          activeContent = contents[i];
          contents[i].classList.toggle('active');
        }, 500);
        activeContent.style = 'none';
        document.querySelector('.events .heading').style = 'none';
        document.querySelector('.events .event-item.two').style = 'none';
        document.querySelector('.events .event-item.three').style = 'none';
        document.querySelector('.events .event-item.four').style = 'none';
        document.querySelector('.events .event-item.five').style = 'none';
        document.querySelector('.events .event-item.six').style = 'none';
        document.querySelector('.events .pagination.six').style = 'none';
      }, 1000)
    }

  }
}


var floors = document.querySelectorAll('.floor .num');
var maps = document.querySelectorAll('.contain .map');
var footers = document.querySelectorAll('.footer-icon .footer');

floors[1].onclick = () => {
  maps[1].classList.remove('active');
  footers[1].classList.remove('active');
  floors[0].classList.remove('active');
  maps[0].classList.add('active');
  footers[0].classList.add('active');
  floors[1].classList.add('active');
}

floors[0].onclick = () => {
  maps[0].classList.remove('active');
  footers[0].classList.remove('active');
  floors[1].classList.remove('active');
  maps[1].classList.add('active');
  footers[1].classList.add('active');
  floors[0].classList.add('active');
}



var eventModal = document.querySelector('.events .modal')
var eventBtns = document.querySelectorAll('.event-item .detail');
var closeModal = document.querySelector('.events .modal .close-modal')
var floorModal = document.querySelector('.floor-map .modal')
var bubbles = document.querySelectorAll('.bubbles .fukidashi');
var closeFloor = document.querySelector('.floor-map .modal .close-modal button')
console.log(floorModal, closeFloor);

closeModal.onclick = () => {
  eventModal.classList.remove('active')
}

closeFloor.onclick = () => {
  floorModal.classList.remove('active')
}

for (let eventBtn of eventBtns) {
  eventBtn.onclick = () => {
    eventModal.classList.toggle('active');
  }
}

for (let bubble of bubbles) {
  bubble.onclick = () => {
    floorModal.classList.toggle('active');
  }
}






$(document).ready(function () {

  $(".newslide, .booksslide").each(function () {
    $(this).owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      dots: true,
      autoplay: true,
      autoplaySpeed: 500,
      smartSpeed: 600,
      slideTransition: 'linear',
      margin: 600,
      autoplayHoverPause: true,
    });
  });
});


const contain = document.querySelector(".news .newslide");

for (let i = 0; i < slideNew.length; i++) {

  let slideTag = 
  `<div class="slide slide${i+2}">
    <div class="slide-content">
      <img src="./Assets/slideshow1/${slideNew[i].url}" alt="">
    </div>
  </div>`;
  contain.insertAdjacentHTML("beforeend", slideTag); 
}