<?php
/**
 * Title: Call to Action
 * Slug: gluon/cta-default
 * Categories: gluon-cta, featured
 * Keywords: cta, call to action, banner
 * Description: A centered call-to-action section with heading and button.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-accent-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","level":2,"textColor":"gluon-text-inverted"} -->
        <h2 class="wp-block-heading has-text-align-center has-gluon-text-inverted-color has-text-color">
            <?php esc_html_e('Ready to Get Started?', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-inverted","style":{"typography":{"opacity":"0.9"}}} -->
        <p class="has-text-align-center has-gluon-text-inverted-color has-text-color">
            <?php esc_html_e('Join thousands of developers building faster, more accessible websites with Gluon.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
            <!-- wp:button {"backgroundColor":"gluon-surface-light","textColor":"gluon-accent","style":{"border":{"radius":"2px"}}} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-gluon-accent-color has-gluon-surface-light-background-color has-text-color has-background wp-element-button"
                    style="border-radius:2px">
                    <?php esc_html_e('Start Building Today', 'gluon'); ?>
                </a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->