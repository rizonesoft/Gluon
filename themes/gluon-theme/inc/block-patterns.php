<?php
/**
 * Block Patterns registration for Gluon Theme
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register block pattern category.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_register_block_pattern_category()
{
    register_block_pattern_category(
        'gluon-theme',
        array(
            'label' => esc_html__('Gluon Theme', 'gluon-theme'),
        )
    );
}
add_action('init', 'gluon_theme_register_block_pattern_category');

/**
 * Register block patterns.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_register_block_patterns()
{
    // Hero Section Pattern
    register_block_pattern(
        'gluon-theme/hero-section',
        array(
            'title' => esc_html__('Hero Section', 'gluon-theme'),
            'description' => esc_html__('A full-width hero section with heading and call-to-action button.', 'gluon-theme'),
            'categories' => array('gluon-theme', 'featured'),
            'content' => '<!-- wp:cover {"dimRatio":50,"overlayColor":"primary","minHeight":500,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3rem"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:3rem">Welcome to Gluon Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">A modern, lightweight WordPress theme built with performance and accessibility in mind.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->',
        )
    );

    // Call to Action Pattern
    register_block_pattern(
        'gluon-theme/call-to-action',
        array(
            'title' => esc_html__('Call to Action', 'gluon-theme'),
            'description' => esc_html__('A centered call-to-action section with heading, text, and button.', 'gluon-theme'),
            'categories' => array('gluon-theme', 'call-to-action'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Ready to Get Started?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Join thousands of satisfied customers who have transformed their websites with Gluon Theme.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Start Your Journey</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
        )
    );
}
add_action('init', 'gluon_theme_register_block_patterns');
