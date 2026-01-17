/**
 * ImpexusOne Customizer Preview
 *
 * Live preview for Customizer settings.
 *
 * @package ImpexusOne
 */

(function($) {
    'use strict';

    // Header Height
    wp.customize('header_height', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-header-height', newval + 'px');
        });
    });

    // Logo Max Height
    wp.customize('logo_max_height', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-logo-max-height', newval + 'px');
        });
    });

    // Header Background Color
    wp.customize('header_bg_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-header-bg', newval);
        });
    });

    // Header Text Color
    wp.customize('header_text_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-header-text', newval);
        });
    });

    // Navigation Font Family
    wp.customize('nav_font_family', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-nav-font', newval + ', sans-serif');
        });
    });

    // Navigation Font Size
    wp.customize('nav_font_size', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-nav-font-size', newval + 'px');
        });
    });

    // Navigation Link Spacing
    wp.customize('nav_link_spacing', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-nav-spacing', newval + 'px');
        });
    });

    // CTA Button Background Color
    wp.customize('cta_bg_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-cta-bg', newval);
        });
    });

    // CTA Button Text Color
    wp.customize('cta_text_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-cta-text', newval);
        });
    });

    // CTA Button Border Radius
    wp.customize('cta_border_radius', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--customizer-cta-radius', newval + 'px');
        });
    });

    // Show/Hide Tagline
    wp.customize('show_tagline', function(value) {
        value.bind(function(newval) {
            var $tagline = $('.site-tagline');
            if (newval) {
                $tagline.show();
            } else {
                $tagline.hide();
            }
        });
    });

    // Show/Hide Social Icons
    wp.customize('show_header_social', function(value) {
        value.bind(function(newval) {
            var $social = $('.header-social');
            if (newval) {
                $social.show();
            } else {
                $social.hide();
            }
        });
    });

})(jQuery);
