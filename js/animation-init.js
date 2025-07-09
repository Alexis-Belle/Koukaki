document.addEventListener('DOMContentLoaded', function () {

  // Apparition progressive des sections

  const sections = document.querySelectorAll('.fade-in-up, .fade-in-down');

  sections.forEach(function (section, index) {
    const delay = index * 0.9; // délai progressif selon la section
    section.classList.add('start');
    section.style.animationDelay = delay + 's';

    const elements = section.querySelectorAll('p, img');

    elements.forEach(function (element, i) {
      let elementDelay = delay;

      // Si c’est le tout premier paragraphe de la première section, pas de délai
      if (index === 0 && element.tagName === 'P' && i === 0) {
        elementDelay = 0;
      }

      element.style.animationDelay = elementDelay + 's';
    });
  });


// Initialisation de Skrollr
if (typeof skrollr !== 'undefined') {
  skrollr.init({ forceHeight: false });
}

// Initialisation de Swiper
if (typeof Swiper !== 'undefined') {
  new Swiper('.swiper', {
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    }
  });
}



  // 4. Menu burger (plein écran)

  const burger = document.querySelector('.menu-toggle');
  const overlay = document.querySelector('.menu-header');
  const body = document.body;

  if (burger && overlay) {

    // Fonction pour ouvrir ou fermer le menu
    function toggleMenu() {
      const menuEstOuvert = body.classList.toggle('menu-open');

      burger.setAttribute('aria-expanded', menuEstOuvert);
      overlay.hidden = !menuEstOuvert;

      // Empêche de scroller quand le menu est ouvert
      body.style.overflow = menuEstOuvert ? 'hidden' : '';
    }

    burger.addEventListener('click', toggleMenu);

    // Ferme le menu quand on clique sur un lien du menu
    const liensMenu = overlay.querySelectorAll('a');
    liensMenu.forEach(function (lien) {
      lien.addEventListener('click', toggleMenu);
    });
  }
  
});
