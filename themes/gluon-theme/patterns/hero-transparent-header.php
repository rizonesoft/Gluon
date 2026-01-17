<?php
/**
 * Title: Hero with Transparent Header
 * Slug: gluon/hero-transparent-header
 * Categories: gluon-heroes, featured, header
 * Keywords: hero, banner, header, transparent, overlay
 * Description: Full hero section with transparent header overlay. Header adapts to dark/light mode.
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","className":"gluon-hero-with-header","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"gluon-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull gluon-hero-with-header has-gluon-accent-background-color has-background"
    style="padding-top:0;padding-bottom:0">

    <!-- wp:group {"className":"gluon-header-transparent","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group gluon-header-transparent"
        style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
        <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:gluon/site-logo {"width":48} /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:navigation {"textColor":"white","overlayMenu":"mobile","icon":"menu","style":{"typography":{"fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"right"}} /-->

                <!-- wp:html -->
                <button data-gluon-theme-toggle type="button" role="switch" aria-label="Switch to dark mode"
                    aria-pressed="false" style="color: #fff;">
                    <svg data-icon="moon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                    </svg>
                    <svg data-icon="sun" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" style="display:none">
                        <circle cx="12" cy="12" r="4" />
                        <path d="M12 2v2" />
                        <path d="M12 20v2" />
                        <path d="m4.93 4.93 1.41 1.41" />
                        <path d="m17.66 17.66 1.41 1.41" />
                        <path d="M2 12h2" />
                        <path d="M20 12h2" />
                        <path d="m6.34 17.66-1.41 1.41" />
                        <path d="m19.07 4.93-1.41 1.41" />
                    </svg>
                </button>
                <!-- /wp:html -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"clamp(4rem, 8vw, 6rem)","bottom":"clamp(6rem, 12vw, 10rem)","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group"
        style="padding-top:clamp(4rem, 8vw, 6rem);padding-right:var(--wp--preset--spacing--40);padding-bottom:clamp(6rem, 12vw, 10rem);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4.5rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.1"}},"textColor":"white"} -->
        <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color"
            style="font-size:clamp(2.5rem, 5vw, 4.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1">
            <?php esc_html_e('Build Faster, Ship Smarter', 'gluon'); ?>
        </h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(1.125rem, 2vw, 1.35rem)","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color"
            style="font-size:clamp(1.125rem, 2vw, 1.35rem);line-height:1.6;margin-top:var(--wp--preset--spacing--40)">
            <?php esc_html_e('A modern WordPress theme built for speed, accessibility, and professional results. Start creating beautiful websites today.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
            <!-- wp:button {"backgroundColor":"white","textColor":"gluon-accent","style":{"border":{"radius":"4px"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}}} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-gluon-accent-color has-white-background-color has-text-color has-background wp-element-button"
                    style="border-radius:4px;font-weight:500;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">
                    <?php esc_html_e('Get Started', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px","width":"1px","color":"#ffffff"},"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}},"textColor":"white"} -->
            <div class="wp-block-button is-style-outline"><a
                    class="wp-block-button__link has-white-color has-text-color wp-element-button"
                    style="border-width:1px;border-radius:4px;border-color:#ffffff;font-weight:500;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">
                    <?php esc_html_e('Learn More', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->