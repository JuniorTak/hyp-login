<?php

/**
 * The plugin bootstrap file
 *
 * @since             1.0.0
 * @package           Hyp_Login
 *
 * @wordpress-plugin
 * Plugin Name:       Hyp Login
 * Plugin URI:        https://github.com/JuniorTak
 * Description:       Custom Login UI
 * Version:           1.0.0
 * Author:            Hyppolite T.
 * Author URI:        https://www.hyppolitetakouafoduop.online
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hyp-login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// The current plugin version (SemVer - https://semver.org).
define( 'HYP_LOGIN_VERSION', '1.0.0' );

/**
 * Load text domain.
 */
function hyplogin_load_textdomain() {
    load_plugin_textdomain('hyp-login', false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/');
}
add_action( 'plugins_loaded', 'hyplogin_load_textdomain' );

/**
 * Add login custom styles.
 */
function hyplogin_custom_styles() {
    ?>
    <style>
        body.login{
            background: #c8d6cf;
        }
        #login{
            width: 100%!important;
            max-width: 500px;
        }
        #login h1 a, .login h1 a {
            background-image: url(<?= plugin_dir_url( __FILE__ )?>/assets/images/logo.png);
            height:65px;
            width:320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
        #login #loginform, #login #lostpasswordform, #login #registerform {
            background: #f4ca52;
            border-color: #373737;
            border-radius: 20px;
        }
        #login input.button{
            background: #c8d6cf;
            border-color: #c8d6cf;
            color: #373737;
            font-weight: 700;
        }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'hyplogin_custom_styles' );
