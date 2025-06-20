document.addEventListener('DOMContentLoaded', function () {
  const titres = document.querySelectorAll('h2, h3');

  // Pour chaque titre trouvé, récupère le texte du titre
  titres.forEach(function (titre) {
    const texteComplet = titre.textContent.trim();
    const mots = texteComplet.split(' ');

    // On vide le contenu actuel du titre
    titre.innerHTML = '';

    // Pour chaque mot, on crée un <span> qui l'encapsule
    mots.forEach(function (mot, index) {
      const span = document.createElement('span');
      span.textContent = mot;

      // On ajoute un espace sauf après le dernier mot
      titre.appendChild(span);
      if (index < mots.length - 1) {
        titre.appendChild(document.createTextNode(' '));
      }
    });
  });

  // Création de l'observer qui déclenche une animation quand un titre entre dans la fenêtre
  const observer = new IntersectionObserver(function (entries, observerInstance) {
    entries.forEach(function (entry) {
      // Si l'élément observé est visible à l'écran, ajout de class qui déclenche l'animation
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');

        // Arrête d'observer l'élément (l’animation ne se relance plus)
        observerInstance.unobserve(entry.target);
      }
    });
  });

  // On observe chaque titre h2 et h3
  const tousLesTitres = document.querySelectorAll('h2, h3');
  tousLesTitres.forEach(function (titre) {
    observer.observe(titre);
  });
});
