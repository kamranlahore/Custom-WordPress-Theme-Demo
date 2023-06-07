<?php
/**
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>

	<section class="about-top mt-lg-5 pt-lg-3">
		<div class="container">
			<div class="row about-row">
				<div class="col-md-6 image">
					<img src="<?php the_field('about_top_img'); ?>">
				</div>
				<div class="col-md-6 text">
					<?php the_field('text_after_banner'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/testimonials' );?>

	<section class="use-case mb-4 px-2"> <!-- pt-md-5 -->
		<div class="container">
			<div class="row">
             	<div class="col-md-9 pb-md-3 pb-0 explore_text world-flat text-center mx-auto">
					<?php $sub_heading = get_field('heading_after_banner');?>
        			<h3><?php echo $sub_heading; ?></h3>
				</div>
			</div>
			<?php for ($x = 1; $x <= 3; $x++) {?>
				<div class="row mb-4 boxx">
					<?php if ($x==2){?>
						<div class="col-md-4 flat-box assivo_logo-text">
							<div class="assivo_sol">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blue-logo-assivo.svg">
								<h4><?php echo get_field('para_heading_'.$x);?></h4>
							</div>
						</div>
					<?php } 
					else {  ?>
						<div class="col-md-4 flat-box">
							<h4><?php echo get_field('para_heading_'.$x);?></h4>
						</div>
					<?php }  ?>	
					<div class="col-md-8">
						<p><?php echo get_field('para_content_'.$x);?></p>
					</div>
				</div>
			<?php } ?>
			<div class="row">
				<div class="col-12 pb-5">
					<img src="<?php the_field('our_global_img');?>">
				</div>
			</div>
			<div class="row pb-5 px-md-5 px-sm-4 text-center">
		    		<div class="col-12 mx-auto text-center pt-2">
					<div class="get-footer">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="http://assivo.com/get-started-now/">Request A Proposal</a>
					</div>
				</div>
	    		</div>	
		</div>
	</section>

<!-- 	<section class="flat_world mb-5">
    	<div class="container pt-4">
<!--     		<div class="row world_offices mw-100 mx-auto"> -->
<!-- 			<div class="row mw-100 mx-auto">
				<div class="col-md-12 client-logos"> -->
<!-- 				</div>  -->
<!-- 				<div class="col-6 text-center mx-auto pr-md-4 py-2">
					<div class="col-md-10 pb-md-2 p-0 explore_text text-center mx-auto">
						<h3>Core</h3>
					</div>
					<ul>
					<?php for ($x = 1; $x <= 6; $x++) {?>
						<li class="row"> 
							<div class="col-md-4 col-sm-5 pr-sm-0">
								<img src="<?php echo get_field('front_office_icon_'.$x);?>" alt="" />
							</div>
							<div class="col-md-8 col-sm-7 pl-sm-0 text-sm-left text-center">
								<p><?php echo get_field('fron_office_title_'.$x);?></p>
							</div>
						</li>
					<?php } ?>
					</ul>
				</div>
				<div class="col-6 text-center mx-auto pl-md-4 py-2">
					<div class="col-md-10 pb-md-2 p-0 explore_text text-center mx-auto">
						<h3>Non-Core</h3>
					</div>
					<ul>
					<?php for ($x = 1; $x <= 6; $x++) {?>
						<li class="row"> 
							<div class="col-md-4 col-sm-5 pr-sm-0">
								<img src="<?php echo get_field('back_office_icon_'.$x);?>" alt="" />
							</div>
							<div class="col-md-8 col-sm-7 pl-sm-0 text-sm-left text-center">
								<p><?php echo get_field('back_office_title_'.$x);?></p>
							</div>
						</li>
					<?php } ?>
					</ul>
				</div> -->
<!-- 			</div>
    	</div>
    </section> -->
   <?php get_template_part( 'template-parts/how_it_works', 'none' );?> 
	 <section class="our-values pt-md-5">
    	<div class="container">
    		<div class="col-md-10 col-12 text-center faqs_text px-md-5 px-3 py-4 mt-md-3 mx-auto">
	    		<h3>OUR VALUES</h3>
	    	</div>
	    	<div class="row py-4">
				<div class="col-md-4 pb-md-1 pb-4">
					<div class="value-data-reliable value-data">
						<h3><?php echo get_field('title_1');?></h3>
						<?php echo get_field('content_1');?>
					</div>
				</div>
				<div class="col-md-4 pb-md-1 pb-4">
					<div class="value-data-fair value-data">
						<h3><?php echo get_field('title_2');?></h3>
						<?php echo get_field('content_2');?>
					</div>
				</div>
				<div class="col-md-4 pb-md-1 pb-4">
					<div class="value-data-innov value-data">
						<h3><?php echo get_field('title_3');?></h3>
						<?php echo get_field('content_3');?>
					</div>
				</div>
				<div class="col-12 pt-3">
					<img src="<?php the_field('our_values_img');?>">
				</div>
				<div class="col-12 mx-auto text-center pt-5 ">
				<div class="get-footer">
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a>
				</div>
			</div>
			</div>
			
	    </div>
    </section>

	<?php /* <section class="mt-5 py-md-5 pb-5 bg-colour">
    	<div class="container pt-4">
    		<div class="row py-md-3 px-sm-0 px-2 mx-auto">
    			<div class="col-md-8 pb-md-3 pb-0 explore_text text-center mx-auto">
    		      <h3>WHAT TO EXPECT</h3>
    		    </div>
    		</div>
    		<?php get_template_part( 'template-parts/our_advantage', 'none' );?>
    	</div>
    </section> */ ?>

    <section class="outsourcing pt-md-0 pt-5">
    	<div class="container">
			<div class="row py-md-5">
				<div class="col-md-8 pb-md-3 pb-0 explore_text text-center mx-auto">
    		   	  	<h3><?php echo get_field('main_heading-outsource',40);?></h3>
    		   	 </div>
				<div class="col-md-10 text-center ousource-section pr-md-4 pl-md-0  mx-auto">
<!--     				 <div class="boxx px-3"> -->
						<p><?php echo get_field('main_content_after_heading',40);?></p>
<!--     				</div> -->
				</div>
			</div>
    		<div class="row mb-md-5 outsource-imgs">
				<div class="col-md-6 py-md-1 py-4 text-center out-img">
					<img src="<?php echo get_field('image_Outsourcing',40);?>">
				</div>
    			
    			<div class="col-md-6 source-img text-center">
					<img src="<?php the_field('out_sourcing_img'); ?>">
    			</div>
    		</div>
		
		<div class="row mt-1 mb-4 boxx mx-auto">
			<div class="col-md-4 flat-box">
				<h4>People</h4>
			</div>
			<div class="col-md-8">
				<p><?php echo get_field('people_paragraph',40);?>
			</p>
			</div>
		</div>
		<div class="row mb-4 boxx mx-auto">
			<div class="col-md-4 flat-box">
				<h4>Process</h4>
			</div>
			<div class="col-md-8">
				<p><?php echo get_field('process_paragraph',40);?>
			</p>
			</div>
		</div>
		<div class="row mb-4 boxx mx-auto">
			<div class="col-md-4 flat-box">
				<h4>Technology</h4>
			</div>
			<div class="col-md-8">
				<p><?php echo get_field('technology_paragraph',40);?>
			</p>
			</div>
		</div>
		<div class="col-12 mx-auto text-center pt-3 pb-5 ">
			<div class="get-footer">
				<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a>
			</div>
		</div>
	</div>
    </section>
    	<section class="comparison pt-2 pb-5">
   		<?php get_template_part( 'template-parts/comparison', 'none' );?>
	</section>
	<?php /*
	<section class="faqs-section pb-md-2 py-md-3">
		<?php get_template_part( 'template-parts/faqs', 'none' );?>
	</section>
        */ ?>
	<section class="my-3 pt-5 bg-colour ">
		<?php get_template_part( 'template-parts/software_tools', 'none' );?>
	</section>
	<section class="founder-message">
		<div class="container">
			<div class="row message-top">
				<div class="col-md-12">
					<h2><?php the_field('section_heading'); ?></h2>
					<div class="message-body">
						<?php the_field('founders_message'); ?>
						<div class="text-center">
							<img src="<?php the_field('signature');?>">	
						</div>
					</div>
				</div>
			</div>
			<div class="row message-bottom">
				<div class="col-md-6 founder-img">
					<img src="<?php the_field('founders_image'); ?>">
				</div>
				<div class="col-md-6 about-founder">
					<h3><?php the_field('about_founder_heading'); ?></h3>
					<?php the_field('about_founder_text'); ?>
				</div>
			</div>
		</div>
	</section>
    	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>

<?php get_footer();