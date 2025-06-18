document.addEventListener("DOMContentLoaded", function () {
    let elements = document.querySelectorAll('.fade-in-up');
    for (let i = 0; i < elements.length; i++) {
        let currentElement = elements[i];
        currentElement.classList.add('start');
        currentElement.style.animationDelay = (i + 1) * 0.8 + 's';
    }
});
