<?php
/**
 * Gluon Site Logo Block - Server-side render
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

$logo_light_id = $attributes['logoLightId'] ?? 0;
$logo_dark_id = $attributes['logoDarkId'] ?? 0;
$width = $attributes['width'] ?? 120;
$link_to_home = $attributes['linkToHome'] ?? true;

$site_name = get_bloginfo('name');
$home_url = home_url('/');

// Get logo URLs
$logo_light_url = $logo_light_id ? wp_get_attachment_image_url($logo_light_id, 'full') : '';
$logo_dark_url = $logo_dark_id ? wp_get_attachment_image_url($logo_dark_id, 'full') : '';

// Build wrapper attributes
$wrapper_attributes = get_block_wrapper_attributes([
    'class' => 'gluon-site-logo-block',
]);

// If no logos, show site title fallback
if (!$logo_light_url && !$logo_dark_url) {
    if ($link_to_home) {
        echo '<div ' . $wrapper_attributes . '>';
        echo '<a href="' . esc_url($home_url) . '" class="gluon-site-title">' . esc_html($site_name) . '</a>';
        echo '</div>';
    } else {
        echo '<div ' . $wrapper_attributes . '>';
        echo '<span class="gluon-site-title">' . esc_html($site_name) . '</span>';
        echo '</div>';
    }
    return;
}

// Build logo HTML
$logo_style = 'height: ' . absint($width) . 'px; width: auto;';

$logo_html = '';
if ($logo_light_url) {
    $logo_html .= '<img src="' . esc_url($logo_light_url) . '" alt="' . esc_attr($site_name) . '" class="gluon-logo gluon-logo-light" style="' . esc_attr($logo_style) . '">';
}
if ($logo_dark_url) {
    $logo_html .= '<img src="' . esc_url($logo_dark_url) . '" alt="' . esc_attr($site_name) . '" class="gluon-logo gluon-logo-dark" style="' . esc_attr($logo_style) . '">';
}

// Output
echo '<div ' . $wrapper_attributes . '>';
if ($link_to_home) {
    echo '<a href="' . esc_url($home_url) . '" class="gluon-logo-link" aria-label="' . esc_attr($site_name) . '">';
    echo $logo_html;
    echo '</a>';
} else {
    echo '<span class="gluon-logo-wrapper">';
    echo $logo_html;
    echo '</span>';
}
echo '</div>';
