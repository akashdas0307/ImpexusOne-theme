<?php
/**
 * Template Name: Service Detail
 * Template Post Type: page
 *
 * Reusable template for individual service pages.
 *
 * @package ImpexusOne
 */

get_header();

// Get custom fields (using ACF or meta fields - fallback to defaults)
$service_title = get_the_title();
$service_desc = get_the_excerpt() ?: get_post_meta(get_the_ID(), 'service_description', true);
$service_icon = get_post_meta(get_the_ID(), 'service_icon', true) ?: 'work';
?>

<!-- Service Hero -->
<section class="service-hero">
    <div class="container">
        <nav class="breadcrumbs" aria-label="<?php esc_attr_e('Breadcrumb', 'impexusone'); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'impexusone'); ?></a>
            <span class="material-symbols-outlined">chevron_right</span>
            <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'impexusone'); ?></a>
            <span class="material-symbols-outlined">chevron_right</span>
            <span class="current"><?php the_title(); ?></span>
        </nav>
        
        <div class="service-hero-content">
            <div class="service-hero-icon">
                <span class="material-symbols-outlined"><?php echo esc_html($service_icon); ?></span>
            </div>
            <h1 class="service-hero-title"><?php the_title(); ?></h1>
            <p class="service-hero-desc"><?php echo esc_html($service_desc ?: 'Professional consulting support tailored to your organization\'s needs.'); ?></p>
            
            <div class="service-hero-actions">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e('Request a Quote', 'impexusone'); ?>
                </a>
                <a href="#how-it-works" class="btn btn-secondary btn-lg">
                    <?php esc_html_e('Learn More', 'impexusone'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Challenges Section -->
<section class="section challenges-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('The Challenge', 'impexusone'),
            'title'    => __('Problems We Solve', 'impexusone'),
            'subtitle' => __('Common challenges our clients face that this service addresses.', 'impexusone'),
        ));
        ?>
        
        <div class="challenges-grid">
            <div class="challenge-card">
                <span class="material-symbols-outlined challenge-icon">warning</span>
                <h3><?php esc_html_e('Limited Internal Capacity', 'impexusone'); ?></h3>
                <p><?php esc_html_e('Your team is stretched thin and lacks specialized expertise for complex projects.', 'impexusone'); ?></p>
            </div>
            
            <div class="challenge-card">
                <span class="material-symbols-outlined challenge-icon">schedule</span>
                <h3><?php esc_html_e('Tight Deadlines', 'impexusone'); ?></h3>
                <p><?php esc_html_e('Funding opportunities come with aggressive timelines that are hard to meet.', 'impexusone'); ?></p>
            </div>
            
            <div class="challenge-card">
                <span class="material-symbols-outlined challenge-icon">trending_down</span>
                <h3><?php esc_html_e('Quality Concerns', 'impexusone'); ?></h3>
                <p><?php esc_html_e('Previous submissions haven\'t met the mark, affecting your credibility.', 'impexusone'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- What You Get Section -->
<section class="section deliverables-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Deliverables', 'impexusone'),
            'title'    => __('What You Get', 'impexusone'),
        ));
        ?>
        
        <div class="deliverables-grid">
            <div class="deliverable-item">
                <span class="material-symbols-outlined">check_circle</span>
                <span><?php esc_html_e('Comprehensive needs assessment', 'impexusone'); ?></span>
            </div>
            <div class="deliverable-item">
                <span class="material-symbols-outlined">check_circle</span>
                <span><?php esc_html_e('Tailored strategy document', 'impexusone'); ?></span>
            </div>
            <div class="deliverable-item">
                <span class="material-symbols-outlined">check_circle</span>
                <span><?php esc_html_e('Professional documentation', 'impexusone'); ?></span>
            </div>
            <div class="deliverable-item">
                <span class="material-symbols-outlined">check_circle</span>
                <span><?php esc_html_e('Quality assurance review', 'impexusone'); ?></span>
            </div>
            <div class="deliverable-item">
                <span class="material-symbols-outlined">check_circle</span>
                <span><?php esc_html_e('Stakeholder presentation deck', 'impexusone'); ?></span>
            </div>
            <div class="deliverable-item">
                <span class="material-symbols-outlined">check_circle</span>
                <span><?php esc_html_e('Knowledge transfer session', 'impexusone'); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Approach Section -->
<section class="section approach-section" id="how-it-works">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Our Approach', 'impexusone'),
            'title'    => __('How We Work', 'impexusone'),
            'subtitle' => __('A proven process that delivers results.', 'impexusone'),
        ));
        ?>
        
        <div class="approach-stepper">
            <div class="approach-step">
                <div class="approach-step-number">1</div>
                <div class="approach-step-content">
                    <h3><?php esc_html_e('Initial Consultation', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We start with a detailed discussion to understand your requirements, constraints, and objectives.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="approach-step">
                <div class="approach-step-number">2</div>
                <div class="approach-step-content">
                    <h3><?php esc_html_e('Proposal & Agreement', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('We provide a clear proposal with scope, timeline, and cost. Once agreed, we kick off the project.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="approach-step">
                <div class="approach-step-number">3</div>
                <div class="approach-step-content">
                    <h3><?php esc_html_e('Collaborative Execution', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Our team works alongside yours, providing regular updates and incorporating feedback iteratively.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <div class="approach-step">
                <div class="approach-step-number">4</div>
                <div class="approach-step-content">
                    <h3><?php esc_html_e('Delivery & Handover', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Final deliverables are submitted with a handover session to ensure your team can build on the work.', 'impexusone'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Engagement Models Section -->
<section class="section engagement-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'eyebrow'  => __('Engagement Options', 'impexusone'),
            'title'    => __('How to Work With Us', 'impexusone'),
            'subtitle' => __('Choose the model that best fits your needs.', 'impexusone'),
        ));
        ?>
        
        <div class="engagement-grid">
            <div class="engagement-card">
                <div class="engagement-card-header">
                    <span class="material-symbols-outlined">bolt</span>
                    <h3><?php esc_html_e('Rapid Support', 'impexusone'); ?></h3>
                </div>
                <p class="engagement-desc"><?php esc_html_e('Quick turnaround consulting for urgent needs. Ideal for proposal reviews, document editing, or short advisory sessions.', 'impexusone'); ?></p>
                <ul class="engagement-features">
                    <li><?php esc_html_e('1-5 day engagements', 'impexusone'); ?></li>
                    <li><?php esc_html_e('Daily rate pricing', 'impexusone'); ?></li>
                    <li><?php esc_html_e('Fast mobilization', 'impexusone'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary"><?php esc_html_e('Inquire', 'impexusone'); ?></a>
            </div>
            
            <div class="engagement-card engagement-card--featured">
                <div class="engagement-card-badge"><?php esc_html_e('Most Popular', 'impexusone'); ?></div>
                <div class="engagement-card-header">
                    <span class="material-symbols-outlined">assignment</span>
                    <h3><?php esc_html_e('Project Delivery', 'impexusone'); ?></h3>
                </div>
                <p class="engagement-desc"><?php esc_html_e('End-to-end project support with defined scope, timeline, and deliverables. Best for proposals, assessments, and system design.', 'impexusone'); ?></p>
                <ul class="engagement-features">
                    <li><?php esc_html_e('2-12 week projects', 'impexusone'); ?></li>
                    <li><?php esc_html_e('Fixed-price contracts', 'impexusone'); ?></li>
                    <li><?php esc_html_e('Milestone-based payments', 'impexusone'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary"><?php esc_html_e('Get a Quote', 'impexusone'); ?></a>
            </div>
            
            <div class="engagement-card">
                <div class="engagement-card-header">
                    <span class="material-symbols-outlined">handshake</span>
                    <h3><?php esc_html_e('Retainer Partnership', 'impexusone'); ?></h3>
                </div>
                <p class="engagement-desc"><?php esc_html_e('Ongoing consulting support with guaranteed availability. Perfect for organizations with regular consulting needs.', 'impexusone'); ?></p>
                <ul class="engagement-features">
                    <li><?php esc_html_e('Monthly hour packages', 'impexusone'); ?></li>
                    <li><?php esc_html_e('Priority scheduling', 'impexusone'); ?></li>
                    <li><?php esc_html_e('Discounted rates', 'impexusone'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary"><?php esc_html_e('Discuss Options', 'impexusone'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Related Insights Section -->
<section class="section related-insights-section">
    <div class="container">
        <?php
        impexusone_section_header(array(
            'title'    => __('Related Resources', 'impexusone'),
            'subtitle' => __('Learn more about this service area.', 'impexusone'),
        ));
        
        // Get related posts (customize tag/category query based on service)
        $related_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'orderby'        => 'rand',
        ));
        
        if ($related_posts->have_posts()) :
        ?>
            <div class="related-insights-grid">
                <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
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
                            <p class="insight-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
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
        <h2><?php esc_html_e('Ready to Get Started?', 'impexusone'); ?></h2>
        <p><?php esc_html_e('Let\'s discuss how we can help with your specific requirements.', 'impexusone'); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white btn-lg">
                <?php esc_html_e('Contact Us', 'impexusone'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
