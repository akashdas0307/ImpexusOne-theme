<?php
/**
 * Template Name: Legal / Policy Page
 * Template Post Type: page
 *
 * Template for Privacy Policy, Terms & Conditions, Disclaimer pages.
 *
 * @package ImpexusOne
 */

get_header();
?>

<div class="container">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs legal-breadcrumbs" aria-label="<?php esc_attr_e('Breadcrumb', 'impexusone'); ?>">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'impexusone'); ?></a>
        <span class="material-symbols-outlined">chevron_right</span>
        <span class="current"><?php esc_html_e('Legal', 'impexusone'); ?></span>
    </nav>
    
    <!-- Page Header -->
    <header class="legal-header">
        <h1 class="legal-title"><?php the_title(); ?></h1>
        <p class="legal-updated">
            <span class="material-symbols-outlined">schedule</span>
            <?php printf(esc_html__('Last updated: %s', 'impexusone'), get_the_modified_date()); ?>
        </p>
    </header>
    
    <div class="legal-layout">
        <!-- Table of Contents Sidebar -->
        <aside class="legal-toc">
            <div class="legal-toc-sticky">
                <p class="legal-toc-title"><?php esc_html_e('Contents', 'impexusone'); ?></p>
                <nav class="toc-nav" id="toc-nav">
                    <!-- TOC items will be generated dynamically or manually -->
                    <a href="#section-1" class="toc-link is-active"><?php esc_html_e('1. Introduction', 'impexusone'); ?></a>
                    <a href="#section-summary" class="toc-link"><?php esc_html_e('Key Summary', 'impexusone'); ?></a>
                    <a href="#section-2" class="toc-link"><?php esc_html_e('2. Information We Collect', 'impexusone'); ?></a>
                    <a href="#section-3" class="toc-link"><?php esc_html_e('3. How We Use Data', 'impexusone'); ?></a>
                    <a href="#section-4" class="toc-link"><?php esc_html_e('4. Sharing & Disclosure', 'impexusone'); ?></a>
                    <a href="#section-5" class="toc-link"><?php esc_html_e('5. Data Security', 'impexusone'); ?></a>
                    <a href="#section-6" class="toc-link"><?php esc_html_e('6. Contact Us', 'impexusone'); ?></a>
                </nav>
            </div>
        </aside>
        
        <!-- Main Content -->
        <article class="legal-content prose">
            <?php 
            // If there's page content, display it
            if (have_posts()) : 
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                // Default content structure for demo
            ?>
                <!-- Section 1: Introduction -->
                <section id="section-1" class="legal-section">
                    <h2><?php esc_html_e('1. Introduction', 'impexusone'); ?></h2>
                    <p class="lead"><?php esc_html_e('Welcome to Impexus Consultancy LLP. We are committed to protecting your personal information and your right to privacy.', 'impexusone'); ?></p>
                    <p><?php esc_html_e('When you visit our website, use our services, or engage with us in any way, you trust us with your personal information. We take your privacy very seriously. In this privacy notice, we describe our privacy policy and seek to explain to you in the clearest way possible what information we collect, how we use it, and what rights you have in relation to it.', 'impexusone'); ?></p>
                    <p><?php esc_html_e('We hope you take some time to read through it carefully, as it is important. If there are any terms in this privacy policy that you do not agree with, please discontinue use of our services.', 'impexusone'); ?></p>
                </section>
                
                <!-- Key Summary Callout -->
                <section id="section-summary" class="legal-section">
                    <div class="legal-callout">
                        <div class="legal-callout-header">
                            <span class="material-symbols-outlined">lightbulb</span>
                            <h3><?php esc_html_e('Key Points Summary', 'impexusone'); ?></h3>
                        </div>
                        <p><?php esc_html_e('We know legal documents can be long. Here are the most critical things you should know:', 'impexusone'); ?></p>
                        <ul>
                            <li><?php esc_html_e('We only collect information necessary to provide our consulting services.', 'impexusone'); ?></li>
                            <li><?php esc_html_e('We never sell your personal data to third parties for marketing purposes.', 'impexusone'); ?></li>
                            <li><?php esc_html_e('You have the right to request a copy of your data or ask for it to be deleted at any time.', 'impexusone'); ?></li>
                            <li><?php esc_html_e('We use industry-standard encryption to protect your information in transit and at rest.', 'impexusone'); ?></li>
                        </ul>
                    </div>
                </section>
                
                <!-- Section 2 -->
                <section id="section-2" class="legal-section">
                    <h2><?php esc_html_e('2. Information We Collect', 'impexusone'); ?></h2>
                    
                    <h3><?php esc_html_e('Personal Information You Disclose to Us', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We collect personal information that you voluntarily provide to us when expressing an interest in obtaining information about us or our services, when participating in activities on our website, or otherwise contacting us.', 'impexusone'); ?></p>
                    
                    <div class="legal-info-grid">
                        <div class="legal-info-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span><?php esc_html_e('Name and Contact Data', 'impexusone'); ?></span>
                        </div>
                        <div class="legal-info-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span><?php esc_html_e('Credentials', 'impexusone'); ?></span>
                        </div>
                        <div class="legal-info-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span><?php esc_html_e('Payment Data', 'impexusone'); ?></span>
                        </div>
                        <div class="legal-info-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span><?php esc_html_e('Organization Information', 'impexusone'); ?></span>
                        </div>
                    </div>
                    
                    <h3><?php esc_html_e('Information Automatically Collected', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We automatically collect certain information when you visit, use, or navigate our website. This information does not reveal your specific identity but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, and other technical information.', 'impexusone'); ?></p>
                </section>
                
                <!-- Section 3 -->
                <section id="section-3" class="legal-section">
                    <h2><?php esc_html_e('3. How We Use Your Information', 'impexusone'); ?></h2>
                    <p><?php esc_html_e('We use personal information collected via our services for a variety of business purposes:', 'impexusone'); ?></p>
                    
                    <div class="legal-use-list">
                        <div class="legal-use-item">
                            <div class="legal-use-icon legal-use-icon--blue">
                                <span class="material-symbols-outlined">manage_accounts</span>
                            </div>
                            <div>
                                <h4><?php esc_html_e('Account Creation & Management', 'impexusone'); ?></h4>
                                <p><?php esc_html_e('To facilitate account creation and logon process and keep your account in working order.', 'impexusone'); ?></p>
                            </div>
                        </div>
                        
                        <div class="legal-use-item">
                            <div class="legal-use-icon legal-use-icon--purple">
                                <span class="material-symbols-outlined">verified_user</span>
                            </div>
                            <div>
                                <h4><?php esc_html_e('Administrative Information', 'impexusone'); ?></h4>
                                <p><?php esc_html_e('To send you product, service and new feature information and/or information about changes to our terms, conditions, and policies.', 'impexusone'); ?></p>
                            </div>
                        </div>
                        
                        <div class="legal-use-item">
                            <div class="legal-use-icon legal-use-icon--green">
                                <span class="material-symbols-outlined">shield</span>
                            </div>
                            <div>
                                <h4><?php esc_html_e('Safety & Security', 'impexusone'); ?></h4>
                                <p><?php esc_html_e('To protect our services and to respond to legal requests and prevent harm.', 'impexusone'); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Section 4 -->
                <section id="section-4" class="legal-section">
                    <h2><?php esc_html_e('4. Sharing Your Information', 'impexusone'); ?></h2>
                    <p><?php esc_html_e('We may process or share data based on the following legal basis:', 'impexusone'); ?></p>
                    <ul>
                        <li><strong><?php esc_html_e('Consent:', 'impexusone'); ?></strong> <?php esc_html_e('We may process your data if you have given us specific consent to use your personal information for a specific purpose.', 'impexusone'); ?></li>
                        <li><strong><?php esc_html_e('Legitimate Interests:', 'impexusone'); ?></strong> <?php esc_html_e('We may process your data when it is reasonably necessary to achieve our legitimate business interests.', 'impexusone'); ?></li>
                        <li><strong><?php esc_html_e('Performance of a Contract:', 'impexusone'); ?></strong> <?php esc_html_e('Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.', 'impexusone'); ?></li>
                        <li><strong><?php esc_html_e('Legal Obligations:', 'impexusone'); ?></strong> <?php esc_html_e('We may disclose your information where we are legally required to do so.', 'impexusone'); ?></li>
                    </ul>
                </section>
                
                <!-- Section 5 -->
                <section id="section-5" class="legal-section">
                    <h2><?php esc_html_e('5. Data Security', 'impexusone'); ?></h2>
                    <p><?php esc_html_e('We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, please remember that we cannot guarantee that the internet itself is 100% secure.', 'impexusone'); ?></p>
                </section>
                
                <!-- Section 6: Contact -->
                <section id="section-6" class="legal-section">
                    <div class="legal-contact-card">
                        <div class="legal-contact-header">
                            <span class="material-symbols-outlined">mail</span>
                            <h3><?php esc_html_e('Still have questions?', 'impexusone'); ?></h3>
                        </div>
                        <p><?php esc_html_e('Our Data Protection Officer is available to help with any concerns about your privacy or our policy.', 'impexusone'); ?></p>
                        <a href="mailto:privacy@impexus.com" class="btn btn-primary">
                            <?php esc_html_e('Contact Support', 'impexusone'); ?>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </section>
            <?php endif; ?>
        </article>
    </div>
</div>

<?php
get_footer();
