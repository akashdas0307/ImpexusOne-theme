<?php
/**
 * Front Page Template (Home)
 *
 * @package ImpexusOne
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg-pattern"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php esc_html_e('Elevating Development Impact Through Evidence & Expertise', 'impexusone'); ?>
            </h1>
            <p class="hero-subtitle">
                <?php esc_html_e('Strategic consulting for CSR initiatives, development projects, and social sector organizations. From proposal development to impact assessment, we help you achieve meaningful, measurable outcomes.', 'impexusone'); ?>
            </p>
            <div class="hero-actions">
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e('Explore Services', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary btn-lg">
                    <?php esc_html_e('Book a Consultation', 'impexusone'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Trust Pillars Section -->
<section class="section trust-pillars">
    <div class="container">
        <div class="pillars-grid">
            <div class="pillar-card">
                <div class="pillar-icon">
                    <span class="material-symbols-outlined">landscape</span>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Field Reality', 'impexusone'); ?></h3>
                <p class="pillar-text"><?php esc_html_e('Deep understanding of on-ground implementation challenges and grassroots dynamics across diverse sectors.', 'impexusone'); ?></p>
            </div>
            
            <div class="pillar-card">
                <div class="pillar-icon">
                    <span class="material-symbols-outlined">analytics</span>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Evidence & Data', 'impexusone'); ?></h3>
                <p class="pillar-text"><?php esc_html_e('Rigorous research methodologies and data analysis to drive informed decision-making and measure true impact.', 'impexusone'); ?></p>
            </div>
            
            <div class="pillar-card">
                <div class="pillar-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="pillar-title"><?php esc_html_e('Strong Documentation', 'impexusone'); ?></h3>
                <p class="pillar-text"><?php esc_html_e('Compelling narratives and professional documentation that communicate your work effectively to stakeholders.', 'impexusone'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section services-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('What We Do', 'impexusone'),
            'title'    => __('Comprehensive Consulting Services', 'impexusone'),
            'subtitle' => __('End-to-end support for development organizations and CSR initiatives.', 'impexusone'),
        ));
        ?>
        
        <div class="services-grid">
            <!-- Service Card 1 -->
            <div class="service-card card-hoverable">
                <div class="service-icon service-icon--primary">
                    <span class="material-symbols-outlined">edit_document</span>
                </div>
                <h3 class="service-title"><?php esc_html_e('Proposal Development', 'impexusone'); ?></h3>
                <p class="service-problem"><strong><?php esc_html_e('Problem:', 'impexusone'); ?></strong> <?php esc_html_e('Struggling to craft winning proposals that stand out to funders.', 'impexusone'); ?></p>
                <p class="service-outcome"><strong><?php esc_html_e('Outcome:', 'impexusone'); ?></strong> <?php esc_html_e('Compelling, evidence-backed proposals with higher win rates.', 'impexusone'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/proposal-development/')); ?>" class="service-link">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            
            <!-- Service Card 2 -->
            <div class="service-card card-hoverable">
                <div class="service-icon service-icon--secondary">
                    <span class="material-symbols-outlined">monitoring</span>
                </div>
                <h3 class="service-title"><?php esc_html_e('M&E Systems', 'impexusone'); ?></h3>
                <p class="service-problem"><strong><?php esc_html_e('Problem:', 'impexusone'); ?></strong> <?php esc_html_e('Lack of robust systems to track progress and demonstrate results.', 'impexusone'); ?></p>
                <p class="service-outcome"><strong><?php esc_html_e('Outcome:', 'impexusone'); ?></strong> <?php esc_html_e('Clear metrics, real-time dashboards, and evidence of impact.', 'impexusone'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/me-systems/')); ?>" class="service-link">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            
            <!-- Service Card 3 -->
            <div class="service-card card-hoverable">
                <div class="service-icon service-icon--tertiary">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="service-title"><?php esc_html_e('Capacity Building', 'impexusone'); ?></h3>
                <p class="service-problem"><strong><?php esc_html_e('Problem:', 'impexusone'); ?></strong> <?php esc_html_e('Teams need skills to manage projects and deliver quality work.', 'impexusone'); ?></p>
                <p class="service-outcome"><strong><?php esc_html_e('Outcome:', 'impexusone'); ?></strong> <?php esc_html_e('Empowered teams with practical skills and tools for success.', 'impexusone'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/capacity-building/')); ?>" class="service-link">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            
            <!-- Service Card 4 -->
            <div class="service-card card-hoverable">
                <div class="service-icon service-icon--primary">
                    <span class="material-symbols-outlined">query_stats</span>
                </div>
                <h3 class="service-title"><?php esc_html_e('Research & Analytics', 'impexusone'); ?></h3>
                <p class="service-problem"><strong><?php esc_html_e('Problem:', 'impexusone'); ?></strong> <?php esc_html_e('Need data-driven insights to inform strategy and decisions.', 'impexusone'); ?></p>
                <p class="service-outcome"><strong><?php esc_html_e('Outcome:', 'impexusone'); ?></strong> <?php esc_html_e('Actionable research findings that guide effective interventions.', 'impexusone'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/research-analytics/')); ?>" class="service-link">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            
            <!-- Service Card 5 -->
            <div class="service-card card-hoverable">
                <div class="service-icon service-icon--secondary">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="service-title"><?php esc_html_e('Impact Assessment', 'impexusone'); ?></h3>
                <p class="service-problem"><strong><?php esc_html_e('Problem:', 'impexusone'); ?></strong> <?php esc_html_e('Difficulty demonstrating the true value and outcomes of programs.', 'impexusone'); ?></p>
                <p class="service-outcome"><strong><?php esc_html_e('Outcome:', 'impexusone'); ?></strong> <?php esc_html_e('Credible impact reports that satisfy stakeholders and funders.', 'impexusone'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/impact-assessment/')); ?>" class="service-link">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            
            <!-- Service Card 6 -->
            <div class="service-card card-hoverable">
                <div class="service-icon service-icon--tertiary">
                    <span class="material-symbols-outlined">article</span>
                </div>
                <h3 class="service-title"><?php esc_html_e('Documentation', 'impexusone'); ?></h3>
                <p class="service-problem"><strong><?php esc_html_e('Problem:', 'impexusone'); ?></strong> <?php esc_html_e('Valuable knowledge and lessons learned are not being captured.', 'impexusone'); ?></p>
                <p class="service-outcome"><strong><?php esc_html_e('Outcome:', 'impexusone'); ?></strong> <?php esc_html_e('Professional case studies, reports, and knowledge products.', 'impexusone'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/documentation/')); ?>" class="service-link">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
        
        <div class="section-cta">
            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary">
                <?php esc_html_e('View All Services', 'impexusone'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Latest Insights Section -->
<section class="section insights-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Insights Hub', 'impexusone'),
            'title'    => __('Knowledge & Resources', 'impexusone'),
            'subtitle' => __('Stay ahead with our latest thinking on development consulting.', 'impexusone'),
        ));
        ?>
        
        <div class="insights-grid">
            <!-- Latest Posts -->
            <div class="insights-posts">
                <?php
                $latest_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ));

                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post();
                ?>
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
                            <div class="insight-card-meta">
                                <span><?php echo get_the_date(); ?></span>
                                <span><?php echo impexusone_get_reading_time(); ?> min read</span>
                            </div>
                        </div>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            
            <!-- RFP Widget -->
            <div class="rfp-widget">
                <div class="rfp-widget-header">
                    <span class="material-symbols-outlined">notifications_active</span>
                    <h3><?php esc_html_e('Latest RFP Alerts', 'impexusone'); ?></h3>
                </div>
                
                <?php
                $rfp_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                    'category_name'  => 'rfp-alerts',
                ));

                if ($rfp_posts->have_posts()) :
                ?>
                    <ul class="rfp-list">
                        <?php while ($rfp_posts->have_posts()) : $rfp_posts->the_post(); ?>
                            <li class="rfp-list-item">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="rfp-title"><?php the_title(); ?></span>
                                    <span class="rfp-date"><?php echo get_the_date('M d'); ?></span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p class="rfp-empty"><?php esc_html_e('No RFP alerts available.', 'impexusone'); ?></p>
                <?php endif; ?>
                
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('rfp-alerts'))); ?>" class="rfp-widget-link">
                    <?php esc_html_e('View All RFPs', 'impexusone'); ?>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
        
        <!-- Category Tiles -->
        <div class="category-tiles">
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('tips-tricks'))); ?>" class="category-tile category-tile--tips">
                <span class="material-symbols-outlined">lightbulb</span>
                <span class="category-tile-text"><?php esc_html_e('Tips & Tricks', 'impexusone'); ?></span>
            </a>
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('tutorials'))); ?>" class="category-tile category-tile--tutorials">
                <span class="material-symbols-outlined">play_circle</span>
                <span class="category-tile-text"><?php esc_html_e('Tutorials', 'impexusone'); ?></span>
            </a>
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('newsletter'))); ?>" class="category-tile category-tile--newsletter">
                <span class="material-symbols-outlined">mail</span>
                <span class="category-tile-text"><?php esc_html_e('Newsletter', 'impexusone'); ?></span>
            </a>
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('podcast'))); ?>" class="category-tile category-tile--podcast">
                <span class="material-symbols-outlined">podcasts</span>
                <span class="category-tile-text"><?php esc_html_e('Podcast', 'impexusone'); ?></span>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section process-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('How We Work', 'impexusone'),
            'title'    => __('Our Engagement Process', 'impexusone'),
            'subtitle' => __('A structured approach that ensures clarity, collaboration, and results.', 'impexusone'),
        ));
        ?>
        
        <div class="process-timeline">
            <div class="process-step">
                <div class="process-step-number">1</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Discovery', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We begin by understanding your organization, challenges, and goals through in-depth consultations.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="process-step-number">2</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Strategy', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We develop a tailored approach with clear deliverables, timelines, and success metrics.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="process-step-number">3</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Execution', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Our experts work alongside your team, providing hands-on support and regular updates.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="process-step-number">4</div>
                <div class="process-step-content">
                    <h3><?php esc_html_e('Delivery', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We deliver high-quality outputs with knowledge transfer to ensure lasting organizational capacity.', 'impexusone'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="cta-band">
    <div class="container">
        <h2><?php esc_html_e('Ready to Maximize Your Development Impact?', 'impexusone'); ?></h2>
        <p><?php esc_html_e('Let\'s discuss how our consulting services can help you achieve your goals.', 'impexusone'); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white btn-lg">
                <?php esc_html_e('Schedule a Free Consultation', 'impexusone'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
