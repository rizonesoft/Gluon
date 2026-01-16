<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gluon
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>

    <?php if (has_post_thumbnail() && !post_password_required()): ?>
        <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
            <div class="aspect-video overflow-hidden">
                <?php
                the_post_thumbnail(
                    'large',
                    array(
                        'class' => 'w-full h-full object-cover transition-transform duration-300 hover:scale-105',
                        'alt' => the_title_attribute(array('echo' => false)),
                    )
                );
                ?>
            </div>
        </a>
    <?php endif; ?>

    <div class="card-body">
        <header class="entry-header mb-4">
            <?php
            if (is_singular()):
                the_title('<h1 class="entry-title text-2xl lg:text-3xl font-bold text-neutral-900 mb-2">', '</h1>');
            else:
                the_title('<h2 class="entry-title text-xl lg:text-2xl font-bold mb-2"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="text-neutral-900 hover:text-rizone-600 no-underline transition-colors">', '</a></h2>');
            endif;
            ?>

            <?php if ('post' === get_post_type()): ?>
                <div class="entry-meta flex flex-wrap items-center gap-3 text-sm text-neutral-500">
                    <span class="posted-on flex items-center gap-1">
                        <?php gluon_icon('calendar', 'w-4 h-4'); ?>
                        <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>
                    </span>
                    <span class="byline flex items-center gap-1">
                        <?php gluon_icon('user', 'w-4 h-4'); ?>
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                            class="text-neutral-600 hover:text-rizone-600 no-underline">
                            <?php echo esc_html(get_the_author()); ?>
                        </a>
                    </span>
                    <?php if (!post_password_required() && (comments_open() || get_comments_number())): ?>
                        <span class="comments-link flex items-center gap-1">
                            <?php gluon_icon('message-circle', 'w-4 h-4'); ?>
                            <?php
                            comments_popup_link(
                                __('0 Comments', 'gluon'),
                                __('1 Comment', 'gluon'),
                                __('% Comments', 'gluon')
                            );
                            ?>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="entry-content text-neutral-600 leading-relaxed">
            <?php
            if (is_singular()):
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Post title */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'gluon'),
                            array('span' => array('class' => array()))
                        ),
                        wp_kses_post(get_the_title())
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links mt-6 pt-4 border-t border-neutral-200">' . esc_html__('Pages:', 'gluon'),
                        'after' => '</div>',
                    )
                );
            else:
                the_excerpt();
            endif;
            ?>
        </div>

        <?php if (!is_singular()): ?>
            <footer class="entry-footer mt-4 pt-4 border-t border-neutral-100">
                <a href="<?php the_permalink(); ?>" class="btn-primary text-sm">
                    <?php esc_html_e('Read More', 'gluon'); ?>
                    <?php gluon_icon('arrow-right', 'w-4 h-4 ml-1'); ?>
                </a>
            </footer>
        <?php endif; ?>

        <?php if (is_singular() && 'post' === get_post_type()): ?>
            <footer class="entry-footer mt-6 pt-4 border-t border-neutral-200">
                <?php
                $categories_list = get_the_category_list(', ');
                if ($categories_list):
                    ?>
                    <div class="cat-links flex items-center gap-2 text-sm text-neutral-500 mb-2">
                        <span class="font-medium"><?php esc_html_e('Categories:', 'gluon'); ?></span>
                        <?php echo $categories_list; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                <?php endif; ?>

                <?php
                $tags_list = get_the_tag_list('', ', ');
                if ($tags_list):
                    ?>
                    <div class="tags-links flex items-center gap-2 text-sm text-neutral-500">
                        <span class="font-medium"><?php esc_html_e('Tags:', 'gluon'); ?></span>
                        <?php echo $tags_list; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                <?php endif; ?>

                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Post title */
                            __('Edit <span class="screen-reader-text">"%s"</span>', 'gluon'),
                            array('span' => array('class' => array()))
                        ),
                        wp_kses_post(get_the_title())
                    ),
                    '<div class="edit-link mt-4"><span class="btn-outline text-sm">',
                    '</span></div>'
                );
                ?>
            </footer>
        <?php endif; ?>
    </div>
</article>