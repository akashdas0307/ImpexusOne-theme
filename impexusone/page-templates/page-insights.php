<?php
/**
 * Template Name: Insights Hub
 * Template Post Type: page
 *
 * @package ImpexusOne
 */

get_header();
?>

<!-- Hero Section -->
<section class="page-hero page-hero--insights">
    <div class="container">
        <div class="page-hero-content">
            <span class="page-hero-eyebrow"><?php esc_html_e('Knowledge Center', 'impexusone'); ?></span>
            <h1 class="page-hero-title"><?php esc_html_e('Insights Hub', 'impexusone'); ?></h1>
            <p class="page-hero-subtitle"><?php esc_html_e('Expert analysis, practical guides, and the latest opportunities in development consulting.', 'impexusone'); ?></p>
        </div>
    </div>
</section>

<!-- Search and Filter Bar -->
<div class="insights-filter-bar">
    <div class="container">
        <div class="insights-filter-inner">
            <div class="insights-search">
                <span class="material-symbols-outlined">search</span>
                <input type="text" class="form-input" placeholder="<?php esc_attr_e('Search articles...', 'impexusone'); ?>">
            </div>
            
            <div class="insights-filters">
                <select class="form-select">
                    <option><?php esc_html_e('All Categories', 'impexusone'); ?></option>
                    <option value="rfp-alerts"><?php esc_html_e('RFP Alerts', 'impexusone'); ?></option>
                    <option value="tips-tricks"><?php esc_html_e('Tips & Tricks', 'impexusone'); ?></option>
                    <option value="tutorials"><?php esc_html_e('Tutorials', 'impexusone'); ?></option>
                    <option value="newsletter"><?php esc_html_e('Newsletter', 'impexusone'); ?></option>
                    <option value="podcast"><?php esc_html_e('Podcast', 'impexusone'); ?></option>
                </select>
                
                <select class="form-select">
                    <option><?php esc_html_e('Latest First', 'impexusone'); ?></option>
                    <option><?php esc_html_e('Most Popular', 'impexusone'); ?></option>
                    <option><?php esc_html_e('Oldest First', 'impexusone'); ?></option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="insights-layout">
        <!-- Main Content -->
        <div class="insights-main">
            
            <!-- Featured Bento Grid -->
            <?php
            $featured_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'meta_key'       => '_is_featured',
                'meta_value'     => '1',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));
            
            // If no featured posts, get latest
            if (!$featured_posts->have_posts()) {
                $featured_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ));
            }
            
            if ($featured_posts->have_posts()) :
            ?>
                <section class="featured-bento">
                    <h2 class="section-title-inline">
                        <span class="material-symbols-outlined">star</span>
                        <?php esc_html_e('Featured', 'impexusone'); ?>
                    </h2>
                    
                    <div class="bento-grid">
                        <?php 
                        $count = 0;
                        while ($featured_posts->have_posts()) : $featured_posts->the_post();
                            $count++;
                            $size_class = ($count === 1) ? 'bento-large' : 'bento-small';
                        ?>
                            <article class="bento-card <?php echo esc_attr($size_class); ?> card-hoverable">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="bento-card-image">
                                        <?php the_post_thumbnail($count === 1 ? 'impexusone-card-lg' : 'impexusone-card'); ?>
                                        <div class="bento-card-overlay"></div>
                                    </a>
                                <?php endif; ?>
                                
                                <div class="bento-card-content">
                                    <?php impexusone_category_badge(); ?>
                                    <h3 class="bento-card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <?php if ($count === 1) : ?>
                                        <p class="bento-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <?php endif; ?>
                                    <div class="bento-card-meta">
                                        <span><?php echo get_the_date(); ?></span>
                                        <span><?php echo impexusone_get_reading_time(); ?> min</span>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </section>
            <?php endif; ?>
            
            <!-- Latest Reports Section -->
            <section class="latest-posts-section">
                <h2 class="section-title-inline"><?php esc_html_e('Latest Articles', 'impexusone'); ?></h2>
                
                <?php
                $latest_posts = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_status'    => 'publish',
                    'offset'         => 3,
                ));
                
                if ($latest_posts->have_posts()) :
                ?>
                    <div class="posts-grid posts-grid--2col">
                        <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                            <article <?php post_class('card card-hoverable grid-card'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="card-image-link">
                                        <?php the_post_thumbnail('impexusone-card', array('class' => 'card-image')); ?>
                                    </a>
                                <?php endif; ?>
                                
                                <div class="card-content">
                                    <?php impexusone_category_badge(); ?>
                                    
                                    <h3 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    
                                    <p class="card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                    
                                    <div class="card-meta">
                                        <span class="card-date"><?php echo get_the_date(); ?></span>
                                        <span class="card-reading-time"><?php echo impexusone_get_reading_time(); ?> min read</span>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
                
                <div class="load-more-wrapper">
                    <button class="btn btn-secondary load-more-btn">
                        <?php esc_html_e('Load More Articles', 'impexusone'); ?>
                    </button>
                </div>
            </section>
            
        </div>
        
        <!-- Sidebar -->
        <aside class="insights-sidebar">
            <div class="sidebar-sticky">
                <!-- Newsletter Card -->
                <div class="sidebar-card sidebar-card--newsletter">
                    <div class="sidebar-card-icon">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <h3><?php esc_html_e('Weekly Digest', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Get curated insights and RFP alerts delivered every Monday.', 'impexusone'); ?></p>
                    <form class="subscribe-form">
                        <input type="email" class="form-input" placeholder="<?php esc_attr_e('your@email.com', 'impexusone'); ?>">
                        <button type="submit" class="btn btn-primary"><?php esc_html_e('Subscribe', 'impexusone'); ?></button>
                    </form>
                </div>
                
                <!-- Need Help Card -->
                <div class="sidebar-card sidebar-card--cta">
                    <div class="sidebar-card-icon">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <h3><?php esc_html_e('Need Consulting Support?', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Our team is ready to help with your proposal, M&E, or research needs.', 'impexusone'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Book a Call', 'impexusone'); ?>
                    </a>
                </div>
                
                <?php if (is_active_sidebar('insights-sidebar')) : ?>
                    <?php dynamic_sidebar('insights-sidebar'); ?>
                <?php endif; ?>
            </div>
        </aside>
    </div>
    
    <!-- Category Tiles -->
    <section class="category-tiles-section">
        <h2 class="section-title-inline"><?php esc_html_e('Browse by Category', 'impexusone'); ?></h2>
        
        <div class="category-tiles-grid">
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('rfp-alerts'))); ?>" class="category-tile-lg category-tile--rfp">
                <div class="category-tile-icon">
                    <span class="material-symbols-outlined">notifications_active</span>
                </div>
                <div class="category-tile-content">
                    <h3><?php esc_html_e('RFP Alerts', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Latest funding opportunities and tender notices.', 'impexusone'); ?></p>
                </div>
                <span class="material-symbols-outlined category-tile-arrow">arrow_forward</span>
            </a>
            
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('tips-tricks'))); ?>" class="category-tile-lg category-tile--tips">
                <div class="category-tile-icon">
                    <span class="material-symbols-outlined">lightbulb</span>
                </div>
                <div class="category-tile-content">
                    <h3><?php esc_html_e('Tips & Tricks', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Practical advice for development professionals.', 'impexusone'); ?></p>
                </div>
                <span class="material-symbols-outlined category-tile-arrow">arrow_forward</span>
            </a>
            
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('tutorials'))); ?>" class="category-tile-lg category-tile--tutorials">
                <div class="category-tile-icon">
                    <span class="material-symbols-outlined">play_circle</span>
                </div>
                <div class="category-tile-content">
                    <h3><?php esc_html_e('Tutorials', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Step-by-step guides and how-tos.', 'impexusone'); ?></p>
                </div>
                <span class="material-symbols-outlined category-tile-arrow">arrow_forward</span>
            </a>
            
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('podcast'))); ?>" class="category-tile-lg category-tile--podcast">
                <div class="category-tile-icon">
                    <span class="material-symbols-outlined">podcasts</span>
                </div>
                <div class="category-tile-content">
                    <h3><?php esc_html_e('Podcast', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Conversations with sector experts.', 'impexusone'); ?></p>
                </div>
                <span class="material-symbols-outlined category-tile-arrow">arrow_forward</span>
            </a>
        </div>
    </section>
</div>

<?php
get_footer();
