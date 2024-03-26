"use strict";
/* ---------- レスポンシブ360px未満対応無効 ---------- */
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');

  function adjustViewport() {
    const value = window.outerWidth > 360 ? 'width=device-width, initial-scale=1' : 'width=360';

    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', adjustViewport, false);
  adjustViewport();
})();

/* ---------- transition screen ---------- */
window.onload = () => {
  const body = document.body;
  const splash = document.querySelector("#splash");
  const loader = document.querySelector(".loader");
  const ms = 1000;

  setTimeout(() => {
    loader.classList.add("loaded");
  }, 1200);
  setTimeout(() => {
    loader.style.display = "none";
  }, ms + 10);
  setTimeout(() => {
    splash.classList.add("splashed");
    body.classList.add("appear");
  }, 1500);
};

/* ---------- cursor pointer ---------- */
let cursor = document.querySelector(".cursor"),
  follower = document.querySelector(".follower"),
  cWidth = 8, //カーソルの大きさ
  fWidth = 40, //フォロワーの大きさ
  delay = 10, //数字を大きくするとフォロワーがより遅れて来る
  mouseX = 0, //マウスのX座標
  mouseY = 0, //マウスのY座標
  posX = 0, //フォロワーのX座標
  posY = 0; //フォロワーのX座標

TweenMax.to({}, 0.001, {
  repeat: -1,
  onRepeat: function () {
    posX += (mouseX - posX) / delay;
    posY += (mouseY - posY) / delay;

    TweenMax.set(follower, {
      css: {
        left: posX - fWidth / 2,
        top: posY - fWidth / 2,
      },
    });

    TweenMax.set(cursor, {
      css: {
        left: mouseX - cWidth / 2,
        top: mouseY - cWidth / 2,
      },
    });
  },
});

document.addEventListener("mousemove", function (e) {
  mouseX = e.pageX;
  mouseY = e.pageY;
});

const anchors = document.querySelector("a");

anchors.addEventListener("mouseenter", function () {
  cursor.addClass("is-active");
  follower.addClass("is-active");
});

anchors.addEventListener("mouseleave", function () {
  cursor.removeClass("is-active");
  follower.removeClass("is-active");
});

/* ---------- menu toggle ---------- */
const menuToggle = document.querySelector(".menu-toggle");
const drawerNavi = document.querySelector(".l-drawer-nav");
const drawerNaviLink = document.querySelector(".l-drawer-nav__link");

menuToggle.onclick = function () {
  this.classList.toggle("active");
  drawerNavi.classList.toggle("open");
};

drawerNaviLink.onclick = function () {
  menuToggle.classList.remove("active");
  this.classList.remove("open");
};

/* ---------- index-visual swiper ---------- */
const visualSwiper = new Swiper(".swiper01", {
  effect: "fade",
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
const slideLength = document.querySelectorAll(".swiper02 .swiper-slide").length;

const changeTranslate = (swiper) => {
  let currentTranslate = swiper.getTranslate();
  let slideWidth = document.querySelector(
    ".swiper02 .swiper-slide-active"
  ).offsetWidth;
  swiper.setTranslate(currentTranslate - slideWidth);
  swiper.setTransition(mySpeed);
};

const initSwiper = () => {
  const mySwiper = new Swiper(".swiper02", {
    slidesPerView: "auto",
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
      },
    },
    on: {
      touchEnd: (swiper) => {
        changeTranslate(swiper);
      },
    },
  });
};

window.addEventListener("load", function () {
  initSwiper();
});

/* ---------- Nara Project Page Background ---------- */
const myDelay = 7000;
let timer;

const switchAnimation = () => {
  clearTimeout(timer);
  let activeSlide = document.querySelectorAll(
    ".p-nara__visual--slide .swiper-slide[class*=-active]"
  );
  for (let i = 0; i < activeSlide.length; i++) {
    activeSlide[i].classList.remove("anm-finished");
    activeSlide[i].classList.add("anm-started");
  }
  timer = setTimeout(() => {
    for (let i = 0; i < activeSlide.length; i++) {
      activeSlide[i].classList.remove("anm-started");
      activeSlide[i].classList.add("anm-finished");
    }
  }, myDelay - 1000);
};

const finishAnimation = () => {
  let activeSlide = document.querySelectorAll(
    ".p-nara__visual--slide .swiper-slide.anm-started"
  );
  for (let i = 0; i < activeSlide.length; i++) {
    activeSlide[i].classList.remove("anm-started");
    activeSlide[i].classList.add("anm-finished");
  }
};

const mySwiper = new Swiper(".p-nara__visual--slide .swiper03", {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  loop: true,
  loopAdditionalSlides: 1,
  speed: 2000,
  autoplay: {
    delay: myDelay,
    disableOnInteraction: false,
    waitForTransition: false,
  },
  followFinger: false,
  pagination: {
    el: ".p-nara__visual--slide .swiper-pagination",
    clickable: true,
  },
  on: {
    slideChange: () => {
      finishAnimation();
    },
    slideChangeTransitionStart: () => {
      switchAnimation();
    },
  },
});

/* ---------- Nara Project Page Background ---------- */
// const colors = ["#2196f3", "#e91e63", "#ffeb3b", "#74ff1d"];

// function createSquare() {
//   const section = document.querySelector(".p-nara__section");
//   const square = document.createElement("span");

//   let size = Math.random() * 50;

//   square.style.width = 20 + size + "px";
//   square.style.height = 20 + size + "px";

//   square.style.top = Math.random() * innerHeight + "px";
//   square.style.left = Math.random() * innerWidth + "px";

//   const bg = colors[Math.floor(Math.random() * colors.length)];
//   square.style.background = bg;

//   section.appendChild(square);

//   setTimeout(() => {
//     square.remove();
//   }, 5000);
// }

// setInterval(createSquare, 150);
