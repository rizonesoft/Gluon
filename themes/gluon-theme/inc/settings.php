<?php
/**
 * Gluon Theme Settings Page
 *
 * Provides a dedicated admin page for theme settings including:
 * - Light mode logo
 * - Dark mode logo
 * - SVG upload support toggle
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

/**
 * Register the settings page under Appearance menu
 */
function gluon_register_settings_page()
{
    add_theme_page(
        __('Gluon Settings', 'gluon'),
        __('Gluon Settings', 'gluon'),
        'edit_theme_options',
        'gluon-settings',
        'gluon_settings_page_html'
    );
}
add_action('admin_menu', 'gluon_register_settings_page');

/**
 * Register settings
 */
function gluon_register_settings()
{
    // Note: Logo settings removed - now handled by the Gluon Site Logo block

    // Advanced settings
    register_setting('gluon_settings_group', 'gluon_enable_svg', array(
        'type' => 'boolean',
        'sanitize_callback' => 'rest_sanitize_boolean',
        'default' => false,
    ));
}
add_action('admin_init', 'gluon_register_settings');

/**
 * Enable SVG upload if setting is enabled
 */
function gluon_enable_svg_upload($mimes)
{
    if (get_option('gluon_enable_svg', false)) {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
    }
    return $mimes;
}
add_filter('upload_mimes', 'gluon_enable_svg_upload');

/**
 * Sanitize SVG on upload using enshrined/svg-sanitize library
 */
function gluon_sanitize_svg($file)
{
    if (!get_option('gluon_enable_svg', false)) {
        return $file;
    }

    if ($file['type'] === 'image/svg+xml') {
        // Check if library is available
        if (!class_exists('\enshrined\svgSanitize\Sanitizer')) {
            // Library not loaded, fall back to basic check
            return $file;
        }

        $svg_content = file_get_contents($file['tmp_name']);

        // Use the enshrined/svg-sanitize library
        $sanitizer = new \enshrined\svgSanitize\Sanitizer();
        $sanitizer->removeRemoteReferences(true);
        $sanitizer->minify(false);

        $clean_svg = $sanitizer->sanitize($svg_content);

        if ($clean_svg === false) {
            $file['error'] = __('Invalid or potentially unsafe SVG file.', 'gluon');
            return $file;
        }

        // Write sanitized content back
        file_put_contents($file['tmp_name'], $clean_svg);
    }

    return $file;
}
add_filter('wp_handle_upload_prefilter', 'gluon_sanitize_svg');

/**
 * Enqueue admin scripts for media uploader and toast notifications
 */
function gluon_admin_scripts($hook)
{
    if ($hook !== 'appearance_page_gluon-settings') {
        return;
    }

    wp_enqueue_media();

    // Toast notifications
    wp_enqueue_style(
        'gluon-admin-toast',
        GLUON_URI . '/assets/css/admin-toast.css',
        array(),
        GLUON_VERSION
    );
    wp_enqueue_script(
        'gluon-admin-toast',
        GLUON_URI . '/assets/js/admin-toast.js',
        array(),
        GLUON_VERSION,
        true
    );

    // Settings page styles and scripts
    wp_enqueue_style(
        'gluon-admin-settings',
        GLUON_URI . '/assets/css/admin-settings.css',
        array(),
        GLUON_VERSION
    );
    wp_enqueue_script(
        'gluon-admin-settings',
        GLUON_URI . '/assets/js/admin-settings.js',
        array('jquery', 'gluon-admin-toast'),
        GLUON_VERSION,
        true
    );

    // Pass settings saved status to JS
    $settings_saved = isset($_GET['settings-updated']) && $_GET['settings-updated'] === 'true';
    wp_localize_script('gluon-admin-settings', 'gluonAdmin', array(
        'settingsSaved' => $settings_saved,
        'strings' => array(
            'saved' => __('Settings saved successfully!', 'gluon'),
            'error' => __('An error occurred.', 'gluon'),
        ),
    ));
}
add_action('admin_enqueue_scripts', 'gluon_admin_scripts');

/**
 * Render the settings page HTML
 */
function gluon_settings_page_html()
{
    if (!current_user_can('edit_theme_options')) {
        return;
    }

    $svg_enabled = get_option('gluon_enable_svg', false);
    $active_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'general';
    ?>
        <div class="wrap gluon-settings-wrap">
            <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

            <?php settings_errors('gluon_settings'); ?>

            <nav class="nav-tab-wrapper gluon-tabs">
                <a href="?page=gluon-settings&tab=general"
                    class="nav-tab <?php echo $active_tab === 'general' ? 'nav-tab-active' : ''; ?>">
                    <?php esc_html_e('General', 'gluon'); ?>
                </a>
                <a href="?page=gluon-settings&tab=advanced"
                    class="nav-tab <?php echo $active_tab === 'advanced' ? 'nav-tab-active' : ''; ?>">
                    <?php esc_html_e('Advanced', 'gluon'); ?>
                </a>
            </nav>

            <form method="post" action="options.php">
                <?php settings_fields('gluon_settings_group'); ?>

                <?php if ($active_tab === 'general'): ?>
                        <!-- General Tab -->
                        <div class="gluon-settings-section">
                            <h2><?php esc_html_e('Site Identity', 'gluon'); ?></h2>
                            <p class="description">
                                <?php
                                printf(
                                    /* translators: %s: Link to Site Editor */
                                    esc_html__('To customize your site logo (including dark mode support), use the %s and insert the Gluon Site Logo block in your header.', 'gluon'),
                                    '<a href="' . esc_url(admin_url('site-editor.php')) . '">' . esc_html__('Site Editor', 'gluon') . '</a>'
                                );
                                ?>
                            </p>
                            <p style="margin-top: 20px;">
                                <a href="<?php echo esc_url(admin_url('site-editor.php?postType=wp_template_part&postId=' . get_stylesheet() . '%2F%2Fheader')); ?>" class="button button-primary">
                                    <?php esc_html_e('Edit Header', 'gluon'); ?>
                                </a>
                            </p>
                        </div>

                <?php elseif ($active_tab === 'advanced'): ?>
                        <!-- Advanced Tab -->
                        <div class="gluon-settings-section">
                            <h2><?php esc_html_e('Media Settings', 'gluon'); ?></h2>

                            <table class="form-table" role="presentation">
                                <tr>
                                    <th scope="row"><?php esc_html_e('SVG Upload Support', 'gluon'); ?></th>
                                    <td>
                                        <label for="gluon_enable_svg">
                                            <input type="checkbox" name="gluon_enable_svg" id="gluon_enable_svg" value="1"
                                                <?php checked($svg_enabled); ?>>
                                            <?php esc_html_e('Enable SVG file uploads', 'gluon'); ?>
                                        </label>
                                        <p class="description">
                                            <?php esc_html_e('Allow SVG files to be uploaded to the Media Library. SVG files are sanitized on upload to remove potentially harmful code.', 'gluon'); ?>
                                        </p>
                                        <p class="description" style="color: #d63638;">
                                            <strong><?php esc_html_e('Security Note:', 'gluon'); ?></strong>
                                            <?php esc_html_e('Only enable this if you trust all users with upload permissions. SVG files can contain malicious code.', 'gluon'); ?>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                <?php endif; ?>

                <?php submit_button(__('Save Settings', 'gluon')); ?>
            </form>
        </div>
        <?php
}

// Note: Logo display is now handled by the gluon/site-logo block.
// See assets/blocks/site-logo/ for the block implementation.
