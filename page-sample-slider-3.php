<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>



	<section class="faqs-section py-md-5" style="padding-top: 10rem !important;">
<!-- 		<div class="container">
			<div class="row">
    			<div class="col-12 text-center faqs_text px-0 pt-5 pb-4">
        			  <?php $sub_heading = get_field('heading_after_banner');?>
        			<h3><?php echo $sub_heading; ?></h3>
        		    <div class="col-lg-8 col-12 pt-4 faqs_text-heading px-md-0">
        				<?php the_content();?>	
        			</div>
    		    </div>
	        </div>
	  	</div> -->
		<div class="container">
    		<div class="row px-1 px-sm-3">
			<?php 
				$terms_array = array( 
				  'taxonomy' => 'faqs_categories', 
				  'parent'   => 0 
				);
				$services_terms = get_terms($terms_array); 
				$k=1; ?>
				<div class="col-md-12  px-0 column-accordian">
					<ul class="nav border"> <!-- flex-column -->
					<?php foreach($services_terms as $service): ?>
						<li class="nav-item">
							<a class="nav-link <?php if($k==1){echo 'active';}else{echo '';}?> h_faq_check" data-toggle="tab" h_faq_id="<?php echo $k;?>-accordian" href="#"><?php echo $service->name; ?></a>
						</li>
					<?php $k++;
					endforeach;?>  	
					</ul>
				</div>
				<?php 
				$i=1; $j=1; ?>
				<div class="tab-content col-md-12 border px-0 accordion-section">
				<?php foreach($services_terms as $service):
					$post_args = array(
					  'posts_per_page' => -1,
					  'post_type' => 'frequent_asked_ques',
						'order' => 'ASC',
					  'tax_query' => array(
						  array(
							  'taxonomy' => 'faqs_categories', 
							  'field' => 'term_id', 
							  'terms' => $service->term_id,
						  )
					  )
				);
				$myposts = get_posts($post_args);?>
    				<div class="accordion tab-pane <?php if($j==1){echo 'active';}else{echo '';}?> h_faq_hide" id="<?php echo $j;?>-accordian" role="tablist" aria-multiselectable="true">
						<?php
					    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="card">
								<div class="card-header py-4" id="heading<?php echo $j;?>-<?php echo $i;?>">
									<h5>
										<button class="btn btn-link faq-head <?php if($i==1){echo '';}else{echo 'collapsed';}?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $j;?>-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>-<?php echo $i;?>"><?php the_title(); ?></button>
										<a class="float-right toggle-circle <?php if($i==1){echo 'minus';}else{echo 'plus collapsed';}?>" href="#" data-toggle="collapse" data-target="#collapse<?php echo $j;?>-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>-<?php echo $i;?>"></a> 
									</h5>
								</div>
		
								<div id="collapse<?php echo $j;?>-<?php echo $i;?>" class="collapse <?php if($i==1){echo 'show';}else{echo '';}?>" aria-labelledby="heading<?php echo $j;?>-<?php echo $i;?>" data-parent="#<?php echo $j;?>-accordian">
									<div class="card-body border mx-4 p-md-4 p-2">
									<?php the_content();?>	
									</div>
								</div>
								<?php  
								$i++; ?>
							</div>
						<?php 
						endforeach;
						$i=1;
						$j++;  ?>
					</div>
					<?php 
					endforeach;
					wp_reset_postdata(); ?>
    			</div>
    		</div>
    	</div>
	</section>


	<style>
				
		a#dot-0, footer, .mobile_view, .assive-home-page{
			display: none !important;
		}
		.assivo-help img.testimonial-image{
			width: 25% !important;
		}
		.assivo-help img.company-logo{
			width: 30% !important;
		}
		.bg-content-service.quote blockquote{
			padding-top: 90px;
			padding-bottom: 10px;
			margin-top: 50px;
			min-height: 405px;
		}
		.testimonial-bottom {
			margin-bottom: 20px;
		}
		.customNav button{
			bottom: 50% !important;
		}
		@media (max-width: 575px){
			.owl-prev {
				left: -5%;
			}
			.owl-next {
				right: -4%;
			}
		}
		
	</style>

	<section class="use-case assivo-help pt-5">
		<div class="container">
				<div class="row px-sm-0 px-2 mx-auto">
					<div class="col-md-10 pb-md-3 pb-0 explore_text lower-heading text-center mx-auto advantage-heading">
						<h3>CUSTOMER TESTIMONIALS ON MOBILE</h3>
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
					<div id="h_testimonial_nav"  class="owl-nav customNav"></div>
				</div>
		</div>
</section>



<!-- <section class="use-case assivo-help pt-5">
	<div class="container">
		<div class="row px-sm-0 px-2 mx-auto">
			<div class="col-md-10 pb-md-3 pb-0 explore_text lower-heading text-center mx-auto advantage-heading">
				<h3>CUSTOMER TESTIMONIALS ON MOBILE</h3>
				<br>
			</div>
		</div>
		
			<div class="explore_tabs row text-center mw-100 mx-auto position-relative">
				<div class="row pb-md-4 data-entry-tabs owl-h-testimonial owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
					<?php

					$ids_args = [
						'post_type'      => 'use_case',
						'posts_per_page' => -1,
						'order'          => 'ASC',
						'fields'         => 'ids'
					];
					$all_posts_ids = get_posts( $ids_args );
					$move_to_front   = [959,999,971,2171];
					$post_ids_merged = array_merge( $move_to_front, $all_posts_ids );
					$reordered_ids   = array_unique( $post_ids_merged );
					$args = [
						'post_type'      => 'use_case',
						'posts_per_page' => -1,
						'post__in'       => $reordered_ids,
						'orderby'        => 'post__in',
						'order'          => 'DESC'
					];

					// 							$args = array( 'post_type' => 'use_case', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<a href="<?php echo get_permalink();?>" class="item px-2">
						<div class="case_item py-sm-4 px-4 bg-white"> 
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
				</div>
				<div id="h_testimonial_nav"  class="owl-nav customNav"></div>
			</div>
		</div>
</section>
 -->







	
<?php get_footer(); ?>