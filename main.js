var contents = document.querySelectorAll('.switch');
var navBtns = document.querySelectorAll('.nav-item');
activeBtn = navBtns[0];
activeContent = contents[0];

for (let i = 0; i < contents.length; i++) {

  navBtns[i].onclick = () => {
    for (const eventItem of eventItems) {
      eventItem.style = 'display: none';
    }
    activeBtn.classList.remove('active');
    navBtns[i].classList.toggle('active');
    iconArea()
    document.querySelector('.map .bubbles').classList.remove('hide')

    if (activeBtn == navBtns[3]) {
      document.querySelector('.events .heading').style = 'animation: outDown linear 1.5s';
      document.querySelector('.events .event-item.item-1').style = 'animation: outLeft linear 1.5s .2s';
      document.querySelector('.events .event-item.item-2').style = 'animation: outLeft linear 1.3s .4s';
      document.querySelector('.events .event-item.item-3').style = 'animation: outLeft linear 1.2s .5s';
      document.querySelector('.events .event-item.item-4').style = 'animation: outLeft linear 1.1s .6s';
      document.querySelector('.events .event-item.item-5').style = 'animation: outLeft linear .9s .8s';
      document.querySelector('.events .pagination.six').style = 'animation: outUp linear .9s .8s';
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
        document.querySelector('.events .event-item.item-1').style = 'none';
        document.querySelector('.events .event-item.item-2').style = 'none';
        document.querySelector('.events .event-item.item-3').style = 'none';
        document.querySelector('.events .event-item.item-4').style = 'none';
        document.querySelector('.events .event-item.item-5').style = 'none';
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
  offArea()
}

floors[0].onclick = () => {
  maps[0].classList.remove('active');
  footers[0].classList.remove('active');
  floors[1].classList.remove('active');
  maps[1].classList.add('active');
  footers[1].classList.add('active');
  floors[0].classList.add('active');
  offArea()
}



var eventModals = document.querySelectorAll('.events .modal')
var eventBtns = document.querySelectorAll('.event-item .detail');
var closeModals = document.querySelectorAll('.events .modal .close-modal')
var bubbles = document.querySelectorAll('.fukidashi');
var floorModal = document.querySelector('.floor-map .modal')
var closeFloor = document.querySelector('.floor-map .modal .close-modal button')
console.log(bubbles);

for (let index = 0; index < eventModals.length; index++) {
  
  eventBtns[index].onclick = () =>{
    eventModals[index].classList.toggle('active')
  }

  closeModals[index].onclick = () =>{
    eventModals[index].classList.remove('active')
  }
  
}


closeFloor.onclick = () => {
  floorModal.classList.remove('active')
}

for (let bubble of bubbles) {
  bubble.onclick = () => {
    floorModal.classList.toggle('active');
    console.log(bubble);
  }
}

// icon area function
var icons = document.querySelectorAll('.footer-icon .icon')
var areas = document.querySelectorAll('.map .area')

function offArea() {
  for (const icon of icons) {
    icon.classList.remove('active')
  }
  for (const area of areas) {
    area.classList.remove('active')
  }
  document.querySelector('.map .bubbles').classList.remove('hide')
}

function iconArea() {
  for (const icon of icons) {
    icon.classList.remove('active')
  }
  for (const area of areas) {
    area.classList.remove('active')
  }
  document.querySelector('.map .bubbles').classList.add('hide')
}

document.querySelector('.icon.icon-1').onclick = () => {
  if (!document.querySelector('.icon.icon-1').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-1').classList.toggle('active')
    document.querySelector('.area.icon-1-2').classList.toggle('active')
    document.querySelector('.icon.icon-1').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-2').onclick = () => {
  if (!document.querySelector('.icon.icon-2').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-2').classList.toggle('active')
    document.querySelector('.icon.icon-2').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-3').onclick = () => {
  if (!document.querySelector('.icon.icon-3').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-3').classList.toggle('active')
    document.querySelector('.icon.icon-3').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-4').onclick = () => {
  if (!document.querySelector('.icon.icon-4').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-4').classList.toggle('active')
    document.querySelector('.icon.icon-4').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-5').onclick = () => {
  if (!document.querySelector('.icon.icon-5').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-5').classList.toggle('active')
    document.querySelector('.icon.icon-5').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-6').onclick = () => {
  if (!document.querySelector('.icon.icon-6').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-6').classList.toggle('active')
    document.querySelector('.icon.icon-6').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.floor-1.icon-7').onclick = () => {
  if (!document.querySelector('.floor-1.icon-7').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-7').classList.toggle('active')
    document.querySelector('.floor-1.icon-7').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-8').onclick = () => {
  if (!document.querySelector('.icon.icon-8').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-8').classList.toggle('active')
    document.querySelector('.icon.icon-8').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.floor-1.icon-9').onclick = () => {
  if (!document.querySelector('.icon.icon-9').classList.contains('active')) {
    iconArea()
    document.querySelector('.floor-1.icon-9').classList.toggle('active')
    document.querySelector('.floor-1.icon-9').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-10').onclick = () => {
  if (!document.querySelector('.icon.icon-10').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-10').classList.toggle('active')
    document.querySelector('.area.icon-10-2').classList.toggle('active')
    document.querySelector('.area.icon-10-3').classList.toggle('active')
    document.querySelector('.icon.icon-10').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-11').onclick = () => {
  if (!document.querySelector('.icon.icon-11').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-11').classList.toggle('active')
    document.querySelector('.icon.icon-11').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-12').onclick = () => {
  if (!document.querySelector('.icon.icon-12').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-12').classList.toggle('active')
    document.querySelector('.area.icon-12-2').classList.toggle('active')
    document.querySelector('.icon.icon-12').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-13').onclick = () => {
  if (!document.querySelector('.icon.icon-13').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-13').classList.toggle('active')
    document.querySelector('.icon.icon-13').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-14').onclick = () => {
  if (!document.querySelector('.icon.icon-14').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-14').classList.toggle('active')
    document.querySelector('.icon.icon-14').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-15').onclick = () => {
  if (!document.querySelector('.icon.icon-15').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.icon-15').classList.toggle('active')
    document.querySelector('.icon.icon-15').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.icon.icon-2').onclick = () => {
  if (!document.querySelector('.icon.icon-2').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.floor-2').classList.toggle('active')
    document.querySelector('.icon.icon-2').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.floor-2.icon-8').onclick = () => {
  if (!document.querySelector('.floor-2.icon-8').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.floor-8').classList.toggle('active')
    document.querySelector('.floor-2.icon-8').classList.toggle('active')
  } else {
    offArea()
  }
}

document.querySelector('.floor-2.icon-10').onclick = () => {
  if (!document.querySelector('.floor-2.icon-10').classList.contains('active')) {
    iconArea()
    document.querySelector('.area.floor-10').classList.toggle('active')
    document.querySelector('.floor-2.icon-10').classList.toggle('active')
  } else {
    offArea()
  }
}




let next = '';

$(window).click(function () {

  clearTimeout(next);

  next= setTimeout(() => {
    location.reload(true)
  }, 40000);

});

$(document).ready(function () {

  next= setTimeout(() => {
    location.reload(true)
  }, 40000);

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

let bookslides = document.querySelectorAll('.books .booksslide .slide');
let newslides = document.querySelectorAll('.news .newsslide .slide');
let eventItems = document.querySelectorAll('.event-item');


let rows = 5;
let paginations = Math.ceil(eventItems.length / rows)

const contain = document.querySelector(".events .pagination");

for (let index = 0; index < paginations; index++) {
  let pagBtn = `<div class="btn">${index + 1}</div>`
  contain.insertAdjacentHTML("beforeend", pagBtn);
}

let pagBtns = document.querySelectorAll('.pagination .btn')
for (const eventItem of eventItems) {
  eventItem.style = 'display: none';
}
activePag = pagBtns[0]
activePag.classList.toggle('active')

for (let i = 0; i < paginations; i++) {
  pagBtns[i].onclick = () => {
    activePag.classList.remove('active')
    pagBtns[i].classList.toggle('active');
    activePag = pagBtns[i]
    for (const eventItem of eventItems) {
      eventItem.style = 'display: none';
    }

    let start = i * rows;
    if ((i * rows) + rows < eventItems.length) {
      end = start + rows
    } else {
      end = eventItems.length
    }

    for (j = start; j < end; j++) {
      const item = eventItems[j];
      item.style = 'display: block'
    }
  }
}

