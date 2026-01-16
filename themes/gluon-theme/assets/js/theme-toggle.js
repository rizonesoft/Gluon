/**
 * Gluon Theme - Dark/Light Mode Toggle
 * 
 * Handles theme switching with:
 * - System preference detection (prefers-color-scheme)
 * - Manual override with localStorage persistence
 * - Accessible toggle button
 * 
 * @package Gluon
 * @since 1.0.0
 */

(function () {
    'use strict';

    const STORAGE_KEY = 'gluon-theme-mode';
    const DARK_CLASS = 'gluon-dark';
    const TOGGLE_SELECTOR = '[data-gluon-theme-toggle]';

    /**
     * Get the user's preferred color scheme
     * @returns {'dark'|'light'} The preferred mode
     */
    function getSystemPreference() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            return 'dark';
        }
        return 'light';
    }

    /**
     * Get the stored theme preference
     * @returns {'dark'|'light'|null} The stored mode or null
     */
    function getStoredPreference() {
        try {
            return localStorage.getItem(STORAGE_KEY);
        } catch (e) {
            return null;
        }
    }

    /**
     * Store the theme preference
     * @param {'dark'|'light'} mode The mode to store
     */
    function setStoredPreference(mode) {
        try {
            localStorage.setItem(STORAGE_KEY, mode);
        } catch (e) {
            // localStorage not available
        }
    }

    /**
     * Apply the theme mode to the document
     * @param {'dark'|'light'} mode The mode to apply
     */
    function applyTheme(mode) {
        const html = document.documentElement;

        if (mode === 'dark') {
            html.classList.add(DARK_CLASS);
            html.style.colorScheme = 'dark';
        } else {
            html.classList.remove(DARK_CLASS);
            html.style.colorScheme = 'light';
        }

        // Update toggle button states
        document.querySelectorAll(TOGGLE_SELECTOR).forEach(function (button) {
            const isDark = mode === 'dark';
            button.setAttribute('aria-pressed', isDark.toString());
            button.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');

            // Update icons if present
            const sunIcon = button.querySelector('[data-icon="sun"]');
            const moonIcon = button.querySelector('[data-icon="moon"]');

            if (sunIcon) sunIcon.style.display = isDark ? 'block' : 'none';
            if (moonIcon) moonIcon.style.display = isDark ? 'none' : 'block';
        });

        // Dispatch custom event for other scripts
        window.dispatchEvent(new CustomEvent('gluon-theme-change', {
            detail: { mode: mode }
        }));
    }

    /**
     * Get the current effective theme mode
     * @returns {'dark'|'light'} The current mode
     */
    function getCurrentMode() {
        const stored = getStoredPreference();
        return stored || getSystemPreference();
    }

    /**
     * Toggle between dark and light mode
     */
    function toggleTheme() {
        const current = getCurrentMode();
        const next = current === 'dark' ? 'light' : 'dark';
        setStoredPreference(next);
        applyTheme(next);
    }

    /**
     * Initialize the theme system
     */
    function init() {
        // Apply initial theme
        applyTheme(getCurrentMode());

        // Listen for system preference changes
        if (window.matchMedia) {
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
                // Only apply if user hasn't set a preference
                if (!getStoredPreference()) {
                    applyTheme(e.matches ? 'dark' : 'light');
                }
            });
        }

        // Set up toggle buttons
        document.querySelectorAll(TOGGLE_SELECTOR).forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                toggleTheme();
            });

            // Keyboard accessibility
            button.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleTheme();
                }
            });
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose API for external use
    window.GluonTheme = {
        toggle: toggleTheme,
        getMode: getCurrentMode,
        setMode: function (mode) {
            if (mode === 'dark' || mode === 'light') {
                setStoredPreference(mode);
                applyTheme(mode);
            }
        }
    };
})();
