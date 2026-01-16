<?php
/**
 * Title: Testimonials Grid
 * Slug: gluon/testimonials-grid
 * Categories: gluon-testimonials, featured
 * Keywords: testimonials, reviews, quotes
 * Description: A 3-column grid of customer testimonials with avatars.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-elevated-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-elevated-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('What Our Clients Say', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('Trusted by developers and businesses worldwide.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <div class="wp-block-column has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|lg"}},"textColor":"gluon-accent"} -->
            <p class="has-gluon-accent-color has-text-color" style="font-size:var(--wp--preset--font-size--lg)">★★★★★
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontStyle":"italic"}}} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="font-style:italic">"
                <?php esc_html_e('Gluon transformed our workflow. The speed improvements alone were worth the switch.', 'gluon'); ?>"
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:50%"><img
                        src="https://via.placeholder.com/40" alt="Avatar"
                        style="border-radius:50%;object-fit:cover;width:40px;height:40px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}},"textColor":"gluon-text-primary"} -->
                    <p class="has-gluon-text-primary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--sm);font-weight:600">Sarah Johnson</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs"}},"textColor":"gluon-text-secondary"} -->
                    <p class="has-gluon-text-secondary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--xs)">CTO, TechCorp</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <div class="wp-block-column has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|lg"}},"textColor":"gluon-accent"} -->
            <p class="has-gluon-accent-color has-text-color" style="font-size:var(--wp--preset--font-size--lg)">★★★★★
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontStyle":"italic"}}} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="font-style:italic">"
                <?php esc_html_e('Finally, a theme that prioritizes accessibility without sacrificing design.', 'gluon'); ?>"
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:50%"><img
                        src="https://via.placeholder.com/40" alt="Avatar"
                        style="border-radius:50%;object-fit:cover;width:40px;height:40px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}},"textColor":"gluon-text-primary"} -->
                    <p class="has-gluon-text-primary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--sm);font-weight:600">Michael Chen</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs"}},"textColor":"gluon-text-secondary"} -->
                    <p class="has-gluon-text-secondary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--xs)">Lead Developer, StartupXYZ</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <div class="wp-block-column has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|lg"}},"textColor":"gluon-accent"} -->
            <p class="has-gluon-accent-color has-text-color" style="font-size:var(--wp--preset--font-size--lg)">★★★★★
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontStyle":"italic"}}} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="font-style:italic">"
                <?php esc_html_e('The dark mode implementation is flawless. Our users love it.', 'gluon'); ?>"
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-thumbnail is-resized" style="border-radius:50%"><img
                        src="https://via.placeholder.com/40" alt="Avatar"
                        style="border-radius:50%;object-fit:cover;width:40px;height:40px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}},"textColor":"gluon-text-primary"} -->
                    <p class="has-gluon-text-primary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--sm);font-weight:600">Emily Rodriguez</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs"}},"textColor":"gluon-text-secondary"} -->
                    <p class="has-gluon-text-secondary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--xs)">Product Manager, DesignCo</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->