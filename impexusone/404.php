<?php
/**
 * 404 Page Template
 *
 * @package ImpexusOne
 */

get_header();
?>

<div class="container">
    <div class="error-404">
        <div class="error-404-content">
            <span class="error-404-code">404</span>
            <h1><?php esc_html_e('Page Not Found', 'impexusone'); ?></h1>
            <p><?php esc_html_e('Sorry, the page you\'re looking for doesn\'t exist or has been moved.', 'impexusone'); ?></p>
            
            <div class="error-404-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <span class="material-symbols-outlined">home</span>
                    <?php esc_html_e('Back to Home', 'impexusone'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                    <?php esc_html_e('Contact Us', 'impexusone'); ?>
                </a>
            </div>
            
            <div class="error-404-search">
                <p><?php esc_html_e('Or try searching:', 'impexusone'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
