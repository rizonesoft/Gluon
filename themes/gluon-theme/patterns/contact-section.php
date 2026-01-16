<?php
/**
 * Title: Contact Section
 * Slug: gluon/contact-section
 * Categories: gluon-contact, featured
 * Keywords: contact, form, information
 * Description: A contact section with info cards and form placeholder.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-elevated-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-elevated-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('Get in Touch', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('Have questions? We\'d love to hear from you.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-gluon-surface-light-background-color has-background"
                style="border-radius:2px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"gluon-accent"} -->
                <p class="has-gluon-accent-color has-text-color" style="font-size:1.5rem">📧</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"var:preset|font-size|md"}}} -->
                <h4 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--md)">
                    <?php esc_html_e('Email Us', 'gluon'); ?>
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
                <p class="has-gluon-text-secondary-color has-text-color"
                    style="font-size:var(--wp--preset--font-size--sm)">hello@gluontheme.com</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-gluon-surface-light-background-color has-background"
                style="border-radius:2px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"gluon-accent"} -->
                <p class="has-gluon-accent-color has-text-color" style="font-size:1.5rem">💬</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"var:preset|font-size|md"}}} -->
                <h4 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--md)">
                    <?php esc_html_e('Live Chat', 'gluon'); ?>
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
                <p class="has-gluon-text-secondary-color has-text-color"
                    style="font-size:var(--wp--preset--font-size--sm)">
                    <?php esc_html_e('Available Mon-Fri, 9am-5pm', 'gluon'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-gluon-surface-light-background-color has-background"
                style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"gluon-accent"} -->
                <p class="has-gluon-accent-color has-text-color" style="font-size:1.5rem">📍</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"var:preset|font-size|md"}}} -->
                <h4 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--md)">
                    <?php esc_html_e('Office', 'gluon'); ?>
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
                <p class="has-gluon-text-secondary-color has-text-color"
                    style="font-size:var(--wp--preset--font-size--sm)">
                    <?php esc_html_e('123 Developer Lane, Tech City', 'gluon'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <div class="wp-block-column has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:60%">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl"}}} -->
            <h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xl)">
                <?php esc_html_e('Send us a message', 'gluon'); ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"gluon-text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
            <p class="has-gluon-text-secondary-color has-text-color"
                style="margin-bottom:var(--wp--preset--spacing--40);font-size:var(--wp--preset--font-size--sm)">
                <?php esc_html_e('Fill out the form below and we\'ll get back to you within 24 hours.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:html -->
            <form class="gluon-contact-form">
                <div style="margin-bottom: 1rem;">
                    <label for="name"
                        style="display: block; font-size: var(--wp--preset--font-size--sm); margin-bottom: 0.5rem;">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name"
                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--wp--preset--color--gluon-border); border-radius: 2px; font-size: var(--wp--preset--font-size--base);">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="email"
                        style="display: block; font-size: var(--wp--preset--font-size--sm); margin-bottom: 0.5rem;">Email</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com"
                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--wp--preset--color--gluon-border); border-radius: 2px; font-size: var(--wp--preset--font-size--base);">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="message"
                        style="display: block; font-size: var(--wp--preset--font-size--sm); margin-bottom: 0.5rem;">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="How can we help?"
                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--wp--preset--color--gluon-border); border-radius: 2px; font-size: var(--wp--preset--font-size--base); resize: vertical;"></textarea>
                </div>
                <button type="submit"
                    style="background: var(--wp--preset--color--gluon-accent); color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 2px; font-size: var(--wp--preset--font-size--base); cursor: pointer;">Send
                    Message</button>
            </form>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->