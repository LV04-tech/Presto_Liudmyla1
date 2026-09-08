
import './script';
import 'bootstrap';

// resources/js/app.js

document.addEventListener("DOMContentLoaded", function () {
    const backToTopBtn = document.getElementById("backToTop");

    if (backToTopBtn) {
        // Mostra o nasconde il pulsante in base allo scroll
        window.addEventListener("scroll", function () {
            if (window.scrollY > 400) {
                backToTopBtn.classList.add("show");
            } else {
                backToTopBtn.classList.remove("show");
            }
        });

        // Torna su in modo fluido al click
        backToTopBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
});
