<?php
/**
 * Footer Template
 *
 * @package ImpexusOne
 */
?>

</main><!-- #main-content -->

<footer class="site-footer" role="contentinfo">
    <!-- Newsletter Section -->
    <div class="footer-newsletter">
        <div class="container">
            <div class="footer-newsletter-inner">
                <div class="footer-newsletter-content">
                    <h3><?php esc_html_e('Stay Updated', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Get the latest RFP alerts and development insights delivered to your inbox.', 'impexusone'); ?></p>
                </div>
                <form class="footer-newsletter-form" action="#" method="post">
                    <input type="email" name="email" placeholder="<?php esc_attr_e('Enter your email', 'impexusone'); ?>" required>
                    <button type="submit" class="btn btn-primary">
                        <?php esc_html_e('Subscribe', 'impexusone'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- About Column -->
                <div class="footer-about">
                    <div class="footer-logo">
                        <?php impexusone_site_logo(); ?>
                        <div class="footer-logo-text">
                            <span class="footer-logo-name"><?php bloginfo('name'); ?></span>
                            <span class="footer-logo-sub"><?php esc_html_e('Consultancy LLP', 'impexusone'); ?></span>
                        </div>
                    </div>
                    <p class="footer-description">
                        <?php esc_html_e('Elevating development impact through evidence-based consulting, research, and capacity building for CSR and social sector organizations.', 'impexusone'); ?>
                    </p>
                    <div class="footer-social">
                        <a href="https://linkedin.com/company/impexus" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'impexusone'); ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com/@impexus" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'impexusone'); ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Services Column -->
                <nav class="footer-nav-section" aria-label="<?php esc_attr_e('Services', 'impexusone'); ?>">
                    <h4><?php esc_html_e('Services', 'impexusone'); ?></h4>
                    <div class="footer-nav-links">
                        <a href="<?php echo esc_url(home_url('/services/proposal-development/')); ?>" class="footer-nav-link"><?php esc_html_e('Proposal Development', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/me-systems/')); ?>" class="footer-nav-link"><?php esc_html_e('M&E Systems', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/capacity-building/')); ?>" class="footer-nav-link"><?php esc_html_e('Capacity Building', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/research-analytics/')); ?>" class="footer-nav-link"><?php esc_html_e('Research & Analytics', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(home_url('/services/impact-assessment/')); ?>" class="footer-nav-link"><?php esc_html_e('Impact Assessment', 'impexusone'); ?></a>
                    </div>
                </nav>

                <!-- Insights Column -->
                <nav class="footer-nav-section" aria-label="<?php esc_attr_e('Insights', 'impexusone'); ?>">
                    <h4><?php esc_html_e('Insights', 'impexusone'); ?></h4>
                    <div class="footer-nav-links">
                        <a href="<?php echo esc_url(home_url('/insights/')); ?>" class="footer-nav-link"><?php esc_html_e('Insights Hub', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('rfp-alerts'))); ?>" class="footer-nav-link"><?php esc_html_e('RFP Alerts', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('newsletter'))); ?>" class="footer-nav-link"><?php esc_html_e('Newsletter', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('podcast'))); ?>" class="footer-nav-link"><?php esc_html_e('Podcast', 'impexusone'); ?></a>
                        <a href="<?php echo esc_url(get_category_link(get_cat_ID('tutorials'))); ?>" class="footer-nav-link"><?php esc_html_e('Tutorials', 'impexusone'); ?></a>
                    </div>
                </nav>

                <!-- Contact Column -->
                <div class="footer-nav-section">
                    <h4><?php esc_html_e('Contact', 'impexusone'); ?></h4>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon material-symbols-outlined">location_on</span>
                        <p class="footer-contact-text"><?php esc_html_e('Bhubaneswar, Odisha, India', 'impexusone'); ?></p>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon material-symbols-outlined">mail</span>
                        <p class="footer-contact-text">
                            <a href="mailto:hello@impexus.co.in">hello@impexus.co.in</a>
                        </p>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-icon material-symbols-outlined">schedule</span>
                        <p class="footer-contact-text"><?php esc_html_e('Mon - Fri: 9:00 AM - 6:00 PM IST', 'impexusone'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <nav class="footer-legal-links" aria-label="<?php esc_attr_e('Legal', 'impexusone'); ?>">
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="footer-legal-link"><?php esc_html_e('Privacy Policy', 'impexusone'); ?></a>
                    <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>" class="footer-legal-link"><?php esc_html_e('Terms of Service', 'impexusone'); ?></a>
                    <a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>" class="footer-legal-link"><?php esc_html_e('Cookie Policy', 'impexusone'); ?></a>
                    <a href="<?php echo esc_url(home_url('/sitemap/')); ?>" class="footer-legal-link"><?php esc_html_e('Sitemap', 'impexusone'); ?></a>
                </nav>
                <p class="footer-copyright">
                    <?php
                    printf(
                        /* translators: 1: Copyright year, 2: Site name */
                        esc_html__('© %1$s %2$s. All rights reserved.', 'impexusone'),
                        date('Y'),
                        get_bloginfo('name')
                    );
                    ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
