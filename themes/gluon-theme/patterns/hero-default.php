<?php
/**
 * Title: Hero Default
 * Slug: gluon/hero-default
 * Categories: gluon-heroes, featured
 * Keywords: hero, banner, header, cta
 * Description: A full-width hero section with gradient mesh background, heading, and CTA buttons.
 */
?>
<!-- wp:group {"align":"full","className":"gluon-hero-bg gluon-noise","style":{"spacing":{"padding":{"top":"clamp(4rem, 10vw, 8rem)","bottom":"clamp(4rem, 10vw, 8rem)","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-surface-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull gluon-hero-bg gluon-noise has-gluon-surface-dark-background-color has-background"
    style="padding-top:clamp(4rem, 10vw, 8rem);padding-right:var(--wp--preset--spacing--40);padding-bottom:clamp(4rem, 10vw, 8rem);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)","fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"gluon-text-inverted"} -->
        <h1 class="wp-block-heading has-text-align-center has-gluon-text-inverted-color has-text-color"
            style="font-size:clamp(2.5rem, 5vw, 4rem);font-weight:700;letter-spacing:-0.02em">
            <?php esc_html_e('Build Faster, Ship Smarter', 'gluon'); ?>
        </h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(1rem, 2vw, 1.25rem)"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"gluon-text-muted"} -->
        <p class="has-text-align-center has-gluon-text-muted-color has-text-color"
            style="font-size:clamp(1rem, 2vw, 1.25rem);margin-top:var(--wp--preset--spacing--30)">
            <?php esc_html_e('A modern WordPress theme built for speed, accessibility, and professional results. Start creating beautiful websites today.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
            <!-- wp:button {"backgroundColor":"gluon-accent","textColor":"gluon-text-inverted","style":{"border":{"radius":"2px"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.5rem","right":"1.5rem"}}}} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-gluon-text-inverted-color has-gluon-accent-background-color has-text-color has-background wp-element-button"
                    style="border-radius:2px;font-weight:500;padding-top:0.75rem;padding-right:1.5rem;padding-bottom:0.75rem;padding-left:1.5rem">
                    <?php esc_html_e('Get Started', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px","width":"2px","color":"#ffffff"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.5rem","right":"1.5rem"}}},"textColor":"gluon-text-inverted"} -->
            <div class="wp-block-button is-style-outline"><a
                    class="wp-block-button__link has-gluon-text-inverted-color has-text-color has-border-color wp-element-button"
                    style="border-color:#ffffff;border-width:2px;border-radius:2px;font-weight:500;padding-top:0.75rem;padding-right:1.5rem;padding-bottom:0.75rem;padding-left:1.5rem">
                    <?php esc_html_e('Learn More', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->