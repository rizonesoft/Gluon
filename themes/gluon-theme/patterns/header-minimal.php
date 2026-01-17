<?php
/**
 * Title: Header - Minimal
 * Slug: gluon/header-minimal
 * Categories: header
 * Block Types: core/template-part/header
 * Template Types: header
 * Description: Clean minimal header with logo left, navigation right, no border.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"gluon-surface-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-gluon-surface-light-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:gluon/site-logo {"width":36} /-->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","style":{"typography":{"fontSize":"0.875rem"}},"layout":{"type":"flex","justifyContent":"right"}} /-->

            <!-- wp:html -->
            <button data-gluon-theme-toggle type="button" role="switch" aria-label="Switch to dark mode"
                aria-pressed="false">
                <svg data-icon="moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                </svg>
                <svg data-icon="sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    style="display:none">
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