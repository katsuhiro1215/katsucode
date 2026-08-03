/* ---------- Nara LP Animations (GSAP) ---------- */
document.addEventListener('DOMContentLoaded', function () {
  if (typeof gsap === 'undefined') return;

  // GSAPが使える場合のみ、演出用の非表示状態を有効化する
  document.body.classList.add('p-nara--js');

  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  /* ---------- Hero entrance ---------- */
  var heroTimeline = gsap.timeline({
    defaults: { ease: 'power3.out' },
  });

  heroTimeline
    .from('.p-nara__hero-bg img', {
      scale: 1.15,
      opacity: 0.6,
      duration: 1.6,
      ease: 'power2.out',
    })
    .to(
      '.p-nara__hero-label',
      { opacity: 1, y: 0, duration: 0.7 },
      '-=1.1'
    )
    .to(
      '.p-nara__hero-title .js-nara-line',
      { opacity: 1, y: 0, duration: 0.8, stagger: 0.15 },
      '-=0.4'
    )
    .to(
      '.p-nara__hero-subtitle',
      { opacity: 1, y: 0, duration: 0.8 },
      '-=0.5'
    )
    .to(
      '.p-nara__hero-cta-group',
      { opacity: 1, y: 0, duration: 0.8 },
      '-=0.5'
    );

  /* ---------- Hero leaf floating ---------- */
  gsap.to('.p-nara__hero-leaf--1', {
    y: 18,
    rotation: 8,
    duration: 3.4,
    ease: 'sine.inOut',
    repeat: -1,
    yoyo: true,
  });
  gsap.to('.p-nara__hero-leaf--2', {
    y: -16,
    rotation: -6,
    duration: 3,
    ease: 'sine.inOut',
    repeat: -1,
    yoyo: true,
    delay: 0.4,
  });

  /* ---------- Scroll reveal ---------- */
  if (typeof ScrollTrigger !== 'undefined') {
    var revealTargets = document.querySelectorAll('.p-nara__container .js-nara-reveal');

    revealTargets.forEach(function (el) {
      gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 0.9,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 85%',
          toggleActions: 'play none none none',
        },
      });
    });

    // CTAセクションの葉っぱの緩やかな回転(パララックス風)
    gsap.to('.p-nara__cta-leaf', {
      rotation: 15,
      y: -20,
      ease: 'none',
      scrollTrigger: {
        trigger: '.p-nara__cta-section',
        start: 'top bottom',
        end: 'bottom top',
        scrub: 1,
      },
    });
  } else {
    // ScrollTriggerが無い場合はフェード演出のみ即時表示
    gsap.to('.p-nara__container .js-nara-reveal', { opacity: 1, y: 0, duration: 0.6 });
  }
});
