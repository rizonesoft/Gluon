<?php
/**
 * Title: Features Grid
 * Slug: gluon/features-grid
 * Categories: gluon-features, featured
 * Keywords: features, grid, services, cards
 * Description: A 3-column grid showcasing features or services with icons.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-surface-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('Why Choose Gluon?', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('Built with modern technologies for speed, accessibility, and developer experience.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-elevated-light"} -->
        <div class="wp-block-column has-gluon-elevated-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}},"textColor":"gluon-accent"} -->
            <p class="has-gluon-accent-color has-text-color" style="font-size:2rem">⚡</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
            <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('Lightning Fast', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('Optimized for Core Web Vitals with minimal JavaScript and efficient CSS delivery.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-elevated-light"} -->
        <div class="wp-block-column has-gluon-elevated-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}},"textColor":"gluon-accent"} -->
            <p class="has-gluon-accent-color has-text-color" style="font-size:2rem">♿</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
            <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('Fully Accessible', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('WCAG 2.1 AA compliant with proper focus states, semantic markup, and screen reader support.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-elevated-light"} -->
        <div class="wp-block-column has-gluon-elevated-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}},"textColor":"gluon-accent"} -->
            <p class="has-gluon-accent-color has-text-color" style="font-size:2rem">🎨</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
            <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('Modern Design', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('Clean, utilitarian aesthetics with dark mode support and fluid typography.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->