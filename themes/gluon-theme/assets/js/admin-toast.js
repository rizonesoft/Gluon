/**
 * Gluon Toast Notifications
 *
 * Modern, minimal toast notification system.
 * Usage: GluonToast.success('Settings saved!');
 *        GluonToast.error('Something went wrong');
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

(function () {
    'use strict';

    // SVG Icons
    var icons = {
        success: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>',
        error: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>',
        warning: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>',
        info: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>',
        close: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>'
    };

    // Default options
    var defaults = {
        duration: 5000,
        position: 'top-right'
    };

    // Container element
    var container = null;

    /**
     * Initialize the toast container
     */
    function initContainer() {
        if (container) return;

        container = document.createElement('div');
        container.className = 'gluon-toast-container';
        document.body.appendChild(container);
    }

    /**
     * Create a toast notification
     */
    function createToast(type, message, title, options) {
        initContainer();

        options = Object.assign({}, defaults, options || {});

        var toast = document.createElement('div');
        toast.className = 'gluon-toast gluon-toast--' + type;

        // Icon
        var iconEl = document.createElement('div');
        iconEl.className = 'gluon-toast__icon';
        iconEl.innerHTML = icons[type] || icons.info;
        toast.appendChild(iconEl);

        // Content
        var contentEl = document.createElement('div');
        contentEl.className = 'gluon-toast__content';

        if (title) {
            var titleEl = document.createElement('p');
            titleEl.className = 'gluon-toast__title';
            titleEl.textContent = title;
            contentEl.appendChild(titleEl);
        }

        var messageEl = document.createElement('p');
        messageEl.className = 'gluon-toast__message';
        messageEl.textContent = message;
        contentEl.appendChild(messageEl);

        toast.appendChild(contentEl);

        // Close button
        var closeBtn = document.createElement('button');
        closeBtn.className = 'gluon-toast__close';
        closeBtn.innerHTML = icons.close;
        closeBtn.setAttribute('aria-label', 'Close notification');
        closeBtn.addEventListener('click', function () {
            hideToast(toast);
        });
        toast.appendChild(closeBtn);

        // Add to container
        container.appendChild(toast);

        // Auto-hide
        if (options.duration > 0) {
            setTimeout(function () {
                hideToast(toast);
            }, options.duration);
        }

        return toast;
    }

    /**
     * Hide and remove a toast
     */
    function hideToast(toast) {
        if (!toast || toast.classList.contains('gluon-toast-hiding')) return;

        toast.classList.add('gluon-toast-hiding');

        setTimeout(function () {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 300);
    }

    /**
     * Public API
     */
    window.GluonToast = {
        success: function (message, title, options) {
            return createToast('success', message, title || '', options);
        },
        error: function (message, title, options) {
            return createToast('error', message, title || '', options);
        },
        warning: function (message, title, options) {
            return createToast('warning', message, title || '', options);
        },
        info: function (message, title, options) {
            return createToast('info', message, title || '', options);
        }
    };

})();
