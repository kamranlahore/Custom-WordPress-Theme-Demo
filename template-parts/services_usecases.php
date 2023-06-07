 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

// $var_value = $_SESSION['service_name'];
?>
		<div class="container position-relative">
			<div class="row">
				<div class="col-12 col-lg-8 explore_text exp-text pt-5">
					<h3>Explore How We Help Comanies Scale!</h3>
					<p>Search our library of use cases and find the right fit for your business Search our library of use cases and find the right fit for your business</p>
				</div>
			</div>
			
			<div class="explore_tabs row text-center mt-4 mw-100 mx-auto">
				<div class="row text-center py-4 owl-usecase owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
					<?php 
						while ( have_posts() ) : the_post();
							$variables = get_post_meta($post->ID, 'use_case_service', true);
						
						if(!empty($variables)){
							foreach( $variables as $variable):
								$h_post = get_post( $variable);
								setup_postdata($h_post);
					?>
						<a href="<?php echo get_permalink();?>" class="item px-2">
							<div class="case_item py-sm-4 px-4 bg-white"> 
								<?php
								$image = get_field('use_case_icon', $h_post-> ID);?>
								<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
								<h6><?php echo get_the_title( $h_post->ID ); ?></h6>
								<?php
								echo '<p>'.wp_trim_words( get_the_excerpt() ,28, '...' ).'</p>';
								?>	
							</div>
						</a>
					<?php
						endforeach;
 						wp_reset_postdata();
						}
					endwhile;
					?>
				</div>
				<div id="usecase_nav"  class="owl-nav customNav"></div>
			</div>
			<div class="view-all mt-md-5 pb-5 pt-md-3"><a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>use-cases/">VIEW ALL</a>
			</div>
		</div>

		