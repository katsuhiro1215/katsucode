'use strict';

/* ---------- transition screen ---------- */
window.onload = () => {
  const transition_el = document.querySelector('.transition');
  const anchors = document.querySelectorAll('a');

  setTimeout(() => {
    transition_el.classList.remove('is-active');
  }, 500);

  for (let i = 0; i < anchors.length; i++) {
    const anchor = anchors[i];

    anchor.addEventListener('click', (e) => {
      e.preventDefault();
      let target = e.target.href;

      transition_el.classList.add('is-active');

      setTimeout(() => {
        window.location.href = target;
      }, 500);
    });
  }
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

const cursorAnchors = document.querySelectorAll("a");

cursorAnchors.forEach((anchor) => {
  anchor.addEventListener("mouseenter", function () {
    cursor.classList.add("is-active");
    follower.classList.add("is-active");
  });

  anchor.addEventListener("mouseleave", function () {
    cursor.classList.remove("is-active");
    follower.classList.remove("is-active");
  });
});

/* ---------- menu toggle ---------- */
const menuToggle = document.querySelector('.menu-toggle');
const drawerNavigation = document.querySelector('.l-drawer-nav');
const body = document.body;

// メニューを開く
menuToggle.onclick = function () {
  menuToggle.classList.toggle('active');
  drawerNavigation.classList.toggle('open');

  // bodyのスクロールを制御
  if (drawerNavigation.classList.contains('open')) {
    body.style.overflow = 'hidden';
  } else {
    body.style.overflow = '';
  }
};

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
};

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
      },
    },
    on: {
      touchEnd: (swiper) => {
        changeTranslate(swiper);
      },
    },
  });
};

window.addEventListener('load', function () {
  initSwiper();
});

/* ---------- Sticky Header & Navigation ---------- */
let lastScrollTop = 0;
const header = document.querySelector('.l-header');
const globalNav = document.querySelector('.l-global-nav');
const headerNav = document.querySelector('.sub-header-nav');
const heroHeight = document.querySelector('.p-index__visual, .p-page__visual');

if (header && globalNav) {
  const headerStickyPoint = 100; // ロゴが縮小して追従開始
  const navHidePoint = heroHeight ? heroHeight.offsetHeight : 300; // グローバルナビを非表示にする位置

  // スクロール処理
  const handleScroll = () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const isDesktop = window.innerWidth >= 992;

    // ヘッダーのスティッキー状態
    if (scrollTop > headerStickyPoint) {
      header.classList.add('is-sticky');
    } else {
      header.classList.remove('is-sticky');
    }

    // グローバルナビとヘッダーナビの表示切り替え
    if (scrollTop > navHidePoint) {
      globalNav.classList.add('is-hidden');
      if (headerNav) {
        headerNav.classList.add('is-hidden');
      }
      // デスクトップでmenu-toggleを表示
      if (menuToggle && isDesktop) {
        menuToggle.style.display = 'block';
      }
    } else {
      globalNav.classList.remove('is-hidden');
      if (headerNav) {
        headerNav.classList.remove('is-hidden');
      }
      // デスクトップのmenu-toggle表示をリセット(CSSの初期状態に戻す)
      if (menuToggle && isDesktop) {
        menuToggle.style.display = '';
      }
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  };

  // リサイズ時の処理
  const handleResize = () => {
    const isDesktop = window.innerWidth >= 992;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  };

  window.addEventListener('scroll', handleScroll);
  window.addEventListener('resize', handleResize);

  // 初期化
  handleResize();
}

/* ---------- About Page Sticky Scroll ---------- */
const aboutScrollWrapper = document.querySelector('.p-about__scroll-wrapper');

if (aboutScrollWrapper) {
  const scrollSection = document.querySelector('.p-about__scroll-section');
  const contentSections = document.querySelectorAll('.scroll_content_section');
  const sectionCount = contentSections.length;

  // スクロールイベントでセクションを切り替え
  window.addEventListener('scroll', () => {
    const wrapperRect = aboutScrollWrapper.getBoundingClientRect();
    const wrapperTop = wrapperRect.top;
    const wrapperHeight = wrapperRect.height; // 400vh
    const viewportHeight = window.innerHeight; // 100vh
    const wrapperBottom = wrapperTop + wrapperHeight;

    // ラッパーに到達する前
    if (wrapperTop > 0) {
      scrollSection.classList.remove('is-active', 'is-end');
      contentSections.forEach((section) => section.classList.remove('active'));
      contentSections[0].classList.add('active');
    }
    // ラッパー内をスクロール中（固定表示）
    else if (wrapperTop <= 0 && wrapperBottom > viewportHeight) {
      scrollSection.classList.add('is-active');
      scrollSection.classList.remove('is-end');

      // 各セクションは100vhずつ表示
      const scrolledViewports = Math.abs(wrapperTop) / viewportHeight;
      const activeIndex = Math.min(Math.floor(scrolledViewports), sectionCount - 1);

      // デバッグ情報
      console.log(
        'wrapperTop:',
        wrapperTop,
        'scrolledViewports:',
        scrolledViewports,
        'activeIndex:',
        activeIndex
      );

      // すべてのコンテンツからactiveを削除
      contentSections.forEach((section) => {
        section.classList.remove('active');
      });

      // 現在のコンテンツにactiveを追加
      contentSections[activeIndex].classList.add('active');
    }
    // ラッパーを通過した後
    else {
      scrollSection.classList.remove('is-active');
      scrollSection.classList.add('is-end');
      contentSections.forEach((section) => section.classList.remove('active'));
      contentSections[sectionCount - 1].classList.add('active');
    }
  });
}

/* ---------- Service Tab Navigation ---------- */
const serviceTabs = document.querySelectorAll('.p-index__service--tab');
const serviceContents = document.querySelectorAll('.p-index__service--item');

if (serviceTabs.length > 0 && serviceContents.length > 0) {
  let currentTabIndex = 0;
  let autoPlayInterval;
  const autoPlayDelay = 5000; // 5秒ごとに切り替え
  const serviceSlider = document.querySelector('.p-index__service--slider');

  // スライダーの高さを計算して設定
  const setSliderHeight = () => {
    let maxHeight = 0;

    // 各アイテムを一時的に表示状態にして高さを計測
    serviceContents.forEach((content) => {
      content.style.position = 'relative';
      content.style.opacity = '1';
      content.style.visibility = 'visible';
      const height = content.offsetHeight;
      if (height > maxHeight) {
        maxHeight = height;
      }
      content.style.position = '';
      content.style.opacity = '';
      content.style.visibility = '';
    });

    // 親要素に高さを設定
    if (serviceSlider && maxHeight > 0) {
      serviceSlider.style.height = maxHeight + 'px';
    }
  };

  // タブ切り替え関数
  const switchTab = (index) => {
    // すべてのタブからアクティブクラスを削除
    serviceTabs.forEach((t) => t.classList.remove('is-active'));

    // すべてのコンテンツからアクティブクラスを削除
    serviceContents.forEach((content) => content.classList.remove('is-active'));

    // 指定されたタブにアクティブクラスを追加
    serviceTabs[index].classList.add('is-active');

    // 対応するコンテンツにアクティブクラスを追加
    const tabNumber = serviceTabs[index].getAttribute('data-tab');
    const targetContent = document.querySelector(
      `.p-index__service--item[data-content="${tabNumber}"]`
    );
    if (targetContent) {
      targetContent.classList.add('is-active');
    }

    currentTabIndex = index;
  };

  // 次のタブへ進む
  const nextTab = () => {
    const nextIndex = (currentTabIndex + 1) % serviceTabs.length;
    switchTab(nextIndex);
  };

  // 自動再生を開始
  const startAutoPlay = () => {
    stopAutoPlay();
    autoPlayInterval = setInterval(nextTab, autoPlayDelay);
  };

  // 自動再生を停止
  const stopAutoPlay = () => {
    if (autoPlayInterval) {
      clearInterval(autoPlayInterval);
    }
  };

  // タブクリックイベント
  serviceTabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      switchTab(index);
      startAutoPlay(); // クリック後も自動再生を継続
    });
  });

  // 初期化
  setSliderHeight();

  // 自動再生を開始
  startAutoPlay();

  // ウィンドウリサイズ時に高さを再計算
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      setSliderHeight();
    }, 250);
  });

  // ページが非表示になったら停止、表示されたら再開
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      stopAutoPlay();
    } else {
      startAutoPlay();
    }
  });
}

/* ---------- FAQ Accordion ---------- */
document.addEventListener('DOMContentLoaded', () => {
  const faqItems = document.querySelectorAll('.p-faq__accordion--item');

  faqItems.forEach((item) => {
    const question = item.querySelector('.p-faq__accordion--question');

    if (question) {
      question.addEventListener('click', () => {
        // トグル：クリックされたアイテムのアクティブ状態を切り替え
        item.classList.toggle('active');

        // 他のアイテムを閉じる場合（アコーディオン形式）
        // faqItems.forEach((otherItem) => {
        //   if (otherItem !== item) {
        //     otherItem.classList.remove('active');
        //   }
        // });
      });
    }
  });
});

/* ---------- Category Filter (FAQ & Project) ---------- */
document.addEventListener('DOMContentLoaded', () => {
  // FAQ Category Filter
  const faqTabItems = document.querySelectorAll('.p-faq .tab__item');
  const faqAccordionItems = document.querySelectorAll('.p-faq__accordion--item');

  if (faqTabItems.length > 0 && faqAccordionItems.length > 0) {
    faqTabItems.forEach((tab) => {
      tab.addEventListener('click', () => {
        const category = tab.getAttribute('data-category');

        // タブのアクティブ状態を更新
        faqTabItems.forEach((t) => t.classList.remove('active'));
        tab.classList.add('active');

        // アイテムのフィルタリング
        faqAccordionItems.forEach((item) => {
          const itemCategories = item.getAttribute('data-categories') || '';

          if (category === 'all') {
            item.classList.remove('hidden');
          } else if (itemCategories.includes(category)) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
            item.classList.remove('active'); // 非表示にする際はアコーディオンも閉じる
          }
        });
      });
    });
  }

  // Project Category Filter
  const projectTabItems = document.querySelectorAll('.p-project .tab__item');
  const projectGridItems = document.querySelectorAll('.p-project__grid--item');

  if (projectTabItems.length > 0 && projectGridItems.length > 0) {
    projectTabItems.forEach((tab) => {
      tab.addEventListener('click', () => {
        const category = tab.getAttribute('data-category');

        // タブのアクティブ状態を更新
        projectTabItems.forEach((t) => t.classList.remove('active'));
        tab.classList.add('active');

        // アイテムのフィルタリング
        projectGridItems.forEach((item) => {
          const itemCategories = item.getAttribute('data-categories') || '';

          if (category === 'all') {
            item.classList.remove('hidden');
          } else if (itemCategories.includes(category)) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
          }
        });
      });
    });
  }
});

/* ---------- Flow Page Tab ---------- */
function openTab(evt, tabName) {
  // すべてのタブコンテンツを非表示
  const tabcontents = document.querySelectorAll('.tab-content');
  tabcontents.forEach((content) => {
    content.style.display = 'none';
  });

  // すべてのタブボタンの active クラスを削除
  const tablinks = document.querySelectorAll('.tablinks');
  tablinks.forEach((link) => {
    link.classList.remove('active');
  });

  // 指定されたタブを表示し、ボタンに active クラスを追加
  const selectedTab = document.getElementById(tabName);
  if (selectedTab) {
    selectedTab.style.display = 'block';
  }

  evt.currentTarget.classList.add('active');
}

/* ---------- Service Page Tab Switching ---------- */
document.addEventListener('DOMContentLoaded', function () {
  const serviceTabs = document.querySelectorAll('.p-service__list--tab');
  const serviceItems = document.querySelectorAll('.p-service__list--item');
  const serviceContents = document.querySelector('.p-service__list--contents');

  if (serviceTabs.length > 0 && serviceItems.length > 0) {
    serviceTabs.forEach((tab) => {
      tab.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');

        // すべてのタブとアイテムから active を削除
        serviceTabs.forEach((t) => t.classList.remove('is-active'));
        serviceItems.forEach((item) => item.classList.remove('is-active'));

        // クリックされたタブと対応するアイテムに active を追加
        this.classList.add('is-active');
        const targetItem = document.getElementById(targetId);
        if (targetItem) {
          targetItem.classList.add('is-active');

          // スムーズスクロール（コンテンツエリアの先頭へ）
          if (serviceContents) {
            serviceContents.scrollIntoView({
              behavior: 'smooth',
              block: 'start',
            });
          }
        }
      });
    });
  }
});
