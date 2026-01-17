<?php
/**
 * Enqueue Scripts and Styles
 *
 * @package ImpexusOne
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue theme styles and scripts.
 */
function impexusone_enqueue_assets() {
    // Google Fonts - Manrope and Inter
    wp_enqueue_style(
        'impexusone-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Material Symbols Icons
    wp_enqueue_style(
        'material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
        array(),
        null
    );

    // Main theme stylesheet
    wp_enqueue_style(
        'impexusone-style',
        get_stylesheet_uri(),
        array('impexusone-fonts', 'material-symbols'),
        IMPEXUSONE_VERSION
    );

    // Additional component styles
    if (file_exists(IMPEXUSONE_DIR . '/assets/css/components.css')) {
        wp_enqueue_style(
            'impexusone-components',
            IMPEXUSONE_URI . '/assets/css/components.css',
            array('impexusone-style'),
            IMPEXUSONE_VERSION
        );
    }

    // Main JavaScript file
    wp_enqueue_script(
        'impexusone-main',
        IMPEXUSONE_URI . '/assets/js/main.js',
        array(),
        IMPEXUSONE_VERSION,
        true
    );

    // Pass data to JavaScript
    wp_localize_script('impexusone-main', 'impexusone', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('impexusone-nonce'),
        'siteUrl' => home_url(),
    ));

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'impexusone_enqueue_assets');

/**
 * Add defer attribute to theme scripts.
 */
function impexusone_defer_scripts($tag, $handle, $src) {
    $defer_scripts = array('impexusone-main');
    
    if (in_array($handle, $defer_scripts)) {
        return '<script src="' . esc_url($src) . '" defer></script>';
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'impexusone_defer_scripts', 10, 3);

/**
 * Enqueue admin styles.
 */
function impexusone_admin_styles() {
    wp_enqueue_style(
        'impexusone-admin',
        IMPEXUSONE_URI . '/assets/css/admin.css',
        array(),
        IMPEXUSONE_VERSION
    );
}
// Uncomment to enable admin styles
// add_action('admin_enqueue_scripts', 'impexusone_admin_styles');

/**
 * Add preload for critical assets.
 */
function impexusone_preload_assets() {
    // Preload main font
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" as="style">' . "\n";
}
add_action('wp_head', 'impexusone_preload_assets', 1);
