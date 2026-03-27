'use strict';

/* ---------- transition screen ---------- */
window.onload = () => {
  const transition_el = document.querySelector('.transition');
  const anchors = document.querySelector('a');

  setTimeout( () => {
    transition_el.classList.remove('is-active');
  }, 500);

  for (let i = 0; i < anchors.length; i++) {
    const anchor = anchors[i];

    anchor.addEventListener('click', e => {
      e.preventDefault();
      let target = e.target.href;

      transition_el.classList.add('is-active');

      setTimeout( () => {
        window.location.href = target;
      }, 500);
    });
  }
}

/* ---------- menu toggle ---------- */
const menuToggle = document.querySelector('.menu-toggle');
const drawerNavigation = document.querySelector('.l-drawer-nav');

menuToggle.onclick = function() {
  menuToggle.classList.toggle('active');
  drawerNavigation.classList.toggle('open');
}

/* ---------- index-visual swiper ---------- */
const visualSwiper = new Swiper('.swiper01', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  loop: true,
  loopAdditionalSlides: 1,
  speed: 2000,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
    waitForTransition: false,
  },
  followFinger: false,
});

/* ---------- index-blog swiper ---------- */
const mySpeed = 8000;
const slideLength = document.querySelectorAll('.swiper02 .swiper-slide').length;

const changeTranslate = (swiper) => {
  let currentTranslate = swiper.getTranslate();
  let slideWidth = document.querySelector('.swiper02 .swiper-slide-active').offsetWidth;
  swiper.setTranslate(currentTranslate - slideWidth);
  swiper.setTransition(mySpeed);
}

const initSwiper = () => {
  const mySwiper = new Swiper('.swiper02', {
    slidesPerView: 'auto',
    spaceBetween: 16,
    loop: true,
    loopedSlides: slideLength,
    speed: mySpeed,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    freeMode: {
      enabled: true,
      momentum: false,
    },
    grabCursor: true,
    breakpoints: {
      1025: {
        spaceBetween: 32,
      }
    },
    on: {
      touchEnd: (swiper) => {
        changeTranslate(swiper);
      },
    }
  });
};

window.addEventListener('load', function(){
  initSwiper();
});

