<?php
/**
 * Gluon Theme Settings Page
 *
 * Provides a dedicated admin page for theme settings including:
 * - Light mode logo
 * - Dark mode logo
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
}
add_action('admin_init', 'gluon_register_settings');

/**
 * Enqueue admin scripts for media uploader
 */
function gluon_admin_scripts($hook)
{
    if ($hook !== 'appearance_page_gluon-settings') {
        return;
    }

    wp_enqueue_media();
    wp_enqueue_style(
        'gluon-admin-settings',
        GLUON_URI . '/assets/css/admin-settings.css',
        array(),
        GLUON_VERSION
    );
    wp_enqueue_script(
        'gluon-admin-settings',
        GLUON_URI . '/assets/js/admin-settings.js',
        array('jquery'),
        GLUON_VERSION,
        true
    );
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
    ?>
    <div class="wrap gluon-settings-wrap">
        <h1>
            <?php echo esc_html(get_admin_page_title()); ?>
        </h1>

        <?php settings_errors('gluon_settings'); ?>

        <form method="post" action="options.php">
            <?php settings_fields('gluon_settings_group'); ?>

            <div class="gluon-settings-section">
                <h2>
                    <?php esc_html_e('Site Logos', 'gluon'); ?>
                </h2>
                <p class="description">
                    <?php esc_html_e('Upload separate logos for light and dark modes. The appropriate logo will display based on the current theme mode.', 'gluon'); ?>
                </p>

                <table class="form-table" role="presentation">
                    <tr>
                        <th scope="row">
                            <label for="gluon_logo_light">
                                <?php esc_html_e('Light Mode Logo', 'gluon'); ?>
                            </label>
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
                                <button type="button" class="button gluon-remove-button" <?php echo $logo_light_id ? '' : 'style="display:none;"'; ?>>
                                    <?php esc_html_e('Remove', 'gluon'); ?>
                                </button>
                            </div>
                            <p class="description">
                                <?php esc_html_e('This logo displays on light backgrounds.', 'gluon'); ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="gluon_logo_dark">
                                <?php esc_html_e('Dark Mode Logo', 'gluon'); ?>
                            </label>
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
                                <button type="button" class="button gluon-remove-button" <?php echo $logo_dark_id ? '' : 'style="display:none;"'; ?>>
                                    <?php esc_html_e('Remove', 'gluon'); ?>
                                </button>
                            </div>
                            <p class="description">
                                <?php esc_html_e('This logo displays on dark backgrounds.', 'gluon'); ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>

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
