<?php
/**
 * Search result page entry content
 *
 * @package WooVina WordPress theme
 */

// Exit if accessed directly
if(! defined('ABSPATH')) {
	exit;
}

global $post;

// Excerpt length
$length = apply_filters('woovina_search_results_excerpt_length', '30'); ?>

<div class="search-entry-summary clr"<?php woovina_schema_markup('entry_content'); ?>>
    <p>
	    <?php
	    // Display excerpt
	    if(has_excerpt($post->ID)) {
		    the_excerpt();
		}

		// Display custom excerpt
		else {
		    echo wp_trim_words(strip_shortcodes($post->post_content), $length);
		} ?>
    </p>
</div><!-- .search-entry-summary -->