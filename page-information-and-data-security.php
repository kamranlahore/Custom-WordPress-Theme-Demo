<?php
/**
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>
<br>
<section class="use-case security mt-lg-4 mt-3">
		<div class="container">
				<div class="col-md-10 col-12 text-center faqs_text mx-auto">
					<?php the_content()?>
				</div>
			
			<?php get_template_part( 'template-parts/certification-icons', 'none' );?>
			
				<section class="row pt-3 pb-5">
					<?php for ($x = 1; $x <= 6; $x++) {?>
					<div class="col-lg-4 col-sm-6 pb-md-1 py-md-4 py-2">
						<div class="value-data data-information">
							<div class="data-security">
								<img src="<?php echo get_field('security_img_'.$x);?>" alt="" />
								<h3><?php echo get_field('security_field_'.$x);?></h3>
							</div>
							<p><?php echo get_field('security_content_'.$x);?></p>
						</div>
					</div>
					<?php }?>
				</section>
			</div>
		</section>

		
<?php get_template_part( 'template-parts/request_consultation', 'none' );?>
<?php get_footer();
