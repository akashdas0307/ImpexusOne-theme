<?php
/**
 * Category Archive Template
 *
 * Routes to category-specific archive layouts based on slug.
 *
 * @package ImpexusOne
 */

get_header();

$category = get_queried_object();
$category_slug = $category->slug;

// Define layout type based on category
$category_layouts = array(
    'rfp-alerts'   => 'rfp',
    'tips-tricks'  => 'grid',
    'tutorials'    => 'grid',
    'newsletter'   => 'list',
    'podcast'      => 'list',
);

$layout = isset($category_layouts[$category_slug]) ? $category_layouts[$category_slug] : 'grid';
?>

<!-- Category Hero -->
<section class="category-hero category-hero--<?php echo esc_attr($category_slug); ?>">
    <div class="container">
        <div class="category-hero-content">
            <?php
            // Category-specific icons
            $category_icons = array(
                'rfp-alerts'   => 'notifications_active',
                'tips-tricks'  => 'lightbulb',
                'tutorials'    => 'play_circle',
                'newsletter'   => 'mail',
                'podcast'      => 'podcasts',
            );
            $icon = isset($category_icons[$category_slug]) ? $category_icons[$category_slug] : 'folder';
            ?>
            <span class="category-hero-icon material-symbols-outlined"><?php echo esc_html($icon); ?></span>
            <h1 class="category-hero-title"><?php single_cat_title(); ?></h1>
            <?php if (category_description()) : ?>
                <p class="category-hero-desc"><?php echo category_description(); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<div class="container">
    <div class="archive-layout archive-layout--<?php echo esc_attr($layout); ?>">
        <!-- Main Content -->
        <div class="archive-main">
            
            <?php if ($layout === 'rfp') : ?>
                <!-- RFP Alerts Layout: Filter Bar -->
                <div class="rfp-filter-bar">
                    <div class="rfp-search">
                        <span class="material-symbols-outlined">search</span>
                        <input type="text" placeholder="<?php esc_attr_e('Search keywords (e.g., Health, WASH)...', 'impexusone'); ?>" class="form-input">
                    </div>
                    <div class="rfp-filters">
                        <select class="form-select">
                            <option><?php esc_html_e('Deadline: Soonest', 'impexusone'); ?></option>
                            <option><?php esc_html_e('Deadline: Latest', 'impexusone'); ?></option>
                            <option><?php esc_html_e('Budget: High to Low', 'impexusone'); ?></option>
                        </select>
                        <select class="form-select">
                            <option><?php esc_html_e('Topic: All', 'impexusone'); ?></option>
                            <option><?php esc_html_e('Education', 'impexusone'); ?></option>
                            <option><?php esc_html_e('Healthcare', 'impexusone'); ?></option>
                            <option><?php esc_html_e('Infrastructure', 'impexusone'); ?></option>
                        </select>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if (have_posts()) : ?>
                
                <div class="posts-<?php echo esc_attr($layout); ?>">
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <?php if ($layout === 'rfp') : ?>
                            <!-- RFP Card Layout -->
                            <article <?php post_class('rfp-card'); ?>>
                                <div class="rfp-card-main">
                                    <div class="rfp-card-badges">
                                        <?php
                                        // Check for urgent meta (would use custom field in real implementation)
                                        $is_urgent = get_post_meta(get_the_ID(), 'is_urgent', true);
                                        if ($is_urgent) :
                                        ?>
                                            <span class="badge badge-warning">
                                                <span class="material-symbols-outlined">warning</span>
                                                <?php esc_html_e('Urgent: 2 Days Left', 'impexusone'); ?>
                                            </span>
                                        <?php else : ?>
                                            <span class="badge badge-primary">
                                                <span class="material-symbols-outlined">schedule</span>
                                                <?php echo esc_html(get_the_date('M d')); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <h2 class="rfp-card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <div class="rfp-card-meta">
                                        <span class="material-symbols-outlined">account_balance</span>
                                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'organization', true) ?: 'Organization'); ?></span>
                                        <span class="separator">•</span>
                                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'location', true) ?: 'India'); ?></span>
                                    </div>
                                    
                                    <p class="rfp-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                                    
                                    <?php
                                    $tags = get_the_tags();
                                    if ($tags) :
                                    ?>
                                        <div class="rfp-card-tags">
                                            <?php foreach (array_slice($tags, 0, 3) as $tag) : ?>
                                                <span class="rfp-tag"><?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="rfp-card-side">
                                    <div class="rfp-card-value">
                                        <span class="label"><?php esc_html_e('Est. Value', 'impexusone'); ?></span>
                                        <span class="value"><?php echo esc_html(get_post_meta(get_the_ID(), 'budget', true) ?: '₹ TBD'); ?></span>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">
                                        <?php esc_html_e('View Details', 'impexusone'); ?>
                                    </a>
                                </div>
                            </article>
                            
                        <?php elseif ($layout === 'list') : ?>
                            <!-- List Card Layout (Newsletter, Podcast) -->
                            <article <?php post_class('list-card'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="list-card-image">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                <?php endif; ?>
                                
                                <div class="list-card-content">
                                    <div class="list-card-meta">
                                        <span class="list-card-date"><?php echo get_the_date(); ?></span>
                                        <?php if ($category_slug === 'podcast') : ?>
                                            <span class="list-card-duration">
                                                <span class="material-symbols-outlined">headphones</span>
                                                <?php echo esc_html(get_post_meta(get_the_ID(), 'duration', true) ?: '30 min'); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <h2 class="list-card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="list-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                </div>
                            </article>
                            
                        <?php else : ?>
                            <!-- Grid Card Layout (Tips, Tutorials) -->
                            <article <?php post_class('card card-hoverable grid-card'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="card-image-link">
                                        <?php the_post_thumbnail('impexusone-card', array('class' => 'card-image')); ?>
                                        <?php if ($category_slug === 'tutorials') : ?>
                                            <span class="card-play-icon">
                                                <span class="material-symbols-outlined">play_circle</span>
                                            </span>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                                
                                <div class="card-content">
                                    <?php impexusone_category_badge(); ?>
                                    
                                    <h2 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <p class="card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                    
                                    <div class="card-meta">
                                        <span class="card-date"><?php echo get_the_date(); ?></span>
                                        <span class="card-reading-time"><?php echo impexusone_get_reading_time(); ?> min read</span>
                                    </div>
                                </div>
                            </article>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>
                </div>
                
                <?php
                // Pagination
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<span class="material-symbols-outlined">chevron_left</span>',
                    'next_text' => '<span class="material-symbols-outlined">chevron_right</span>',
                ));
                ?>
                
            <?php else : ?>
                <div class="no-results">
                    <span class="material-symbols-outlined">inbox</span>
                    <h2><?php esc_html_e('No posts found', 'impexusone'); ?></h2>
                    <p><?php esc_html_e('Check back soon for new content in this category.', 'impexusone'); ?></p>
                </div>
            <?php endif; ?>
            
        </div>
        
        <!-- Sidebar -->
        <aside class="archive-sidebar">
            <?php if ($layout === 'rfp') : ?>
                <!-- RFP-specific sidebar -->
                <div class="sidebar-card sidebar-card--cta">
                    <div class="sidebar-card-icon">
                        <span class="material-symbols-outlined">edit_document</span>
                    </div>
                    <h3><?php esc_html_e('Need Proposal Support?', 'impexusone'); ?></h3>
                    <p><?php esc_html_e('Our team has a 78% win rate. Let our experts help you craft a winning bid.', 'impexusone'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Request Consultation', 'impexusone'); ?>
                    </a>
                </div>
            <?php endif; ?>
            
            <!-- Subscribe Widget -->
            <div class="sidebar-card">
                <div class="sidebar-card-header">
                    <span class="material-symbols-outlined">notifications_active</span>
                    <h3><?php esc_html_e('Daily Alerts', 'impexusone'); ?></h3>
                </div>
                <p><?php esc_html_e('Get the latest content delivered to your inbox.', 'impexusone'); ?></p>
                <form class="subscribe-form">
                    <input type="email" class="form-input" placeholder="<?php esc_attr_e('your@email.com', 'impexusone'); ?>">
                    <button type="submit" class="btn btn-primary"><?php esc_html_e('Subscribe', 'impexusone'); ?></button>
                </form>
            </div>
            
            <!-- Related Resources -->
            <div class="sidebar-card">
                <h4 class="sidebar-heading"><?php esc_html_e('Resources', 'impexusone'); ?></h4>
                <ul class="sidebar-links">
                    <li>
                        <a href="#">
                            <span class="material-symbols-outlined">article</span>
                            <div>
                                <span class="link-title"><?php esc_html_e('5 Tips for Winning RFPs', 'impexusone'); ?></span>
                                <span class="link-meta"><?php esc_html_e('4 min read', 'impexusone'); ?></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="material-symbols-outlined">calculate</span>
                            <div>
                                <span class="link-title"><?php esc_html_e('Project Budgeting 101', 'impexusone'); ?></span>
                                <span class="link-meta"><?php esc_html_e('Template Included', 'impexusone'); ?></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            
            <?php if (is_active_sidebar('insights-sidebar')) : ?>
                <?php dynamic_sidebar('insights-sidebar'); ?>
            <?php endif; ?>
        </aside>
    </div>
</div>

<?php
get_footer();
