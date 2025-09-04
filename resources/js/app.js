import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

// Initialize AOS
AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
    offset: 100,
});

// Simple Animation System - Works on all pages and navigation
class SimpleAnimations {
    constructor() {
        this.observer = null;
        this.init();
    }

    init() {
        // Create intersection observer for scroll animations
        this.observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animated");
                    }
                });
            },
            {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px",
            }
        );

        // Setup animations
        this.setupAnimations();

        // Listen for Turbo Drive events (page navigation)
        document.addEventListener("turbo:load", () => this.setupAnimations());
        document.addEventListener("turbo:render", () => this.setupAnimations());

        // Fallback for regular page loads
        document.addEventListener("DOMContentLoaded", () =>
            this.setupAnimations()
        );
    }

    setupAnimations() {
        // Get all elements that should animate
        const animatedElements =
            document.querySelectorAll(".animate-on-scroll");

        // Reset and observe each element
        animatedElements.forEach((el) => {
            // Remove animated class to reset animation
            el.classList.remove("animated");

            // Observe the element
            this.observer.observe(el);
        });
    }
}

// Initialize animations
new SimpleAnimations();

// PhotoSwipe Lightbox
import PhotoSwipeLightbox from "photoswipe/lightbox";
import "photoswipe/style.css";

function initLightbox() {
    const lightbox = new PhotoSwipeLightbox({
        gallery: "[data-pswp-gallery]",
        children: "a[data-pswp-item]",
        pswpModule: () => import("photoswipe"),
        showHideAnimationType: "fade",
        wheelToZoom: true,
        paddingFn: () => ({ top: 40, bottom: 40, left: 20, right: 20 }),
    });
    lightbox.init();
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initLightbox);
} else {
    initLightbox();
}

document.addEventListener("turbo:load", initLightbox);
document.addEventListener("turbo:render", initLightbox);
