<?php
/**
 * The template for displaying all single posts
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */


get_header();
$post_id = get_the_ID();
?>
	<section class="use-case uc-detail-page">
		<div class="container">
			<div class="row">
				<div class="popup-body py-2 pr-3">
					<div class="uc-detail-heading content-popup">
						<?php
							
							while ( have_posts() ) : the_post();

								the_content();

							endwhile; 
						?>
					</div>
<!-- 					<div class="row">
						<div class="col-12 search-bar py-4 get_started">
							<form action="<?php echo get_permalink('334');?>" method="GET" class="searchform bg-white border" role="search">
						     	<div class="row m-0 ">
							   	 	<input type="text"  name="searchword" required class="col-8 col-sm-9 py-2 px-md-0 px-2" placeholder="Enter Your Business E-mail To Request A Consultation" name="a">
							    	<div class="get-started-form popup-button col-4 col-sm-3 pr-0">
										<button><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/letter-img.png"></button>
									</div>
							    </div>
					        </form>
						</div>
					</div> -->
<!-- 					<div class="case-study-pu px-md-5 px-2 text-sm-left text-center">
						<h3>Related Case Studies</h3>
						<div class="row text-center py-4 justify-content-center ">
						<?php
							
							$current_taxonomies=get_taxonomies('','names');
							$current_taxo=wp_get_post_terms($post_id, $current_taxonomies,  array("fields" => "slugs"));
						$k = 0;
							$args = array( 'post_type' => 'case_studies', 'posts_per_page' => -1 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								$this_post = get_the_ID();
								
								$taxonomies=get_taxonomies('','names');
								$taxo=wp_get_post_terms($this_post, $taxonomies,  array("fields" => "slugs"));

									if(array_intersect($current_taxo,$taxo)&& $k < 2){
									  ?>
										<div class="col-sm-5 pr-md-1 pb-3"> 
											<div class="it-case-study pb-3">
												<div class="bg-image ">
													<?php the_title( '<h5>', '</h5>' ); ?>
												</div>
												<?php echo '<p>'.wp_trim_words( get_the_excerpt(),28, '...' ).'</p>';?>
												<a href="<?php echo get_permalink();?>">LEARN MORE</a>
											</div>
										</div>
									  <?php
									  $k++;
									}
								endwhile;
							?>
							
						</div>
					</div> -->
					
			  	</div>
				
<!-- 			  	<div class="row recent_usecase">
			  		<div class="col-12 popup-right py-3 pl-3 pr-2">
			  			<h4>
			  				Related Use Cases
			  			</h4>
			  		</div>
					<?php
					$i = 0;
					$args = array( 'post_type' => 'use_case', 'posts_per_page' => -1 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$use_post = get_the_ID();
						$taxonomies_usecase = get_taxonomies('','names');
						$taxo_usecase=wp_get_post_terms($use_post, $taxonomies_usecase,  array("fields" => "slugs"));
						 if(array_intersect($current_taxo,$taxo_usecase)&& $i < 3){?>
								<div class="col-md-12 col-sm-6 case-box">
									<a href="<?php echo get_permalink();?>" class="case_item case-item-pu p-3 bg-white"> 
										<?php
											$image = get_field('use_case_icon');?>
											<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
											<?php the_title( '<h6>', '</h6>' ); 
											echo '<p>'.wp_trim_words(  get_the_excerpt(),24, '...' ).'</p>';
										?>
									</a>
								</div>
							  <?php
							 $i++;
						 }
						
						endwhile;
					?>
				</div> -->
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>
	<section class="mt-5 mb-3 pb-2"  id="our_advantage">
	    	<div class="container">
	    		<div class="row pt-md-3 px-sm-0 px-2 mx-auto">
	    			<div class="col-md-8 pb-md-3 pb-0 explore_text text-center mx-auto advantage-heading">
	    		      <h3>Our Advantage</h3>
	    		    </div>
	    		</div>
				<br>
	    		<?php get_template_part( 'template-parts/our_advantage', 'none' );?>
	    	</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials', 'none' );?>

    <?php get_template_part( 'template-parts/request_consultation', 'none' );?>
	
<?php get_footer();