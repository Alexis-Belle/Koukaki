
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



// ANIMATION FLOTTANTE TITRE BANNIERE HEADER

