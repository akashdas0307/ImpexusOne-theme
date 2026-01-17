<?php
/**
 * Page Template (default)
 *
 * @package ImpexusOne
 */

get_header();
?>

<div class="container">
    <?php impexusone_breadcrumbs(); ?>
    
    <article id="page-<?php the_ID(); ?>" <?php post_class('page-default'); ?>>
        
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="page-thumbnail">
                <?php the_post_thumbnail('impexusone-hero'); ?>
            </div>
        <?php endif; ?>
        
        <div class="page-content prose">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
        
    </article>
</div>

<?php
get_footer();
