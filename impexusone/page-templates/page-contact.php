<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 *
 * @package ImpexusOne
 */

get_header();
?>

<!-- Hero Section -->
<section class="page-hero page-hero--contact">
    <div class="container">
        <div class="page-hero-content">
            <span class="page-hero-eyebrow"><?php esc_html_e('Get in Touch', 'impexusone'); ?></span>
            <h1 class="page-hero-title"><?php esc_html_e('Let\'s Start a Conversation', 'impexusone'); ?></h1>
            <p class="page-hero-subtitle"><?php esc_html_e('Have a project in mind? Need consulting support? We\'d love to hear from you.', 'impexusone'); ?></p>
            <div class="response-time">
                <span class="material-symbols-outlined">schedule</span>
                <span><?php esc_html_e('Average response time: 24 hours', 'impexusone'); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <h2><?php esc_html_e('Send us a Message', 'impexusone'); ?></h2>
                
                <form class="contact-form" action="#" method="post" id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-name"><?php esc_html_e('Full Name', 'impexusone'); ?> *</label>
                            <input type="text" id="contact-name" name="name" class="form-input" required placeholder="<?php esc_attr_e('Your name', 'impexusone'); ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-email"><?php esc_html_e('Email', 'impexusone'); ?> *</label>
                            <input type="email" id="contact-email" name="email" class="form-input" required placeholder="<?php esc_attr_e('your@email.com', 'impexusone'); ?>">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-org"><?php esc_html_e('Organization', 'impexusone'); ?></label>
                            <input type="text" id="contact-org" name="organization" class="form-input" placeholder="<?php esc_attr_e('Company / NGO name', 'impexusone'); ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-type"><?php esc_html_e('Inquiry Type', 'impexusone'); ?> *</label>
                            <select id="contact-type" name="inquiry_type" class="form-select" required>
                                <option value=""><?php esc_html_e('Select an option', 'impexusone'); ?></option>
                                <option value="proposal"><?php esc_html_e('Proposal Support', 'impexusone'); ?></option>
                                <option value="me"><?php esc_html_e('M&E Systems', 'impexusone'); ?></option>
                                <option value="research"><?php esc_html_e('Research & Assessment', 'impexusone'); ?></option>
                                <option value="training"><?php esc_html_e('Training & Capacity Building', 'impexusone'); ?></option>
                                <option value="partnership"><?php esc_html_e('Partnership Inquiry', 'impexusone'); ?></option>
                                <option value="other"><?php esc_html_e('Other', 'impexusone'); ?></option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="contact-message"><?php esc_html_e('Message', 'impexusone'); ?> *</label>
                        <textarea id="contact-message" name="message" class="form-textarea" rows="5" required placeholder="<?php esc_attr_e('Tell us about your project or inquiry...', 'impexusone'); ?>"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg">
                        <?php esc_html_e('Send Message', 'impexusone'); ?>
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </form>
                
                <p class="form-privacy-note">
                    <?php printf(
                        esc_html__('By submitting this form, you agree to our %s.', 'impexusone'),
                        '<a href="' . esc_url(home_url('/privacy-policy/')) . '">' . esc_html__('Privacy Policy', 'impexusone') . '</a>'
                    ); ?>
                </p>
            </div>
            
            <!-- Contact Info Sidebar -->
            <div class="contact-sidebar">
                <!-- Book a Call Card -->
                <div class="contact-card contact-card--booking">
                    <div class="contact-card-icon">
                        <span class="material-symbols-outlined">calendar_today</span>
                    </div>
                    <h3><?php esc_html_e('Book a Call', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Prefer to speak directly? Schedule a free 30-minute consultation.', 'impexusone'); ?></p>
                    <a href="#" class="btn btn-secondary">
                        <?php esc_html_e('Schedule Call', 'impexusone'); ?>
                    </a>
                </div>
                
                <!-- Contact Details -->
                <div class="contact-card">
                    <h4><?php esc_html_e('Contact Details', 'impexusone'); ?></h4>
                    
                    <div class="contact-detail">
                        <span class="material-symbols-outlined">mail</span>
                        <div>
                            <p class="contact-detail-label"><?php esc_html_e('Email', 'impexusone'); ?></p>
                            <a href="mailto:hello@impexus.com">hello@impexus.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <span class="material-symbols-outlined">location_on</span>
                        <div>
                            <p class="contact-detail-label"><?php esc_html_e('Location', 'impexusone'); ?></p>
                            <p>Bhubaneswar, Odisha<br>India 751024</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <span class="material-symbols-outlined">schedule</span>
                        <div>
                            <p class="contact-detail-label"><?php esc_html_e('Business Hours', 'impexusone'); ?></p>
                            <p>Mon - Fri: 9:00 AM - 6:00 PM IST</p>
                        </div>
                    </div>
                </div>
                
                <!-- Map Placeholder -->
                <div class="contact-map">
                    <div class="contact-map-placeholder">
                        <span class="material-symbols-outlined">map</span>
                        <p><?php esc_html_e('Map placeholder - integrate with Google Maps or OpenStreetMap', 'impexusone'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'title'    => __('Frequently Asked Questions', 'impexusone'),
            'subtitle' => __('Quick answers to common inquiries.', 'impexusone'),
        ));
        ?>
        
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span><?php esc_html_e('What types of organizations do you work with?', 'impexusone'); ?></span>
                    <span class="material-symbols-outlined faq-icon">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p><?php esc_html_e('We work with a diverse range of organizations including NGOs, foundations, CSR departments of corporations, government agencies, multilateral organizations, and social enterprises. Our clients range from grassroots organizations to large international development agencies.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span><?php esc_html_e('How do you price your consulting services?', 'impexusone'); ?></span>
                    <span class="material-symbols-outlined faq-icon">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p><?php esc_html_e('Our pricing varies based on the scope, complexity, and duration of the engagement. We offer flexible models including fixed-price projects, daily rates for short-term work, and retainer arrangements for ongoing support. We\'re happy to discuss your budget and find an approach that works.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span><?php esc_html_e('Do you work with organizations outside India?', 'impexusone'); ?></span>
                    <span class="material-symbols-outlined faq-icon">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p><?php esc_html_e('Yes! While we\'re based in India, we work with clients globally. We have experience supporting projects across South Asia, Southeast Asia, Africa, and the Middle East. Remote collaboration and periodic travel allow us to serve international clients effectively.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span><?php esc_html_e('What is your typical engagement timeline?', 'impexusone'); ?></span>
                    <span class="material-symbols-outlined faq-icon">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p><?php esc_html_e('Timelines vary by project type. Proposal development typically takes 2-6 weeks depending on complexity. M&E system design can be 4-12 weeks. Impact assessments range from 6-16 weeks. We always discuss realistic timelines during our initial consultation.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span><?php esc_html_e('How do I know if my organization needs consulting support?', 'impexusone'); ?></span>
                    <span class="material-symbols-outlined faq-icon">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p><?php esc_html_e('Consider consulting support if you\'re preparing for a major funding opportunity, need to demonstrate impact to stakeholders, want to strengthen your M&E systems, or are looking to build team capacity. A free consultation can help you determine if our services are the right fit.', 'impexusone'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
