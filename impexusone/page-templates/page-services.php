<?php
/**
 * Template Name: Services Page
 * Template Post Type: page
 *
 * @package ImpexusOne
 */

get_header();
?>

<!-- Hero Section -->
<section class="page-hero page-hero--services">
    <div class="container">
        <div class="page-hero-content">
            <span class="page-hero-eyebrow"><?php esc_html_e('Our Expertise', 'impexusone'); ?></span>
            <h1 class="page-hero-title"><?php esc_html_e('Comprehensive Consulting Services', 'impexusone'); ?></h1>
            <p class="page-hero-subtitle"><?php esc_html_e('End-to-end support for development organizations and CSR initiatives. From concept to impact.', 'impexusone'); ?></p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section services-overview-section">
    <div class="container">
        <div class="services-overview-grid">
            
            <!-- Service 1: Proposal Development -->
            <div class="service-overview-card">
                <div class="service-overview-icon service-overview-icon--primary">
                    <span class="material-symbols-outlined">edit_document</span>
                </div>
                <div class="service-overview-content">
                    <h2 class="service-overview-title"><?php esc_html_e('Proposal Development', 'impexusone'); ?></h2>
                    
                    <div class="service-overview-problem">
                        <h4><?php esc_html_e('The Problem', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Crafting competitive proposals that meet funder requirements while standing out in a crowded field is challenging and time-consuming.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-outcome">
                        <h4><?php esc_html_e('The Outcome', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Professionally written, evidence-backed proposals with clear theories of change, realistic budgets, and compelling narratives.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-offerings">
                        <h4><?php esc_html_e('Key Offerings', 'impexusone'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('Full proposal writing & review', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Concept note development', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Budget preparation', 'impexusone'); ?></li>
                            <li><?php esc_html_e('RFP response strategy', 'impexusone'); ?></li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/services/proposal-development/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            
            <!-- Service 2: M&E Systems -->
            <div class="service-overview-card">
                <div class="service-overview-icon service-overview-icon--secondary">
                    <span class="material-symbols-outlined">monitoring</span>
                </div>
                <div class="service-overview-content">
                    <h2 class="service-overview-title"><?php esc_html_e('M&E Systems', 'impexusone'); ?></h2>
                    
                    <div class="service-overview-problem">
                        <h4><?php esc_html_e('The Problem', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Organizations lack robust systems to track progress, collect quality data, and demonstrate results to stakeholders.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-outcome">
                        <h4><?php esc_html_e('The Outcome', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Practical M&E frameworks with clear indicators, data collection tools, and dashboards for real-time monitoring.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-offerings">
                        <h4><?php esc_html_e('Key Offerings', 'impexusone'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('Results framework design', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Data collection tools', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Dashboard development', 'impexusone'); ?></li>
                            <li><?php esc_html_e('M&E capacity building', 'impexusone'); ?></li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/services/me-systems/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            
            <!-- Service 3: Capacity Building -->
            <div class="service-overview-card">
                <div class="service-overview-icon service-overview-icon--tertiary">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="service-overview-content">
                    <h2 class="service-overview-title"><?php esc_html_e('Capacity Building', 'impexusone'); ?></h2>
                    
                    <div class="service-overview-problem">
                        <h4><?php esc_html_e('The Problem', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Teams need skills development to manage projects effectively, use data for decisions, and maintain quality standards.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-outcome">
                        <h4><?php esc_html_e('The Outcome', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Empowered teams with practical skills, actionable toolkits, and ongoing support for continued growth.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-offerings">
                        <h4><?php esc_html_e('Key Offerings', 'impexusone'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('Custom training programs', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Workshop facilitation', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Mentoring & coaching', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Resource development', 'impexusone'); ?></li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/services/capacity-building/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            
            <!-- Service 4: Research & Analytics -->
            <div class="service-overview-card">
                <div class="service-overview-icon service-overview-icon--primary">
                    <span class="material-symbols-outlined">query_stats</span>
                </div>
                <div class="service-overview-content">
                    <h2 class="service-overview-title"><?php esc_html_e('Research & Analytics', 'impexusone'); ?></h2>
                    
                    <div class="service-overview-problem">
                        <h4><?php esc_html_e('The Problem', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Organizations need evidence to inform strategy but lack capacity for rigorous research and data analysis.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-outcome">
                        <h4><?php esc_html_e('The Outcome', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Actionable insights from well-designed studies that inform decisions and strengthen programming.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-offerings">
                        <h4><?php esc_html_e('Key Offerings', 'impexusone'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('Baseline & endline studies', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Needs assessments', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Data analysis & visualization', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Literature reviews', 'impexusone'); ?></li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/services/research-analytics/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            
            <!-- Service 5: Impact Assessment -->
            <div class="service-overview-card">
                <div class="service-overview-icon service-overview-icon--secondary">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <div class="service-overview-content">
                    <h2 class="service-overview-title"><?php esc_html_e('Impact Assessment', 'impexusone'); ?></h2>
                    
                    <div class="service-overview-problem">
                        <h4><?php esc_html_e('The Problem', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Demonstrating the true value and long-term outcomes of programs is difficult without proper evaluation methods.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-outcome">
                        <h4><?php esc_html_e('The Outcome', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Credible impact reports using appropriate methodologies that satisfy stakeholders and inform future strategy.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-offerings">
                        <h4><?php esc_html_e('Key Offerings', 'impexusone'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('Impact evaluations', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Theory of Change development', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Cost-effectiveness analysis', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Learning documentation', 'impexusone'); ?></li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/services/impact-assessment/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            
            <!-- Service 6: Documentation -->
            <div class="service-overview-card">
                <div class="service-overview-icon service-overview-icon--tertiary">
                    <span class="material-symbols-outlined">article</span>
                </div>
                <div class="service-overview-content">
                    <h2 class="service-overview-title"><?php esc_html_e('Documentation', 'impexusone'); ?></h2>
                    
                    <div class="service-overview-problem">
                        <h4><?php esc_html_e('The Problem', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Valuable knowledge, lessons learned, and success stories are not being captured and shared effectively.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-outcome">
                        <h4><?php esc_html_e('The Outcome', 'impexusone'); ?></h4>
                        <p><?php esc_html_e('Professional case studies, reports, and knowledge products that showcase your work and build credibility.', 'impexusone'); ?></p>
                    </div>
                    
                    <div class="service-overview-offerings">
                        <h4><?php esc_html_e('Key Offerings', 'impexusone'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('Case study development', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Annual reports', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Success story writing', 'impexusone'); ?></li>
                            <li><?php esc_html_e('Knowledge products', 'impexusone'); ?></li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo esc_url(home_url('/services/documentation/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section process-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('How We Deliver', 'impexusone'),
            'title'    => __('Our Proven Process', 'impexusone'),
            'subtitle' => __('A structured approach that ensures quality and client satisfaction.', 'impexusone'),
        ));
        ?>
        
        <div class="process-timeline">
            <div class="process-step">
                <div class="process-step-number">1</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Discovery Call', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We start with a free consultation to understand your needs, challenges, and objectives.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="process-step-number">2</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Proposal & Scope', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We provide a detailed proposal with clear deliverables, timeline, and transparent pricing.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="process-step-number">3</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Collaborative Work', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Our team works closely with yours, with regular check-ins and iterative feedback.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="process-step-number">4</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Quality Delivery', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Final deliverables go through quality review before handover with knowledge transfer.', 'impexusone'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Insights -->
<section class="section insights-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'title'    => __('Related Resources', 'impexusone'),
            'subtitle' => __('Explore our thinking on consulting best practices.', 'impexusone'),
        ));
        
        // Get recent posts
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_status'    => 'publish',
        ));
        
        if ($recent_posts->have_posts()) :
        ?>
            <div class="insights-grid-3">
                <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <article class="insight-card card-hoverable">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="insight-card-image">
                                <?php the_post_thumbnail('impexusone-card'); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="insight-card-content">
                            <?php impexusone_category_badge(); ?>
                            <h3 class="insight-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="insight-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-band">
    <div class="container">
        <h2><?php esc_html_e('Ready to Strengthen Your Impact?', 'impexusone'); ?></h2>
        <p><?php esc_html_e('Let\'s discuss how our services can support your organization\'s goals.', 'impexusone'); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white btn-lg">
                <?php esc_html_e('Schedule a Free Consultation', 'impexusone'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
