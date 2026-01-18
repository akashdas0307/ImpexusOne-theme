<?php
/**
 * Theme Customizer - Header Controls (Pilot 3)
 *
 * All header customization options consolidated under one panel.
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
    // HEADER PANEL (Umbrella for all header sections)
    // =========================================================================
    
    $wp_customize->add_panel('impexusone_header_panel', array(
        'title'       => __('Header', 'impexusone'),
        'description' => __('All header customization options.', 'impexusone'),
        'priority'    => 30,
    ));

    // =========================================================================
    // SECTION: General Settings
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header_general', array(
        'title'       => __('General', 'impexusone'),
        'description' => __('Basic header settings.', 'impexusone'),
        'panel'       => 'impexusone_header_panel',
        'priority'    => 10,
    ));

    // Header Height
    $wp_customize->add_setting('header_height', array(
        'default'           => 80,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('header_height', array(
        'label'       => __('Header Height (px)', 'impexusone'),
        'section'     => 'impexusone_header_general',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 60,
            'max'  => 120,
            'step' => 4,
        ),
    ));

    // Header Background Color
    $wp_customize->add_setting('header_bg_color', array(
        'default'           => '#FFFFFF',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
        'label'   => __('Background Color', 'impexusone'),
        'section' => 'impexusone_header_general',
    )));

    // Header Text Color
    $wp_customize->add_setting('header_text_color', array(
        'default'           => '#111827',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color', array(
        'label'   => __('Text Color', 'impexusone'),
        'section' => 'impexusone_header_general',
    )));

    // Header Width Type
    $wp_customize->add_setting('header_width_type', array(
        'default'           => 'containerized',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_width_type', array(
        'label'   => __('Layout Width', 'impexusone'),
        'section' => 'impexusone_header_general',
        'type'    => 'select',
        'choices' => array(
            'containerized' => __('Containerized', 'impexusone'),
            'full-width'    => __('Full Width', 'impexusone'),
            'adaptive'      => __('Adaptive', 'impexusone'),
        ),
    ));

    // Header Content Max Width
    $wp_customize->add_setting('header_max_width', array(
        'default'           => 1200,
        'transport'         => 'refresh',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('header_max_width', array(
        'label'       => __('Content Max Width (px)', 'impexusone'),
        'section'     => 'impexusone_header_general',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 960,
            'max'  => 1600,
            'step' => 40,
        ),
    ));

    // =========================================================================
    // SECTION: Logo & Branding
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header_branding', array(
        'title'       => __('Logo & Branding', 'impexusone'),
        'panel'       => 'impexusone_header_panel',
        'priority'    => 20,
    ));

    // Logo Max Height
    $wp_customize->add_setting('logo_max_height', array(
        'default'           => 48,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('logo_max_height', array(
        'label'       => __('Logo Max Height (px)', 'impexusone'),
        'section'     => 'impexusone_header_branding',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 24,
            'max'  => 80,
            'step' => 4,
        ),
    ));

    // Show Site Title
    $wp_customize->add_setting('show_site_title', array(
        'default'           => true,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_site_title', array(
        'label'   => __('Show Site Title', 'impexusone'),
        'section' => 'impexusone_header_branding',
        'type'    => 'checkbox',
    ));

    // Show Tagline
    $wp_customize->add_setting('show_tagline', array(
        'default'           => true,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_tagline', array(
        'label'   => __('Show Site Tagline', 'impexusone'),
        'section' => 'impexusone_header_branding',
        'type'    => 'checkbox',
    ));

    // =========================================================================
    // SECTION: Navigation
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header_nav', array(
        'title'       => __('Navigation', 'impexusone'),
        'panel'       => 'impexusone_header_panel',
        'priority'    => 30,
    ));

    // Navigation Font Family
    $wp_customize->add_setting('nav_font_family', array(
        'default'           => 'Inter',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('nav_font_family', array(
        'label'   => __('Font Family', 'impexusone'),
        'section' => 'impexusone_header_nav',
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

    // Navigation Font Size
    $wp_customize->add_setting('nav_font_size', array(
        'default'           => 14,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nav_font_size', array(
        'label'       => __('Font Size (px)', 'impexusone'),
        'section'     => 'impexusone_header_nav',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 12,
            'max'  => 18,
            'step' => 1,
        ),
    ));

    // Navigation Link Spacing
    $wp_customize->add_setting('nav_link_spacing', array(
        'default'           => 12,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('nav_link_spacing', array(
        'label'       => __('Link Spacing (px)', 'impexusone'),
        'section'     => 'impexusone_header_nav',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 8,
            'max'  => 24,
            'step' => 2,
        ),
    ));

    // Show Submenu Arrows
    $wp_customize->add_setting('show_submenu_arrows', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_submenu_arrows', array(
        'label'   => __('Show Dropdown Arrows', 'impexusone'),
        'section' => 'impexusone_header_nav',
        'type'    => 'checkbox',
    ));

    // =========================================================================
    // SECTION: CTA Button
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header_cta', array(
        'title'       => __('CTA Button', 'impexusone'),
        'panel'       => 'impexusone_header_panel',
        'priority'    => 40,
    ));

    // CTA Button Background Color
    $wp_customize->add_setting('cta_bg_color', array(
        'default'           => '#0F766E',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cta_bg_color', array(
        'label'   => __('Background Color', 'impexusone'),
        'section' => 'impexusone_header_cta',
    )));

    // CTA Button Text Color
    $wp_customize->add_setting('cta_text_color', array(
        'default'           => '#FFFFFF',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cta_text_color', array(
        'label'   => __('Text Color', 'impexusone'),
        'section' => 'impexusone_header_cta',
    )));

    // CTA Button Border Radius
    $wp_customize->add_setting('cta_border_radius', array(
        'default'           => 8,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('cta_border_radius', array(
        'label'       => __('Border Radius (px)', 'impexusone'),
        'section'     => 'impexusone_header_cta',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 24,
            'step' => 2,
        ),
    ));

    // =========================================================================
    // SECTION: Social Icons
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header_social', array(
        'title'       => __('Social Icons', 'impexusone'),
        'description' => __('Leave URL blank to hide an icon.', 'impexusone'),
        'panel'       => 'impexusone_header_panel',
        'priority'    => 50,
    ));

    // Show Social Icons
    $wp_customize->add_setting('show_header_social', array(
        'default'           => true,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_header_social', array(
        'label'   => __('Show Social Icons', 'impexusone'),
        'section' => 'impexusone_header_social',
        'type'    => 'checkbox',
    ));

    // Social Icon Size
    $wp_customize->add_setting('social_icon_size', array(
        'default'           => 20,
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('social_icon_size', array(
        'label'       => __('Icon Size (px)', 'impexusone'),
        'section'     => 'impexusone_header_social',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 16,
            'max'  => 32,
            'step' => 2,
        ),
    ));

    // LinkedIn URL
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

    // YouTube URL
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

    // Twitter/X URL
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

    // Facebook URL
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

    // Instagram URL
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
    // SECTION: Search
    // =========================================================================
    
    $wp_customize->add_section('impexusone_header_search', array(
        'title'       => __('Search', 'impexusone'),
        'panel'       => 'impexusone_header_panel',
        'priority'    => 60,
    ));

    // Show Search
    $wp_customize->add_setting('show_header_search', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('show_header_search', array(
        'label'   => __('Show Search', 'impexusone'),
        'section' => 'impexusone_header_search',
        'type'    => 'checkbox',
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
            'modal'    => __('Modal Popup', 'impexusone'),
            'dropdown' => __('Dropdown', 'impexusone'),
            'inline'   => __('Inline (desktop only)', 'impexusone'),
        ),
    ));

    // Search Placeholder
    $wp_customize->add_setting('search_placeholder', array(
        'default'           => __('Search...', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('search_placeholder', array(
        'label'   => __('Placeholder Text', 'impexusone'),
        'section' => 'impexusone_header_search',
        'type'    => 'text',
    ));

    // Inline Search Width
    $wp_customize->add_setting('search_inline_width', array(
        'default'           => 200,
        'transport'         => 'refresh',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('search_inline_width', array(
        'label'       => __('Inline Search Width (px)', 'impexusone'),
        'section'     => 'impexusone_header_search',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 120,
            'max'  => 400,
            'step' => 10,
        ),
    ));

    // Search Button Color
    $wp_customize->add_setting('search_btn_color', array(
        'default'           => '#0F766E',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'search_btn_color', array(
        'label'   => __('Search Button Color', 'impexusone'),
        'section' => 'impexusone_header_search',
    )));

    // Search Input Border Radius
    $wp_customize->add_setting('search_border_radius', array(
        'default'           => 6,
        'transport'         => 'refresh',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('search_border_radius', array(
        'label'       => __('Border Radius (px)', 'impexusone'),
        'section'     => 'impexusone_header_search',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 20,
            'step' => 2,
        ),
    ));

    // =========================================================================
    // FOOTER PANEL
    // =========================================================================
    
    $wp_customize->add_panel('impexusone_footer_panel', array(
        'title'       => __('Footer', 'impexusone'),
        'description' => __('All footer customization options.', 'impexusone'),
        'priority'    => 35,
    ));

    // =========================================================================
    // FOOTER SECTION 1: Newsletter
    // =========================================================================
    
    $wp_customize->add_section('impexusone_footer_newsletter', array(
        'title'       => __('Newsletter', 'impexusone'),
        'panel'       => 'impexusone_footer_panel',
        'priority'    => 10,
    ));

    $wp_customize->add_setting('footer_show_newsletter', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('footer_show_newsletter', array(
        'label'   => __('Show Newsletter Section', 'impexusone'),
        'section' => 'impexusone_footer_newsletter',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('footer_newsletter_title', array(
        'default'           => __('Stay informed', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_newsletter_title', array(
        'label'   => __('Headline', 'impexusone'),
        'section' => 'impexusone_footer_newsletter',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_newsletter_text', array(
        'default'           => __('Subscribe for the latest insights on CSR and sustainable development.', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('footer_newsletter_text', array(
        'label'   => __('Subtext', 'impexusone'),
        'section' => 'impexusone_footer_newsletter',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('footer_newsletter_btn_text', array(
        'default'           => __('Subscribe', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_newsletter_btn_text', array(
        'label'   => __('Button Text', 'impexusone'),
        'section' => 'impexusone_footer_newsletter',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_newsletter_bg_color', array(
        'default'           => '#FDF2F8',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_newsletter_bg_color', array(
        'label'   => __('Background Color', 'impexusone'),
        'section' => 'impexusone_footer_newsletter',
    )));

    $wp_customize->add_setting('footer_newsletter_btn_color', array(
        'default'           => '#0F766E',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_newsletter_btn_color', array(
        'label'   => __('Button Color', 'impexusone'),
        'section' => 'impexusone_footer_newsletter',
    )));

    // =========================================================================
    // FOOTER SECTION 2: About & Branding
    // =========================================================================
    
    $wp_customize->add_section('impexusone_footer_about', array(
        'title'       => __('About & Branding', 'impexusone'),
        'panel'       => 'impexusone_footer_panel',
        'priority'    => 20,
    ));

    $wp_customize->add_setting('footer_show_about', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('footer_show_about', array(
        'label'   => __('Show About Section', 'impexusone'),
        'section' => 'impexusone_footer_about',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('footer_company_tagline', array(
        'default'           => __('Consultancy LLP', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_company_tagline', array(
        'label'   => __('Company Tagline', 'impexusone'),
        'section' => 'impexusone_footer_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_description', array(
        'default'           => __('Empowering organizations through sustainable development strategies and impactful CSR initiatives. We bridge the gap between corporate vision and community needs.', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('footer_description', array(
        'label'   => __('Company Description', 'impexusone'),
        'section' => 'impexusone_footer_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('footer_show_social', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('footer_show_social', array(
        'label'       => __('Show Social Icons', 'impexusone'),
        'description' => __('Uses same URLs as header social icons.', 'impexusone'),
        'section'     => 'impexusone_footer_about',
        'type'        => 'checkbox',
    ));

    // =========================================================================
    // FOOTER SECTION 3: Navigation Menus
    // =========================================================================
    
    $wp_customize->add_section('impexusone_footer_nav', array(
        'title'       => __('Navigation Menus', 'impexusone'),
        'description' => __('Assign WordPress menus to footer columns.', 'impexusone'),
        'panel'       => 'impexusone_footer_panel',
        'priority'    => 30,
    ));

    $wp_customize->add_setting('footer_show_menus', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('footer_show_menus', array(
        'label'   => __('Show Menu Columns', 'impexusone'),
        'section' => 'impexusone_footer_nav',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('footer_services_title', array(
        'default'           => __('Our Services', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_services_title', array(
        'label'   => __('Services Column Title', 'impexusone'),
        'section' => 'impexusone_footer_nav',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_insights_title', array(
        'default'           => __('Insights', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_insights_title', array(
        'label'   => __('Insights Column Title', 'impexusone'),
        'section' => 'impexusone_footer_nav',
        'type'    => 'text',
    ));

    // =========================================================================
    // FOOTER SECTION 4: Contact Details
    // =========================================================================
    
    $wp_customize->add_section('impexusone_footer_contact', array(
        'title'       => __('Contact Details', 'impexusone'),
        'panel'       => 'impexusone_footer_panel',
        'priority'    => 40,
    ));

    $wp_customize->add_setting('footer_show_contact', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('footer_show_contact', array(
        'label'   => __('Show Contact Section', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('footer_contact_title', array(
        'default'           => __('Contact Us', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_contact_title', array(
        'label'   => __('Section Title', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_contact_address', array(
        'default'           => __("123 Sustainability Tower,\nGreen Business District,\nNew Delhi, India 110001", 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('footer_contact_address', array(
        'label'   => __('Address', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('footer_contact_email', array(
        'default'           => 'contact@impexus.com',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('footer_contact_email', array(
        'label'   => __('Email', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'email',
    ));

    $wp_customize->add_setting('footer_contact_phone', array(
        'default'           => '+91 11 2233 4455',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_contact_phone', array(
        'label'   => __('Phone', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_show_cta', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'impexusone_sanitize_checkbox',
    ));

    $wp_customize->add_control('footer_show_cta', array(
        'label'   => __('Show CTA Box', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('footer_cta_label', array(
        'default'           => __('Need immediate assistance?', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_cta_label', array(
        'label'   => __('CTA Label', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_cta_text', array(
        'default'           => __('Book a Consultation', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_cta_text', array(
        'label'   => __('CTA Button Text', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_cta_url', array(
        'default'           => home_url('/contact/'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('footer_cta_url', array(
        'label'   => __('CTA Button URL', 'impexusone'),
        'section' => 'impexusone_footer_contact',
        'type'    => 'url',
    ));

    // =========================================================================
    // FOOTER SECTION 5: Bottom Bar
    // =========================================================================
    
    $wp_customize->add_section('impexusone_footer_bottom', array(
        'title'       => __('Bottom Bar', 'impexusone'),
        'panel'       => 'impexusone_footer_panel',
        'priority'    => 50,
    ));

    $wp_customize->add_setting('footer_copyright_text', array(
        'default'           => __('© {year} {sitename}. All rights reserved.', 'impexusone'),
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_copyright_text', array(
        'label'       => __('Copyright Text', 'impexusone'),
        'description' => __('Use {year} for current year, {sitename} for site name.', 'impexusone'),
        'section'     => 'impexusone_footer_bottom',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('footer_bottom_layout', array(
        'default'           => 'copyright-left',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_bottom_layout', array(
        'label'   => __('Layout', 'impexusone'),
        'section' => 'impexusone_footer_bottom',
        'type'    => 'select',
        'choices' => array(
            'copyright-left'  => __('Copyright Left, Links Right', 'impexusone'),
            'copyright-right' => __('Links Left, Copyright Right', 'impexusone'),
        ),
    ));

    $wp_customize->add_setting('footer_bottom_bg_color', array(
        'default'           => '#F9FAFB',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bottom_bg_color', array(
        'label'   => __('Background Color', 'impexusone'),
        'section' => 'impexusone_footer_bottom',
    )));

    // =========================================================================
    // FOOTER SECTION 6: Colors & Layout
    // =========================================================================
    
    $wp_customize->add_section('impexusone_footer_colors', array(
        'title'       => __('Colors & Layout', 'impexusone'),
        'panel'       => 'impexusone_footer_panel',
        'priority'    => 60,
    ));

    $wp_customize->add_setting('footer_bg_color', array(
        'default'           => '#FFFFFF',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
        'label'   => __('Footer Background', 'impexusone'),
        'section' => 'impexusone_footer_colors',
    )));

    $wp_customize->add_setting('footer_text_color', array(
        'default'           => '#6B7280',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
        'label'   => __('Text Color', 'impexusone'),
        'section' => 'impexusone_footer_colors',
    )));

    $wp_customize->add_setting('footer_heading_color', array(
        'default'           => '#111827',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_heading_color', array(
        'label'   => __('Heading Color', 'impexusone'),
        'section' => 'impexusone_footer_colors',
    )));

    $wp_customize->add_setting('footer_link_color', array(
        'default'           => '#374151',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_color', array(
        'label'   => __('Link Color', 'impexusone'),
        'section' => 'impexusone_footer_colors',
    )));

    $wp_customize->add_setting('footer_link_hover_color', array(
        'default'           => '#0F766E',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_link_hover_color', array(
        'label'   => __('Link Hover Color', 'impexusone'),
        'section' => 'impexusone_footer_colors',
    )));

    $wp_customize->add_setting('footer_width_type', array(
        'default'           => 'containerized',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_width_type', array(
        'label'   => __('Footer Width', 'impexusone'),
        'section' => 'impexusone_footer_colors',
        'type'    => 'select',
        'choices' => array(
            'containerized' => __('Containerized', 'impexusone'),
            'full-width'    => __('Full Width', 'impexusone'),
        ),
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
    $social_icon_size   = get_theme_mod('social_icon_size', 20);
    $search_inline_w    = get_theme_mod('search_inline_width', 200);
    $search_btn_color   = get_theme_mod('search_btn_color', '#0F766E');
    $search_radius      = get_theme_mod('search_border_radius', 6);
    $show_submenu_arrows = get_theme_mod('show_submenu_arrows', true);
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
            --customizer-social-icon-size: <?php echo esc_attr($social_icon_size); ?>px;
            --customizer-search-btn-color: <?php echo esc_attr($search_btn_color); ?>;
            --customizer-search-radius: <?php echo esc_attr($search_radius); ?>px;
            --customizer-search-inline-width: <?php echo esc_attr($search_inline_w); ?>px;
        }

        /* Header Base */
        .site-header {
            background-color: var(--customizer-header-bg);
        }

        .header-inner {
            height: var(--customizer-header-height);
            display: flex;
            align-items: center;
            justify-content: space-between;
            <?php if ($header_width_type === 'containerized') : ?>
            max-width: var(--customizer-header-max-width);
            margin: 0 auto;
            padding: 0 1rem;
            <?php elseif ($header_width_type === 'full-width') : ?>
            max-width: 100%;
            padding: 0 2rem;
            <?php else : ?>
            max-width: var(--customizer-header-max-width);
            margin: 0 auto;
            padding: 0 1rem;
            <?php endif; ?>
        }

        <?php if ($header_width_type === 'adaptive') : ?>
        .site-header {
            width: 100%;
        }
        <?php endif; ?>

        /* Logo */
        .site-logo {
            height: var(--customizer-logo-max-height);
            display: flex;
            align-items: center;
        }

        .site-logo img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }

        /* Text Colors */
        .site-title,
        .site-tagline,
        .nav-menu > li > a {
            color: var(--customizer-header-text);
        }

        /* Navigation */
        .primary-nav,
        .nav-menu > li > a {
            font-family: var(--customizer-nav-font);
            font-size: var(--customizer-nav-font-size);
        }

        .nav-menu > li > a {
            padding-left: var(--customizer-nav-spacing);
            padding-right: var(--customizer-nav-spacing);
        }

        /* Submenu Arrow Indicators */
        <?php if ($show_submenu_arrows) : ?>
        .nav-menu > li.menu-item-has-children > a {
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
        .nav-menu > li.menu-item-has-children > a::after {
            content: '';
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 5px solid currentColor;
            transition: transform 0.2s;
        }
        .nav-menu > li.menu-item-has-children:hover > a::after {
            transform: rotate(180deg);
        }
        <?php endif; ?>

        /* CTA Button */
        .header-cta {
            background-color: var(--customizer-cta-bg);
            color: var(--customizer-cta-text);
            border-radius: var(--customizer-cta-radius);
        }

        .header-cta:hover {
            background-color: var(--customizer-cta-bg);
            filter: brightness(0.9);
        }

        /* Social Icons */
        .header-social .social-link svg,
        .mobile-social .social-link svg {
            width: var(--customizer-social-icon-size);
            height: var(--customizer-social-icon-size);
        }

        /* Search Modal */
        .search-modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 99999;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        .search-modal.is-open {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding-top: 12vh;
        }

        .search-modal-wrapper {
            position: relative;
            width: 90%;
            max-width: 550px;
        }

        .search-modal-content {
            background-color: #fff;
            border-radius: 12px;
            padding: 2rem;
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
            border-radius: var(--customizer-search-radius);
            outline: none;
            transition: border-color 0.2s;
        }

        .search-modal-input:focus {
            border-color: var(--customizer-search-btn-color);
        }

        .search-modal-close {
            position: absolute;
            top: -50px;
            right: 0;
            background: rgba(255,255,255,0.2);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            cursor: pointer;
            color: #fff;
            line-height: 1;
            transition: background 0.2s, transform 0.2s;
        }

        .search-modal-close:hover {
            transform: scale(1.1);
        }

        /* Search Dropdown */
        .search-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: var(--customizer-search-radius);
            padding: 0.75rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
            min-width: 280px;
            z-index: 1000;
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
            padding: 0.625rem 0.875rem;
            border: 1px solid #e5e7eb;
            border-radius: var(--customizer-search-radius);
            font-size: 0.875rem;
        }

        .search-dropdown button {
            padding: 0.625rem 1rem;
            background: var(--customizer-search-btn-color);
            color: #fff;
            border: none;
            border-radius: var(--customizer-search-radius);
            cursor: pointer;
            font-size: 0.875rem;
            white-space: nowrap;
        }

        /* Inline Search */
        .header-search-inline {
            display: none;
        }

        @media (min-width: 992px) {
            .header-search-inline {
                display: flex;
                align-items: center;
            }
        }

        .header-search-inline form {
            display: flex;
            align-items: center;
        }

        .header-search-inline input {
            padding: 0.5rem 0.875rem;
            border: 1px solid #e5e7eb;
            border-radius: var(--customizer-search-radius) 0 0 var(--customizer-search-radius);
            width: var(--customizer-search-inline-width);
            font-size: 0.875rem;
            height: 38px;
            box-sizing: border-box;
        }

        .header-search-inline input:focus {
            outline: none;
            border-color: var(--customizer-search-btn-color);
        }

        .header-search-inline button {
            padding: 0.5rem 0.75rem;
            background: var(--customizer-search-btn-color);
            color: #fff;
            border: none;
            border-radius: 0 var(--customizer-search-radius) var(--customizer-search-radius) 0;
            cursor: pointer;
            height: 38px;
            display: flex;
            align-items: center;
        }

        .header-search-inline button .material-symbols-outlined {
            font-size: 20px;
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
            border-radius: var(--customizer-search-radius);
            font-size: 1rem;
        }

        .mobile-search button {
            padding: 0.75rem 1rem;
            background: var(--customizer-search-btn-color);
            color: #fff;
            border: none;
            border-radius: var(--customizer-search-radius);
            cursor: pointer;
        }

        /* Header Actions */
        .header-actions {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
    </style>
    <?php
}
add_action('wp_head', 'impexusone_customizer_css');

/**
 * Output footer customizer CSS inline
 */
function impexusone_footer_css() {
    // Get all footer settings
    $newsletter_bg     = get_theme_mod('footer_newsletter_bg_color', '#FDF2F8');
    $newsletter_btn    = get_theme_mod('footer_newsletter_btn_color', '#0F766E');
    $footer_bg         = get_theme_mod('footer_bg_color', '#FFFFFF');
    $footer_text       = get_theme_mod('footer_text_color', '#6B7280');
    $footer_heading    = get_theme_mod('footer_heading_color', '#111827');
    $footer_link       = get_theme_mod('footer_link_color', '#374151');
    $footer_link_hover = get_theme_mod('footer_link_hover_color', '#0F766E');
    $bottom_bg         = get_theme_mod('footer_bottom_bg_color', '#F9FAFB');
    $bottom_layout     = get_theme_mod('footer_bottom_layout', 'copyright-left');
    $footer_width      = get_theme_mod('footer_width_type', 'containerized');
    ?>
    <style id="impexusone-footer-css">
        :root {
            --footer-newsletter-bg: <?php echo esc_attr($newsletter_bg); ?>;
            --footer-newsletter-btn: <?php echo esc_attr($newsletter_btn); ?>;
            --footer-bg: <?php echo esc_attr($footer_bg); ?>;
            --footer-text: <?php echo esc_attr($footer_text); ?>;
            --footer-heading: <?php echo esc_attr($footer_heading); ?>;
            --footer-link: <?php echo esc_attr($footer_link); ?>;
            --footer-link-hover: <?php echo esc_attr($footer_link_hover); ?>;
            --footer-bottom-bg: <?php echo esc_attr($bottom_bg); ?>;
        }

        /* Newsletter Section */
        .footer-newsletter {
            background-color: var(--footer-newsletter-bg);
            padding: 3rem 0;
        }

        .footer-newsletter-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
            <?php if ($footer_width === 'containerized') : ?>
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            <?php else : ?>
            padding: 0 2rem;
            <?php endif; ?>
        }

        .footer-newsletter-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--footer-heading);
            margin-bottom: 0.5rem;
        }

        .footer-newsletter-content p {
            color: var(--footer-text);
            margin: 0;
        }

        .footer-newsletter-form {
            display: flex;
            gap: 0.75rem;
        }

        .footer-newsletter-form input[type="email"] {
            padding: 0.75rem 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            min-width: 280px;
            font-size: 0.95rem;
        }

        .footer-newsletter-form button {
            background-color: var(--footer-newsletter-btn);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: filter 0.2s;
        }

        .footer-newsletter-form button:hover {
            filter: brightness(0.9);
        }

        /* Main Footer */
        .footer-main {
            background-color: var(--footer-bg);
            padding: 4rem 0;
            border-top: 1px solid #e5e7eb;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
            gap: 2rem;
            <?php if ($footer_width === 'containerized') : ?>
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            <?php else : ?>
            padding: 0 2rem;
            <?php endif; ?>
        }

        @media (max-width: 991px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 575px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .footer-newsletter-inner {
                flex-direction: column;
                text-align: center;
            }
            .footer-newsletter-form {
                flex-direction: column;
                width: 100%;
            }
            .footer-newsletter-form input[type="email"] {
                min-width: auto;
                width: 100%;
            }
        }

        /* Footer About */
        .footer-about .footer-description {
            color: var(--footer-text);
            line-height: 1.6;
            margin: 1rem 0;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .footer-logo-name {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--footer-heading);
            display: block;
        }

        .footer-logo-sub {
            font-size: 0.8rem;
            color: var(--footer-text);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Footer Nav */
        .footer-nav-section h4 {
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--footer-heading);
            margin-bottom: 1rem;
        }

        .footer-nav-links {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .footer-nav-link {
            color: var(--footer-link);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-nav-link:hover {
            color: var(--footer-link-hover);
        }

        /* Footer Contact */
        .footer-contact-item {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .footer-contact-icon {
            color: var(--footer-link-hover);
            font-size: 1.25rem;
        }

        .footer-contact-text {
            color: var(--footer-text);
            margin: 0;
        }

        .footer-contact-text a {
            color: var(--footer-link);
            text-decoration: none;
        }

        .footer-contact-text a:hover {
            color: var(--footer-link-hover);
        }

        /* Footer CTA Box */
        .footer-cta-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1rem;
        }

        .footer-cta-box p {
            color: var(--footer-text);
            font-size: 0.875rem;
            margin: 0 0 0.5rem 0;
        }

        .footer-cta-link {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            color: var(--footer-link-hover);
            font-weight: 600;
            text-decoration: none;
        }

        .footer-cta-link:hover {
            text-decoration: underline;
        }

        /* Footer Social */
        .footer-social {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .footer-social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f3f4f6;
            color: var(--footer-link);
            transition: background 0.2s, color 0.2s;
        }

        .footer-social-link:hover {
            background: var(--footer-link-hover);
            color: #fff;
        }

        .footer-social-link svg {
            width: 18px;
            height: 18px;
        }

        /* Footer Bottom */
        .footer-bottom {
            background-color: var(--footer-bottom-bg);
            padding: 1.5rem 0;
            border-top: 1px solid #e5e7eb;
        }

        .footer-bottom-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            <?php if ($footer_width === 'containerized') : ?>
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            <?php else : ?>
            padding: 0 2rem;
            <?php endif; ?>
            <?php if ($bottom_layout === 'copyright-right') : ?>
            flex-direction: row-reverse;
            <?php endif; ?>
        }

        .footer-copyright {
            color: var(--footer-text);
            font-size: 0.875rem;
            margin: 0;
        }

        .footer-legal-links {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .footer-legal-link {
            color: var(--footer-link);
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.2s;
        }

        .footer-legal-link:hover {
            color: var(--footer-link-hover);
        }

        @media (max-width: 575px) {
            .footer-bottom-inner {
                flex-direction: column;
                text-align: center;
            }
            .footer-legal-links {
                justify-content: center;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'impexusone_footer_css');

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

