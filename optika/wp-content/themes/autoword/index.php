<?php
/*
Theme Name: autoword
Description: Global Styles for older IE versions (previous to IE9).
*/

get_header(); ?>

	<div >

			<?php if ( is_home() && ! is_front_page() ) : ?>
			<?php endif; ?>

			<?php
			get_template_part( 'content', get_post_format() );
		// If no content, include the "No posts found" template.

		?>
	</div><!-- .content-area -->

<?php get_footer(); ?>
