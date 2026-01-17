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
        'primary'          => esc_html__('Primary Menu', 'impexusone'),
        'mobile'           => esc_html__('Mobile Menu', 'impexusone'),
        'footer'           => esc_html__('Footer Menu', 'impexusone'),
        'footer-services'  => esc_html__('Footer Services', 'impexusone'),
        'footer-insights'  => esc_html__('Footer Insights', 'impexusone'),
        'footer-legal'     => esc_html__('Footer Legal Links', 'impexusone'),
        'legal'            => esc_html__('Legal Links Menu', 'impexusone'),
    ));
}
add_action('after_setup_theme', 'impexusone_register_menus');

/**
 * Custom walker for primary navigation with dropdown support.
 */
class ImpexusOne_Nav_Walker extends Walker_Nav_Menu {
    
    /**
     * Start the element output.
     */
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';
        
        // Check if item has children
        $has_children = in_array('menu-item-has-children', $classes);
        if ($has_children && $depth === 0) {
            $classes[] = 'nav-dropdown';
        }
        
        $class_names = esc_attr(implode(' ', array_filter($classes)));
        
        $output .= '<li class="' . $class_names . '">';
        
        // Build link attributes
        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['class'] = $depth === 0 ? 'nav-link' : 'nav-dropdown-link';
        
        if ($item->current) {
            $atts['aria-current'] = 'page';
        }
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        $title = apply_filters('the_title', $item->title, $item->ID);
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        
        // Add dropdown icon for parent items
        if ($has_children && $depth === 0) {
            $item_output .= '<span class="material-symbols-outlined nav-dropdown-icon">expand_more</span>';
        }
        
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    /**
     * Start submenu.
     */
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="nav-dropdown-menu">';
    }
    
    /**
     * End submenu.
     */
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
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
            'container_class'=> 'primary-nav',
            'container_id'   => 'primary-nav',
            'menu_class'     => 'nav-menu',
            'depth'          => 2,
            'walker'         => new ImpexusOne_Nav_Walker(),
            'fallback_cb'    => 'impexusone_primary_nav_fallback',
        ));
    } else {
        impexusone_primary_nav_fallback();
    }
}

/**
 * Fallback for primary navigation.
 */
function impexusone_primary_nav_fallback() {
    echo '<nav class="primary-nav">';
    echo '<ul class="nav-menu">';
    echo '<li class="nav-item"><a href="' . esc_url(home_url('/')) . '" class="nav-link">' . esc_html__('Home', 'impexusone') . '</a></li>';
    echo '<li class="nav-item"><a href="' . esc_url(home_url('/services/')) . '" class="nav-link">' . esc_html__('Services', 'impexusone') . '</a></li>';
    echo '<li class="nav-item"><a href="' . esc_url(home_url('/about/')) . '" class="nav-link">' . esc_html__('About', 'impexusone') . '</a></li>';
    echo '<li class="nav-item"><a href="' . esc_url(home_url('/insights/')) . '" class="nav-link">' . esc_html__('Insights', 'impexusone') . '</a></li>';
    echo '<li class="nav-item"><a href="' . esc_url(home_url('/contact/')) . '" class="nav-link">' . esc_html__('Contact', 'impexusone') . '</a></li>';
    echo '</ul>';
    echo '</nav>';
}

/**
 * Display mobile navigation.
 */
function impexusone_mobile_nav() {
    if (has_nav_menu('mobile')) {
        wp_nav_menu(array(
            'theme_location' => 'mobile',
            'container'      => 'nav',
            'container_class'=> 'mobile-nav',
            'container_id'   => 'mobile-nav',
            'menu_class'     => 'mobile-nav-menu',
            'depth'          => 1,
        ));
    } elseif (has_nav_menu('primary')) {
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'mobile-nav',
            'container_id'   => 'mobile-nav',
            'menu_class'     => 'mobile-nav-menu',
            'depth'          => 1,
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
