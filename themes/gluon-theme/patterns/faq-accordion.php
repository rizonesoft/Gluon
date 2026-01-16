<?php
/**
 * Title: FAQ Accordion
 * Slug: gluon/faq-accordion
 * Categories: gluon-faq, featured
 * Keywords: faq, accordion, questions, answers
 * Description: A frequently asked questions section using the native WordPress details block.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"gluon-elevated-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gluon-elevated-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"textAlign":"center","level":2} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php esc_html_e('Frequently Asked Questions', 'gluon'); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gluon-text-secondary"} -->
        <p class="has-text-align-center has-gluon-text-secondary-color has-text-color">
            <?php esc_html_e('Find answers to common questions about Gluon.', 'gluon'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">
        <!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <details class="wp-block-details has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
            <summary>
                <?php esc_html_e('What is Gluon Theme?', 'gluon'); ?>
            </summary>
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"gluon-text-secondary"} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--20)">
                <?php esc_html_e('Gluon is a modern WordPress FSE (Full Site Editing) block theme built with Tailwind CSS v4, Lucide icons, and optimized for performance and accessibility. It follows WordPress.org submission standards and is designed for developers and businesses.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <details class="wp-block-details has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
            <summary>
                <?php esc_html_e('Is Gluon compatible with page builders?', 'gluon'); ?>
            </summary>
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"gluon-text-secondary"} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--20)">
                <?php esc_html_e('Gluon is designed primarily for the WordPress Site Editor (Gutenberg), but it works alongside popular page builders. For the best experience, we recommend using the native block editor with our pre-built patterns.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <details class="wp-block-details has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
            <summary>
                <?php esc_html_e('Does Gluon support dark mode?', 'gluon'); ?>
            </summary>
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"gluon-text-secondary"} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--20)">
                <?php esc_html_e('Yes! Gluon includes a fully accessible dark/light mode toggle that respects system preferences (prefers-color-scheme) and allows users to manually override with their preference saved in localStorage.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <details class="wp-block-details has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
            <summary>
                <?php esc_html_e('Is Gluon accessible?', 'gluon'); ?>
            </summary>
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"gluon-text-secondary"} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--20)">
                <?php esc_html_e('Absolutely. Gluon is built to meet WCAG 2.1 AA standards with proper focus indicators, skip links, semantic HTML5 landmarks, ARIA labels, and 4.5:1 minimum color contrast ratios.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"gluon-surface-light"} -->
        <details class="wp-block-details has-gluon-surface-light-background-color has-background"
            style="border-radius:2px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
            <summary>
                <?php esc_html_e('Can I customize the colors?', 'gluon'); ?>
            </summary>
            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"gluon-text-secondary"} -->
            <p class="has-gluon-text-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--20)">
                <?php esc_html_e('Yes. Gluon uses CSS custom properties and the WordPress Site Editor Global Styles, making it easy to customize colors, typography, and spacing without touching code.', 'gluon'); ?>
            </p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->