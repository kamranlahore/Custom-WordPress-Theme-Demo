<?php
/*
Template Name: Home Page
*/
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */


get_header(); ?>
	
	<section class="marketing">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading">
					<h3>
						HOW WE ADD VALUE
					</h3>
				</div>
				<div class="col-md-4 col-10 marketing-boxes box-1 text-center">
					<h2>
						Operational Efficiency
					</h2>
					<p>
						We work with you to tighten up your operations and increase their efficiency	
					</p>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-04.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Build flexible and scalable processes turn your fixed costs into variable costs
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-05.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Capture 40-60% operating cost savings
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-06.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Incorporate automation and modern technology into your workflows
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-07.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Eliminate recruiting, training, and other HR issues with our fully-managed teams
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-10 marketing-boxes box-2 text-center">
					<h2>
						Sales & Marketing Effectiveness
					</h2>
					<p>
						We work with you to increase the effectiveness of your sales & marketing efforts with custom data
					</p>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-08.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Understand your customers and prospects better, and score/prioritize them accordingly
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-09.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Segment and personalize your marketing messages and sales outreach increase deliverability rates
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-15.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Make your sales reps more effective by providing only the highest quality and most accurate leads
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-10.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Find new prospects and leads based on your customized best fit criteria
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-10 marketing-boxes box-3 text-center">
					<h2>
						Data Enhancement
					</h2>
					<p>
						We ensure that all of your company's data is clean, enriched, and up-to-date -- enabling the best decision making and outcomes.
					</p>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-11.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Clean, standardize, convert, and deduplicate your data to make it more usable
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-12.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Enrich your data sets with custom data points to secure a competitive advantage
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-13.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Consistently acquire and mine new data from public sources to fuel your business intelligence efforts
							</p>
						</div>
					</div>
					<div class="row marketing-row text-left">
						<div class="col-3 inner-icon">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon-14.svg">
						</div>
						<div class="col-9 inner-text">
							<p>
								Transfer and convert data from customers, partners, and legacy systems to make it usable and effective
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="mb-3 px-md-5 px-4 text-center mt-lg-5">
	    	<div class="col-12 mx-auto text-center">
				<div class="get-footer">
<!-- 					<div class="get-started pt-xl-2 pt-3 pl-2 py-4 mb-1 d-xl-block service-btn">
						<a href='<?php // echo get_permalink('338');?>'>Our Services</a>
					</div> -->
					
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('338');?>">Our Services</a>
				
				</div>
				
			</div>
    	</div>
		
	</section>
	
	<?php get_template_part( 'template-parts/testimonials', 'none' );?>
	

	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>
	
	<section class="text-center explore my-1 pb-md-3 bg-colour">
		<?php get_template_part( 'template-parts/use_cases', 'none' );?>
	</section>
		
		<section class="text-center explore my-1 pt-md-3 ">
			<?php get_template_part( 'template-parts/case_studies', 'none' );?>
		</section>
	
	
	<section class="mb-3 pb-2"  id="our_advantage"> <!-- mt-5 -->
	    	<div class="container">
	    		<div class="row pt-md-3 px-sm-0 px-2 mx-auto">
	    			<div class="col-md-8 pb-md-3 pb-0 explore_text text-center mx-auto advantage-heading">
	    		      <h3>Our Advantage</h3>
	    		    </div>
	    		</div>
				<br>
	    		<?php get_template_part( 'template-parts/our_advantage', 'none' );?>
	    	</div>
	</section>
<?php if(isset($_GET['dev'])){
	 if($_GET['dev']=="1"){ ?> 
		
		
		<section class="faqs-section bg-colour pb-md-5 py-md-2">
			<?php get_template_part( 'template-parts/faqs', 'none' );?>
		</section>
		
	<?php } }  ?> 	
<!-- 	<section>
		<?php // get_template_part( 'template-parts/software_tools', 'none' );?>
	</section> -->

	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>

<?php get_footer();
