<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gluon
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main flex-1 py-12 lg:py-20">
    <div class="site-container">
        <div class="error-404 text-center max-w-lg mx-auto">

            <div class="error-code text-8xl lg:text-9xl font-bold text-rizone-500 mb-4">
                404
            </div>

            <h1 class="page-title text-3xl lg:text-4xl font-bold text-neutral-900 mb-4">
                <?php esc_html_e('Page Not Found', 'gluon'); ?>
            </h1>

            <p class="text-lg text-neutral-600 mb-8">
                <?php esc_html_e('Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'gluon'); ?>
            </p>

            <div class="error-actions flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
                    <?php gluon_icon('home', 'w-4 h-4 mr-2'); ?>
                    <?php esc_html_e('Back to Home', 'gluon'); ?>
                </a>
                <button type="button" onclick="history.back()" class="btn-outline">
                    <?php gluon_icon('arrow-left', 'w-4 h-4 mr-2'); ?>
                    <?php esc_html_e('Go Back', 'gluon'); ?>
                </button>
            </div>

            <div class="error-search pt-8 border-t border-neutral-200">
                <p class="text-neutral-600 mb-4">
                    <?php esc_html_e('Or try searching for what you need:', 'gluon'); ?>
                </p>
                <?php get_search_form(); ?>
            </div>

        </div>
    </div>
</main>

<?php
get_footer();
