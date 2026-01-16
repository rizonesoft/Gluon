<?php
/**
 * Custom template tags for Gluon Theme
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Prints HTML with meta information for the current post-date/time.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_posted_on()
{
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date()),
        esc_attr(get_the_modified_date(DATE_W3C)),
        esc_html(get_the_modified_date())
    );

    printf(
        '<span class="posted-on">%1$s<a href="%2$s" rel="bookmark">%3$s</a></span>',
        /* translators: %s: post date. */
        esc_html_x('Posted on ', 'post date', 'gluon'),
        esc_url(get_permalink()),
        $time_string
    );
}

/**
 * Prints HTML with meta information for the current author.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_posted_by()
{
    printf(
        '<span class="byline">%1$s<span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span></span>',
        /* translators: %s: author name. */
        esc_html_x('by ', 'post author', 'gluon'),
        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
        esc_html(get_the_author())
    );
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_entry_footer()
{
    // Hide category and tag text for pages.
    if ('post' === get_post_type()) {
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list(esc_html__(', ', 'gluon'));
        if ($categories_list) {
            printf(
                '<span class="cat-links">%1$s%2$s</span>',
                /* translators: %s: list of categories. */
                esc_html__('Posted in ', 'gluon'),
                $categories_list
            );
        }

        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'gluon'));
        if ($tags_list) {
            printf(
                '<span class="tags-links">%1$s%2$s</span>',
                /* translators: %s: list of tags. */
                esc_html__('Tagged ', 'gluon'),
                $tags_list
            );
        }
    }

    if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
        echo '<span class="comments-link">';
        comments_popup_link(
            sprintf(
                wp_kses(
                    /* translators: %s: post title */
                    __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'gluon'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
        );
        echo '</span>';
    }

    edit_post_link(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __('Edit <span class="screen-reader-text">%s</span>', 'gluon'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            wp_kses_post(get_the_title())
        ),
        '<span class="edit-link">',
        '</span>'
    );
}

/**
 * Displays an optional post thumbnail.
 *
 * @since 1.0.0
 * @return void
 */
function gluon_theme_post_thumbnail()
{
    if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
        return;
    }

    if (is_singular()):
        ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <?php
    else:
        ?>
        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
            <?php
            the_post_thumbnail(
                'post-thumbnail',
                array(
                    'alt' => the_title_attribute(
                        array(
                            'echo' => false,
                        )
                    ),
                )
            );
            ?>
        </a>
        <?php
    endif;
}
