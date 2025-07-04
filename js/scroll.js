// scroll.js  – animation mot-par-mot et apparition des titres
document.addEventListener('DOMContentLoaded', () => {

  /*Découpe chaque h2 / h3 en <span>  */
  document.querySelectorAll('h2, h3').forEach(title => {
    title.innerHTML = title.textContent                        // texte brut
      .trim()                                                  // retire les blancs inutiles
      .split(' ')                                              // coupe aux espaces
      .map(word => `<span>${word}</span>`)                     // enveloppe chaque mot
      .join(' ');                                              // re-créé les espaces
  });

  /* IntersectionObserver pour l'effet des titres */
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible'); // déclenche l’animation CSS
        observer.unobserve(entry.target);      // on n’a plus besoin d’observer
      }
    });
  });

  /*Lance l’observation sur tous les titres*/
  document.querySelectorAll('h2, h3').forEach(t => observer.observe(t));
});
