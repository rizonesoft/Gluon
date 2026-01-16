<?php
/**
 * Title: Pricing Table
 * Slug: gluon/pricing-table
 * Categories: gluon-pricing, featured
 * Keywords: pricing, plans, comparison
 * Description: A 3-tier pricing table with highlighted recommended plan.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-surface-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('Simple, Transparent Pricing', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('Choose the plan that works best for your needs.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"2px","width":"1px"}},"borderColor":"gluon-border"} -->
        <div class="wp-block-column has-border-color has-gluon-border-border-color"
            style="border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
            <h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('Starter', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
            <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><span
                    style="font-size:var(--wp--preset--font-size--4xl);font-weight:700">$0</span><span
                    style="color:var(--wp--preset--color--gluon-text-secondary)">/mo</span></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
            <hr class="wp-block-separator has-alpha-channel-opacity"
                style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
            <!-- /wp:separator -->

            <!-- wp:list {"style":{"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"padding":{"left":"0"}}},"className":"is-style-checkmark-list"} -->
            <ul style="padding-left:0;font-size:var(--wp--preset--font-size--sm)" class="is-style-checkmark-list">
                <li>✓
                    <?php esc_html_e('1 Website', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Basic Templates', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Community Support', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Regular Updates', 'gluon'); ?>
                </li>
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                <!-- wp:button {"width":100,"className":"is-style-outline","style":{"border":{"radius":"2px"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
                        class="wp-block-button__link wp-element-button" style="border-radius:2px">
                        <?php esc_html_e('Get Started', 'gluon'); ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-accent"} -->
        <div class="wp-block-column has-gluon-accent-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|xs","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"gluon-text-inverted"} -->
            <p class="has-text-align-center has-gluon-text-inverted-color has-text-color"
                style="font-size:var(--wp--preset--font-size--xs);letter-spacing:0.1em;text-transform:uppercase">
                <?php esc_html_e('Most Popular', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}},"textColor":"gluon-text-inverted"} -->
            <h3 class="wp-block-heading has-text-align-center has-gluon-text-inverted-color has-text-color"
                style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('Professional', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"gluon-text-inverted"} -->
            <p class="has-text-align-center has-gluon-text-inverted-color has-text-color"
                style="margin-top:var(--wp--preset--spacing--30)"><span
                    style="font-size:var(--wp--preset--font-size--4xl);font-weight:700">$29</span><span
                    style="opacity:0.8">/mo</span></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#ffffff40"}}} -->
            <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background"
                style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);background-color:#ffffff40;color:#ffffff40" />
            <!-- /wp:separator -->

            <!-- wp:list {"style":{"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"padding":{"left":"0"}}},"textColor":"gluon-text-inverted"} -->
            <ul style="padding-left:0;font-size:var(--wp--preset--font-size--sm)"
                class="has-gluon-text-inverted-color has-text-color">
                <li>✓
                    <?php esc_html_e('Unlimited Websites', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('All Templates', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Priority Support', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('AI Features', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('White Label', 'gluon'); ?>
                </li>
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                <!-- wp:button {"width":100,"backgroundColor":"gluon-surface-light","textColor":"gluon-accent","style":{"border":{"radius":"2px"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link has-gluon-accent-color has-gluon-surface-light-background-color has-text-color has-background wp-element-button"
                        style="border-radius:2px">
                        <?php esc_html_e('Get Started', 'gluon'); ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"radius":"2px","width":"1px"}},"borderColor":"gluon-border"} -->
        <div class="wp-block-column has-border-color has-gluon-border-border-color"
            style="border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
            <h3 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--lg)">
                <?php esc_html_e('Enterprise', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
            <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><span
                    style="font-size:var(--wp--preset--font-size--4xl);font-weight:700">$99</span><span
                    style="color:var(--wp--preset--color--gluon-text-secondary)">/mo</span></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
            <hr class="wp-block-separator has-alpha-channel-opacity"
                style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
            <!-- /wp:separator -->

            <!-- wp:list {"style":{"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"padding":{"left":"0"}}}} -->
            <ul style="padding-left:0;font-size:var(--wp--preset--font-size--sm)">
                <li>✓
                    <?php esc_html_e('Everything in Pro', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Dedicated Support', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Custom Development', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('SLA Guarantee', 'gluon'); ?>
                </li>
                <li>✓
                    <?php esc_html_e('Training Sessions', 'gluon'); ?>
                </li>
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                <!-- wp:button {"width":100,"className":"is-style-outline","style":{"border":{"radius":"2px"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
                        class="wp-block-button__link wp-element-button" style="border-radius:2px">
                        <?php esc_html_e('Contact Sales', 'gluon'); ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->