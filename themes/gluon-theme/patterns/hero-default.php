<?php
/**
 * Title: Hero Default
 * Slug: gluon/hero-default
 * Categories: gluon-heroes, featured
 * Keywords: hero, banner, header, cta
 * Description: A clean, full-width hero section with heading and call-to-action buttons.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(6rem, 12vw, 10rem)","bottom":"clamp(6rem, 12vw, 10rem)","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|gluon-border","width":"1px"}}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-surface-light-background-color has-background"
    style="border-bottom-color:var(--wp--preset--color--gluon-border);border-bottom-width:1px;padding-top:clamp(6rem, 12vw, 10rem);padding-right:var(--wp--preset--spacing--40);padding-bottom:clamp(6rem, 12vw, 10rem);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4.5rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.1"}},"textColor":"gluon-text-primary"} -->
        <h1 class="wp-block-heading has-text-align-center has-gluon-text-primary-color has-text-color"
            style="font-size:clamp(2.5rem, 5vw, 4.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1">
            <?php esc_html_e('Build Faster, Ship Smarter', 'gluon'); ?>
        </h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(1.125rem, 2vw, 1.35rem)","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color"
            style="font-size:clamp(1.125rem, 2vw, 1.35rem);line-height:1.6;margin-top:var(--wp--preset--spacing--40)">
            <?php esc_html_e('A modern WordPress theme built for speed, accessibility, and professional results. Start creating beautiful websites today.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
            <!-- wp:button {"backgroundColor":"gluon-accent","textColor":"gluon-text-inverted","style":{"border":{"radius":"4px"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}}} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-gluon-text-inverted-color has-gluon-accent-background-color has-text-color has-background wp-element-button"
                    style="border-radius:4px;font-weight:500;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">
                    <?php esc_html_e('Get Started', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px","width":"1px"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}},"textColor":"gluon-text-primary"} -->
            <div class="wp-block-button is-style-outline"><a
                    class="wp-block-button__link has-gluon-text-primary-color has-text-color wp-element-button"
                    style="border-width:1px;border-radius:4px;font-weight:500;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">
                    <?php esc_html_e('Learn More', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->