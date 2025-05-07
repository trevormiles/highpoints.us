import './bootstrap';
import './stats-counter';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Frontend dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    const dropdownButtons = document.querySelectorAll('.user-menu-button');
    
    dropdownButtons.forEach(button => {
        button.addEventListener('click', function() {
            const dropdownContent = this.nextElementSibling;
            dropdownContent.classList.toggle('show');
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.frontend-dropdown')) {
            document.querySelectorAll('.frontend-dropdown-content').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        }
    });
});
