require("./bootstrap");

/**
 * Toggles the mobile navigation
 */
const navToggleBtn = document.querySelector("#toggle-mobile-nav");
const mobileNav = document.querySelector("#mobile-nav");

navToggleBtn.onclick = (e) => {
    e.preventDefault();
    if (mobileNav.classList.contains("hidden")) {
        mobileNav.classList.remove("hidden");
        mobileNav.classList.add("block");
    } else {
        mobileNav.classList.add("hidden");
    }
};
