document.addEventListener("DOMContentLoaded", function() {
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationName = entry.target.getAttribute('data-animate');
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target); 
            }
        });
    };

    const observer = new IntersectionObserver(callback, options);

    document.querySelectorAll('[data-animate]').forEach(element => {
        observer.observe(element);
    });
});

// ------------------------------------Rotate left by 180 degree-------------------------------------.
document.querySelectorAll('.rotate-section').forEach(section => {
    section.addEventListener('click', function() {
        const arrow = this.querySelector('.rotate-180');
        arrow.classList.toggle('rotated');
    });
});
// ------------------------------------Rotate left by 180 degree - end-------------------------------------
