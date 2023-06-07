 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
$section_id= '29';
?>			
			<div class="col-lg-7 col-md-9 col-sm-10 our-services pt-sm-5 text-center m-auto pb-3">
        		<h3>
        		    <?php echo get_field('main_title_pricing',$section_id);?> 
        		   
        		</h3>
        		 <p><?php echo get_field('content_for_main_title',$section_id);?> </p>
        	</div>
        	<div class="row px-3 py-4">
        		<div class="col-md-4 pb-md-1 pb-4 px-sm-3 px-0">
        			<div class="accuracy_box pricing-box text-center px-3 pt-2 pb-3">
        				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/request-pricing-blue.png">
        				<h5><?php echo get_field('sub_title_1',$section_id);?></h5>
        				<?php $content_lead = get_field('content_for_title_1',$section_id);?>
						<?php echo $content_lead; ?>
        				<div class="request-blue">
        					<a href="#request_pricing_sec" class="scrollTo">REQUEST PRICING</a>
        				</div>
        			</div>
        			</div>
        		<div class="col-md-4 pb-md-1 pb-4 px-sm-3 px-0">
        				<div class="accuracy_box pricing-box text-center px-3 pt-2 pb-3">
        					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/request-pricing-purple.png">
        					<h5><?php echo get_field('sub_title_2',$section_id);?></h5>
        					<?php $content_lead = get_field('content_for_title_2',$section_id);?>
						    <?php echo $content_lead; ?>
        					<div class="request-purple">
        						<a href="#request_pricing_sec" class="scrollTo">REQUEST PRICING</a>
        					</div>
        		    	</div>
        			</div>
        		<div class="col-md-4 pb-md-1 pb-4 px-sm-3 px-0">
					<div class="accuracy_box pricing-box text-center px-3 pt-2 pb-3">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/request-pricing-orange.png">
						<h5><?php echo get_field('sub_title_3',$section_id);?>
						</h5>
						<?php $content_lead = get_field('content_for_title_3',$section_id);?>
						<?php echo $content_lead; ?>
						<div class="request-orange">
							<a href="#request_pricing_sec" class="scrollTo">REQUEST PRICING</a>
						</div>
					</div>
				</div>
        	</div>