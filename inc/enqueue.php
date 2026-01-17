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
    // Google Fonts - Inter
    wp_enqueue_style(
        'impexusone-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome Icons
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Main theme stylesheet
    wp_enqueue_style(
        'impexusone-style',
        get_stylesheet_uri(),
        array('impexusone-fonts', 'font-awesome'),
        IMPEXUSONE_VERSION
    );

    // Header JavaScript file
    wp_enqueue_script(
        'impexusone-header',
        IMPEXUSONE_URI . '/assets/js/header.js',
        array(),
        IMPEXUSONE_VERSION,
        true
    );

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'impexusone_enqueue_assets');
