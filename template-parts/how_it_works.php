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
	<section class="how-it-works pt-md-5 pt-3 mt-5" style="background: url('<?php echo get_the_post_thumbnail_url($section_id,"full"); ?>') no-repeat;background-position: center bottom;background-size: cover;" id="how_work">
		<div class="container">
			<div class="col-12 work-section text-center text-white">
			     <h3><?php echo get_the_title($section_id); ?></h3>
		    </div>
			<div class="hl"></div>
			<div class="hl-r"></div>
			<div class="hl-r-r"></div>
			<div class="row px-xl-5">
				<?php for ($x = 1; $x <= 4; $x++) {?>
				<div class="col-md-3 col-sm-6 work-section-data text-center text-white pt-lg-3 pt-1 px-md-4 px-2 pb-md-0 pb-3">
					<div class="hide-img pb-sm-3">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/work-circle-<?php echo $x;?>.svg">
					</div>
					<?php $image1 = get_field('work_icon_'.$x, $section_id); ?>
					<img src="<?php echo $image1['url'];?>" /><br>
					<h4><?php echo get_field('work_title_'.$x, $section_id);?></h4>
					<?php $detailed = get_field('work_description_'.$x, $section_id);
						echo $detailed; ?>
				</div>
				<?php }?>
			</div>
<!-- 			<div class="row">
				<div class="col-lg-7 col-md-10 col-sm-9 col-12 text-center search-bar pb-5 pt-5 px-md-5 px-sm-3 px-2 mb-5 get_started">
				   <div class="searchform bg-white">
				    <?php 
					$classes = get_body_class();
					if (!in_array('page-template-landing',$classes)) { 
						echo do_shortcode('[contact-form-7 id="1235" title="Enter Your Business E-mail To Request A Consultation-All"]'); 
					}
					else{	
						echo do_shortcode('[contact-form-7 id="1245" title="Enter Your Business E-mail To Request A Consultation-Landing"]'); 
					 }
				     ?>
				   </div>
				</div>
			</div> -->
			<div class="row pb-3 px-md-5 px-4 text-center">
	    		<div class="col-12 mx-auto text-center">
					<div class="get-footer advantage-btn">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	