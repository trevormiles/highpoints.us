function animateValue(element, start, end, duration, suffix = '') {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const value = Math.floor(progress * (end - start) + start);
        element.textContent = value.toLocaleString() + suffix;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

function handleStatsAnimation() {
    const statsNumbers = document.querySelectorAll('.stats-number');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const value = parseInt(element.getAttribute('data-value'));
                const suffix = element.getAttribute('data-suffix') || '';
                const duration = 2000; // 2 seconds
                
                // Remove the observer after animation starts
                observer.unobserve(element);
                
                // Start the animation
                animateValue(element, 0, value, duration, suffix);
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of the element is visible
    });

    statsNumbers.forEach(stat => {
        observer.observe(stat);
    });
}

// Initialize when the DOM is loaded
document.addEventListener('DOMContentLoaded', handleStatsAnimation); 