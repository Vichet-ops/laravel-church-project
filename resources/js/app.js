import "@hotwired/turbo";
import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

// Function to initialize AOS
function initAOS() {
    AOS.init({
        duration: 1000,
        easing: "ease-out",
        once: true,
        offset: 100,
        delay: 0,
    });
}

// Initialize AOS after DOM is loaded
document.addEventListener("DOMContentLoaded", initAOS);

// Re-initialize AOS on Turbo page changes
document.addEventListener("turbo:load", initAOS);
document.addEventListener("turbo:render", initAOS);

// Re-initialize AOS when Vite hot reloads
if (import.meta.hot) {
    import.meta.hot.accept(() => {
        // Small delay to ensure DOM is updated
        setTimeout(() => {
            AOS.refresh();
        }, 100);
    });
}
