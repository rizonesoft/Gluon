<?php
/**
 * Gluon Icons - Lucide Icon System
 *
 * A helper class for rendering Lucide icons as inline SVGs.
 * Icons are embedded directly to avoid external dependencies.
 *
 * @package Gluon
 * @since 1.0.0
 * @link https://lucide.dev/
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class Gluon_Icons
 *
 * Provides methods to retrieve Lucide icons as inline SVG markup.
 */
class Gluon_Icons
{

    /**
     * Default SVG attributes for accessibility.
     *
     * @var array
     */
    private static $default_attrs = array(
        'xmlns' => 'http://www.w3.org/2000/svg',
        'width' => '24',
        'height' => '24',
        'viewBox' => '0 0 24 24',
        'fill' => 'none',
        'stroke' => 'currentColor',
        'stroke-width' => '2',
        'stroke-linecap' => 'round',
        'stroke-linejoin' => 'round',
        'aria-hidden' => 'true',
        'focusable' => 'false',
    );

    /**
     * Icon SVG paths.
     * Each icon contains the inner SVG elements (path, line, circle, etc.)
     *
     * @var array
     */
    private static $icons = array(
        'search' => '<circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>',

        'menu' => '<line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/>',

        'download' => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/>',

        'x' => '<path d="M18 6 6 18"/><path d="m6 6 12 12"/>',

        'chevron-down' => '<path d="m6 9 6 6 6-6"/>',

        'chevron-up' => '<path d="m18 15-6-6-6 6"/>',

        'chevron-left' => '<path d="m15 18-6-6 6-6"/>',

        'chevron-right' => '<path d="m9 18 6-6-6-6"/>',

        'arrow-left' => '<path d="m12 19-7-7 7-7"/><path d="M19 12H5"/>',

        'arrow-right' => '<path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>',

        'check' => '<path d="M20 6 9 17l-5-5"/>',

        'plus' => '<path d="M5 12h14"/><path d="M12 5v14"/>',

        'minus' => '<path d="M5 12h14"/>',

        'user' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',

        'settings' => '<path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/>',

        'home' => '<path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',

        'mail' => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',

        'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',

        'calendar' => '<path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>',

        'clock' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',

        'external-link' => '<path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>',

        'message-circle' => '<path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>',
    );

    /**
     * Get an icon as inline SVG markup.
     *
     * @since 1.0.0
     *
     * @param string $name  The icon name (e.g., 'search', 'menu').
     * @param string $class Optional. Additional CSS classes to add to the SVG.
     * @param array  $attrs Optional. Additional attributes to add to the SVG.
     * @return string       The SVG markup or empty string if icon not found.
     */
    public static function get_icon($name, $class = '', $attrs = array())
    {
        // Check if icon exists
        if (!isset(self::$icons[$name])) {
            return '';
        }

        // Build attributes
        $svg_attrs = self::$default_attrs;

        // Merge custom attributes
        if (!empty($attrs)) {
            $svg_attrs = array_merge($svg_attrs, $attrs);
        }

        // Add class
        $classes = 'gluon-icon gluon-icon-' . esc_attr($name);
        if (!empty($class)) {
            $classes .= ' ' . esc_attr($class);
        }
        $svg_attrs['class'] = $classes;

        // Build attribute string
        $attr_string = '';
        foreach ($svg_attrs as $key => $value) {
            $attr_string .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
        }

        // Return SVG markup
        return '<svg' . $attr_string . '>' . self::$icons[$name] . '</svg>';
    }

    /**
     * Echo an icon.
     *
     * @since 1.0.0
     *
     * @param string $name  The icon name.
     * @param string $class Optional. Additional CSS classes.
     * @param array  $attrs Optional. Additional attributes.
     * @return void
     */
    public static function icon($name, $class = '', $attrs = array())
    {
        echo self::get_icon($name, $class, $attrs); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    /**
     * Get list of available icons.
     *
     * @since 1.0.0
     *
     * @return array List of icon names.
     */
    public static function get_available_icons()
    {
        return array_keys(self::$icons);
    }

    /**
     * Check if an icon exists.
     *
     * @since 1.0.0
     *
     * @param string $name The icon name.
     * @return bool True if icon exists, false otherwise.
     */
    public static function has_icon($name)
    {
        return isset(self::$icons[$name]);
    }

    /**
     * Add a custom icon.
     *
     * @since 1.0.0
     *
     * @param string $name The icon name.
     * @param string $path The SVG inner content (paths, circles, etc.).
     * @return void
     */
    public static function add_icon($name, $path)
    {
        self::$icons[$name] = $path;
    }
}

/**
 * Helper function to get an icon.
 *
 * @since 1.0.0
 *
 * @param string $name  The icon name.
 * @param string $class Optional. Additional CSS classes.
 * @param array  $attrs Optional. Additional attributes.
 * @return string The SVG markup.
 */
function gluon_get_icon($name, $class = '', $attrs = array())
{
    return Gluon_Icons::get_icon($name, $class, $attrs);
}

/**
 * Helper function to echo an icon.
 *
 * @since 1.0.0
 *
 * @param string $name  The icon name.
 * @param string $class Optional. Additional CSS classes.
 * @param array  $attrs Optional. Additional attributes.
 * @return void
 */
function gluon_icon($name, $class = '', $attrs = array())
{
    Gluon_Icons::icon($name, $class, $attrs);
}
