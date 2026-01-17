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
        }

        .site-header {
            background-color: var(--customizer-header-bg);
        }

        .header-inner {
            height: var(--customizer-header-height);
        }

        .site-logo {
            height: var(--customizer-logo-max-height);
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
