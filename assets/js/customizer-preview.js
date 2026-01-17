/**
 * ImpexusOne Customizer Preview
 *
 * Live preview for Customizer settings.
 *
 * @package ImpexusOne
 */

(function ($) {
    'use strict';

    // Header Height
    wp.customize('header_height', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-header-height', newval + 'px');
        });
    });

    // Logo Max Height
    wp.customize('logo_max_height', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-logo-max-height', newval + 'px');
        });
    });

    // Header Background Color
    wp.customize('header_bg_color', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-header-bg', newval);
        });
    });

    // Header Text Color
    wp.customize('header_text_color', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-header-text', newval);
        });
    });

    // Navigation Font Family
    wp.customize('nav_font_family', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-nav-font', newval + ', sans-serif');
        });
    });

    // Navigation Font Size
    wp.customize('nav_font_size', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-nav-font-size', newval + 'px');
        });
    });

    // Navigation Link Spacing
    wp.customize('nav_link_spacing', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-nav-spacing', newval + 'px');
        });
    });

    // CTA Button Background Color
    wp.customize('cta_bg_color', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-cta-bg', newval);
        });
    });

    // CTA Button Text Color
    wp.customize('cta_text_color', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-cta-text', newval);
        });
    });

    // CTA Button Border Radius
    wp.customize('cta_border_radius', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-cta-radius', newval + 'px');
        });
    });

    // Show/Hide Tagline
    wp.customize('show_tagline', function (value) {
        value.bind(function (newval) {
            var $tagline = $('.site-tagline');
            if (newval) {
                $tagline.show();
            } else {
                $tagline.hide();
            }
        });
    });

    // Show/Hide Social Icons
    wp.customize('show_header_social', function (value) {
        value.bind(function (newval) {
            var $social = $('.header-social');
            if (newval) {
                $social.show();
            } else {
                $social.hide();
            }
        });
    });

    // =========================================================================
    // Header Pilot 2 - New Settings
    // =========================================================================

    // Show/Hide Site Title
    wp.customize('show_site_title', function (value) {
        value.bind(function (newval) {
            var $title = $('.site-title');
            if (newval) {
                $title.show();
            } else {
                $title.hide();
            }
        });
    });

    // Header Max Width
    wp.customize('header_max_width', function (value) {
        value.bind(function (newval) {
            document.documentElement.style.setProperty('--customizer-header-max-width', newval + 'px');
        });
    });

    // Header Width Type (requires page refresh for full effect, but we can do partial)
    wp.customize('header_width_type', function (value) {
        value.bind(function (newval) {
            var $header = $('.site-header');
            var $inner = $('.header-inner');

            // Remove existing width classes
            $header.removeClass('header-full-width header-adaptive');

            if (newval === 'full-width') {
                $header.addClass('header-full-width');
                $inner.css({
                    'max-width': 'none',
                    'padding-left': '2rem',
                    'padding-right': '2rem'
                });
            } else if (newval === 'adaptive') {
                $header.addClass('header-adaptive');
                $inner.css({
                    'max-width': 'var(--customizer-header-max-width)',
                    'margin-left': 'auto',
                    'margin-right': 'auto',
                    'padding-left': '1rem',
                    'padding-right': '1rem'
                });
            } else {
                // containerized
                $inner.css({
                    'max-width': 'var(--customizer-header-max-width)',
                    'margin-left': 'auto',
                    'margin-right': 'auto',
                    'padding-left': '1rem',
                    'padding-right': '1rem'
                });
            }
        });
    });

})(jQuery);
