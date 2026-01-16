<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Gluon
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main flex-1 py-8 lg:py-12">
    <div class="site-container">

        <header class="page-header mb-8 lg:mb-12">
            <h1 class="page-title text-3xl lg:text-4xl font-bold text-neutral-900 mb-4">
                <?php
                printf(
                    /* translators: %s: search query */
                    esc_html__('Search Results for: %s', 'gluon'),
                    '<span class="text-rizone-600">' . get_search_query() . '</span>'
                );
                ?>
            </h1>
            <p class="text-neutral-600">
                <?php
                printf(
                    /* translators: %d: number of results */
                    esc_html(_n('%d result found', '%d results found', $wp_query->found_posts, 'gluon')),
                    (int) $wp_query->found_posts
                );
                ?>
            </p>
        </header>

        <?php if (have_posts()): ?>

            <div class="posts-grid grid gap-8 lg:gap-10">
                <?php
                while (have_posts()):
                    the_post();
                    get_template_part('parts/content', 'search');
                endwhile;
                ?>
            </div>

            <nav class="posts-navigation mt-12 pt-8 border-t border-neutral-200">
                <?php
                the_posts_pagination(
                    array(
                        'mid_size' => 2,
                        'prev_text' => '<span class="flex items-center gap-2">' . gluon_get_icon('chevron-left', 'w-4 h-4') . __('Previous', 'gluon') . '</span>',
                        'next_text' => '<span class="flex items-center gap-2">' . __('Next', 'gluon') . gluon_get_icon('chevron-right', 'w-4 h-4') . '</span>',
                    )
                );
                ?>
            </nav>

        <?php else: ?>

            <div class="no-results py-12 text-center">
                <div class="max-w-md mx-auto">
                    <?php gluon_icon('search', 'w-16 h-16 mx-auto text-neutral-300 mb-6'); ?>
                    <h2 class="text-2xl font-bold text-neutral-900 mb-4">
                        <?php esc_html_e('No Results Found', 'gluon'); ?>
                    </h2>
                    <p class="text-neutral-600 mb-6">
                        <?php esc_html_e('Sorry, no results matched your search. Please try different keywords.', 'gluon'); ?>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            </div>

        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
