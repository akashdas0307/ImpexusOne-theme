<?php
/**
 * Header Template (Pilot 3)
 *
 * @package ImpexusOne
 */

// Get Customizer settings
$show_site_title    = get_theme_mod('show_site_title', true);
$show_tagline       = get_theme_mod('show_tagline', true);
$show_header_social = get_theme_mod('show_header_social', true);
$show_header_search = get_theme_mod('show_header_search', true);
$search_type        = get_theme_mod('search_type', 'modal');
$search_placeholder = get_theme_mod('search_placeholder', __('Search...', 'impexusone'));

// Social URLs
$social_linkedin  = get_theme_mod('social_linkedin_url', 'https://linkedin.com/company/impexus');
$social_youtube   = get_theme_mod('social_youtube_url', 'https://youtube.com/@impexus');
$social_twitter   = get_theme_mod('social_twitter_url', '');
$social_facebook  = get_theme_mod('social_facebook_url', '');
$social_instagram = get_theme_mod('social_instagram_url', '');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-background-light font-body antialiased'); ?>>
<?php wp_body_open(); ?>

<a class="skip-link sr-only focus:not-sr-only" href="#main-content"><?php esc_html_e('Skip to content', 'impexusone'); ?></a>

<header class="site-header" role="banner">
    <div class="header-inner">
        <!-- Site Branding -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-branding">
            <div class="site-logo">
                <?php impexusone_site_logo(); ?>
            </div>
            <?php if ($show_site_title || $show_tagline) : ?>
            <div class="site-title-group">
                <?php if ($show_site_title) : ?>
                    <span class="site-title"><?php bloginfo('name'); ?></span>
                <?php endif; ?>
                <?php 
                $description = get_bloginfo('description', 'display');
                if ($description && $show_tagline) : ?>
                    <span class="site-tagline"><?php echo esc_html($description); ?></span>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </a>

        <!-- Primary Navigation -->
        <nav class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'impexusone'); ?>">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                    'depth'          => 2,
                    'fallback_cb'    => false,
                ));
            }
            ?>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
            <?php if ($show_header_search) : ?>
                <?php if ($search_type === 'inline') : ?>
                    <!-- Inline Search (Desktop Only) -->
                    <div class="header-search-inline">
                        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="search" name="s" placeholder="<?php echo esc_attr($search_placeholder); ?>" aria-label="<?php esc_attr_e('Search', 'impexusone'); ?>">
                            <button type="submit" aria-label="<?php esc_attr_e('Submit search', 'impexusone'); ?>">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </div>
                <?php else : ?>
                    <!-- Search Toggle Button -->
                    <button type="button" class="header-icon-btn" aria-label="<?php esc_attr_e('Open search', 'impexusone'); ?>" id="search-toggle" data-search-type="<?php echo esc_attr($search_type); ?>">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                    <?php if ($search_type === 'dropdown') : ?>
                        <!-- Search Dropdown -->
                        <div class="search-dropdown" id="search-dropdown">
                            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="search" name="s" placeholder="<?php echo esc_attr($search_placeholder); ?>" aria-label="<?php esc_attr_e('Search', 'impexusone'); ?>">
                                <button type="submit"><?php esc_html_e('Search', 'impexusone'); ?></button>
                            </form>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Social Icons -->
            <?php if ($show_header_social) : ?>
            <div class="header-social">
                <?php if (!empty($social_linkedin)) : ?>
                <a href="<?php echo esc_url($social_linkedin); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'impexusone'); ?>">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <?php endif; ?>
                <?php if (!empty($social_youtube)) : ?>
                <a href="<?php echo esc_url($social_youtube); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'impexusone'); ?>">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
                <?php endif; ?>
                <?php if (!empty($social_twitter)) : ?>
                <a href="<?php echo esc_url($social_twitter); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Twitter/X', 'impexusone'); ?>">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <?php endif; ?>
                <?php if (!empty($social_facebook)) : ?>
                <a href="<?php echo esc_url($social_facebook); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Facebook', 'impexusone'); ?>">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <?php endif; ?>
                <?php if (!empty($social_instagram)) : ?>
                <a href="<?php echo esc_url($social_instagram); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Instagram', 'impexusone'); ?>">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- CTA Button -->
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary header-cta">
                <?php esc_html_e('Book a Call', 'impexusone'); ?>
            </a>

            <!-- Mobile Menu Toggle -->
            <button type="button" class="mobile-menu-toggle" aria-controls="mobile-nav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle menu', 'impexusone'); ?>">
                <span class="material-symbols-outlined menu-icon">menu</span>
                <span class="material-symbols-outlined close-icon">close</span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" id="mobile-nav" aria-label="<?php esc_attr_e('Mobile navigation', 'impexusone'); ?>">
        <!-- Mobile Search -->
        <?php if ($show_header_search) : ?>
        <div class="mobile-search">
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" name="s" placeholder="<?php echo esc_attr($search_placeholder); ?>" aria-label="<?php esc_attr_e('Search', 'impexusone'); ?>">
                <button type="submit" aria-label="<?php esc_attr_e('Submit search', 'impexusone'); ?>">
                    <span class="material-symbols-outlined">search</span>
                </button>
            </form>
        </div>
        <?php endif; ?>

        <?php
        if (has_nav_menu('mobile') || has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => has_nav_menu('mobile') ? 'mobile' : 'primary',
                'container'      => false,
                'menu_class'     => 'mobile-nav-menu',
                'depth'          => 2,
            ));
        }
        ?>
        
        <!-- Mobile Social Links -->
        <?php if ($show_header_social) : ?>
        <div class="mobile-social">
            <?php if (!empty($social_linkedin)) : ?>
            <a href="<?php echo esc_url($social_linkedin); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'impexusone'); ?>">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>
            <?php endif; ?>
            <?php if (!empty($social_youtube)) : ?>
            <a href="<?php echo esc_url($social_youtube); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'impexusone'); ?>">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>
            <?php endif; ?>
            <?php if (!empty($social_twitter)) : ?>
            <a href="<?php echo esc_url($social_twitter); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Twitter/X', 'impexusone'); ?>">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
            <?php endif; ?>
            <?php if (!empty($social_facebook)) : ?>
            <a href="<?php echo esc_url($social_facebook); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Facebook', 'impexusone'); ?>">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>
            <?php endif; ?>
            <?php if (!empty($social_instagram)) : ?>
            <a href="<?php echo esc_url($social_instagram); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Instagram', 'impexusone'); ?>">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <!-- Mobile CTA -->
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary mobile-cta">
            <?php esc_html_e('Book a Call', 'impexusone'); ?>
        </a>
    </nav>
</header>

<!-- Search Modal (for modal search type) -->
<?php if ($show_header_search && $search_type === 'modal') : ?>
<div class="search-modal" id="search-modal" role="dialog" aria-modal="true" aria-labelledby="search-modal-title">
    <button type="button" class="search-modal-close" id="search-modal-close" aria-label="<?php esc_attr_e('Close search', 'impexusone'); ?>">&times;</button>
    <div class="search-modal-content">
        <h2 id="search-modal-title" class="sr-only"><?php esc_html_e('Search', 'impexusone'); ?></h2>
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search-modal-form">
            <input type="search" name="s" class="search-modal-input" placeholder="<?php echo esc_attr($search_placeholder); ?>" aria-label="<?php esc_attr_e('Search', 'impexusone'); ?>" required>
            <button type="submit" class="btn btn-primary"><?php esc_html_e('Search', 'impexusone'); ?></button>
        </form>
    </div>
</div>
<?php endif; ?>

<main id="main-content" class="site-main" role="main">
