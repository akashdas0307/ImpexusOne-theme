<?php
/**
 * Theme Setup
 *
 * @package ImpexusOne
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set up theme defaults and register support for various WordPress features.
 */
function impexusone_setup() {
    // Make theme available for translation
    load_theme_textdomain('impexusone', IMPEXUSONE_DIR . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Add custom image sizes
    add_image_size('impexusone-card', 400, 300, true);
    add_image_size('impexusone-card-lg', 600, 400, true);
    add_image_size('impexusone-hero', 1920, 800, true);
    add_image_size('impexusone-team', 300, 300, true);

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Register editor stylesheet
    add_editor_style('assets/css/editor-style.css');

    // Add support for wide and full alignment in Gutenberg
    add_theme_support('align-wide');

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Set content width
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'impexusone_setup');

/**
 * Register widget areas.
 */
function impexusone_widgets_init() {
    // Sidebar widget area
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'impexusone'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here for the sidebar.', 'impexusone'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Insights Sidebar
    register_sidebar(array(
        'name'          => esc_html__('Insights Sidebar', 'impexusone'),
        'id'            => 'insights-sidebar',
        'description'   => esc_html__('Widgets for the Insights Hub and archive pages.', 'impexusone'),
        'before_widget' => '<section id="%1$s" class="widget %2$s card">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Footer Widgets (4 columns)
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar(array(
            'name'          => sprintf(esc_html__('Footer Column %d', 'impexusone'), $i),
            'id'            => 'footer-' . $i,
            'description'   => sprintf(esc_html__('Footer column %d widgets.', 'impexusone'), $i),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ));
    }
}
add_action('widgets_init', 'impexusone_widgets_init');

/**
 * Add custom classes to body.
 */
function impexusone_body_classes($classes) {
    // Add class for pages with no sidebar
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    // Add class for single posts by category
    if (is_single()) {
        $categories = get_the_category();
        if (!empty($categories)) {
            $classes[] = 'category-' . $categories[0]->slug;
        }
    }

    // Add page slug as class
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }

    return $classes;
}
add_filter('body_class', 'impexusone_body_classes');

/**
 * Add custom classes to post.
 */
function impexusone_post_classes($classes) {
    $classes[] = 'entry';
    return $classes;
}
add_filter('post_class', 'impexusone_post_classes');

/**
 * Modify excerpt length.
 */
function impexusone_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'impexusone_excerpt_length');

/**
 * Modify excerpt more string.
 */
function impexusone_excerpt_more($more) {
    return '&hellip;';
}
add_filter('excerpt_more', 'impexusone_excerpt_more');

/**
 * Add preconnect for Google Fonts.
 */
function impexusone_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => false,
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => true,
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'impexusone_resource_hints', 10, 2);
