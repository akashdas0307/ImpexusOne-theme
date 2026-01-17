<?php
/**
 * Footer Template (Pilot 1 - Customizer Integrated)
 *
 * @package ImpexusOne
 */

// Get Customizer settings
$show_newsletter     = get_theme_mod('footer_show_newsletter', true);
$newsletter_title    = get_theme_mod('footer_newsletter_title', __('Stay informed', 'impexusone'));
$newsletter_text     = get_theme_mod('footer_newsletter_text', __('Subscribe for the latest insights on CSR and sustainable development.', 'impexusone'));
$newsletter_btn_text = get_theme_mod('footer_newsletter_btn_text', __('Subscribe', 'impexusone'));

$show_about          = get_theme_mod('footer_show_about', true);
$company_tagline     = get_theme_mod('footer_company_tagline', __('Consultancy LLP', 'impexusone'));
$footer_description  = get_theme_mod('footer_description', __('Empowering organizations through sustainable development strategies and impactful CSR initiatives. We bridge the gap between corporate vision and community needs.', 'impexusone'));
$show_social         = get_theme_mod('footer_show_social', true);

$show_menus          = get_theme_mod('footer_show_menus', true);
$services_title      = get_theme_mod('footer_services_title', __('Our Services', 'impexusone'));
$insights_title      = get_theme_mod('footer_insights_title', __('Insights', 'impexusone'));

$show_contact        = get_theme_mod('footer_show_contact', true);
$contact_title       = get_theme_mod('footer_contact_title', __('Contact Us', 'impexusone'));
$contact_address     = get_theme_mod('footer_contact_address', __("123 Sustainability Tower,\nGreen Business District,\nNew Delhi, India 110001", 'impexusone'));
$contact_email       = get_theme_mod('footer_contact_email', 'contact@impexus.com');
$contact_phone       = get_theme_mod('footer_contact_phone', '+91 11 2233 4455');
$show_cta            = get_theme_mod('footer_show_cta', true);
$cta_label           = get_theme_mod('footer_cta_label', __('Need immediate assistance?', 'impexusone'));
$cta_text            = get_theme_mod('footer_cta_text', __('Book a Consultation', 'impexusone'));
$cta_url             = get_theme_mod('footer_cta_url', home_url('/contact/'));

$copyright_text      = get_theme_mod('footer_copyright_text', __('© %year% %sitename%. All rights reserved.', 'impexusone'));

// Social URLs (shared with header)
$social_linkedin  = get_theme_mod('social_linkedin_url', 'https://linkedin.com/company/impexus');
$social_youtube   = get_theme_mod('social_youtube_url', 'https://youtube.com/@impexus');
$social_twitter   = get_theme_mod('social_twitter_url', '');
$social_facebook  = get_theme_mod('social_facebook_url', '');
$social_instagram = get_theme_mod('social_instagram_url', '');
?>

</main><!-- #main-content -->

<footer class="site-footer" role="contentinfo">
    <?php if ($show_newsletter) : ?>
    <!-- Newsletter Section -->
    <div class="footer-newsletter">
        <div class="footer-newsletter-inner">
            <div class="footer-newsletter-content">
                <h3><?php echo esc_html($newsletter_title); ?></h3>
                <p><?php echo esc_html($newsletter_text); ?></p>
            </div>
            <form class="footer-newsletter-form" action="#" method="post">
                <input type="email" name="email" placeholder="<?php esc_attr_e('Enter your email', 'impexusone'); ?>" required>
                <button type="submit">
                    <?php echo esc_html($newsletter_btn_text); ?>
                </button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <!-- Main Footer -->
    <div class="footer-main">
        <div class="footer-grid">
            <?php if ($show_about) : ?>
            <!-- About Column -->
            <div class="footer-about">
                <div class="footer-logo">
                    <?php impexusone_site_logo(); ?>
                    <div class="footer-logo-text">
                        <span class="footer-logo-name"><?php bloginfo('name'); ?></span>
                        <span class="footer-logo-sub"><?php echo esc_html($company_tagline); ?></span>
                    </div>
                </div>
                <p class="footer-description">
                    <?php echo esc_html($footer_description); ?>
                </p>
                <?php if ($show_social) : ?>
                <div class="footer-social">
                    <?php if (!empty($social_linkedin)) : ?>
                    <a href="<?php echo esc_url($social_linkedin); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'impexusone'); ?>">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($social_twitter)) : ?>
                    <a href="<?php echo esc_url($social_twitter); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Twitter/X', 'impexusone'); ?>">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($social_facebook)) : ?>
                    <a href="<?php echo esc_url($social_facebook); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Facebook', 'impexusone'); ?>">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($social_youtube)) : ?>
                    <a href="<?php echo esc_url($social_youtube); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'impexusone'); ?>">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($social_instagram)) : ?>
                    <a href="<?php echo esc_url($social_instagram); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Instagram', 'impexusone'); ?>">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($show_menus) : ?>
            <!-- Services Column -->
            <nav class="footer-nav-section" aria-label="<?php esc_attr_e('Services', 'impexusone'); ?>">
                <h4><?php echo esc_html($services_title); ?></h4>
                <?php
                if (has_nav_menu('footer-services')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-services',
                        'container'      => false,
                        'menu_class'     => 'footer-nav-links',
                        'depth'          => 1,
                        'link_before'    => '',
                        'link_after'     => '',
                        'fallback_cb'    => false,
                    ));
                } else {
                    // Fallback links
                    ?>
                    <div class="footer-nav-links">
                        <a href="<?php echo esc_url(home_url('/services/csr-strategy/')); ?>" class="footer-nav-link"><?php esc_html_e('CSR Strategy & Implementation', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/impact-assessment/')); ?>" class="footer-nav-link"><?php esc_html_e('Social Impact Assessment', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/sustainability-reporting/')); ?>" class="footer-nav-link"><?php esc_html_e('Sustainability Reporting', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/capacity-building/')); ?>" class="footer-nav-link"><?php esc_html_e('NGO Capacity Building', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/employee-volunteering/')); ?>" class="footer-nav-link"><?php esc_html_e('Employee Volunteering', 'impexusone'); ?></a>
                    </div>
                    <?php
                }
                ?>
            </nav>

            <!-- Insights Column -->
            <nav class="footer-nav-section" aria-label="<?php esc_attr_e('Insights', 'impexusone'); ?>">
                <h4><?php echo esc_html($insights_title); ?></h4>
                <?php
                if (has_nav_menu('footer-insights')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-insights',
                        'container'      => false,
                        'menu_class'     => 'footer-nav-links',
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ));
                } else {
                    // Fallback links
                    ?>
                    <div class="footer-nav-links">
                        <a href="<?php echo esc_url(home_url('/insights/case-studies/')); ?>" class="footer-nav-link"><?php esc_html_e('Case Studies', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/insights/research/')); ?>" class="footer-nav-link"><?php esc_html_e('Research Publications', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/insights/news/')); ?>" class="footer-nav-link"><?php esc_html_e('Latest News', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/insights/events/')); ?>" class="footer-nav-link"><?php esc_html_e('Events & Webinars', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="footer-nav-link"><?php esc_html_e('Blog', 'impexusone'); ?></a>
                    </div>
                    <?php
                }
                ?>
            </nav>
            <?php endif; ?>

            <?php if ($show_contact) : ?>
            <!-- Contact Column -->
            <div class="footer-nav-section">
                <h4><?php echo esc_html($contact_title); ?></h4>
                
                <?php if (!empty($contact_address)) : ?>
                <div class="footer-contact-item">
                    <span class="footer-contact-icon material-symbols-outlined">location_on</span>
                    <p class="footer-contact-text"><?php echo nl2br(esc_html($contact_address)); ?></p>
                </div>
                <?php endif; ?>

                <?php if (!empty($contact_email)) : ?>
                <div class="footer-contact-item">
                    <span class="footer-contact-icon material-symbols-outlined">mail</span>
                    <p class="footer-contact-text">
                        <a href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a>
                    </p>
                </div>
                <?php endif; ?>

                <?php if (!empty($contact_phone)) : ?>
                <div class="footer-contact-item">
                    <span class="footer-contact-icon material-symbols-outlined">call</span>
                    <p class="footer-contact-text">
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $contact_phone)); ?>"><?php echo esc_html($contact_phone); ?></a>
                    </p>
                </div>
                <?php endif; ?>

                <?php if ($show_cta) : ?>
                <div class="footer-cta-box">
                    <p><?php echo esc_html($cta_label); ?></p>
                    <a href="<?php echo esc_url($cta_url); ?>" class="footer-cta-link">
                        <?php echo esc_html($cta_text); ?> →
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <p class="footer-copyright">
                <?php
                $copyright = str_replace(
                    array('%year%', '%sitename%'),
                    array(date('Y'), get_bloginfo('name')),
                    $copyright_text
                );
                echo esc_html($copyright);
                ?>
            </p>
            <nav class="footer-legal-links" aria-label="<?php esc_attr_e('Legal', 'impexusone'); ?>">
                <?php
                if (has_nav_menu('footer-legal')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-legal',
                        'container'      => false,
                        'menu_class'     => '',
                        'depth'          => 1,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                    ));
                } else {
                    ?>
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="footer-legal-link"><?php esc_html_e('Privacy Policy', 'impexusone'); ?></a>
                    <a href="<?php echo esc_url(home_url('/terms-of-use/')); ?>" class="footer-legal-link"><?php esc_html_e('Terms of Use', 'impexusone'); ?></a>
                    <a href="<?php echo esc_url(home_url('/disclaimer/')); ?>" class="footer-legal-link"><?php esc_html_e('Disclaimer', 'impexusone'); ?></a>
                    <a href="<?php echo esc_url(home_url('/sitemap/')); ?>" class="footer-legal-link"><?php esc_html_e('Sitemap', 'impexusone'); ?></a>
                    <?php
                }
                ?>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
