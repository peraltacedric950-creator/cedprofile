document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", () => {
            const isOpen = navLinks.classList.toggle("open");
            menuToggle.setAttribute("aria-expanded", String(isOpen));
        });

        navLinks.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                navLinks.classList.remove("open");
                menuToggle.setAttribute("aria-expanded", "false");
            });
        });
    }

    const revealItems = document.querySelectorAll(".reveal");

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealItems.forEach(item => revealObserver.observe(item));

    const progressBars = document.querySelectorAll(".progress-bar");

    const progressObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const value = entry.target.dataset.progress || 0;
                entry.target.style.width = `${value}%`;
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    progressBars.forEach(bar => progressObserver.observe(bar));

    window.addEventListener("scroll", () => {
        const header = document.querySelector(".site-header");
        if (header) {
            header.style.boxShadow = window.scrollY > 20
                ? "0 8px 30px rgba(0,0,0,.25)"
                : "none";
        }
    });
});
