
// ANIMATION CHARGEMENT PROGRESSIF FADE IN
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll('.fade-in-up, .fade-in-down');

  sections.forEach((section, index) => {
    const delay = index === 0 ? 0 : (index) * 1;

    section.classList.add('start');
    section.style.animationDelay = `${delay}s`;

    const paragraphs = section.querySelectorAll('p');
    paragraphs.forEach((p, i) => {
      if (index === 0 && i === 0) {
        // Pas de délai pour le tout premier paragraphe de la première section
        p.style.animationDelay = '0s';
      } else {
        p.style.animationDelay = `${delay}s`;
      }
    });

    section.querySelectorAll('img').forEach(img => {
      img.style.animationDelay = `${delay}s`;
    });
  });
});



// Initialisation de Skrollr

document.addEventListener("DOMContentLoaded", function () {
  if (typeof skrollr !== "undefined") {
    skrollr.init({
      forceHeight: false
    });
  }
});


// Initialisation SwiperJS

document.addEventListener('DOMContentLoaded', () => {
  if (typeof Swiper !== 'undefined') {
    new Swiper('.swiper', {
      slidesPerView: 1,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  }
});



document.addEventListener('DOMContentLoaded', () => {
  const burger  = document.querySelector('.menu-toggle');
  const overlay = document.querySelector('.menu-header');
  const body    = document.body;

  burger.addEventListener('click', () => {
    const open = body.classList.toggle('menu-open');
    burger.setAttribute('aria-expanded', open);
    overlay.hidden = !open;
    body.style.overflow = open ? 'hidden' : '';  // bloque scroll
  });

  // Ferme au clic sur un lien
  overlay.querySelectorAll('a').forEach(link=>{
    link.addEventListener('click', () => {
      body.classList.remove('menu-open');
      burger.setAttribute('aria-expanded', 'false');
      overlay.hidden = true;
      body.style.overflow = '';
    });
  });
});






