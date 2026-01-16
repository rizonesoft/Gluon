<?php
/**
 * Title: Portfolio Gallery
 * Slug: gluon/portfolio-gallery
 * Categories: gluon-portfolio, featured
 * Keywords: portfolio, gallery, projects, work
 * Description: A filterable portfolio/gallery grid showcasing projects.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-surface-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('Our Work', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('Explore our latest projects and case studies.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-elevated-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-gluon-elevated-light-background-color has-background"
                style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-large"
                    style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
                    <img src="https://via.placeholder.com/600x450/088CDB/ffffff?text=Project+1" alt="Project screenshot"
                        style="aspect-ratio:4/3;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"
                    style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:paragraph {"textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|xs","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
                    <p class="has-gluon-accent-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--xs);letter-spacing:0.05em;text-transform:uppercase">
                        <?php esc_html_e('Web Design', 'gluon'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
                    <h4 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--lg)">
                        <?php esc_html_e('E-Commerce Platform', 'gluon'); ?>
                    </h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
                    <p class="has-gluon-text-secondary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--sm)">
                        <?php esc_html_e('A modern e-commerce solution with custom product filtering and checkout.', 'gluon'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-elevated-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-gluon-elevated-light-background-color has-background"
                style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-large"
                    style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
                    <img src="https://via.placeholder.com/600x450/04D98B/ffffff?text=Project+2" alt="Project screenshot"
                        style="aspect-ratio:4/3;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"
                    style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:paragraph {"textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|xs","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
                    <p class="has-gluon-accent-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--xs);letter-spacing:0.05em;text-transform:uppercase">
                        <?php esc_html_e('Branding', 'gluon'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
                    <h4 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--lg)">
                        <?php esc_html_e('Tech Startup Identity', 'gluon'); ?>
                    </h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
                    <p class="has-gluon-text-secondary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--sm)">
                        <?php esc_html_e('Complete brand identity including logo, colors, and guidelines.', 'gluon'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-elevated-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-gluon-elevated-light-background-color has-background"
                style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-large"
                    style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
                    <img src="https://via.placeholder.com/600x450/18181b/ffffff?text=Project+3" alt="Project screenshot"
                        style="aspect-ratio:4/3;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"
                    style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:paragraph {"textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|xs","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
                    <p class="has-gluon-accent-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--xs);letter-spacing:0.05em;text-transform:uppercase">
                        <?php esc_html_e('Mobile App', 'gluon'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
                    <h4 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--lg)">
                        <?php esc_html_e('Fitness Tracker App', 'gluon'); ?>
                    </h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
                    <p class="has-gluon-text-secondary-color has-text-color"
                        style="font-size:var(--wp--preset--font-size--sm)">
                        <?php esc_html_e('Cross-platform fitness app with real-time tracking and analytics.', 'gluon'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
        <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px"}}} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"
                style="border-radius:2px">
                <?php esc_html_e('View All Projects', 'gluon'); ?>
            </a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->