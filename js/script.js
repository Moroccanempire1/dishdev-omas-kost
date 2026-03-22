const menuToggle = document.getElementById("menuToggle");
const siteNav = document.getElementById("siteNav");
const themeToggle = document.getElementById("themeToggle");
const fontToggle = document.getElementById("fontToggle");

if (menuToggle && siteNav) {
    menuToggle.addEventListener("click", () => {
        siteNav.classList.toggle("active");

        const expanded = menuToggle.getAttribute("aria-expanded") === "true";
        menuToggle.setAttribute("aria-expanded", String(!expanded));
    });
}

if (themeToggle) {
    themeToggle.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
}

if (fontToggle) {
    fontToggle.addEventListener("click", () => {
        document.body.classList.toggle("large-text");
    });
}