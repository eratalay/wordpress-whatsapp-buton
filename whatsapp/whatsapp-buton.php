<?php
/**
 * Plugin Name: Whatsapp Buton
 * Description: Wordpress için ücretsiz ayarlanabilir Whatsapp buton eklentisi.
 * Version: 1.0
 * Author: Mustafa Eratalay
 * Author URI: https://github.com/eratalay
 * Plugin URI: https://github.com/eratalay/wordpress-whatsapp-buton
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Direct access not allowed.
}

class WhatsappButtonPlugin {

    public function __construct() {
        add_action('admin_menu', [$this, 'add_settings_page']);
        add_action('wp_footer', [$this, 'render_whatsapp_button']);
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function add_settings_page() {
        add_submenu_page(
            'options-general.php',
            'Whatsapp Buton Ayarları',
            'Whatsapp Buton',
            'manage_options',
            'whatsapp-button-settings',
            [$this, 'settings_page_html']
        );
    }

    public function register_settings() {
        register_setting('whatsapp_button_settings', 'whatsapp_number');
        register_setting('whatsapp_button_settings', 'whatsapp_position');
        register_setting('whatsapp_button_settings', 'whatsapp_display');
    }

    public function settings_page_html() {
        if (!current_user_can('manage_options')) {
            return;
        }

        ?>
        <div class="wrap">
            <h1>Whatsapp Buton Ayarları</h1>
            <form method="post" action="options.php">
                <?php settings_fields('whatsapp_button_settings'); ?>
                <?php do_settings_sections('whatsapp_button_settings'); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Whatsapp Numarası</th>
                        <td>
                            <input type="text" name="whatsapp_number" value="<?php echo esc_attr(get_option('whatsapp_number', '+90')); ?>" pattern="\+90[0-9]{10}" title="Geçerli bir numara girin (ör. +901234567890)" required />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Konum</th>
                        <td>
                            <select name="whatsapp_position">
                                <option value="left" <?php selected(get_option('whatsapp_position'), 'left'); ?>>Sol</option>
                                <option value="right" <?php selected(get_option('whatsapp_position'), 'right'); ?>>Sağ</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Butonu Göster</th>
                        <td>
                            <input type="checkbox" name="whatsapp_display" value="1" <?php checked(get_option('whatsapp_display'), 1); ?> />
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }

    public function render_whatsapp_button() {
        $number = get_option('whatsapp_number');
        $position = get_option('whatsapp_position', 'right');
        $display = get_option('whatsapp_display', 1);

        if (!$display || empty($number)) {
            return;
        }

        $style = $position === 'left' ? 'left: 20px;' : 'right: 20px;';

        echo '<a href="https://wa.me/' . esc_attr(str_replace('+', '', $number)) . '" target="_blank" style="position: fixed; bottom: 20px; ' . esc_attr($style) . ' z-index: 1000; background: #25d366; padding: 10px 15px; border-radius: 50%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Whatsapp" style="width: 40px; height: 40px;">
        </a>';
    }
}

new WhatsappButtonPlugin();
