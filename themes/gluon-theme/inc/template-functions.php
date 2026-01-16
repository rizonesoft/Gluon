<?php
/**
 * Custom template functions for Gluon Theme
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add custom body classes.
 *
 * @since 1.0.0
 * @param array $classes Classes for the body element.
 * @return array
 */
function gluon_theme_body_classes($classes)
{
    // Add class if no sidebar is active
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    // Add class for singular pages
    if (is_singular()) {
        $classes[] = 'singular';
    }

    // Add class for blog page
    if (is_home() || is_archive()) {
        $classes[] = 'blog-layout';
    }

    // Add class if has custom logo
    if (has_custom_logo()) {
        $classes[] = 'has-custom-logo';
    }

    return $classes;
}
add_filter('body_class', 'gluon_theme_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'gluon_theme_pingback_header');

/**
 * Check if the current post has a featured image.
 *
 * @since 1.0.0
 * @return bool
 */
function gluon_theme_has_post_thumbnail()
{
    return has_post_thumbnail() && !post_password_required();
}

/**
 * Get the excerpt length.
 *
 * @since 1.0.0
 * @param int $length Excerpt length.
 * @return int
 */
function gluon_theme_excerpt_length($length)
{
    if (is_admin()) {
        return $length;
    }
    return 30;
}
add_filter('excerpt_length', 'gluon_theme_excerpt_length');

/**
 * Customize the excerpt more string.
 *
 * @since 1.0.0
 * @param string $more The excerpt more string.
 * @return string
 */
function gluon_theme_excerpt_more($more)
{
    if (is_admin()) {
        return $more;
    }
    return '&hellip;';
}
add_filter('excerpt_more', 'gluon_theme_excerpt_more');
