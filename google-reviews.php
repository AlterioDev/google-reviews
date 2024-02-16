<?php

/**
 * Plugin Name: Google Reviews (My Business API)
 * Plugin URI: https://alterio.nl
 * Description: Implements My Business API for retrieving reviews
 * Version: 1.0
 * Requires at least: 5.6
 * Requires PHP: 8.0
 * Author: Alterio
 * Author URI: https://alterio.nl
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: essentials-wishlist
 * Domain Path: /languages
 */

namespace Alterio\GoogleReviews;

add_action('plugins_loaded', function () {
    require_once __DIR__ . '/vendor/autoload.php';
    add_action('after_setup_theme', new GoogleReviews(), 100);
});;
