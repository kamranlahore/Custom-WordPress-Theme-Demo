<?php
/**
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>
<style>
	#request_proposal{
		display: none;
	}
	#request_pricing{
		display: block;
	}
</style>
	<section class="use-case mt-lg-5 mt-md-4 mt-3">
		<div class="container">
		    <div class="col-md-10 our-services capital-text text-center m-auto px-md-5">
				<?php $sub_heading = get_field('heading_after_banner');?>
        			<h3><?php echo $sub_heading; ?></h3>
        			<div class="mt-lg-4 mt-3">
					<?php the_content()?>
				</div>
			</div>
		  <!-- <div class="row pt-5">
				<div class="it-case-study-large col-12 p-0">
					<div class="col-12 px-0">
						<div class="bg-gradient px-3 py-1 text-center">
							<h3><?php echo get_field('main_ttile_size');?></h3>					
						</div>
					</div>
					<div class="row py-4 px-4 mx-auto">
						<div class="col-md-3 col-sm-6 col-12 mx-auto set-width px-md-2">
							<div class="position-relative card-wrapper" id="seed-height">
								<div class="cloud-card px-md-1">
									<div class="upper-images">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seed-home.png" alt="" id="cloud-1">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seed-img.png" alt="" id="cloud-img-1">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seed-img2.png" alt="" id="cloud-img-11">
									</div>
									<p><?php echo get_field('team_size_1');?></p>
									<div class="blue-caption"><?php echo get_field('supervisors_size_1');?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-12 mx-auto set-width px-md-2">
							<div class="position-relative card-wrapper" id="seriesa-height">
								<div class="cloud-card px-md-1">
									<div class="upper-images">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seriesa-home.png" alt="" id="cloud-2">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/series-a-img.png" alt="" id="cloud-img-2">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/series-a-img2.png" alt="" id="cloud-img-21">
									</div>
									<p><?php echo get_field('team_size_2');?></p>
									<div class="blue-caption"><?php echo get_field('supervisors_size_2');?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-12 mx-auto set-width px-md-2">
							<div class="position-relative card-wrapper " id="seriesb-height">
								<div class="cloud-card px-md-1">
									<div class="upper-images">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seriesb-home.png" alt="" id="cloud-3">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/series-b-img.png" alt="" id="cloud-img-3">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/series-b-img2.png" alt="" id="cloud-img-31">
									</div>
									<p><?php echo get_field('team_size_3');?></p>
									<div class="blue-caption"><?php echo get_field('supervisors_size_3');?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-12 mx-auto set-width px-md-2">
							<div class="position-relative card-wrapper" id="seriesc-height">
								<div class="cloud-card px-md-1">
									<div class="upper-images">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seriesc-home.png" alt="" id="cloud-4">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/series-c-img.png" alt="" id="cloud-img-4">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/series-c-img2.png" alt="" id="cloud-img-41">
									</div>
									<p><?php echo get_field('team_size_4');?></p>
									<div class="blue-caption"><?php echo get_field('supervisors_size_4');?>
									</div>
								</div>
							</div>
						</div>	
				    </div>
				</div>
			</div>-->
			<?php // get_template_part( 'template-parts/illustrative_team', 'none' );?>
        	<?php //get_template_part( 'template-parts/request_pricing', 'none' );?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>	
	
	<?php get_template_part( 'template-parts/request-pricing-model', 'none' );?>

    <section class="comparison bg-colour pt-2 pb-5">
   		<?php get_template_part( 'template-parts/comparison', 'none' );?>
    </section>
	
	<?php get_template_part( 'template-parts/testimonials', 'none' );?>

	<section class="get-in-touch pt-xl-5" id="request_pricing">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-md-8 col-12 get-touch text-center">
							<h3>REQUEST PRICING TODAY</h3>
						</div>
						<div class="row get-touch-form contact_form mw-100 my-0 mx-auto pb-4">
							<div class="col-md-10 offset-md-1 case-study-form request_const">
								 <div class="get-started-form-box"> 
									  <?php echo do_shortcode( '[contact-form-7 id="1218" title="REQUEST A CONSULTATION TODAY"]' ); ?> 		
								</div> 						
							</div>
						</div>
				   	</div>
				  </div>
		   	</div>
		  </div>
	</section>
<?php get_footer();