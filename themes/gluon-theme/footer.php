<?php
/**
 * The footer for Gluon theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gluon
 * @since 1.0.0
 */

?>

</div><!-- #page -->

<footer id="colophon" class="site-footer bg-neutral-900 text-neutral-300 mt-auto">

    <!-- Footer Widgets -->
    <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')): ?>
        <div class="footer-widgets py-12 lg:py-16 border-b border-neutral-800">
            <div class="site-container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                    <?php if (is_active_sidebar('footer-1')): ?>
                        <div class="footer-widget-area">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar('footer-2')): ?>
                        <div class="footer-widget-area">
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar('footer-3')): ?>
                        <div class="footer-widget-area">
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Footer Bottom -->
    <div class="footer-bottom py-6">
        <div class="site-container">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">

                <!-- Copyright -->
                <div class="site-info text-sm text-neutral-400">
                    <span class="copyright">
                        &copy; <?php echo esc_html(date_i18n('Y')); ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                            class="text-neutral-300 hover:text-white transition-colors">
                            <?php bloginfo('name'); ?>
                        </a>
                    </span>
                    <span class="separator mx-2 hidden lg:inline">&bull;</span>
                    <span class="theme-credit">
                        <?php
                        printf(
                            /* translators: %s: Theme name link */
                            esc_html__('Built with %s', 'gluon'),
                            '<a href="https://rizonepress.com" class="text-neutral-300 hover:text-white transition-colors" target="_blank" rel="noopener">Gluon Theme</a>'
                        );
                        ?>
                    </span>
                </div>

                <!-- Footer Navigation -->
                <?php if (has_nav_menu('footer')): ?>
                    <nav class="footer-navigation" aria-label="<?php esc_attr_e('Footer Menu', 'gluon'); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_class' => 'flex flex-wrap items-center justify-center gap-4 lg:gap-6 list-none m-0 p-0 text-sm',
                                'container' => false,
                                'depth' => 1,
                                'fallback_cb' => false,
                            )
                        );
                        ?>
                    </nav>
                <?php endif; ?>

                <!-- Social Links -->
                <?php if (has_nav_menu('social')): ?>
                    <nav class="social-navigation" aria-label="<?php esc_attr_e('Social Links', 'gluon'); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'social',
                                'menu_class' => 'flex items-center gap-4 list-none m-0 p-0',
                                'container' => false,
                                'depth' => 1,
                                'fallback_cb' => false,
                                'link_before' => '<span class="screen-reader-text">',
                                'link_after' => '</span>',
                            )
                        );
                        ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = mobileMenuToggle?.querySelector('.menu-icon');
        const closeIcon = mobileMenuToggle?.querySelector('.close-icon');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function () {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuIcon?.classList.toggle('hidden');
                closeIcon?.classList.toggle('hidden');
            });
        }

        // Search Modal
        const searchToggle = document.getElementById('search-toggle');
        const searchModal = document.getElementById('search-modal');
        const searchModalClose = document.getElementById('search-modal-close');
        const searchModalBackdrop = document.getElementById('search-modal-backdrop');
        const searchInput = searchModal?.querySelector('input[type="search"]');

        function openSearchModal() {
            searchModal?.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            searchInput?.focus();
        }

        function closeSearchModal() {
            searchModal?.classList.add('hidden');
            document.body.style.overflow = '';
        }

        searchToggle?.addEventListener('click', openSearchModal);
        searchModalClose?.addEventListener('click', closeSearchModal);
        searchModalBackdrop?.addEventListener('click', closeSearchModal);

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !searchModal?.classList.contains('hidden')) {
                closeSearchModal();
            }
        });
    });
</script>

</body>

</html>