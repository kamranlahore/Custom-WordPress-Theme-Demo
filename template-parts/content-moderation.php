 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
$section_id= '355';
?>
	<section class="use-case">
		<div class="container">
			<div class="row">
				<div class="col-md-11 pb-5 m-auto pt-md-3">
					<div class="it-case-study-large simple pb-4">
					    <?php
							$taxonomy= 'services_categories';
							$term_id=53;
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
							<div class="container px-sm-4 py-2">
								<div class="row no-gutters">
								<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
									<div class="col-12 col-sm-6 col-md-6 col-lg-4 p-1">
										<div class="moderation-box px-xl-4">
											<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
											<h5><?php the_title(); ?></h5>
											<?php the_excerpt();?>	
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