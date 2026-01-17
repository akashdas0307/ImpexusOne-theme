<?php
/**
 * ImpexusOne Theme Functions
 *
 * @package ImpexusOne
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('IMPEXUSONE_VERSION', '1.0.0');
define('IMPEXUSONE_DIR', get_template_directory());
define('IMPEXUSONE_URI', get_template_directory_uri());

/**
 * Include theme modules
 */
require_once IMPEXUSONE_DIR . '/inc/theme-setup.php';
require_once IMPEXUSONE_DIR . '/inc/enqueue.php';
require_once IMPEXUSONE_DIR . '/inc/menus.php';
require_once IMPEXUSONE_DIR . '/inc/template-functions.php';

// Optional: Include customizer if it exists
if (file_exists(IMPEXUSONE_DIR . '/inc/customizer.php')) {
    require_once IMPEXUSONE_DIR . '/inc/customizer.php';
}
