<?php
/**
 * The header for Gluon theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gluon
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col'); ?>>
    <?php wp_body_open(); ?>

    <a class="skip-link" href="#primary">
        <?php esc_html_e('Skip to content', 'gluon'); ?>
    </a>

    <header id="masthead"
        class="site-header sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-neutral-200">
        <div class="site-container">
            <div class="flex items-center justify-between h-16 lg:h-20">

                <!-- Site Branding -->
                <div class="site-branding flex-shrink-0">
                    <?php if (has_custom_logo()): ?>
                        <div class="custom-logo-link">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else: ?>
                        <?php if (is_front_page() && is_home()): ?>
                            <h1 class="site-title text-xl lg:text-2xl font-bold m-0">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
                                    class="text-neutral-900 hover:text-rizone-600 no-underline">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                        <?php else: ?>
                            <p class="site-title text-xl lg:text-2xl font-bold m-0">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
                                    class="text-neutral-900 hover:text-rizone-600 no-underline">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <?php
                        $gluon_description = get_bloginfo('description', 'display');
                        if ($gluon_description || is_customize_preview()):
                            ?>
                            <p class="site-description text-sm text-neutral-500 m-0 hidden lg:block">
                                <?php echo $gluon_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation -->
                <nav id="site-navigation" class="main-navigation hidden lg:flex items-center gap-8">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'flex items-center gap-6 list-none m-0 p-0',
                            'container' => false,
                            'fallback_cb' => false,
                            'depth' => 2,
                        )
                    );
                    ?>

                    <!-- Header Actions -->
                    <div class="header-actions flex items-center gap-4">
                        <!-- Search Button -->
                        <button type="button" id="search-toggle"
                            class="p-2 text-neutral-600 hover:text-rizone-600 transition-colors"
                            aria-label="<?php esc_attr_e('Open search', 'gluon'); ?>">
                            <?php gluon_icon('search', 'w-5 h-5'); ?>
                        </button>
                    </div>
                </nav>

                <!-- Mobile Menu Toggle -->
                <button type="button" id="mobile-menu-toggle"
                    class="lg:hidden p-2 text-neutral-600 hover:text-rizone-600 transition-colors"
                    aria-controls="mobile-menu" aria-expanded="false"
                    aria-label="<?php esc_attr_e('Open menu', 'gluon'); ?>">
                    <span class="menu-icon">
                        <?php gluon_icon('menu', 'w-6 h-6'); ?>
                    </span>
                    <span class="close-icon hidden">
                        <?php gluon_icon('x', 'w-6 h-6'); ?>
                    </span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="mobile-navigation lg:hidden hidden border-t border-neutral-200 bg-white">
            <div class="site-container py-4">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id' => 'mobile-primary-menu',
                        'menu_class' => 'flex flex-col gap-2 list-none m-0 p-0',
                        'container' => false,
                        'fallback_cb' => false,
                        'depth' => 2,
                    )
                );
                ?>

                <!-- Mobile Search -->
                <div class="mt-4 pt-4 border-t border-neutral-200">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Modal -->
    <div id="search-modal" class="search-modal fixed inset-0 z-[100] hidden" role="dialog" aria-modal="true"
        aria-label="<?php esc_attr_e('Search', 'gluon'); ?>">
        <div class="absolute inset-0 bg-neutral-900/50 backdrop-blur-sm" id="search-modal-backdrop"></div>
        <div class="relative flex items-start justify-center pt-20 px-4">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-neutral-900"><?php esc_html_e('Search', 'gluon'); ?></h2>
                    <button type="button" id="search-modal-close"
                        class="p-2 text-neutral-500 hover:text-neutral-700 transition-colors"
                        aria-label="<?php esc_attr_e('Close search', 'gluon'); ?>">
                        <?php gluon_icon('x', 'w-5 h-5'); ?>
                    </button>
                </div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>

    <div id="page" class="site flex-1 flex flex-col">