 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

?>

	<section class="use-case pt-md-3">
		<div class="container">
			<div class="row">
				
				<div class="col-md-11 pb-5 m-auto">
					<div class="it-case-study-large omnichannel-sup simple pb-3">
					<?php
						$taxonomy= 'services_categories';
						$term_id=54;
						$term = get_term( $term_id, $taxonomy );							
						$post_args = array(
							  'posts_per_page' => -1,
							  'post_type' => 'services',
							  'order' => 'ASC',
							  'tax_query' => array(
								  array(
									  'taxonomy' => $taxonomy, 
									  'field' => 'term_id', 
									  'terms' => $term->term_id,
								  )
							  )
						);
						$myposts = get_posts($post_args); ?>
						<div class="bg-image bg-content-img">
							<h5><?php echo $term->name; ?></h5>
						</div>
						<div class="container px-4 py-2">
							<div class="row no-gutters">
								<div class="col-sm-10 our-services pt-3 text-center m-auto pb-3 px-lg-4">
									<?php $sub_heading = get_field('heading_after_banner');?>
				        				<h2><?php echo $sub_heading; ?></h2>
								</div>
							<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<div class="col-12 col-sm-6 col-md-6 col-lg-3 p-1">
									<div class="moderation-box customer_box">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
										<h5><?php the_title(); ?></h5>
										<?php // the_excerpt();?>	
									</div>
								</div>
							<?php endforeach; ?>
							</div>
						<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>