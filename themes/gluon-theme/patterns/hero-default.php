<?php
/**
 * Title: Hero Default
 * Slug: gluon/hero-default
 * Categories: gluon-heroes, featured
 * Keywords: hero, banner, header, cta
 * Description: A full-width hero section with heading, text, and call-to-action buttons.
 */
?>
<!-- wp:cover {"dimRatio":60,"overlayColor":"gluon-surface-dark","isUserOverlayColor":true,"minHeight":600,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:600px">
    <span aria-hidden="true"
        class="wp-block-cover__background has-gluon-surface-dark-background-color has-background-dim-60 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)","fontWeight":"700"}},"textColor":"gluon-text-inverted"} -->
            <h1 class="wp-block-heading has-text-align-center has-gluon-text-inverted-color has-text-color"
                style="font-size:clamp(2.5rem, 5vw, 4rem);font-weight:700">
                <?php esc_html_e('Build Faster, Ship Smarter', 'gluon'); ?>
            </h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|lg"}},"textColor":"gluon-text-secondary"} -->
            <p class="has-text-align-center has-gluon-text-secondary-color has-text-color"
                style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('A modern WordPress theme built for speed, accessibility, and professional results. Start creating beautiful websites today.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                <!-- wp:button {"backgroundColor":"gluon-accent","textColor":"gluon-text-inverted","style":{"border":{"radius":"2px"}}} -->
                <div class="wp-block-button"><a
                        class="wp-block-button__link has-gluon-text-inverted-color has-gluon-accent-background-color has-text-color has-background wp-element-button"
                        style="border-radius:2px">
                        <?php esc_html_e('Get Started', 'gluon'); ?>
                    </a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"transparent","textColor":"gluon-text-inverted","className":"is-style-outline","style":{"border":{"radius":"2px","width":"1px"}}} -->
                <div class="wp-block-button is-style-outline"><a
                        class="wp-block-button__link has-gluon-text-inverted-color has-transparent-background-color has-text-color has-background wp-element-button"
                        style="border-radius:2px;border-width:1px">
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