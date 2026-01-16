<?php
/**
 * Search form template
 *
 * @package Gluon
 * @since 1.0.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="search-field-<?php echo esc_attr(wp_unique_id()); ?>">
        <?php esc_html_e('Search for:', 'gluon'); ?>
    </label>
    <div class="search-form-inner flex items-stretch">
        <div class="relative flex-1">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-neutral-400 pointer-events-none">
                <?php gluon_icon('search', 'w-5 h-5'); ?>
            </span>
            <input type="search" id="search-field-<?php echo esc_attr(wp_unique_id()); ?>"
                class="search-field w-full h-12 pl-10 pr-4 bg-neutral-100 border border-neutral-200 rounded-l-lg text-neutral-900 placeholder:text-neutral-400 focus:outline-none focus:ring-2 focus:ring-rizone-500 focus:border-transparent transition-all"
                placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'gluon'); ?>"
                value="<?php echo get_search_query(); ?>" name="s" />
        </div>
        <button type="submit" class="search-submit btn-primary rounded-l-none rounded-r-lg px-6">
            <span class="screen-reader-text">
                <?php esc_html_e('Search', 'gluon'); ?>
            </span>
            <span class="hidden sm:inline">
                <?php esc_html_e('Search', 'gluon'); ?>
            </span>
            <span class="sm:hidden">
                <?php gluon_icon('arrow-right', 'w-5 h-5'); ?>
            </span>
        </button>
    </div>
</form>