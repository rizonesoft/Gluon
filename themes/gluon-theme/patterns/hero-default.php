<?php
/**
 * Title: Hero Default
 * Slug: gluon/hero-default
 * Categories: gluon-heroes, featured
 * Keywords: hero, banner, header, cta
 * Description: A full-width hero section with heading, text, and call-to-action buttons.
 */
?>
<!-- wp:cover {"dimRatio":0,"overlayColor":"gluon-surface-light","isUserOverlayColor":true,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 10vw, 8rem)","bottom":"clamp(4rem, 10vw, 8rem)","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|gluon-border","width":"1px"}}}} -->
<div class="wp-block-cover alignfull"
    style="border-bottom-color:var(--wp--preset--color--gluon-border);border-bottom-width:1px;padding-top:clamp(4rem, 10vw, 8rem);padding-right:var(--wp--preset--spacing--40);padding-bottom:clamp(4rem, 10vw, 8rem);padding-left:var(--wp--preset--spacing--40);min-height:500px">
    <span aria-hidden="true"
        class="wp-block-cover__background has-gluon-surface-light-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)","fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"gluon-text-primary"} -->
            <h1 class="wp-block-heading has-text-align-center has-gluon-text-primary-color has-text-color"
                style="font-size:clamp(2.5rem, 5vw, 4rem);font-weight:700;letter-spacing:-0.02em">
                <?php esc_html_e('Build Faster, Ship Smarter', 'gluon'); ?>
            </h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(1rem, 2vw, 1.25rem)"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"gluon-text-secondary"} -->
            <p class="has-text-align-center has-gluon-text-secondary-color has-text-color"
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

                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px","width":"2px"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.5rem","right":"1.5rem"}}},"textColor":"gluon-accent"} -->
                <div class="wp-block-button is-style-outline"><a
                        class="wp-block-button__link has-gluon-accent-color has-text-color wp-element-button"
                        style="border-width:2px;border-radius:2px;font-weight:500;padding-top:0.75rem;padding-right:1.5rem;padding-bottom:0.75rem;padding-left:1.5rem">
                        <?php esc_html_e('Learn More', 'gluon'); ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->