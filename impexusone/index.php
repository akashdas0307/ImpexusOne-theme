<?php
/**
 * Index Template (fallback)
 *
 * @package ImpexusOne
 */

get_header();
?>

<div class="container">
    <div class="blog-layout">
        <div class="blog-main">
            <?php if (have_posts()) : ?>
                
                <header class="archive-header">
                    <?php if (is_home() && !is_front_page()) : ?>
                        <h1 class="archive-title"><?php single_post_title(); ?></h1>
                    <?php elseif (is_archive()) : ?>
                        <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
                        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                    <?php elseif (is_search()) : ?>
                        <h1 class="archive-title">
                            <?php printf(esc_html__('Search Results for: %s', 'impexusone'), '<span>' . get_search_query() . '</span>'); ?>
                        </h1>
                    <?php else : ?>
                        <h1 class="archive-title"><?php esc_html_e('Latest Posts', 'impexusone'); ?></h1>
                    <?php endif; ?>
                </header>

                <div class="posts-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('card card-hoverable'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="card-image-link">
                                    <?php the_post_thumbnail('impexusone-card', array('class' => 'card-image')); ?>
                                </a>
                            <?php endif; ?>
                            
                            <div class="card-content">
                                <?php impexusone_category_badge(); ?>
                                
                                <h2 class="card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <div class="card-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <div class="card-meta">
                                    <span class="card-date"><?php echo get_the_date(); ?></span>
                                    <span class="card-reading-time"><?php echo impexusone_get_reading_time(); ?> min read</span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <?php
                // Pagination
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<span class="material-symbols-outlined">chevron_left</span>' . esc_html__('Previous', 'impexusone'),
                    'next_text' => esc_html__('Next', 'impexusone') . '<span class="material-symbols-outlined">chevron_right</span>',
                ));
                ?>

            <?php else : ?>
                
                <div class="no-results">
                    <span class="material-symbols-outlined no-results-icon">search_off</span>
                    <h2><?php esc_html_e('Nothing Found', 'impexusone'); ?></h2>
                    <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'impexusone'); ?></p>
                    <?php get_search_form(); ?>
                </div>

            <?php endif; ?>
        </div>

        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <aside class="blog-sidebar">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </aside>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
