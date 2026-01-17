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
