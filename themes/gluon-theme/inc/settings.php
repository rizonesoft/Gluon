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
    // Logo settings
    register_setting('gluon_settings_group', 'gluon_logo_light', array(
        'type' => 'integer',
        'sanitize_callback' => 'absint',
        'default' => 0,
    ));

    register_setting('gluon_settings_group', 'gluon_logo_dark', array(
        'type' => 'integer',
        'sanitize_callback' => 'absint',
        'default' => 0,
    ));

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

    $logo_light_id = get_option('gluon_logo_light', 0);
    $logo_dark_id = get_option('gluon_logo_dark', 0);
    $logo_light_url = $logo_light_id ? wp_get_attachment_image_url($logo_light_id, 'medium') : '';
    $logo_dark_url = $logo_dark_id ? wp_get_attachment_image_url($logo_dark_id, 'medium') : '';
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
                            <h2><?php esc_html_e('Site Logos', 'gluon'); ?></h2>
                            <p class="description">
                                <?php esc_html_e('Upload separate logos for light and dark modes. The appropriate logo will display based on the current theme mode.', 'gluon'); ?>
                            </p>

                            <table class="form-table" role="presentation">
                                <tr>
                                    <th scope="row">
                                        <label for="gluon_logo_light"><?php esc_html_e('Light Mode Logo', 'gluon'); ?></label>
                                    </th>
                                    <td>
                                        <div class="gluon-logo-upload" data-target="gluon_logo_light">
                                            <input type="hidden" name="gluon_logo_light" id="gluon_logo_light"
                                                value="<?php echo esc_attr($logo_light_id); ?>">
                                            <div class="gluon-logo-preview" id="gluon_logo_light_preview">
                                                <?php if ($logo_light_url): ?>
                                                        <img src="<?php echo esc_url($logo_light_url); ?>" alt="">
                                                <?php endif; ?>
                                            </div>
                                            <button type="button" class="button gluon-upload-button">
                                                <?php esc_html_e('Select Logo', 'gluon'); ?>
                                            </button>
                                            <button type="button" class="button gluon-remove-button"
                                                <?php echo $logo_light_id ? '' : 'style="display:none;"'; ?>>
                                                <?php esc_html_e('Remove', 'gluon'); ?>
                                            </button>
                                        </div>
                                        <p class="description"><?php esc_html_e('This logo displays on light backgrounds.', 'gluon'); ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="gluon_logo_dark"><?php esc_html_e('Dark Mode Logo', 'gluon'); ?></label>
                                    </th>
                                    <td>
                                        <div class="gluon-logo-upload" data-target="gluon_logo_dark">
                                            <input type="hidden" name="gluon_logo_dark" id="gluon_logo_dark"
                                                value="<?php echo esc_attr($logo_dark_id); ?>">
                                            <div class="gluon-logo-preview" id="gluon_logo_dark_preview">
                                                <?php if ($logo_dark_url): ?>
                                                        <img src="<?php echo esc_url($logo_dark_url); ?>" alt="">
                                                <?php endif; ?>
                                            </div>
                                            <button type="button" class="button gluon-upload-button">
                                                <?php esc_html_e('Select Logo', 'gluon'); ?>
                                            </button>
                                            <button type="button" class="button gluon-remove-button"
                                                <?php echo $logo_dark_id ? '' : 'style="display:none;"'; ?>>
                                                <?php esc_html_e('Remove', 'gluon'); ?>
                                            </button>
                                        </div>
                                        <p class="description"><?php esc_html_e('This logo displays on dark backgrounds.', 'gluon'); ?></p>
                                    </td>
                                </tr>
                            </table>
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

/**
 * Get the appropriate logo URL based on theme mode
 *
 * @param string $mode 'light', 'dark', or 'auto'
 * @return string|array Logo URL, or array of URLs in auto mode
 */
function gluon_get_logo_url($mode = 'auto')
{
    $logo_light_id = get_option('gluon_logo_light', 0);
    $logo_dark_id = get_option('gluon_logo_dark', 0);

    if ($mode === 'light' && $logo_light_id) {
        return wp_get_attachment_image_url($logo_light_id, 'full');
    }

    if ($mode === 'dark' && $logo_dark_id) {
        return wp_get_attachment_image_url($logo_dark_id, 'full');
    }

    // Auto mode - return both for CSS switching
    return array(
        'light' => $logo_light_id ? wp_get_attachment_image_url($logo_light_id, 'full') : '',
        'dark' => $logo_dark_id ? wp_get_attachment_image_url($logo_dark_id, 'full') : '',
    );
}

/**
 * Output the logo HTML with mode switching
 */
function gluon_the_logo()
{
    $logos = gluon_get_logo_url('auto');
    $site_name = get_bloginfo('name');

    if (empty($logos['light']) && empty($logos['dark'])) {
        // Fallback to site title
        echo '<a href="' . esc_url(home_url('/')) . '" class="gluon-site-title">' . esc_html($site_name) . '</a>';
        return;
    }

    echo '<a href="' . esc_url(home_url('/')) . '" class="gluon-logo-link" aria-label="' . esc_attr($site_name) . '">';

    if ($logos['light']) {
        echo '<img src="' . esc_url($logos['light']) . '" alt="' . esc_attr($site_name) . '" class="gluon-logo gluon-logo-light">';
    }

    if ($logos['dark']) {
        echo '<img src="' . esc_url($logos['dark']) . '" alt="' . esc_attr($site_name) . '" class="gluon-logo gluon-logo-dark">';
    }

    echo '</a>';
}
