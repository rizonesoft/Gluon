/**
 * Build script to create style.css with WordPress theme header
 * 
 * This prepends the required WordPress theme header to the built CSS
 */

const fs = require('fs');
const path = require('path');

const themeHeader = `/*!
Theme Name: Gluon
Theme URI: https://rizonepress.com
Author: Rizonepress (Rizonetech (Pty) Ltd.)
Author URI: https://rizonepress.com
Description: A modern, lightweight WordPress block theme built with Tailwind CSS v4. Features custom colors, accessibility-ready components, and full site editing support.
Version: 1.0.0
Requires at least: 6.4
Tested up to: 6.7
Requires PHP: 8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: gluon
Tags: block-theme, accessibility-ready, custom-colors, two-columns, blog, custom-background, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, block-patterns, translation-ready, wide-blocks
*/

`;

const themeCssPath = path.join(__dirname, '..', 'assets', 'css', 'theme.css');
const styleCssPath = path.join(__dirname, '..', 'style.css');

try {
    // Read the built Tailwind CSS
    const themeCss = fs.readFileSync(themeCssPath, 'utf8');

    // Combine header with CSS
    const finalCss = themeHeader + themeCss;

    // Write to style.css
    fs.writeFileSync(styleCssPath, finalCss);

    console.log('[OK] style.css created successfully');
} catch (error) {
    console.error('[ERROR] Failed to build style.css:', error.message);
    process.exit(1);
}
