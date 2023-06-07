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

	
	<section class="use-case pb-md-5 pb-3">
		<div class="container">
       
			<div class="row">
				<div class="col-lg-6 col-md-9 col-10 our-services pt-3 text-center m-auto pb-3 px-lg-4">
					<?php $sub_heading = get_field('heading_after_banner');?>
        			<!--<h3><?php echo $sub_heading; ?></h3>-->
				</div>
				<div class="col-lg-8 col-md-10 col-11 our-services m-auto pb-3">
					<?php the_content();?>
				</div>
			</div>
        

			<?php
				$taxonomy= 'services_categories';
				$term_id= 60;
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
				<div class="row">
					<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<div class="col-md-6 px-md-4 px-3 py-2"> 
							<div class="it-case-study lead-genr pb-2">
								<div class="bg-image bg-lead">
									<h5><?php the_title(); ?></h5>
								</div>
								<?php the_excerpt();?>	
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<section class="lead-data-out mt-md-4">
	<?php
		$taxonomy= 'services_categories';
		$term_id= 63;
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
		<div class="container">
			<div class="row p-0 mw-auto">
			<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			
				<div class="col-md-4 py-2">
					<div class="accuracy_box lead-source">
						<div class="lead-padd">
						    <img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
						    <h4> <?php the_title(); ?></h4>
						 </div>
						<?php $content_lead = get_field('lead_generation_feature_content');?>
						<?php echo $content_lead; ?>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>