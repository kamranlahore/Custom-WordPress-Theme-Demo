<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
get_header(); 

 ?>

	<section class="use-case mt-lg-5 mt-0 pt-lg-3">
		<div class="container">
			<div class="row">
<!-- 				<div  class="col-12 our-services pt-md-5 pt-2 text-center"> -->
<!-- 			      <h3>
				  	OUR SERVICES
			      </h3> -->
		        </div>
				<?php
					$args = array(
						'post_parent' => 338,
						'post_type' => 'page',
						'order' => 'ASC'
					);

					$child_query = new WP_Query( $args );
					$h_index = 0;
					?>

					<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

					<div class="col-12 p-0 <?php if($h_index != 0) echo 'mt-4'; ?> ">
					<?php	if($i%2){
						  ?>
							<div class="row <?php if($h_index != 0) echo 'py-lg-4'; ?> d-flex flex-row-reverse mw-100 mx-auto <?php post_class(); ?>">
								<div class="col-lg-6 col-md-6 col-12 pb-3 services-section px-lg-5 px-md-3 px-4">
									<?php	$image1 = get_field('homepage_service_icon'); ?>
									<img src="<?php echo $image1['url'];?>" /><br>
									<h3><?php the_title();?></h3>
									<?php $detailed = get_field('homepage_service_content');?>
									<p> <?php echo $detailed; ?></p>
<!-- 									<div class="assivo-learn-more purple_learn"><a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink();?>">LEARN MORE</a></div><div class="assivo-learn-more"><a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a></div> -->
									<div class="assivo-learn-more purple_learn">
										<a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink(47);?>">What We Do</a>
									</div>
									<div class="assivo-learn-more">
										<a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('17');?>">Customer Success Stories</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 pt-lg-0 pt-md-4 pr-lg-4 pl-lg-0 pr-md-0 px-4">
									<?php	$image2 = get_field('homepage_service_image'); ?>
									<img src="<?php echo $image2['url'];?>" />
								</div>
							</div>
						  <?php
						}
						else{?>
							<div class="row <?php if($h_index != 0) echo 'py-lg-4'; ?> mw-100 mx-auto <?php post_class(); ?>">
								<div class="col-lg-6 col-md-6 col-12 pb-3 services-section px-lg-5 px-md-3 px-4">
									<?php $image1 = get_field('homepage_service_icon'); ?>
									<img src="<?php echo $image1['url'];?>" /><br>
									<h3><?php the_title();?></h3>
									<?php $detailed = get_field('homepage_service_content');?>
									<p> <?php echo $detailed; ?></p>
<!-- 									<div class="assivo-learn-more purple_learn"><a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink();?>">LEARN MORE</a></div><div class="assivo-learn-more"><a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a></div> -->
									<div class="assivo-learn-more purple_learn">
										<a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink(47);?>">What We Do</a>
									</div>
									<div class="assivo-learn-more"><a class="text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('17');?>">Customer Success Stories</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 pt-lg-0 pt-md-4 pl-lg-4 px-md-0 px-4 pt-2">
									<?php	$image2 = get_field('homepage_service_image'); ?>
									<img src="<?php echo $image2['url'];?>" />
								</div>
							</div>
						<?php
						}
						$i++;
						$h_index++;
						?>
					</div>	
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

	<section class="text-center explore my-1 pb-md-3 bg-colour">
			<?php get_template_part( 'template-parts/use_cases', 'none' );?>
	</section>
	
	<section class="text-center explore my-1 pt-md-3 ">
		<?php get_template_part( 'template-parts/case_studies', 'none' );?>
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
	
	<section class="my-3 pt-3">
		<?php get_template_part( 'template-parts/software_tools', 'none' );?>
	</section>

	<div id="request-proposal">
	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>			
	</div>
	

<?php get_footer();