<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
get_header(); 

 ?>

	<section class="use-case">
		<div class="container">
			<div class="row no-gutters">
<!-- 				<div class="col-md-8 py-2 mt-2 mb-5 flat-box mx-auto header-short-desc">
					<p>	<?php echo get_field('header_box_description');?>
					</p>
				</div> -->
<!-- 				<div class="col-8 mx-auto text-center get-started mb-5 req-proposal">
					<a href="#request-proposal">REQUEST A PROPOSAL</a>
				</div> -->
				<div class="col-12 px-2 pb-5 mb-3">	<!--table-content-case-study-start-->
					<div class="row">
						<?php $counter = 1; ?>
						<?php
					$i=1;
					$args = array( 'post_type' => 'case_studies','order' => 'ASC', 'posts_per_page' => 12 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$post_id = get_the_ID();
					$taxonomies=get_taxonomies('','names');
					$taxo=wp_get_post_terms($post_id, $taxonomies,  array("fields" => "slugs"));
					$length = count($taxo);
				?>
						<div class="co-12 col-sm-6 col-md-6 col-lg-3 pl-pr pt-3 text-center">
							<div class="number"><?php echo $counter; ?></div>
							<div class="case-study-table-content">
								
							<?php $counter = $counter + 1; ?>
								<?php $image = get_field('use_case_icon');?>
							<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
							<div class="table-content-detail">
							<h2><?php echo wp_trim_words( the_title(),3, '...' );?></h2>
							<p>
								<?php echo get_field('case_study_short_description'); ?></p>
									<?php
									$company_stage = get_field('company_stage');
									if( $company_stage): ?>
									<p>
										<?php foreach( $company_stage as $company_stage ): ?>
											<?php echo $company_stage; ?>
										<?php endforeach; ?>
									</p> 
									<?php endif; ?>
							</div>
								<div class="learn_more text-center">
									<a href="#case-study-<?php echo get_the_ID() ; ?>" class="case-study-link" id="case-study-btn-<?= get_the_ID() ;?>" data-target="#collapse<?php echo get_the_ID() ;?>">LEARN MORE</a>
								</div>
							</div>
						</div>
						<?php
					$i++;
					endwhile;
				?>

					</div>
				</div>
				<div class="col-12 mx-auto text-center">
					<div class="get-footer advantage-btn">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a>
					</div>
				</div>
			</div>
		</div>
	</section>
				
			<?php get_template_part( 'template-parts/how_it_works', 'none' );?>

		<section class="use-case colapseable-item">
		<div class="container">
			<div class="row no-gutters">
				<?php $counter = 1; ?>
				<?php
					$i=1;
					$args = array( 'post_type' => 'case_studies','order' => 'ASC', 'posts_per_page' => 12 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$post_id = get_the_ID();
					$taxonomies=get_taxonomies('','names');
					$taxo=wp_get_post_terms($post_id, $taxonomies,  array("fields" => "slugs"));
					$length = count($taxo);
				?>
		<div class="col-12" id="case-study-<?php echo get_the_ID() ; ?>">
		<div id="case-accordion" class="case_accordion">
		<div class="container">
			<div class="row pt-2">
				<div class="col-12">
				<div class="accordion" id="case-study-accordion">
					<div class="<?php if($i==1){echo '';}else{echo 'mt-md-4';}?>">
						<!--Heading-->
							<div class="number"><?php echo $counter; ?> </div>
							<?php $counter = $counter + 1; ?>
							<div class="card-header px-md-2 p-0" id="heading<?php echo get_the_ID() ;?>">
								<div class="container p-0">
									<h5 class="mb-0">
										<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo get_the_ID() ;?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID() ;?>">
											<?php $image = get_field('use_case_icon');?>
						<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/> 
											<p><?php echo wp_trim_words( the_title(),3, '...' ); ?></p>
											<span class="client-company"><i><?php the_field('client_company'); ?></i></span>
										</button>
										<a class="float-right toggle-i-circle i-plus collapsed" href="#" data-toggle="collapse" data-target="#collapse<?php echo get_the_ID() ;?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID() ;?>"></a> 
									</h5>
								</div>
							</div>
							<!--Heading end-->
							<div id="collapse<?php echo get_the_ID() ;?>" class="collapse" aria-labelledby="heading<?php echo get_the_ID() ;?>" data-parent="#case-study-accordion">
								<div class="card-body px-2 py-0">
									<div class="container px-0">
										<!--body-->
										<div class="col-md-12 det_study pb-2 <?php if($i==1){echo "mt-2";}else{echo "mt-5";}?>">
					<div class="content_study mt-xl-0 mt-4 p-sm-0 pt-4 pt-s-5">
						<?php
							$company_stage = get_field('company_stage');
							if( $company_stage): ?>
<!-- 							<span>Client:
								<?php foreach( $company_stage as $company_stage ): ?>
									<?php echo $company_stage; ?>
								<?php endforeach; ?>
							</span> -->
							<?php endif; ?>
						
						<div class="row mx-auto px-2 mt-4 h_max-content">
							<div class="col-12 contnt_div">
								<div class="study_boxes pb-2">
									<h3>The Client Company</h3>
									<p><?php echo get_field('problem__challenge'); ?></p>
								</div>
							</div>
							<div class="col-12 contnt_div">
								<div class="study_boxes pb-2">
									<h3>Client’s Challenges</h3>
									<p><?php echo get_field('assivo_solution'); ?></p>
								
								</div>
							</div>
							<div class="col-12 contnt_div">
								<div class="study_boxes pb-2">
									<h3><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aaassivo-blue-logo.svg" alt=""/>assivo's solution</h3>
									<p><?php echo get_field('result_paragraph_1'); ?></p>
								</div>
							</div>
							<div class="learn_more mx-auto col-lg-3 col-md-3 col-sm-4 col-6 col-s-8 col-xs-10 mt-4 mb-sm-0">
								<!-- <a href="<?php echo get_permalink();?>">LEARN MORE</a> -->
							</div>
							
						</div>
						<div class="testimonial">
							<div class="col-12 text-center">
								<div class="study_boxes pb-2">
									<h2 class="text-center"><?php echo get_field('testimonial_heading'); ?></h2>
									<blockquote><?php echo get_field('testimonial_description'); ?></blockquote>
									<p>
										<?php echo get_field('testimonial_after'); ?>
									</p>
							</div>
								
							</div>
					</div>
				</div>	
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

				
				<?php
					$i++;
					endwhile;
				?>
			</div>
		</div>
	</section>
	<script>
// 		jQuery(document).ready(function(){
// 			setTimeout(function(){
// 				let h_t = $(document).scrollTop();
// 				$(document).scrollTop(h_t - 5);
// 			}, 2000);
// 		});
		
// 				jQuery(window).scrollTo({
// 					top: jQuery(window).scrollTop() - 50,
// 					left: 0,
// 					behavior: 'smooth'
// 				});
				
// 				$('html, body').animate({
// 					scrollTop: $(this).offset().top
// 				}, 'slow');
	</script>

	<div id="request-proposal">
	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>			
	</div>


<?php get_footer();