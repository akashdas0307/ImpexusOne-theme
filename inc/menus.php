<?php
/**
 * Navigation Menus
 *
 * @package ImpexusOne
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register navigation menus.
 */
function impexusone_register_menus() {
    register_nav_menus(array(
        'primary'   => esc_html__('Primary Menu', 'impexusone'),
        'mobile'    => esc_html__('Mobile Menu', 'impexusone'),
        'footer'    => esc_html__('Footer Menu', 'impexusone'),
        'legal'     => esc_html__('Legal Links Menu', 'impexusone'),
    ));
}
add_action('after_setup_theme', 'impexusone_register_menus');

/**
 * Custom walker for primary navigation with dropdown support.
 */
class ImpexusOne_Nav_Walker extends Walker_Nav_Menu {
    
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        
        if ($depth === 0) {
            $output .= $has_children ? '<div class="relative group">' : '';
        }

        $item_output = '';
        $classes = ($depth === 0) ? 'px-3 py-2 text-sm font-medium text-text-light dark:text-text-dark hover:text-primary dark:hover:text-primary transition-colors' : 'block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700';

        if ($has_children && $depth === 0) {
            $item_output .= '<button class="flex items-center gap-1 ' . $classes . ' focus:outline-none">';
            $item_output .= $item->title;
            $item_output .= '<i class="fas fa-chevron-down text-xs opacity-70 group-hover:opacity-100 transition-opacity"></i>';
            $item_output .= '</button>';
        } else {
            $item_output .= '<a href="' . esc_url($item->url) . '" class="' . $classes . ' relative group">';
            $item_output .= $item->title;
            if ($depth === 0) {
                $item_output .= '<span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>';
            }
            $item_output .= '</a>';
        }

        $output .= $item_output;
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= '</div>';
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<div class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</div>';
    }
}

class ImpexusOne_Mobile_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" class="block px-3 py-2 rounded-md text-base font-medium text-text-light dark:text-text-dark hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-primary">';
        $output .= $item->title;
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // No closing tag needed for <a>
    }
}


/**
 * Display primary navigation.
 */
function impexusone_primary_nav() {
    if (has_nav_menu('primary')) {
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'hidden md:flex space-x-1 lg:space-x-4',
            'menu_class'     => '',
            'items_wrap'     => '%3$s',
            'depth'          => 2,
            'walker'         => new ImpexusOne_Nav_Walker(),
            'fallback_cb'    => false,
        ));
    }
}

/**
 * Display mobile navigation.
 */
function impexusone_mobile_nav() {
    if (has_nav_menu('mobile') || has_nav_menu('primary')) {
        wp_nav_menu(array(
            'theme_location' => has_nav_menu('mobile') ? 'mobile' : 'primary',
            'container'      => '',
            'items_wrap'     => '%3$s',
            'menu_class'     => '',
            'walker'         => new ImpexusOne_Mobile_Nav_Walker(),
        ));
    }
}

/**
 * Display footer navigation.
 */
function impexusone_footer_nav() {
    if (has_nav_menu('footer')) {
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'footer-nav-links',
            'depth'          => 1,
        ));
    }
}

/**
 * Display legal links navigation.
 */
function impexusone_legal_nav() {
    if (has_nav_menu('legal')) {
        wp_nav_menu(array(
            'theme_location' => 'legal',
            'container'      => false,
            'menu_class'     => 'footer-legal-links',
            'depth'          => 1,
        ));
    } else {
        // Fallback legal links
        echo '<div class="footer-legal-links">';
        echo '<a href="' . esc_url(home_url('/privacy-policy/')) . '" class="footer-legal-link">' . esc_html__('Privacy Policy', 'impexusone') . '</a>';
        echo '<a href="' . esc_url(home_url('/terms-of-use/')) . '" class="footer-legal-link">' . esc_html__('Terms of Use', 'impexusone') . '</a>';
        echo '<a href="' . esc_url(home_url('/disclaimer/')) . '" class="footer-legal-link">' . esc_html__('Disclaimer', 'impexusone') . '</a>';
        echo '</div>';
    }
}
