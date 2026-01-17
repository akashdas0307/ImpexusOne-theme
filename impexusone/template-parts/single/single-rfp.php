<?php
/**
 * Single RFP Alert Template Part
 *
 * @package ImpexusOne
 */

// Ensure we're in the loop
if (!have_posts()) return;
the_post();

// Get RFP-specific meta (would use ACF in production)
$location = get_post_meta(get_the_ID(), 'location', true) ?: 'India';
$eligibility = get_post_meta(get_the_ID(), 'eligibility', true) ?: 'Open';
$budget = get_post_meta(get_the_ID(), 'budget', true) ?: 'TBD';
$deadline = get_post_meta(get_the_ID(), 'deadline', true) ?: get_the_date('M d, Y');
$reference = get_post_meta(get_the_ID(), 'reference', true) ?: '#RFP-' . get_the_ID();
$source_url = get_post_meta(get_the_ID(), 'source_url', true) ?: '#';
?>

<div class="container">
    <div class="rfp-single-layout">
        <!-- Main Content -->
        <main class="rfp-single-main">
            
            <!-- Header Zone -->
            <header class="rfp-single-header">
                <div class="rfp-header-badges">
                    <span class="badge badge-primary">
                        <span class="material-symbols-outlined">notifications_active</span>
                        <?php esc_html_e('RFP Alert', 'impexusone'); ?>
                    </span>
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                        foreach (array_slice($tags, 0, 1) as $tag) :
                    ?>
                        <span class="badge"><?php echo esc_html($tag->name); ?></span>
                    <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
                
                <h1 class="rfp-single-title"><?php the_title(); ?></h1>
                
                <div class="rfp-header-meta">
                    <span>
                        <span class="material-symbols-outlined">calendar_today</span>
                        <?php printf(esc_html__('Posted %s', 'impexusone'), get_the_date()); ?>
                    </span>
                    <span>
                        <span class="material-symbols-outlined">schedule</span>
                        <?php echo impexusone_get_reading_time(); ?> min read
                    </span>
                    <span>
                        <span class="material-symbols-outlined">visibility</span>
                        <?php echo number_format(get_post_meta(get_the_ID(), 'post_views_count', true) ?: rand(100, 2000)); ?> views
                    </span>
                </div>
            </header>
            
            <!-- Quick Facts Panel -->
            <section class="quick-facts-panel">
                <div class="quick-facts-header">
                    <h2>
                        <span class="material-symbols-outlined">analytics</span>
                        <?php esc_html_e('Quick Facts', 'impexusone'); ?>
                    </h2>
                    <span class="badge badge-warning">
                        <span class="material-symbols-outlined">warning</span>
                        <?php printf(esc_html__('Deadline: %s', 'impexusone'), esc_html($deadline)); ?>
                    </span>
                </div>
                
                <div class="quick-facts-grid">
                    <div class="quick-facts-item">
                        <span class="quick-facts-label"><?php esc_html_e('Location', 'impexusone'); ?></span>
                        <span class="quick-facts-value"><?php echo esc_html($location); ?></span>
                    </div>
                    <div class="quick-facts-item">
                        <span class="quick-facts-label"><?php esc_html_e('Eligibility', 'impexusone'); ?></span>
                        <span class="quick-facts-value"><?php echo esc_html($eligibility); ?></span>
                    </div>
                    <div class="quick-facts-item">
                        <span class="quick-facts-label"><?php esc_html_e('Budget Est.', 'impexusone'); ?></span>
                        <span class="quick-facts-value"><?php echo esc_html($budget); ?></span>
                    </div>
                    <div class="quick-facts-item">
                        <span class="quick-facts-label"><?php esc_html_e('Reference', 'impexusone'); ?></span>
                        <span class="quick-facts-value"><?php echo esc_html($reference); ?></span>
                    </div>
                </div>
                
                <div class="quick-facts-footer">
                    <p><em><?php esc_html_e('Verify all details on the official portal.', 'impexusone'); ?></em></p>
                    <a href="<?php echo esc_url($source_url); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('View Official Source', 'impexusone'); ?>
                        <span class="material-symbols-outlined">open_in_new</span>
                    </a>
                </div>
            </section>
            
            <!-- Content Body -->
            <div class="rfp-content prose">
                <?php the_content(); ?>
            </div>
            
            <!-- Notes/Risks Callout -->
            <div class="rfp-callout">
                <div class="rfp-callout-icon">
                    <span class="material-symbols-outlined">warning</span>
                </div>
                <div class="rfp-callout-content">
                    <h4><?php esc_html_e('Critical Note & Risks', 'impexusone'); ?></h4>
                    <p><?php esc_html_e('Always verify requirements directly with the issuing organization. Deadlines and eligibility criteria may change. Impexus is not responsible for any discrepancies between this summary and the official RFP documents.', 'impexusone'); ?></p>
                </div>
            </div>
            
            <!-- Mid-Page CTA -->
            <div class="rfp-cta-card">
                <div class="rfp-cta-content">
                    <h4><?php esc_html_e('Need proposal support?', 'impexusone'); ?></h4>
                    <p><?php esc_html_e('Our team specializes in development sector RFPs. Increase your win probability with professional bid management.', 'impexusone'); ?></p>
                </div>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                    <?php esc_html_e('Contact Impexus', 'impexusone'); ?>
                </a>
            </div>
            
        </main>
        
        <!-- Sidebar -->
        <aside class="rfp-single-sidebar">
            <div class="sidebar-sticky">
                <!-- Subscribe Widget -->
                <div class="sidebar-card">
                    <div class="sidebar-card-icon">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <h3><?php esc_html_e('Never miss an RFP', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Get curated tenders delivered to your inbox daily.', 'impexusone'); ?></p>
                    <form class="subscribe-form">
                        <input type="email" class="form-input" placeholder="<?php esc_attr_e('work@email.com', 'impexusone'); ?>">
                        <button type="submit" class="btn btn-primary"><?php esc_html_e('Subscribe Free', 'impexusone'); ?></button>
                    </form>
                </div>
                
                <!-- Related Service Card -->
                <div class="sidebar-card sidebar-card--dark">
                    <span class="sidebar-card-badge"><?php esc_html_e('Impexus Service', 'impexusone'); ?></span>
                    <h3><?php esc_html_e('Tender Writing Support', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Struggling with the technical narrative? Let our experts draft your methodology.', 'impexusone'); ?></p>
                    <a href="<?php echo esc_url(home_url('/services/proposal-development/')); ?>" class="sidebar-card-link">
                        <?php esc_html_e('Learn more', 'impexusone'); ?>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                
                <!-- Share Widget -->
                <div class="sidebar-card">
                    <h4 class="sidebar-heading"><?php esc_html_e('Share Opportunity', 'impexusone'); ?></h4>
                    <?php impexusone_share_buttons(); ?>
                </div>
            </div>
        </aside>
    </div>
    
    <!-- Related Opportunities -->
    <?php
    $related = new WP_Query(array(
        'posts_per_page' => 3,
        'post__not_in'   => array(get_the_ID()),
        'category_name'  => 'rfp-alerts',
    ));
    
    if ($related->have_posts()) :
    ?>
        <section class="rfp-related">
            <h2><?php esc_html_e('Related Opportunities', 'impexusone'); ?></h2>
            <div class="rfp-related-grid">
                <?php while ($related->have_posts()) : $related->the_post(); ?>
                    <article class="card card-hoverable">
                        <div class="card-content">
                            <div class="card-header">
                                <?php
                                $tags = get_the_tags();
                                if ($tags) :
                                ?>
                                    <span class="badge"><?php echo esc_html($tags[0]->name); ?></span>
                                <?php endif; ?>
                                <span class="card-date"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                            </div>
                            <h3 class="card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </section>
    <?php endif; ?>
    
    <!-- Bottom CTA -->
    <section class="rfp-bottom-cta">
        <h3><?php esc_html_e("Don't have time to search?", 'impexusone'); ?></h3>
        <p><?php esc_html_e('Let us find relevant opportunities for your business.', 'impexusone'); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
            <?php esc_html_e('Explore Premium Plans', 'impexusone'); ?>
        </a>
    </section>
</div>
