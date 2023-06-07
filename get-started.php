<?php
/**
 * Template Name: Get Started Now
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header('get'); ?>

	<section class="getstarted pb-2">
			<div class="container">
				<div class="row d-flex flex-row-reverse mt-lg-3 mt-md-0 mt-3 px-4">
					<div class="col-md-6 flat-box get-started-box px-0">
						<div class="form-column pb-0 pt-xl-4 pt-3 px-xl-4 px-md-3 px-2">
							<div class="get-started-form-box">
								<?php echo do_shortcode( '[contact-form-7 id="1219" title="Get Started Form"]'); ?>
							</div>
						</div>
					</div>
					<div class="col-md-6 get-started-contect pt-md-5">
						<div class="row mt-lg-3">
							<div class="col-12 mt-4 pt-lg-3">
							<h3><?php echo get_field('heading_check_marks');?></h3>
								<?php
									while ( have_posts() ) : the_post();
						
										the_content();
									endwhile; 
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	
<?php get_footer();