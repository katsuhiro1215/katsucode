/* ---------- Swim LP Animations (GSAP) ---------- */
document.addEventListener('DOMContentLoaded', function () {
  if (typeof gsap === 'undefined') return;

  // GSAPが使える場合のみ、演出用の非表示状態を有効化する
  document.body.classList.add('p-swim--js');

  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  /* ---------- Hero entrance ---------- */
  var heroTimeline = gsap.timeline({
    defaults: { ease: 'power3.out' },
  });

  heroTimeline
    .from('.p-swim__hero-bg img', {
      scale: 1.15,
      opacity: 0.6,
      duration: 1.6,
      ease: 'power2.out',
    })
    .to(
      '.p-swim__hero-label',
      { opacity: 1, y: 0, duration: 0.7 },
      '-=1.1'
    )
    .to(
      '.p-swim__hero-title .js-swim-line',
      { opacity: 1, y: 0, duration: 0.8, stagger: 0.15 },
      '-=0.4'
    )
    .to(
      '.p-swim__hero-subtitle',
      { opacity: 1, y: 0, duration: 0.8 },
      '-=0.5'
    )
    .to(
      '.p-swim__hero-cta-group',
      { opacity: 1, y: 0, duration: 0.8 },
      '-=0.5'
    );

  /* ---------- 波の揺らめき ---------- */
  gsap.to('.p-swim__wave-path--back', {
    x: 24,
    duration: 4.5,
    ease: 'sine.inOut',
    repeat: -1,
    yoyo: true,
  });
  gsap.to('.p-swim__wave-path--front', {
    x: -20,
    duration: 3.6,
    ease: 'sine.inOut',
    repeat: -1,
    yoyo: true,
    delay: 0.3,
  });

  /* ---------- 浮かぶ泡 ---------- */
  var bubbles = gsap.utils.toArray('.p-swim__hero-bubble');
  bubbles.forEach(function (bubble, index) {
    gsap.to(bubble, {
      y: -60 - index * 12,
      x: index % 2 === 0 ? 10 : -10,
      opacity: 0,
      duration: 3 + index * 0.6,
      ease: 'sine.inOut',
      repeat: -1,
      delay: index * 0.5,
    });
  });

  /* ---------- Scroll reveal ---------- */
  if (typeof ScrollTrigger !== 'undefined') {
    var revealTargets = document.querySelectorAll('.p-swim__container .js-swim-reveal');

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
  } else {
    // ScrollTriggerが無い場合はフェード演出のみ即時表示
    gsap.to('.p-swim__container .js-swim-reveal', { opacity: 1, y: 0, duration: 0.6 });
  }
});
