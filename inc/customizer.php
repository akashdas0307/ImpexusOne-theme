<?php
/**
 * Theme Customizer - Header Controls
 *
 * Adds Customizer controls for header customization.
 *
 * @package ImpexusOne
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Customizer settings and controls
 */
function impexusone_customize_register($wp_customize) {
    
    // =========================================================================
    // HEADER SECTION
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header', array(
        'title'       => __('Header', 'impexusone'),
        'description' => __('Customize the header appearance.', 'impexusone'),
        'priority'    => 30,
    ));

    // -------------------------------------------------------------------------
    // Header Height
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('header_height', array(
        'default'           => 80,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('header_height', array(
        'label'       => __('Header Height (px)', 'impexusone'),
        'section'     => 'impexusone_header',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 60,
            'max'  => 120,
            'step' => 4,
        ),
    ));

    // -------------------------------------------------------------------------
    // Logo Max Height
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('logo_max_height', array(
        'default'           => 48,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('logo_max_height', array(
        'label'       => __('Logo Max Height (px)', 'impexusone'),
        'section'     => 'impexusone_header',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 32,
            'max'  => 80,
            'step' => 4,
        ),
    ));

    // -------------------------------------------------------------------------
    // Header Background Color
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('header_bg_color', array(
        'default'           => '#FFFFFF',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
        'label'   => __('Header Background Color', 'impexusone'),
        'section' => 'impexusone_header',
    )));

    // -------------------------------------------------------------------------
    // Header Text Color
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('header_text_color', array(
        'default'           => '#111827',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color', array(
        'label'   => __('Header Text Color', 'impexusone'),
        'section' => 'impexusone_header',
    )));

    // -------------------------------------------------------------------------
    // Navigation Font Family
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('nav_font_family', array(
        'default'           => 'Inter',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('nav_font_family', array(
        'label'   => __('Navigation Font Family', 'impexusone'),
        'section' => 'impexusone_header',
        'type'    => 'select',
        'choices' => array(
            'Inter'      => 'Inter',
            'Montserrat' => 'Montserrat',
            'Roboto'     => 'Roboto',
            'Open Sans'  => 'Open Sans',
            'Lato'       => 'Lato',
            'Poppins'    => 'Poppins',
        ),
    ));

    // -------------------------------------------------------------------------
    // Navigation Font Size
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('nav_font_size', array(
        'default'           => 14,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nav_font_size', array(
        'label'       => __('Navigation Font Size (px)', 'impexusone'),
        'section'     => 'impexusone_header',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 12,
            'max'  => 18,
            'step' => 1,
        ),
    ));

    // -------------------------------------------------------------------------
    // Navigation Link Spacing
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('nav_link_spacing', array(
        'default'           => 12,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nav_link_spacing', array(
        'label'       => __('Navigation Link Spacing (px)', 'impexusone'),
        'section'     => 'impexusone_header',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 8,
            'max'  => 24,
            'step' => 2,
        ),
    ));

    // -------------------------------------------------------------------------
    // CTA Button Background Color
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('cta_bg_color', array(
        'default'           => '#0F766E',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cta_bg_color', array(
        'label'   => __('CTA Button Background', 'impexusone'),
        'section' => 'impexusone_header',
    )));

    // -------------------------------------------------------------------------
    // CTA Button Text Color
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('cta_text_color', array(
        'default'           => '#FFFFFF',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cta_text_color', array(
        'label'   => __('CTA Button Text Color', 'impexusone'),
        'section' => 'impexusone_header',
    )));

    // -------------------------------------------------------------------------
    // CTA Button Border Radius
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('cta_border_radius', array(
        'default'           => 8,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('cta_border_radius', array(
        'label'       => __('CTA Button Border Radius (px)', 'impexusone'),
        'section'     => 'impexusone_header',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 24,
            'step' => 2,
        ),
    ));

    // -------------------------------------------------------------------------
    // Show/Hide Site Tagline
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('show_tagline', array(
        'default'           => true,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_tagline', array(
        'label'   => __('Show Site Tagline', 'impexusone'),
        'section' => 'impexusone_header',
        'type'    => 'checkbox',
    ));

    // -------------------------------------------------------------------------
    // Show/Hide Social Icons
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('show_header_social', array(
        'default'           => true,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_header_social', array(
        'label'   => __('Show Social Icons in Header', 'impexusone'),
        'section' => 'impexusone_header',
        'type'    => 'checkbox',
    ));

    // =========================================================================
    // HEADER LAYOUT SECTION (NEW - PILOT 2)
    // =========================================================================

    $wp_customize->add_section('impexusone_header_layout', array(
        'title'       => __('Header Layout', 'impexusone'),
        'description' => __('Configure header layout and width options.', 'impexusone'),
        'priority'    => 31,
    ));

    // -------------------------------------------------------------------------
    // Header Width Type
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('header_width_type', array(
        'default'           => 'containerized',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_width_type', array(
        'label'   => __('Header Width', 'impexusone'),
        'section' => 'impexusone_header_layout',
        'type'    => 'select',
        'choices' => array(
            'containerized' => __('Containerized (max-width limited)', 'impexusone'),
            'full-width'    => __('Full Width (edge to edge)', 'impexusone'),
            'adaptive'      => __('Adaptive (full-width bg, containerized content)', 'impexusone'),
        ),
    ));

    // -------------------------------------------------------------------------
    // Header Content Max Width (for containerized/adaptive)
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('header_max_width', array(
        'default'           => 1200,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('header_max_width', array(
        'label'       => __('Content Max Width (px)', 'impexusone'),
        'description' => __('Applies to Containerized and Adaptive modes.', 'impexusone'),
        'section'     => 'impexusone_header_layout',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 960,
            'max'  => 1600,
            'step' => 40,
        ),
    ));

    // -------------------------------------------------------------------------
    // Show/Hide Site Title
    // -------------------------------------------------------------------------
    $wp_customize->add_setting('show_site_title', array(
        'default'           => true,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_site_title', array(
        'label'   => __('Show Site Title', 'impexusone'),
        'section' => 'impexusone_header_layout',
        'type'    => 'checkbox',
    ));

    // =========================================================================
    // HEADER SOCIAL ICONS SECTION (NEW - PILOT 2)
    // =========================================================================

    $wp_customize->add_section('impexusone_header_social', array(
        'title'       => __('Header Social Icons', 'impexusone'),
        'description' => __('Configure social icons in the header. Leave URL blank to hide an icon.', 'impexusone'),
        'priority'    => 32,
    ));

    // LinkedIn
    $wp_customize->add_setting('social_linkedin_url', array(
        'default'           => 'https://linkedin.com/company/impexus',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_linkedin_url', array(
        'label'   => __('LinkedIn URL', 'impexusone'),
        'section' => 'impexusone_header_social',
        'type'    => 'url',
    ));

    // YouTube
    $wp_customize->add_setting('social_youtube_url', array(
        'default'           => 'https://youtube.com/@impexus',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_youtube_url', array(
        'label'   => __('YouTube URL', 'impexusone'),
        'section' => 'impexusone_header_social',
        'type'    => 'url',
    ));

    // Twitter/X
    $wp_customize->add_setting('social_twitter_url', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_twitter_url', array(
        'label'   => __('Twitter/X URL', 'impexusone'),
        'section' => 'impexusone_header_social',
        'type'    => 'url',
    ));

    // Facebook
    $wp_customize->add_setting('social_facebook_url', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_facebook_url', array(
        'label'   => __('Facebook URL', 'impexusone'),
        'section' => 'impexusone_header_social',
        'type'    => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('social_instagram_url', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_instagram_url', array(
        'label'   => __('Instagram URL', 'impexusone'),
        'section' => 'impexusone_header_social',
        'type'    => 'url',
    ));

    // =========================================================================
    // HEADER SEARCH SECTION (NEW - PILOT 2)
    // =========================================================================

    $wp_customize->add_section('impexusone_header_search', array(
        'title'       => __('Header Search', 'impexusone'),
        'description' => __('Configure the search functionality in the header.', 'impexusone'),
        'priority'    => 33,
    ));

    // Search Type
    $wp_customize->add_setting('search_type', array(
        'default'           => 'modal',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('search_type', array(
        'label'   => __('Search Type', 'impexusone'),
        'section' => 'impexusone_header_search',
        'type'    => 'select',
        'choices' => array(
            'modal'    => __('Modal Popup (overlay)', 'impexusone'),
            'dropdown' => __('Dropdown (under header)', 'impexusone'),
            'inline'   => __('Inline (always visible)', 'impexusone'),
        ),
    ));

    // Show Search
    $wp_customize->add_setting('show_header_search', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_header_search', array(
        'label'   => __('Show Search in Header', 'impexusone'),
        'section' => 'impexusone_header_search',
        'type'    => 'checkbox',
    ));

    // Search Placeholder Text
    $wp_customize->add_setting('search_placeholder', array(
        'default'           => __('Search...', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('search_placeholder', array(
        'label'   => __('Search Placeholder Text', 'impexusone'),
        'section' => 'impexusone_header_search',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'impexusone_customize_register');

/**
 * Sanitize checkbox values
 */
function impexusone_sanitize_checkbox($checked) {
    return (isset($checked) && true === $checked) ? true : false;
}

/**
 * Output customizer CSS inline
 */
function impexusone_customizer_css() {
    $header_height      = get_theme_mod('header_height', 80);
    $logo_max_height    = get_theme_mod('logo_max_height', 48);
    $header_bg_color    = get_theme_mod('header_bg_color', '#FFFFFF');
    $header_text_color  = get_theme_mod('header_text_color', '#111827');
    $nav_font_family    = get_theme_mod('nav_font_family', 'Inter');
    $nav_font_size      = get_theme_mod('nav_font_size', 14);
    $nav_link_spacing   = get_theme_mod('nav_link_spacing', 12);
    $cta_bg_color       = get_theme_mod('cta_bg_color', '#0F766E');
    $cta_text_color     = get_theme_mod('cta_text_color', '#FFFFFF');
    $cta_border_radius  = get_theme_mod('cta_border_radius', 8);
    $header_width_type  = get_theme_mod('header_width_type', 'containerized');
    $header_max_width   = get_theme_mod('header_max_width', 1200);
    ?>
    <style id="impexusone-customizer-css">
        :root {
            --customizer-header-height: <?php echo esc_attr($header_height); ?>px;
            --customizer-logo-max-height: <?php echo esc_attr($logo_max_height); ?>px;
            --customizer-header-bg: <?php echo esc_attr($header_bg_color); ?>;
            --customizer-header-text: <?php echo esc_attr($header_text_color); ?>;
            --customizer-nav-font: <?php echo esc_attr($nav_font_family); ?>, sans-serif;
            --customizer-nav-font-size: <?php echo esc_attr($nav_font_size); ?>px;
            --customizer-nav-spacing: <?php echo esc_attr($nav_link_spacing); ?>px;
            --customizer-cta-bg: <?php echo esc_attr($cta_bg_color); ?>;
            --customizer-cta-text: <?php echo esc_attr($cta_text_color); ?>;
            --customizer-cta-radius: <?php echo esc_attr($cta_border_radius); ?>px;
            --customizer-header-max-width: <?php echo esc_attr($header_max_width); ?>px;
        }

        .site-header {
            background-color: var(--customizer-header-bg);
        }

        .header-inner {
            height: var(--customizer-header-height);
            <?php if ($header_width_type === 'containerized' || $header_width_type === 'adaptive') : ?>
            max-width: var(--customizer-header-max-width);
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
            <?php elseif ($header_width_type === 'full-width') : ?>
            max-width: none;
            padding-left: 2rem;
            padding-right: 2rem;
            <?php endif; ?>
        }

        <?php if ($header_width_type === 'adaptive') : ?>
        .site-header {
            width: 100%;
        }
        <?php endif; ?>

        .site-logo {
            height: var(--customizer-logo-max-height);
        }

        .site-logo img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }

        .site-title,
        .site-tagline,
        .nav-menu > li > a {
            color: var(--customizer-header-text);
        }

        .primary-nav,
        .nav-menu > li > a {
            font-family: var(--customizer-nav-font);
            font-size: var(--customizer-nav-font-size);
        }

        .nav-menu > li > a {
            padding-left: var(--customizer-nav-spacing);
            padding-right: var(--customizer-nav-spacing);
        }

        .header-cta {
            background-color: var(--customizer-cta-bg);
            color: var(--customizer-cta-text);
            border-radius: var(--customizer-cta-radius);
        }

        .header-cta:hover {
            background-color: var(--customizer-cta-bg);
            filter: brightness(0.9);
        }

        /* Search Modal Styles */
        .search-modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }

        .search-modal.is-open {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding-top: 10vh;
        }

        .search-modal-content {
            background-color: #fff;
            border-radius: 12px;
            padding: 2rem;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .search-modal-form {
            display: flex;
            gap: 0.75rem;
        }

        .search-modal-input {
            flex: 1;
            padding: 0.875rem 1rem;
            font-size: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s;
        }

        .search-modal-input:focus {
            border-color: var(--customizer-cta-bg);
        }

        .search-modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #fff;
            line-height: 1;
        }

        /* Header Search Dropdown */
        .search-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            min-width: 300px;
        }

        .search-dropdown.is-open {
            display: block;
        }

        .search-dropdown form {
            display: flex;
            gap: 0.5rem;
        }

        .search-dropdown input {
            flex: 1;
            padding: 0.5rem 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
        }

        /* Inline Search */
        .header-search-inline {
            display: flex;
            align-items: center;
        }

        .header-search-inline input {
            padding: 0.5rem 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 6px 0 0 6px;
            width: 180px;
        }

        .header-search-inline button {
            padding: 0.5rem 0.75rem;
            background: var(--customizer-cta-bg);
            color: #fff;
            border: none;
            border-radius: 0 6px 6px 0;
            cursor: pointer;
        }

        /* Mobile Search */
        .mobile-search {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .mobile-search form {
            display: flex;
            gap: 0.5rem;
        }

        .mobile-search input[type="search"] {
            flex: 1;
            padding: 0.75rem 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
        }

        .mobile-search button {
            padding: 0.75rem;
            background: var(--customizer-cta-bg);
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        /* Header position relative for dropdown */
        .header-actions {
            position: relative;
        }
    </style>
    <?php
}
add_action('wp_head', 'impexusone_customizer_css');

/**
 * Binds JS handlers for live preview in Customizer
 */
function impexusone_customize_preview_js() {
    wp_enqueue_script(
        'impexusone-customizer-preview',
        get_template_directory_uri() . '/assets/js/customizer-preview.js',
        array('customize-preview', 'jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_preview_init', 'impexusone_customize_preview_js');
