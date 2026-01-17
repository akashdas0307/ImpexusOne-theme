<?php
/**
 * Single Post Template
 *
 * Routes to category-specific layouts.
 *
 * @package ImpexusOne
 */

get_header();

// Get primary category
$categories = get_the_category();
$category_slug = !empty($categories) ? $categories[0]->slug : 'default';

// Template mapping
$template_map = array(
    'rfp-alerts'   => 'rfp',
    'tips-tricks'  => 'tip',
    'tutorials'    => 'tutorial',
    'newsletter'   => 'newsletter',
    'podcast'      => 'podcast',
);

$template_name = isset($template_map[$category_slug]) ? $template_map[$category_slug] : 'default';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php 
    // Try to load category-specific template part
    $template_loaded = get_template_part('template-parts/single/single', $template_name);
    
    // If no category-specific template exists, use default
    if ($template_loaded === false || $template_name === 'default') :
    ?>
        <!-- Default Single Post Layout -->
        <div class="container">
            <div class="single-layout">
                <main class="single-main">
                    
                    <!-- Breadcrumbs -->
                    <?php impexusone_breadcrumbs(); ?>
                    
                    <!-- Article Header -->
                    <header class="entry-header">
                        <?php impexusone_category_badge(); ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        
                        <div class="entry-meta">
                            <span class="entry-date">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <?php echo get_the_date(); ?>
                            </span>
                            <span class="entry-author">
                                <span class="material-symbols-outlined">person</span>
                                <?php the_author(); ?>
                            </span>
                            <span class="entry-reading-time">
                                <span class="material-symbols-outlined">schedule</span>
                                <?php echo impexusone_get_reading_time(); ?> min read
                            </span>
                        </div>
                    </header>
                    
                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail('impexusone-hero'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Content -->
                    <div class="entry-content prose">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Tags -->
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                    ?>
                        <div class="entry-tags">
                            <span class="tags-label"><?php esc_html_e('Tags:', 'impexusone'); ?></span>
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag)); ?>" class="entry-tag"><?php echo esc_html($tag->name); ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Share Buttons -->
                    <?php impexusone_share_buttons(); ?>
                    
                    <!-- Author Box -->
                    <div class="author-box">
                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                        </div>
                        <div class="author-info">
                            <p class="author-label"><?php esc_html_e('Written by', 'impexusone'); ?></p>
                            <h4 class="author-name"><?php the_author(); ?></h4>
                            <p class="author-bio"><?php echo get_the_author_meta('description'); ?></p>
                        </div>
                    </div>
                    
                    <!-- Post Navigation -->
                    <nav class="post-navigation">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        
                        if ($prev_post) :
                        ?>
                            <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="post-nav-link post-nav-prev">
                                <span class="material-symbols-outlined">arrow_back</span>
                                <div>
                                    <span class="nav-label"><?php esc_html_e('Previous', 'impexusone'); ?></span>
                                    <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                                </div>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($next_post) : ?>
                            <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="post-nav-link post-nav-next">
                                <div>
                                    <span class="nav-label"><?php esc_html_e('Next', 'impexusone'); ?></span>
                                    <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                                </div>
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        <?php endif; ?>
                    </nav>
                    
                </main>
                
                <!-- Sidebar -->
                <aside class="single-sidebar">
                    <!-- Subscribe Widget -->
                    <div class="sidebar-card">
                        <div class="sidebar-card-header">
                            <span class="material-symbols-outlined">mail</span>
                            <h3><?php esc_html_e('Never miss a post', 'impexusone'); ?></h3>
                        </div>
                        <p><?php esc_html_e('Get our latest insights delivered to your inbox.', 'impexusone'); ?></p>
                        <form class="subscribe-form">
                            <input type="email" class="form-input" placeholder="<?php esc_attr_e('your@email.com', 'impexusone'); ?>">
                            <button type="submit" class="btn btn-primary"><?php esc_html_e('Subscribe', 'impexusone'); ?></button>
                        </form>
                    </div>
                    
                    <!-- Related Posts -->
                    <?php
                    $related_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post__not_in'   => array(get_the_ID()),
                        'category__in'   => wp_get_post_categories(get_the_ID()),
                        'orderby'        => 'rand',
                    ));
                    
                    if ($related_posts->have_posts()) :
                    ?>
                        <div class="sidebar-card">
                            <h4 class="sidebar-heading"><?php esc_html_e('Related Posts', 'impexusone'); ?></h4>
                            <ul class="sidebar-posts">
                                <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            <?php endif; ?>
                                            <div>
                                                <span class="post-title"><?php the_title(); ?></span>
                                                <span class="post-date"><?php echo get_the_date(); ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </aside>
            </div>
        </div>
    <?php endif; ?>
    
</article>

<?php
get_footer();
