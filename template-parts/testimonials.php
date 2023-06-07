 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0a
 */

?>
     	<section class="container my-md-5"> <!-- mt-md-0 mt-3 -->
    		<div class="row">
    			<div  class=" offset-md-2 col-md-8 col-12 explore_text text-center">
    		      <h3>Trusted by 150+ High Performing Companies</h3>
    		    </div>
					<?php 
						$post_args = array(
							  'posts_per_page' => -1,
							  'order' => 'ASC',
							  'post_type' => 'tools_and_softwares',
							  'tax_query' => array(
								  array(
									  'taxonomy' => 'tools_categories', 
									  'field' => 'term_id',
									  'terms' => 47,
								  )
							  )
						);
						
						$myposts = get_posts($post_args); ?>
						<ul class="software_tools">
						<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						  <li>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
						  </li>
						<?php endforeach;?>
						</ul>
						<?php wp_reset_postdata(); ?>
    		</div>
    	</section>

	<style>
		.assivo-help img.testimonial-image{
			width: 23% !important;
		}
		.assivo-help img.company-logo{
			width: 28% !important;
		}
		.bg-content-service.quote blockquote{
			min-height: 410px;
		}
		.testimonial-bottom {
			padding-bottom: 20px;
		}
		.customNav button{
			bottom: 50% !important;
		}
		.owl-next {
			right: -55px;
		}
		.owl-prev {
			left: -55px;
		}
		
		@media (max-width: 1024px){
			.bg-content-service.quote blockquote {
				min-height: 470px;
			}
		}
		@media (max-width: 992px){
			.owl-prev {
				left: -45%;
			}
		}
		@media (max-width: 768px){
			.owl-prev {
				left: -5%;
			}
			.owl-next {
				right: -5%;
			}
			.bg-content-service.quote blockquote {
				min-height: 340px;
			}
			.testimonial-bottom {
				padding-bottom: 35px;
				width: 80%;
				margin: 0 auto;
			}
			.assivo-help img.testimonial-image {
				width: 17% !important;
			}
		}
		@media (max-width: 576px){
			.testimonial-bottom {
    			padding-bottom: 20px;
			}
		}
		@media (max-width: 575px){
			.testimonial-bottom {
				width: 100%;
			}
			.assivo-help img.testimonial-image{
				width: 23% !important;
			}
			.owl-prev {
				left: -4%;
			}
			.owl-next {
				right: -4%;
			}
		}
		@media (max-width: 430px){
			.bg-content-service.quote blockquote {
				min-height: 380px;
			}
			.testimonial-bottom {
				padding-bottom: 0px;
			}
		}
		
	</style>

	<section class="use-case assivo-help">
		<div class="container">
				<div class="row px-sm-0 px-2 mx-auto">
					<div class="col-md-10 pb-md-3 pb-0 explore_text lower-heading text-center mx-auto advantage-heading">
						<h3>CUSTOMER TESTIMONIALS</h3>
						<br>
					</div>
				</div>
			<div class="explore_tabs row text-center mw-100 mx-auto position-relative">
				<div class="row pb-md-4 data-entry-tabs owl-h-testimonial owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
					<?php
					$ids_args = [
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'testimonials',
						'posts_per_page' => -1,
						'paged' => $paged,
						'order' => 'ASC',
						'fields' => 'ids',
					];
					$all_posts_ids = get_posts( $ids_args );
					$testimonial_args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'testimonials',
						'posts_per_page' => -1,
						'paged' => $paged,
						'order' => 'ASC',
					);
					$myposts = get_posts($testimonial_args); $h_limit = count($all_posts_ids); 
					$h_last_id = $all_posts_ids[$h_limit - 1];
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="nav-link px-2" data-toggle="tab">
								<div class="bg-img-service pb-2">
									<div class="bg-content-service quote">
										<blockquote><?php the_content(); ?></blockquote>
										<div class="testimonial-bottom">																							<img src="<?php the_field('testimonial_image'); ?>" class="testimonial-image">
											<img src="<?php the_field('company_logo'); ?>" class="company-logo">
											<?php $designation = get_field('designation');?>
											<h4>
												<?php the_title(); ?>
												<br>
												<span class="designation"><?php echo $designation; ?></span>
											</h4>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php wp_reset_postdata(); ?>
					<div id="h_testimonial_nav"  class="owl-nav customNav"></div>
				</div>
		</div>
	</section>
