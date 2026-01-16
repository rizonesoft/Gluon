<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gluon
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main flex-1 py-8 lg:py-12">
    <div class="site-container">

        <?php if (is_home() && !is_front_page()): ?>
            <header class="page-header mb-8 lg:mb-12">
                <h1 class="page-title text-3xl lg:text-4xl font-bold text-neutral-900">
                    <?php single_post_title(); ?>
                </h1>
            </header>
        <?php endif; ?>

        <?php if (have_posts()): ?>

            <div class="posts-grid grid gap-8 lg:gap-10">
                <?php
                /* Start the Loop */
                while (have_posts()):
                    the_post();
                    get_template_part('parts/content', get_post_type());
                endwhile;
                ?>
            </div>

            <!-- Pagination -->
            <nav class="posts-navigation mt-12 pt-8 border-t border-neutral-200">
                <?php
                the_posts_pagination(
                    array(
                        'mid_size' => 2,
                        'prev_text' => '<span class="flex items-center gap-2">' . gluon_get_icon('chevron-left', 'w-4 h-4') . __('Previous', 'gluon') . '</span>',
                        'next_text' => '<span class="flex items-center gap-2">' . __('Next', 'gluon') . gluon_get_icon('chevron-right', 'w-4 h-4') . '</span>',
                        'class' => 'pagination-links',
                    )
                );
                ?>
            </nav>

        <?php else: ?>

            <div class="no-results py-12 text-center">
                <div class="max-w-md mx-auto">
                    <?php gluon_icon('search', 'w-16 h-16 mx-auto text-neutral-300 mb-6'); ?>
                    <h2 class="text-2xl font-bold text-neutral-900 mb-4">
                        <?php esc_html_e('Nothing Found', 'gluon'); ?>
                    </h2>

                    <?php if (is_search()): ?>
                        <p class="text-neutral-600 mb-6">
                            <?php esc_html_e('Sorry, no results matched your search terms. Please try again with different keywords.', 'gluon'); ?>
                        </p>
                    <?php else: ?>
                        <p class="text-neutral-600 mb-6">
                            <?php esc_html_e('It seems we can\'t find what you\'re looking for.', 'gluon'); ?>
                        </p>
                    <?php endif; ?>

                    <?php get_search_form(); ?>
                </div>
            </div>

        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
