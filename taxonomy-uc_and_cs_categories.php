<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

$queried_object = get_queried_object();
$get_term= $queried_object->slug;
get_header('uc_cs'); 

?>
	<section class="use-case">
		<div class="container">
			<div class="row no-gutters">
				<?php get_template_part( 'template-parts/uc-cs_left-sidebar', 'none' );?>
				
				<div class="col-lg-9 col-md-8 col-12 pt-md-0 py-3 px-0">
					<div class="container">
						<div class="row no-gutters">
							<div class="col-12 pb-md-4" id="case-header">
								<h3 id="case-title">All Categories</h3>
								<input type="text" id="search-case" placeholder="Search">
							</div>
							<div class="use-case-study row">
							<?php   
							if ($_GET['type'] == 'use-cases'){?>
							<?php
								$args = array(
										  'posts_per_page' => -1,
										  'post_type' => 'use_case', 
										  'tax_query' => array(
											  array(
												  'taxonomy' => 'uc_and_cs_categories', 
												  'field' => 'slug', 
												  'terms' => $get_term,
											  )
										  )
									);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								$post_id = get_the_ID();
								$taxonomies=get_taxonomies('','names');
								$taxo=wp_get_post_terms($post_id, $taxonomies,  array("fields" => "slugs"));
								$length = count($taxo);
								  ?>
									<a href="<?php echo get_permalink();?>" class="col-lg-4 col-md-6 case-box category vertical <?php for($i = 0; $i < $length; $i++){ echo $taxo[$i].' ';}?>">
										<div class="case_item py-4 px-4 bg-white"> 
											  <?php
												$image = get_field('use_case_icon');?>
												<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
												<?php the_title( '<h6>', '</h6>' ); 
												echo '<p>'.wp_trim_words(  get_the_excerpt(),28, '...' ).'</p>';
												?>
											
										</div>
									</a>
								  <?php
								endwhile;
							?>
							<?php } ?>
							<?php if ($_GET['type'] == 'case-study'){?>
							<?php
								$args = array(
										  'posts_per_page' => -1,
										  'post_type' => 'case_studies', 
										  'tax_query' => array(
											  array(
												  'taxonomy' => 'uc_and_cs_categories', 
												  'field' => 'slug', 
												  'terms' => $get_term,
											  )
										  )
									);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								$post_id = get_the_ID();
								$taxonomies=get_taxonomies('','names');
								$taxo=wp_get_post_terms($post_id, $taxonomies,  array("fields" => "slugs"));
								$length = count($taxo);
								  ?>
									<div class="col-md-6 pl-lg-4 pl-md-1 pr-2 pl-2 py-2 category vertical study_box <?php for($i = 0; $i < $length; $i++){ echo $taxo[$i].' ';}?>">
										<div class="it-case-study pb-4"> 
											<div class="bg-image ">
												<?php the_title( '<h5>', '</h5>' ); ?>
											</div>
										   <?php echo '<p>'.wp_trim_words( get_the_excerpt(),30, '...' ).'</p>';?>
											<a href="<?php echo get_permalink();?>">LEARN MORE</a>
										</div>
									</div>
								  <?php
								endwhile;
								}	?>
								</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>
	
<?php get_footer();