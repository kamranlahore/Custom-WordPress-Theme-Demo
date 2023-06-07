<?php
/**
 * The template for displaying all single posts
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header('landing'); ?>

	<section class="use-case thank-you-para col-md-10 col-12 mx-auto pt-md-5 pt-3 px-md-5 px-4 pb-md-2">
		<?php
			while ( have_posts() ) : the_post();

				the_content();
			endwhile; // End of the loop.
			?>
		
	</section>
	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>
<?php get_footer();