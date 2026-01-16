/**
 * Gluon Theme - Main Scripts
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

(function() {
    'use strict';

    /**
     * Initialize when DOM is ready
     */
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScroll();
    });

    /**
     * Mobile menu toggle functionality
     */
    function initMobileMenu() {
        var menuToggle = document.querySelector('.menu-toggle');
        var navigation = document.querySelector('.main-navigation');

        if (!menuToggle || !navigation) {
            return;
        }

        menuToggle.addEventListener('click', function() {
            navigation.classList.toggle('toggled');
            
            var expanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !expanded);
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        var anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                var targetId = this.getAttribute('href');
                
                if (targetId === '#') {
                    return;
                }

                var targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

})();
