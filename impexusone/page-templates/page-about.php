<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 *
 * @package ImpexusOne
 */

get_header();
?>

<!-- Hero Section -->
<section class="page-hero page-hero--about">
    <div class="container">
        <div class="page-hero-content">
            <span class="page-hero-eyebrow"><?php esc_html_e('About Us', 'impexusone'); ?></span>
            <h1 class="page-hero-title"><?php esc_html_e('Driving Impact Through Evidence-Based Consulting', 'impexusone'); ?></h1>
            <p class="page-hero-subtitle"><?php esc_html_e('We partner with development organizations and CSR initiatives to strengthen their capacity, improve outcomes, and create lasting change.', 'impexusone'); ?></p>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section mission-section">
    <div class="container">
        <div class="mission-grid">
            <div class="mission-content">
                <h2><?php esc_html_e('Our Mission', 'impexusone'); ?></h2>
                <p class="lead"><?php esc_html_e('To empower organizations working for social good with the expertise, tools, and strategies they need to achieve meaningful, measurable impact.', 'impexusone'); ?></p>
                <p><?php esc_html_e('Founded with a commitment to bridging the gap between development theory and field reality, we bring together practitioners, researchers, and subject matter experts to deliver consulting services that make a difference.', 'impexusone'); ?></p>
                <p><?php esc_html_e('We believe that every organization working towards social change deserves access to world-class consulting support—regardless of their size or resources.', 'impexusone'); ?></p>
            </div>
            
            <div class="mission-stats">
                <div class="stat-card">
                    <span class="stat-number">150+</span>
                    <span class="stat-label"><?php esc_html_e('Projects Delivered', 'impexusone'); ?></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">78%</span>
                    <span class="stat-label"><?php esc_html_e('Proposal Win Rate', 'impexusone'); ?></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">50+</span>
                    <span class="stat-label"><?php esc_html_e('Partner Organizations', 'impexusone'); ?></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">12</span>
                    <span class="stat-label"><?php esc_html_e('Focus Sectors', 'impexusone'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="section methodology-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Our Approach', 'impexusone'),
            'title'    => __('The Impexus Methodology', 'impexusone'),
            'subtitle' => __('A systematic approach that combines rigor with practicality.', 'impexusone'),
        ));
        ?>
        
        <div class="methodology-stepper">
            <div class="methodology-step">
                <div class="methodology-step-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <div class="methodology-step-content">
                    <h3><?php esc_html_e('Understand Context', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Deep dive into the organizational context, stakeholder landscape, and existing evidence base.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="methodology-step">
                <div class="methodology-step-icon">
                    <span class="material-symbols-outlined">analytics</span>
                </div>
                <div class="methodology-step-content">
                    <h3><?php esc_html_e('Analyze & Design', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Apply analytical frameworks and design solutions that are evidence-based and context-appropriate.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="methodology-step">
                <div class="methodology-step-icon">
                    <span class="material-symbols-outlined">handshake</span>
                </div>
                <div class="methodology-step-content">
                    <h3><?php esc_html_e('Collaborate & Build', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Work alongside client teams to build internal capacity while delivering quality outputs.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="methodology-step">
                <div class="methodology-step-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="methodology-step-content">
                    <h3><?php esc_html_e('Deliver & Sustain', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Ensure knowledge transfer and create systems for ongoing excellence beyond the engagement.', 'impexusone'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools Section -->
<section class="section tools-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Our Toolkit', 'impexusone'),
            'title'    => __('Tools & Methods We Bring', 'impexusone'),
            'subtitle' => __('Proven frameworks and modern tools for effective development consulting.', 'impexusone'),
        ));
        ?>
        
        <div class="tools-grid">
            <div class="tool-card">
                <span class="material-symbols-outlined">target</span>
                <h4><?php esc_html_e('Theory of Change', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">account_tree</span>
                <h4><?php esc_html_e('Logical Framework', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">format_list_numbered</span>
                <h4><?php esc_html_e('Results Framework', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">dashboard</span>
                <h4><?php esc_html_e('KPI Dashboards', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">groups</span>
                <h4><?php esc_html_e('Participatory Methods', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">balance</span>
                <h4><?php esc_html_e('Cost-Benefit Analysis', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">hub</span>
                <h4><?php esc_html_e('Social Network Analysis', 'impexusone'); ?></h4>
            </div>
            <div class="tool-card">
                <span class="material-symbols-outlined">psychology</span>
                <h4><?php esc_html_e('Behavioral Insights', 'impexusone'); ?></h4>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section team-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Leadership', 'impexusone'),
            'title'    => __('Meet Our Team', 'impexusone'),
            'subtitle' => __('Experienced practitioners committed to your success.', 'impexusone'),
        ));
        ?>
        
        <div class="team-grid">
            <div class="team-card">
                <div class="team-card-image">
                    <div class="team-card-placeholder">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                </div>
                <div class="team-card-content">
                    <h3 class="team-card-name"><?php esc_html_e('Priya Sharma', 'impexusone'); ?></h3>
                    <p class="team-card-role"><?php esc_html_e('Founder & Managing Partner', 'impexusone'); ?></p>
                    <p class="team-card-bio"><?php esc_html_e('15+ years in development consulting with expertise in M&E and program design.', 'impexusone'); ?></p>
                    <a href="https://linkedin.com" class="team-card-linkedin" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
            
            <div class="team-card">
                <div class="team-card-image">
                    <div class="team-card-placeholder">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                </div>
                <div class="team-card-content">
                    <h3 class="team-card-name"><?php esc_html_e('Rahul Verma', 'impexusone'); ?></h3>
                    <p class="team-card-role"><?php esc_html_e('Director, Research & Impact', 'impexusone'); ?></p>
                    <p class="team-card-bio"><?php esc_html_e('PhD in Development Studies. Leads research methodology and impact assessment work.', 'impexusone'); ?></p>
                    <a href="https://linkedin.com" class="team-card-linkedin" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
            
            <div class="team-card">
                <div class="team-card-image">
                    <div class="team-card-placeholder">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                </div>
                <div class="team-card-content">
                    <h3 class="team-card-name"><?php esc_html_e('Ananya Das', 'impexusone'); ?></h3>
                    <p class="team-card-role"><?php esc_html_e('Senior Consultant, Proposals', 'impexusone'); ?></p>
                    <p class="team-card-bio"><?php esc_html_e('Expert proposal writer with 100+ successful bids for international development projects.', 'impexusone'); ?></p>
                    <a href="https://linkedin.com" class="team-card-linkedin" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="cta-band">
    <div class="container">
        <h2><?php esc_html_e('Let\'s Work Together', 'impexusone'); ?></h2>
        <p><?php esc_html_e('Whether you need proposal support, M&E systems, or capacity building—we\'re here to help.', 'impexusone'); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white btn-lg">
                <?php esc_html_e('Start a Conversation', 'impexusone'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
