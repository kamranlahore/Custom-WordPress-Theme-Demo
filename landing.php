<?php
/**
 * Template Name: Landing Page
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header('landing'); 
   	 global $post;
    	$post_slug=$post->post_name;
	$file_name = explode('-', $post_slug, 2);
	$service_type = $file_name[1];
	$template_fname= "template-parts/".$service_type;	
?>
<br><br>
		<section class="getstarted pb-2">
			<div class="banner-img">
				<img src="https://assivo.com/dev/wp-content/uploads/2020/05/New-Landing-page-background-01.svg">
			</div>
			<div class="landing-banner-text">
				<div class="container">
					<div class="row landing-row mt-lg-3 px-sm-4 px-2">
						<div class="col-lg-8 landing-service pl-lg-0">
							<div class="row">
								<div class="col-md-1 doted-img">
									<img src="https://assivo.com/dev/wp-content/uploads/2020/05/left-line.png">
								</div>
								<div class="col-md-11 col-12">
									<p class="under_line text-left my-2 pr-md-4">
										Reliable & Cost-Effective Business Process Outsourcing<br>
										Powered By Automation & Managed Offshore Teams
									</p>
									<div class="row px-lg-3 px-0 mt-lg-0 mt-4">
									<?php
										$args = array(
										'post_parent' => 338,
										'post_type' => 'page',
										'order' => 'ASC'
										);
										$child_query = new WP_Query( $args ); ?>

										<?php while ( $child_query->have_posts() ) : $child_query->the_post();
											$currentpage_id = get_the_ID();
											$currentpage_post = get_post($currentpage_id); 
											$currentpage_slug = $currentpage_post->post_name;
											$service_page_name = explode('-', $currentpage_slug, 2);

											if ($service_page_name[1] == $file_name[1] ){
											?>
											<div class="col-sm-6 it-case-study-large px-0">

												<div class="landing-service px-1">
													<?php $image2 = get_field('homepage_service_image'); ?>
													<h3><?php the_title();?></h3>
													<?php $detailed = get_field('homepage_service_content');?>
													<p> <?php echo $detailed; ?></p>
												</div>

											</div>
											<div class="col-sm-6 it-case-study-large px-0">
												<img src="https://assivo.com/dev/wp-content/uploads/2020/05/Landing-Page.svg">
		<!-- 										<img src="<?php echo $image2['url'];?>" class="p-0 float-left mw-sm-100 mr-sm-2"  /> -->
											</div>
										<?php 
												get_template_part( 'template-parts/check_marks', 'none' );
										 }
									endwhile;
									wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 flat-box get-started-box px-0 mt-lg-0 mt-3">
						<div class="form-column pb-0 pt-xl-2 pt-3 px-xl-4 px-md-3 px-2">
							<div class="get-started-form-box landing">
								<h6 class="mb-3 under_line">REQUEST A PROPOSAL TODAY</h6>
								<?php echo do_shortcode( '[contact-form-7 id="1219" title="Get Started Form"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php get_template_part( 'template-parts/testimonials_landing', 'none' );?>

	<section class="text-center explore my-1 pb-md-3 bg-colour">
		<?php get_template_part( 'template-parts/use_cases', 'none' );?>
	</section>
	
	
	<section class="mt-5 mb-3 pb-2"  id="our_advantage">
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


<!-- 	<section class="my-1 pt-md-3 case-studies">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center main-heading">
					<h3>
						Customer Success Stories
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-3 icon">
					<img src="https://assivo.com/dev/wp-content/uploads/2018/10/Cases-Study-Icon-01-2.svg">
				</div>
				<div class="col-sm-5 col-9 heading">
					<h2>
						Data Entry & Processing
					</h2>
				</div>
				<div class="col-sm-6 col-12 text-right client-company">
					<p>
						<i>E-Commerce Product Data Entry & Enrichment / Furniture Distributor</i>
					</p>
				</div>
			</div>
			<div class="row studies-content justify-content-between">
				<div class="col-md-5 testimonials">
					<div class="testimonial-inner">
						<h3 text-center>
							Client-Testimonial
						</h3>
						<blockquote>
							<p>
								With the management headaches of managing a product catalog team off my plate, I have been able to focus my efforts on tightening up our operations, developing stronger relationships with our current furniture manufacturers, and scouting the globe for new furniture manufacturers.  The efficiency and professionalism with which Assivo operates is second-to-none.
							</p>
						</blockquote>
						<p>
							- VP of Business Development									 
						</p>
					</div>
				</div>
				<div class="col-md-6 case-studies-data">
					<h3>
						The Client Company
					</h3>
					<p>
						Our client is an online retailer of mid to high-end home & outdoor furnishings and décor.  They carry and distribute over 500 furniture brands, and consistently make updates to a product catalog that consists of over 750,000 SKUs.
					</p>
					<h3>
						Client's Challenges
					</h3>
					<p>
						Our client had set up an in-house team of 12 data entry / product catalog specialists that primarily focused on interacting with their furniture brands, receiving relevant updates to product descriptions and data, and updating prices.  Their in-house team was plagued with high turnover, low productivity, high absenteeism, and poor accuracy due to their mundane and repetitive nature of this work.  This broken process was negatively impacting our clients’ relationships with their furniture brands as well as suppressing revenue and sales potential.
					</p>
					<h3>
						<img src="https://assivo.com/dev/wp-content/themes/assivo/images/aaassivo-blue-logo.svg"> assivo's solution
					</h3>
					<p>
						Assivo supplemented our clients’ in-house team with 5 full-time associates in our India Operations Center that worked during the U.S. overnight shift to start off our relationship.  Over the course of our first month of working together, it became apparent to our senior client contacts that Assivo’s team was producing more accurate, reliable, and consistent output vs. their in-house team.  Assivo’s team of 5 full-time associates updated approximately 10,000 SKUs per month, a level of output similar to our clients’ in-house team of 12 employees.
Our client eventually expanded the relationship with Assivo from 5 to 15 full-time associates, and retained 2 of their highest performing in-house employees to oversee and interface with the Assivo team.  We reliably and continuously process / update over 30,000 SKUs for our client per month, and they have been able to focus their efforts on building relationships with new furniture brands and manufacturers and expanding their business.
					</p>
				</div>
			</div>
		</div>
	</section> -->
	
	<?php	
// 		get_template_part($template_fname);
// 		get_template_part( 'template-parts/how_it_works', 'none' );
	
	?>
<!-- 	<section class="mt-5 mb-3"  id="our_advantage">
	    	<div class="container">
	    		<div class="row pt-md-3 px-sm-0 px-2 mx-auto">
	    			<div class="col-md-8 pb-md-3 pb-0 explore_text text-center mx-auto advantage-heading">
	    		      <h3>Our Advantage</h3>
	    		    </div>
	    		</div>
			<br>
	    		<?php get_template_part( 'template-parts/our_advantage', 'none' );?>
	    	</div>
       </section> -->
      
	<section class="faqs-section py-md-5">
		<div class="container">
    		<div class="row px-1 px-sm-3">
			<?php 
				$terms_array = array( 
				  'taxonomy' => 'faqs_categories', 
				  'parent'   => 0 
				);
				$services_terms = get_terms($terms_array); 
				$k=1; ?>
				<div class="col-md-12  px-0 column-accordian">
					<ul class="nav border"> <!-- flex-column -->
					<?php foreach($services_terms as $service): ?>
						<li class="nav-item">
							<a class="nav-link <?php if($k==1){echo 'active';}else{echo '';}?> h_faq_check" data-toggle="tab" h_faq_id="<?php echo $k;?>-accordian" href="#"><?php echo $service->name; ?></a>
						</li>
					<?php $k++;
					endforeach;?>  	
					</ul>
				</div>
				<?php 
				$i=1; $j=1; ?>
				<div class="tab-content col-md-12 border px-0 accordion-section">
				<?php foreach($services_terms as $service):
					$post_args = array(
					  'posts_per_page' => -1,
					  'post_type' => 'frequent_asked_ques',
						'order' => 'ASC',
					  'tax_query' => array(
						  array(
							  'taxonomy' => 'faqs_categories', 
							  'field' => 'term_id', 
							  'terms' => $service->term_id,
						  )
					  )
				);
				$myposts = get_posts($post_args);?>
    				<div class="accordion tab-pane <?php if($j==1){echo 'active';}else{echo '';}?> h_faq_hide" id="<?php echo $j;?>-accordian" role="tablist" aria-multiselectable="true">
						<?php
					    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="card">
								<div class="card-header py-4" id="heading<?php echo $j;?>-<?php echo $i;?>">
									<h5>
										<button class="btn btn-link faq-head <?php if($i==1){echo '';}else{echo 'collapsed';}?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $j;?>-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>-<?php echo $i;?>"><?php the_title(); ?></button>
										<a class="float-right toggle-circle <?php if($i==1){echo 'minus';}else{echo 'plus collapsed';}?>" href="#" data-toggle="collapse" data-target="#collapse<?php echo $j;?>-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>-<?php echo $i;?>"></a> 
									</h5>
								</div>
		
								<div id="collapse<?php echo $j;?>-<?php echo $i;?>" class="collapse <?php if($i==1){echo 'show';}else{echo '';}?>" aria-labelledby="heading<?php echo $j;?>-<?php echo $i;?>" data-parent="#<?php echo $j;?>-accordian">
									<div class="card-body border mx-4 p-md-4 p-2">
									<?php the_content();?>	
									</div>
								</div>
								<?php  
								$i++; ?>
							</div>
						<?php 
						endforeach;
						$i=1;
						$j++;  ?>
					</div>
					<?php 
					endforeach;
					wp_reset_postdata(); ?>
    			</div>
    		</div>
    	</div>
	</section>

      <?php
	 if($service_type != "machine-learning-ai-training" && $service_type != "content-moderation" ) { ?>
		<section class="py-5">
			<?php get_template_part( 'template-parts/software_tools', 'none' );?>
		</section>
	<?php } ?>
	
    <?php 
// 		get_template_part( 'template-parts/request_consultation', 'none' );
	?>
<?php	get_footer();