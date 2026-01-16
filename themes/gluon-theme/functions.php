<?php
/**
 * Gluon Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gluon
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Define theme constants
 */
define('GLUON_VERSION', '1.0.0');
define('GLUON_DIR', get_template_directory());
define('GLUON_URI', get_template_directory_uri());

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_setup()
{
    /*
     * Make theme available for translation.
     */
    load_theme_textdomain('gluon', GLUON_DIR . '/languages');

    /*
     * Add support for block templates.
     * This enables Full Site Editing (FSE) capabilities.
     */
    add_theme_support('block-templates');

    /*
     * Add support for block template parts.
     */
    add_theme_support('block-template-parts');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /*
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support('title-tag');

    /*
     * Switch default core markup to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    /*
     * Add support for core custom logo.
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 100,
            'width' => 400,
            'flex-width' => true,
            'flex-height' => true,
        )
    );

    /*
     * Add support for Block Editor styles.
     */
    add_theme_support('wp-block-styles');

    /*
     * Add support for responsive embedded content.
     */
    add_theme_support('responsive-embeds');

    /*
     * Add support for appearance tools in the editor.
     */
    add_theme_support('appearance-tools');

    /*
     * Add support for editor styles.
     */
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    /*
     * Register navigation menus.
     */
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'gluon'),
            'footer' => esc_html__('Footer Menu', 'gluon'),
            'social' => esc_html__('Social Links Menu', 'gluon'),
        )
    );
}
add_action('after_setup_theme', 'gluon_setup');

/**
 * Register block pattern categories.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_register_pattern_categories()
{
    register_block_pattern_category(
        'gluon-heroes',
        array(
            'label' => esc_html__('Gluon Heroes', 'gluon'),
        )
    );

    register_block_pattern_category(
        'gluon-features',
        array(
            'label' => esc_html__('Gluon Features', 'gluon'),
        )
    );

    register_block_pattern_category(
        'gluon-cta',
        array(
            'label' => esc_html__('Gluon Call to Action', 'gluon'),
        )
    );

    register_block_pattern_category(
        'gluon-testimonials',
        array(
            'label' => esc_html__('Gluon Testimonials', 'gluon'),
        )
    );

    register_block_pattern_category(
        'gluon-pricing',
        array(
            'label' => esc_html__('Gluon Pricing', 'gluon'),
        )
    );

    register_block_pattern_category(
        'gluon-contact',
        array(
            'label' => esc_html__('Gluon Contact', 'gluon'),
        )
    );
}
add_action('init', 'gluon_register_pattern_categories');

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_scripts()
{
    // Enqueue main stylesheet
    wp_enqueue_style(
        'gluon-style',
        get_stylesheet_uri(),
        array(),
        GLUON_VERSION
    );

    // Enqueue dark mode styles
    wp_enqueue_style(
        'gluon-dark-mode',
        GLUON_URI . '/assets/css/dark-mode.css',
        array('gluon-style'),
        GLUON_VERSION
    );

    // Enqueue theme toggle script
    wp_enqueue_script(
        'gluon-theme-toggle',
        GLUON_URI . '/assets/js/theme-toggle.js',
        array(),
        GLUON_VERSION,
        array(
            'strategy' => 'defer',
            'in_footer' => false, // Load in head for faster theme detection
        )
    );
}
add_action('wp_enqueue_scripts', 'gluon_scripts');

/**
 * Enqueue block editor assets.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_editor_assets()
{
    // Enqueue editor styles
    wp_enqueue_style(
        'gluon-editor-style',
        GLUON_URI . '/style.css',
        array(),
        GLUON_VERSION
    );
}
add_action('enqueue_block_editor_assets', 'gluon_editor_assets');

/**
 * Register widget areas.
 *
 * @since 1.0.0
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @return void
 */
function gluon_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'gluon'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here to appear in your sidebar.', 'gluon'),
            'before_widget' => '<section id="%1$s" class="widget %2$s mb-6">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title text-lg font-semibold text-neutral-900 mb-4">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Footer 1', 'gluon'),
            'id' => 'footer-1',
            'description' => esc_html__('First footer widget area.', 'gluon'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title text-white font-semibold mb-4">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Footer 2', 'gluon'),
            'id' => 'footer-2',
            'description' => esc_html__('Second footer widget area.', 'gluon'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title text-white font-semibold mb-4">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Footer 3', 'gluon'),
            'id' => 'footer-3',
            'description' => esc_html__('Third footer widget area.', 'gluon'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title text-white font-semibold mb-4">',
            'after_title' => '</h4>',
        )
    );
}
add_action('widgets_init', 'gluon_widgets_init');

/**
 * Custom template functions.
 */
require GLUON_DIR . '/inc/template-functions.php';

/**
 * Custom template tags.
 */
require GLUON_DIR . '/inc/template-tags.php';

/**
 * Lucide icon system.
 */
require GLUON_DIR . '/inc/class-gluon-icons.php';
