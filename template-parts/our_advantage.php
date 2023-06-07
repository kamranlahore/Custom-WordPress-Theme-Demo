 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
?>	

    		<div class="row pb-2 px-md-5 px-4 text-center mx-auto">
			<?php
				$args = array( 'post_type' => 'our_advantage', 'posts_per_page' => -1 ,'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					  ?>
						<div class="col-md-4 col-sm-6 col-12 advantage-data p-0">
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class=" flip-box-front">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
										<?php the_title( '<h5>', '</h5>' ); ?>
									</div>
									<div class="flip-box-back">
										<?php $image1 = get_field('flip_back_icon'); ?>
										<img src="<?php echo $image1['url'];?>" alt="" />
										<?php the_title( '<h6>', '</h6>' ); ?>
										<?php echo '<p>'.wp_trim_words( get_the_excerpt(),50, '...' ).'</p>';?>
								</div>
								</div>
							</div>
						</div>
					  <?php
					endwhile;
				?>
    			
    		</div>
    		<div class="row pb-3 px-md-5 px-4 text-center">
	    		<div class="col-12 mx-auto text-center">
				<div class="get-footer">
					<?php
					if(is_page_template( 'landing.php' )){?>
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="#request_proposal">Request A Proposal</a>
					
					<?php }else{?>
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( get_template_directory_uri() ); ?>/get-started-now">Request A Proposal</a>
					
					<?php }	?>
				
				</div>
			</div>
    		</div>
   