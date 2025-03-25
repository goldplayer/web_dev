document.addEventListener("DOMContentLoaded", function() {
    const burgerButton = document.querySelector(".burger-button");
    const fullscreenMenu = document.getElementById("fullscreenMenu");
    const closeMenuBtn = document.getElementById("closeMenuBtn");

    burgerButton.addEventListener("click", () => {
        fullscreenMenu.classList.toggle("active");
    });

    closeMenuBtn.addEventListener("click", () => {
        fullscreenMenu.classList.remove("active");
    });
});