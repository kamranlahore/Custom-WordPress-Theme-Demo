<?php
/**
 * The template for displaying all single posts
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */


get_header();
$post_id = get_the_ID();
?>

<section class="use-case pb-5">
	<div class="container mw-100 mx-auto">
		<div class="row no-gutters col_swipe mt-1">
			<div class="col-lg-3 col-md-4 col-12 float-right client-info">
				<h2>CLIENT INFORMATION</h2>
				<ul class="case-listing company_info bg-colour">
					<li>
						<div class="company-stage">
							<span>Company Stage</span>
						</div>
						<?php
							$company_stage = get_field('company_stage');
							if( $company_stage): ?>
							<ul class="listing-content">
								<?php foreach( $company_stage as $company_stage ): ?>
									<li>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/education_edtech.png">
										<span><?php echo $company_stage; ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
							<hr>
					</li>
					<li>
						<div class="company-stage">
							<span>Industry</span>
						</div>
						<?php 
							$industries = get_field('industry');

							if( $industries ): ?>

								<ul class="listing-content">

									<?php foreach( $industries as $term_id ): ?>
										
										<li>
											<?php	
											$term = get_term( $term_id);
											$term_image = get_field('icon_of_terms', $term); ?>
											<img src="<?php echo $term_image['url'];?>" />
											<span><?php echo $term->name; ?></span>
										</li>

									<?php endforeach; ?>

								</ul>

							<?php endif; ?>
						<hr>
					</li>
					<li>
						<div class="company-stage">
							<span>Assivo Engagement Size</span>
						</div>
						<?php
							$assivo_engagement_size = get_field('assivo_engagement_size');
							if( $assivo_engagement_size): ?>
							
							<ul class="listing-content">
								<?php foreach( $assivo_engagement_size as $assivo_engagement_size ): ?>
									<li>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lead_generation.png">
										<span><?php echo $assivo_engagement_size; ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						<hr>
					</li>
					<li>
						<div class="company-stage">
							<span>Assivo Engagement Type</span>
						</div>
						
						<?php
							 $key = 'assivo_engagement_type';
							 $field = get_field_object($key); 
							 
							 if ($field) {?>
							<ul class="listing-content"> 
							
								<li>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/education_recur.png">
									<span>
									<?php 
										echo  $field['value']." ";
									 ?>
									</span>
								</li>
							
							</ul>
							<?php  }  ?>	
						<hr>
					</li>
					<!--<li>
						<div class="company-stage">
							<span>Use Cases</span>
						</div>
						<?php 
							$use_cases = get_field('use_cases');

							if( $use_cases ): ?>

								<ul class="listing-content">

									<?php foreach( $use_cases as $post_usecase ): ?>

										<li>
											<?php	
											
											$post_usecase_icon = get_field('use_case_icon', $post_usecase); ?>
											<img src="<?php echo $post_usecase_icon['url'];?>">
											<span><?php echo get_the_title( $post_usecase ); ?></span>
										</li>

									<?php endforeach; ?>

								</ul>

							<?php endif; ?>
					
					</li>-->
				</ul>
			</div>
			<div class="col-lg-9 col-md-8 col-12 mt-md-0 mt-5">
				<div class="row mw-100 my-0 mx-auto pr-sm-3 mt-4">
					<div class="col-md-12 det_study mt-2">
						<div class="header_study">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/problem.png" alt=""/>
							<h2>Problem / Challenge</h2>
						</div>
						<div class="content_study mt-xl-0 mt-4 p-sm-0 pt-2">
							<?php $problem_challanges = get_field('problem__challenge');
							echo $problem_challanges; ?>
						</div>
					</div>
					<div class="col-md-12 det_study mt-5">
						<div class="header_study">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/assivo_solution.png" alt=""/>
							<h2>assivo Solution</h2>
						</div>
						<div class="content_study mt-xl-0 mt-4 p-sm-0 pt-2">
							<?php $assivo_solution = get_field('assivo_solution');
							echo $assivo_solution; ?>
						</div>
					</div>
					<div class="col-md-12 det_study mt-5">
						<div class="header_study">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/results.png" alt=""/>
							<h2>Results Achieved</h2>
						</div>
						<div class="content_study row mx-auto px-xl-5 px-md-2 px-sm-4 px-1">
							<div class="col-sm-6 det_study mt-2">
								<div class="header_study">
									<h5>
										<?php $result_heading_1 = get_field('result_heading_1');
										echo $result_heading_1; ?>
									</h5>
								</div>
								<div class="content_study mt-xl-2 mt-4 p-sm-0 pt-2">
									<?php $result_paragraph_1 = get_field('result_paragraph_1');
									echo $result_paragraph_1; ?>
								</div>
							</div>
							<div class="col-sm-6 det_study mt-2">
								<div class="header_study">
									<h5>
										<?php $result_heading_2 = get_field('result_heading_2');
										echo $result_heading_2; ?>
									</h5>
								</div>
								<div class="content_study mt-xl-2 mt-4 p-sm-0 pt-2">
									<?php $result_paragraph_2 = get_field('result_paragraph_2');
									echo $result_paragraph_2; ?>
								</div>
							</div>
							<div class="col-sm-6 det_study mt-4">
								<div class="header_study">
									<h5>
										<?php $result_heading_3 = get_field('result_heading_3');
										echo $result_heading_3; ?>
									</h5>
								</div>
								<div class="content_study mt-xl-2 mt-4 p-sm-0 pt-2">
									<?php $result_paragraph_3 = get_field('result_paragraph_3');
									echo $result_paragraph_3; ?>
								</div>
							</div>
							<div class="col-sm-6 det_study mt-4">
								<div class="header_study">
									<h5>
										<?php $result_heading_4 = get_field('result_heading_4');
										echo $result_heading_4; ?>
									</h5>
								</div>
								<div class="content_study mt-xl-2 mt-4 p-sm-0 pt-2">
									<?php $result_paragraph_4 = get_field('result_paragraph_4');
									echo $result_paragraph_4; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pb-md-5 pb-2">
	<div class="container mt-2">
		<div class="row">
			<div class="col-md-12 det_study pb-2 <?php if($i==1){echo "mt-2";}else{echo "mt-5";}?>">
				<div class="header_study">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/related_use_cases.png" alt=""/>
					<h2>Related Use Cases</h2>
				</div>
				<div class="content_study mt-xl-0 mt-4 p-sm-0 pt-2">
					<p>Search our library of use cases and find the right fit for your business Search our library of use cases <br> and find the right fit for your business</p>
					<div class="row mx-auto px-2">
					<?php
						
						$current_taxonomies=get_taxonomies('','names');
						$current_taxo=wp_get_post_terms($post_id, $current_taxonomies,  array("fields" => "slugs"));
						$i = 0;
						$args = array( 'post_type' => 'use_case', 'posts_per_page' => -1 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$this_post = get_the_ID();
							
							$taxonomies=get_taxonomies('','names');
							$taxo=wp_get_post_terms($this_post, $taxonomies,  array("fields" => "slugs"));

								if(array_intersect($current_taxo,$taxo)&& $i < 3){
								  ?>
									<div class="col-md-4 contnt_div">
										<div class="study_boxes pb-3">
											<?php the_title( '<h5>', '</h5>' ); ?>
											<?php echo '<p>'.wp_trim_words(  get_the_excerpt(),50, '...' ).'</p>';?>
										</div>
									</div>
								  <?php
								   $i++;
								}
							endwhile;
						?>
						<div class="learn_more mx-auto col-lg-3 col-md-3 col-sm-4 col-6 col-s-8 col-xs-10 mt-4 mb-sm-0 mb-4">
							<a href="<?php echo get_permalink();?>">LEARN MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="bg-colour py-md-2 pb-4">
	<div class="container py-md-3">
		<div class="row">
			<div class="col-md-8 col-12 explore_text mx-auto pt-4">
				<h3 class="text-center">IF YOU ARE INTERESTED IN LEARNING MORE ABOUT THIS CASE STUDY, PLEASE CONTACT US</h3>
			</div>
			<div class="row get-touch-form contact_form mw-100 my-0 mx-auto pb-4">
				<div class="col-md-10 offset-md-1 case-study-form request_const">
					<div class="get-started-form-box"> 
						 <?php echo do_shortcode('[contact-form-7 id="114" title="Case Study Form"]'); ?>
					</div>
				</div>
			</div>
    		</div>
	</div>
</section>	  

	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>
	<?php get_template_part( 'template-parts/our_advantage', 'none' );?>
    <?php get_template_part( 'template-parts/request_consultation', 'none' );?>
	
<?php get_footer();