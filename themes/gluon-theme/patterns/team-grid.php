<?php
/**
 * Title: Team Members Grid
 * Slug: gluon/team-grid
 * Categories: gluon-team, featured
 * Keywords: team, members, staff, people
 * Description: A 4-column grid showcasing team members with photos and social links.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-surface-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('Meet Our Team', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('The passionate people behind Gluon.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-column"
            style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-thumbnail is-resized" style="border-radius:50%"><img
                    src="https://via.placeholder.com/120" alt="Team member"
                    style="border-radius:50%;object-fit:cover;width:120px;height:120px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
            <h4 class="wp-block-heading has-text-align-center"
                style="margin-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--md)">Alex
                Johnson</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-text-align-center has-gluon-accent-color has-text-color"
                style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('Lead Developer', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"gluon-text-secondary","iconColorValue":"#71717a","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
                style="margin-top:var(--wp--preset--spacing--20)">
                <!-- wp:social-link {"url":"#","service":"github"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"x"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-column"
            style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-thumbnail is-resized" style="border-radius:50%"><img
                    src="https://via.placeholder.com/120" alt="Team member"
                    style="border-radius:50%;object-fit:cover;width:120px;height:120px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
            <h4 class="wp-block-heading has-text-align-center"
                style="margin-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--md)">Sarah Chen
            </h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-text-align-center has-gluon-accent-color has-text-color"
                style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('UX Designer', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"gluon-text-secondary","iconColorValue":"#71717a","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
                style="margin-top:var(--wp--preset--spacing--20)">
                <!-- wp:social-link {"url":"#","service":"dribbble"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"x"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-column"
            style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-thumbnail is-resized" style="border-radius:50%"><img
                    src="https://via.placeholder.com/120" alt="Team member"
                    style="border-radius:50%;object-fit:cover;width:120px;height:120px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
            <h4 class="wp-block-heading has-text-align-center"
                style="margin-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--md)">Marcus
                Williams</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-text-align-center has-gluon-accent-color has-text-color"
                style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('Backend Engineer', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"gluon-text-secondary","iconColorValue":"#71717a","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
                style="margin-top:var(--wp--preset--spacing--20)">
                <!-- wp:social-link {"url":"#","service":"github"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-column"
            style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image aligncenter size-thumbnail is-resized" style="border-radius:50%"><img
                    src="https://via.placeholder.com/120" alt="Team member"
                    style="border-radius:50%;object-fit:cover;width:120px;height:120px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
            <h4 class="wp-block-heading has-text-align-center"
                style="margin-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--md)">Emma
                Rodriguez</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"gluon-accent","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
            <p class="has-text-align-center has-gluon-accent-color has-text-color"
                style="font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('Product Manager', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"gluon-text-secondary","iconColorValue":"#71717a","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
                style="margin-top:var(--wp--preset--spacing--20)">
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"x"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->