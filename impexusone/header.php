<?php
/**
 * Header Template
 *
 * @package ImpexusOne
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-surface-light dark:bg-background-dark font-body'); ?>>
<?php wp_body_open(); ?>

<a class="sr-only" href="#main-content"><?php esc_html_e('Skip to content', 'impexusone'); ?></a>

<header class="sticky top-0 z-50 w-full bg-background-light dark:bg-surface-dark border-b border-border-light dark:border-border-dark shadow-header transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center gap-4 flex-shrink-0 cursor-pointer group">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-4">
                    <div class="relative h-12 w-auto flex items-center justify-center overflow-hidden">
                        <?php
                        if (function_exists('impexusone_site_logo')) {
                            impexusone_site_logo();
                        }
                        ?>
                    </div>
                    <div class="hidden lg:flex flex-col justify-center border-l border-border-light dark:border-border-dark pl-4 h-10">
                        <span class="text-xs font-semibold tracking-wider text-text-light dark:text-text-dark uppercase"><?php bloginfo('name'); ?></span>
                        <span class="text-[10px] text-gray-500 dark:text-gray-400 font-medium leading-tight"><?php bloginfo('description'); ?></span>
                    </div>
                </a>
            </div>

            <?php
            if (function_exists('impexusone_primary_nav')) {
                impexusone_primary_nav();
            }
            ?>

            <div class="flex items-center gap-3 lg:gap-4">
                <button aria-label="Search" class="p-2 text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors focus:outline-none">
                    <i class="fas fa-search text-lg"></i>
                </button>
                <div class="hidden sm:flex items-center gap-3 border-r border-border-light dark:border-border-dark pr-4 h-8">
                    <a aria-label="LinkedIn" class="text-gray-500 hover:text-[#0077b5] dark:text-gray-400 dark:hover:text-[#0077b5] transition-colors" href="<?php echo esc_url('https://linkedin.com/company/impexus'); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a aria-label="YouTube" class="text-gray-500 hover:text-[#FF0000] dark:text-gray-400 dark:hover:text-[#FF0000] transition-colors" href="<?php echo esc_url('https://youtube.com/@impexus'); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
                <a class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-semibold rounded-md text-white bg-primary hover:bg-primary-hover shadow-sm transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:focus:ring-offset-surface-dark" href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <?php esc_html_e('Book a Call', 'impexusone'); ?>
                </a>
                <button aria-controls="mobile-menu" aria-expanded="false" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-200 hover:text-primary hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary" type="button">
                    <span class="sr-only"><?php esc_html_e('Open main menu', 'impexusone'); ?></span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="hidden md:hidden border-t border-border-light dark:border-border-dark bg-background-light dark:bg-surface-dark" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <?php
        if (has_nav_menu('mobile') || has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => has_nav_menu('mobile') ? 'mobile' : 'primary',
                'container'      => '',
                'items_wrap'     => '%3$s',
                'menu_class'     => '',
                'walker'         => new ImpexusOne_Mobile_Nav_Walker(),
            ));
        }
        ?>
        </div>
        <div class="pt-4 pb-4 border-t border-border-light dark:border-border-dark">
            <div class="flex items-center px-5 space-x-4">
                <a aria-label="LinkedIn" class="text-gray-500 hover:text-[#0077b5] dark:text-gray-400 dark:hover:text-[#0077b5] transition-colors" href="<?php echo esc_url('https://linkedin.com/company/impexus'); ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a aria-label="YouTube" class="text-gray-500 hover:text-[#FF0000] dark:text-gray-400 dark:hover:text-[#FF0000] transition-colors" href="<?php echo esc_url('https://youtube.com/@impexus'); ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>
            </div>
            <div class="mt-4 px-5">
                <a class="block w-full text-center px-5 py-3 rounded-md font-medium text-white bg-primary hover:bg-primary-hover" href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <?php esc_html_e('Book a Call', 'impexusone'); ?>
                </a>
            </div>
        </div>
    </div>
</header>

<main id="main-content" class="site-main" role="main">

<?php
/**
 * Header Template
 *
 * @package ImpexusOne
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content"><?php esc_html_e('Skip to content', 'impexusone'); ?></a>

<header class="site-header" role="banner">
    <div class="container">
        <div class="header-inner">
            <!-- Site Branding -->
            <div class="site-branding">
                <div class="site-logo">
                    <?php impexusone_site_logo(); ?>
                </div>
                
                <div class="site-title-group">
                    <span class="site-title"><?php bloginfo('name'); ?></span>
                    <?php 
                    $description = get_bloginfo('description', 'display');
                    if ($description) : ?>
                        <span class="site-tagline"><?php echo esc_html($description); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Primary Navigation -->
            <?php impexusone_primary_nav(); ?>

            <!-- Header Actions -->
            <div class="header-actions">
                <!-- Social Icons -->
                <div class="header-social">
                    <a href="https://linkedin.com/company/impexus" class="social-link linkedin" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'impexusone'); ?>">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://youtube.com/@impexus" class="social-link youtube" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'impexusone'); ?>">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>

                <!-- Search Button -->
                <button type="button" class="header-icon-btn" aria-label="<?php esc_attr_e('Search', 'impexusone'); ?>" id="search-toggle">
                    <span class="material-symbols-outlined">search</span>
                </button>

                <!-- CTA Button -->
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary header-cta">
                    <span class="material-symbols-outlined">calendar_today</span>
                    <?php esc_html_e('Book a Call', 'impexusone'); ?>
                </a>

                <!-- Mobile Menu Toggle -->
                <button type="button" class="mobile-menu-toggle" aria-controls="mobile-nav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle menu', 'impexusone'); ?>">
                    <span class="material-symbols-outlined" aria-hidden="true">menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile-nav" id="mobile-nav" aria-label="<?php esc_attr_e('Mobile navigation', 'impexusone'); ?>">
            <?php
            if (has_nav_menu('mobile') || has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => has_nav_menu('mobile') ? 'mobile' : 'primary',
                    'container'      => false,
                    'menu_class'     => 'mobile-nav-menu',
                    'depth'          => 2,
                    'link_before'    => '<span class="mobile-nav-link-text">',
                    'link_after'     => '</span>',
                ));
            }
            ?>
            
            <!-- Mobile CTA -->
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary mobile-cta">
                <span class="material-symbols-outlined">calendar_today</span>
                <?php esc_html_e('Book a Call', 'impexusone'); ?>
            </a>
        </nav>
    </div>
</header>

<main id="main-content" class="site-main" role="main">
