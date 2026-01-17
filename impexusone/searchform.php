<?php
/**
 * Search Form Template
 *
 * @package ImpexusOne
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="search-field-<?php echo esc_attr(uniqid()); ?>">
        <?php esc_html_e('Search for:', 'impexusone'); ?>
    </label>
    <div class="search-form-inner">
        <span class="material-symbols-outlined search-icon">search</span>
        <input 
            type="search" 
            id="search-field-<?php echo esc_attr(uniqid()); ?>"
            class="search-field form-input" 
            placeholder="<?php esc_attr_e('Search...', 'impexusone'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s"
        >
        <button type="submit" class="search-submit btn btn-primary">
            <?php esc_html_e('Search', 'impexusone'); ?>
        </button>
    </div>
</form>
