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
				<div class="col-12 col-lg-8 explore_text exp-text pt-4">
					<h3>Case Studies</h3>
					<p>Search our library of use cases and find the right fit for your business Search our library of use cases and find the right fit for your business</p>	
				</div>
			</div>
			<div class="explore_tabs row text-center mt-4 mw-100 mx-auto">
				<div class="row text-center py-4 owl-services owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
						<?php 
							while ( have_posts() ) : the_post();
								$variables = get_post_meta($post->ID, 'case_studies_service', true);

							if(!empty($variables)){
								foreach( $variables as $variable):
									$h_post = get_post( $variable);
									setup_postdata($h_post);
						?>
								<div class="item it-case-study industry-case-study pb-3 mr-3">
									<div class="bg-image ">
										<h5><?php echo get_the_title( $h_post->ID ); ?></h5>
									</div>
									 <?php echo '<p>'.wp_trim_words( get_the_excerpt($h_post->ID),30, '...' ).'</p>';?>
										<a href="<?php echo get_permalink(17);?>#case-study-<?=get_the_ID();?>">LEARN MORE</a>
								</div>
						<?php
						endforeach;
 						wp_reset_postdata();
						}
					endwhile;
					?>
				</div>
				<div id="services_nav"  class="owl-nav customNav"></div>
			</div>	
			<div class="view-all mt-5 pb-5"><a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>case-study/">VIEW ALL</a></div>
		</div>    
   
		