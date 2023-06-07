 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
$section_id= '355';
?>
	<section class="pt-5 pb-5 mt-md-4 request-pricing-model">
		<div class="container px-lg-4">
				<div class="col-md-10 col-12 mb-4 our-services flexible-model mx-auto text-center">
					<h3><?php echo get_field('main_section_heading');?></h3>	
				</div>
				<?php for ($x = 1; $x <= 4; $x++) {?>
			<div class="row p-0  my-4 boxx">
				
					<div class="col-md-3 px-0 p-3 flat-model-box text-center">
						<div class="pricing-model">
							<img src="<?php echo get_field('icon_model_'.$x);?>" alt="" />
							<h3><?php echo get_field('title_model_'.$x);?></h3>
						</div>
					</div>
					<div class="col-md-9 p-3">
						<div class="data-security">
							<p><?php echo get_field('content_model_'.$x);?></p>
						</div>
						
					</div>
					
				
			</div>
			<?php }?>
			<div class="row py-4">
				<div class="request-purple col-lg-3 col-md-4 col-6 mx-auto">
					<a href="#request_pricing">REQUEST PRICING</a>
				</div>
			</div>
			
		</div>
	</section>
	
	