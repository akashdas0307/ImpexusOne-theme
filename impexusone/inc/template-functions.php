<?php
/**
 * Template Functions
 *
 * Helper functions for templates.
 *
 * @package ImpexusOne
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get primary category of a post.
 *
 * @param int|null $post_id Post ID. Defaults to current post.
 * @return WP_Term|null Category term or null.
 */
function impexusone_get_primary_category($post_id = null) {
    $categories = get_the_category($post_id);
    
    if (empty($categories)) {
        return null;
    }
    
    // Yoast SEO primary category support
    if (class_exists('WPSEO_Primary_Term')) {
        $wpseo_primary_term = new WPSEO_Primary_Term('category', $post_id);
        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
        
        if ($wpseo_primary_term) {
            $term = get_term($wpseo_primary_term);
            if (!is_wp_error($term)) {
                return $term;
            }
        }
    }
    
    return $categories[0];
}

/**
 * Get the post's primary category slug.
 *
 * @param int|null $post_id Post ID.
 * @return string Category slug or 'default'.
 */
function impexusone_get_post_category_slug($post_id = null) {
    $category = impexusone_get_primary_category($post_id);
    return $category ? $category->slug : 'default';
}

/**
 * Get estimated reading time for a post.
 *
 * @param int|null $post_id Post ID.
 * @return int Reading time in minutes.
 */
function impexusone_get_reading_time($post_id = null) {
    $post_id = $post_id ?: get_the_ID();
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute
    
    return max(1, $reading_time);
}

/**
 * Display reading time badge.
 *
 * @param int|null $post_id Post ID.
 */
function impexusone_reading_time_badge($post_id = null) {
    $time = impexusone_get_reading_time($post_id);
    printf(
        '<span class="reading-time"><span class="material-symbols-outlined">schedule</span> %d min read</span>',
        $time
    );
}

/**
 * Display post meta (date, author, category).
 *
 * @param array $show Which meta to show. Default: date, author, category.
 */
function impexusone_post_meta($show = array('date', 'author', 'category')) {
    echo '<div class="post-meta">';
    
    if (in_array('date', $show)) {
        echo '<span class="post-date">';
        echo '<span class="material-symbols-outlined">calendar_today</span>';
        echo esc_html(get_the_date());
        echo '</span>';
    }
    
    if (in_array('author', $show)) {
        echo '<span class="post-author">';
        echo '<span class="material-symbols-outlined">person</span>';
        echo esc_html(get_the_author());
        echo '</span>';
    }
    
    if (in_array('category', $show)) {
        $category = impexusone_get_primary_category();
        if ($category) {
            echo '<a href="' . esc_url(get_category_link($category)) . '" class="post-category">';
            echo esc_html($category->name);
            echo '</a>';
        }
    }
    
    if (in_array('reading_time', $show)) {
        impexusone_reading_time_badge();
    }
    
    echo '</div>';
}

/**
 * Display category badge.
 *
 * @param WP_Term|null $category Category term.
 */
function impexusone_category_badge($category = null) {
    if (!$category) {
        $category = impexusone_get_primary_category();
    }
    
    if (!$category) {
        return;
    }
    
    $badge_class = 'badge badge-primary';
    
    // Custom badge colors by category
    $category_colors = array(
        'rfp-alerts'   => 'badge-warning',
        'tutorials'    => 'badge-info',
        'tips-tricks'  => 'badge-success',
        'newsletter'   => 'badge-primary',
        'podcast'      => 'badge-accent',
    );
    
    if (isset($category_colors[$category->slug])) {
        $badge_class = 'badge ' . $category_colors[$category->slug];
    }
    
    printf(
        '<a href="%s" class="%s">%s</a>',
        esc_url(get_category_link($category)),
        esc_attr($badge_class),
        esc_html($category->name)
    );
}

/**
 * Get the appropriate template part for single posts based on category.
 *
 * @return string Template part slug.
 */
function impexusone_get_single_template_part() {
    $category_slug = impexusone_get_post_category_slug();
    
    $template_map = array(
        'rfp-alerts'   => 'rfp',
        'tips-tricks'  => 'tip',
        'tutorials'    => 'tutorial',
        'newsletter'   => 'newsletter',
        'podcast'      => 'podcast',
    );
    
    return isset($template_map[$category_slug]) ? $template_map[$category_slug] : 'default';
}

/**
 * Display custom logo or site title.
 */
function impexusone_site_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url(home_url('/')) . '" class="site-title-link">';
        echo '<span class="site-title-text">' . esc_html(get_bloginfo('name')) . '</span>';
        echo '</a>';
    }
}

/**
 * Display breadcrumbs.
 *
 * @param array $args Breadcrumb options.
 */
function impexusone_breadcrumbs($args = array()) {
    $defaults = array(
        'separator' => '<span class="material-symbols-outlined">chevron_right</span>',
        'home_text' => __('Home', 'impexusone'),
    );
    
    $args = wp_parse_args($args, $defaults);
    
    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<ol class="breadcrumb-list">';
    
    // Home link
    echo '<li class="breadcrumb-item">';
    echo '<a href="' . esc_url(home_url('/')) . '" class="breadcrumb-link">' . esc_html($args['home_text']) . '</a>';
    echo '</li>';
    
    echo $args['separator'];
    
    if (is_category()) {
        // Category archive
        single_cat_title('<li class="breadcrumb-item current" aria-current="page">', '</li>');
    } elseif (is_single()) {
        // Single post
        $category = impexusone_get_primary_category();
        if ($category) {
            echo '<li class="breadcrumb-item">';
            echo '<a href="' . esc_url(get_category_link($category)) . '" class="breadcrumb-link">' . esc_html($category->name) . '</a>';
            echo '</li>';
            echo $args['separator'];
        }
        echo '<li class="breadcrumb-item current" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_page()) {
        // Page
        global $post;
        if ($post->post_parent) {
            $ancestors = get_post_ancestors($post->ID);
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                echo '<li class="breadcrumb-item">';
                echo '<a href="' . esc_url(get_permalink($ancestor)) . '" class="breadcrumb-link">' . esc_html(get_the_title($ancestor)) . '</a>';
                echo '</li>';
                echo $args['separator'];
            }
        }
        echo '<li class="breadcrumb-item current" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_search()) {
        echo '<li class="breadcrumb-item current" aria-current="page">' . esc_html__('Search Results', 'impexusone') . '</li>';
    } elseif (is_404()) {
        echo '<li class="breadcrumb-item current" aria-current="page">' . esc_html__('Not Found', 'impexusone') . '</li>';
    }
    
    echo '</ol>';
    echo '</nav>';
}

/**
 * Display section header.
 *
 * @param array $args Section header arguments.
 */
function impexusone_section_header($args = array()) {
    $defaults = array(
        'eyebrow' => '',
        'title'   => '',
        'subtitle'=> '',
        'class'   => '',
    );
    
    $args = wp_parse_args($args, $defaults);
    
    echo '<div class="section-header ' . esc_attr($args['class']) . '">';
    
    if ($args['eyebrow']) {
        echo '<span class="section-eyebrow">' . esc_html($args['eyebrow']) . '</span>';
    }
    
    if ($args['title']) {
        echo '<h2 class="section-title">' . esc_html($args['title']) . '</h2>';
    }
    
    if ($args['subtitle']) {
        echo '<p class="section-subtitle">' . esc_html($args['subtitle']) . '</p>';
    }
    
    echo '</div>';
}

/**
 * Get social share URLs.
 *
 * @param int|null $post_id Post ID.
 * @return array Share URLs.
 */
function impexusone_get_share_urls($post_id = null) {
    $post_id = $post_id ?: get_the_ID();
    $url = urlencode(get_permalink($post_id));
    $title = urlencode(get_the_title($post_id));
    
    return array(
        'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $url,
        'twitter'  => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title,
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $url,
        'email'    => 'mailto:?subject=' . $title . '&body=' . $url,
    );
}

/**
 * Display social share buttons.
 *
 * @param int|null $post_id Post ID.
 */
function impexusone_share_buttons($post_id = null) {
    $urls = impexusone_get_share_urls($post_id);
    
    echo '<div class="share-buttons">';
    echo '<h4 class="share-title">' . esc_html__('Share', 'impexusone') . '</h4>';
    echo '<div class="share-buttons-row">';
    
    echo '<a href="' . esc_url($urls['linkedin']) . '" class="share-btn share-linkedin" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr__('Share on LinkedIn', 'impexusone') . '">';
    echo '<span class="share-btn-text">LinkedIn</span>';
    echo '</a>';
    
    echo '<a href="' . esc_url($urls['twitter']) . '" class="share-btn share-twitter" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr__('Share on Twitter', 'impexusone') . '">';
    echo '<span class="share-btn-text">Twitter</span>';
    echo '</a>';
    
    echo '<button class="share-btn share-copy" onclick="navigator.clipboard.writeText(\'' . esc_js(get_permalink($post_id)) . '\')" aria-label="' . esc_attr__('Copy link', 'impexusone') . '">';
    echo '<span class="material-symbols-outlined">content_copy</span>';
    echo '</button>';
    
    echo '</div>';
    echo '</div>';
}
