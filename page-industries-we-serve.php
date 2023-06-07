<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>

	<section class="use-case mb-4">
		<div class="container">
			<div class="row">
				<div  class="col-12 our-services text-center m-0 m-auto">
					<?php echo get_field('company_growth');?>
				</div>
		    </div>
		    <div class="row pt-md-4 industries_server">
				<div class="col-xl-4 col-sm-6 py-3"> 
					<div class="it-case-study lead-genr pb-2">
						<div class="bg-image bg-lead">
							<h5><?php echo get_field('point-1_title');?></h5>
						</div>
						<p><?php echo get_field('point-1_content');?></p>
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 py-3">
					<div class="it-case-study lead-genr pb-2">
						<div class="bg-image bg-lead">
							<h5><?php echo get_field('point-2_title');?></h5>
						</div>
						<p><?php echo get_field('point-2_content');?></p>
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 py-3 offset-sm-3 offset-xl-0">
					<div class="it-case-study lead-genr pb-2">
						<div class="bg-image bg-lead">
							<h5><?php echo get_field('point-3_title');?></h5>
						</div>
						<p><?php echo get_field('point-3_content');?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 pt-5 industries-para text-center pb-md-3">
					<p><?php echo get_field('point_description');?></p>
				</div>
			</div>
			<div class="row pt-3">
			<?php
						
				$terms = get_terms( 'uc_and_cs_verticals' );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						
						foreach ( $terms as $term ) {
						?>
							<div class="col-lg-3 col-md-4 col-sm-6 round-thumbnail h-fix-circle px-xl-5 px-sm-2 pt-sm-0 pt-sm-5 p-1">
								<img src="<?php echo get_field('image_of_vertical',$term);?>" alt="">
								<h6><?php echo $term->name;?></h6>
								<div class="circle"></div>
							</div>
						<?php
						}
				}
			?>
			</div>
		</div>
	</section>
<?php if(isset($_GET['dev'])){
	 if($_GET['dev']=="1"){ ?> 
	<section id="case-accordion" class="case_accordion py-md-5">
		<div class="container">
			<div class="row pt-2">
				<div class="col-12">
					<div class="accordion" id="accordionExample">
					<?php 
						$i=1;
						$j=1;
						$terms_array = array( 
						  'taxonomy' => 'uc_and_cs_verticals',
						  'parent'   => 0 
						);
						$services_terms = get_terms($terms_array); 
						foreach($services_terms as $service_terms): ?>
						<div class="card <?php if($i==1){echo '';}else{echo 'mt-md-4';}?>">
							<div class="card-header px-md-2 p-0" id="heading<?php echo $i;?>">
								<div class="container p-0">
									<h5 class="mb-0">
										<button class="btn btn-link link <?php if($i==1){echo '';}else{echo 'collapsed';}?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
											<img src="<?php echo get_field('icon_for_vertical',$service_terms);?>" alt="">
											<p><?php echo $service_terms->name;?></p>
										</button>
										<a class="float-right toggle-i-circle <?php if($i==1){echo 'i-minus';}else{echo 'i-plus collapsed';}?>" href="#" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>"></a> 
									</h5>
								</div>
							</div>
							<div id="collapse<?php echo $i;?>" class="collapse <?php if($i==1){echo 'show';}else{echo '';}?>" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordionExample">
								<div class="card-body px-2 py-0">
									<div class="container px-4">
										<h3>Case Studies</h3>
										<?php 
											$post_args = array(
												  'posts_per_page' => -1,
												  'post_type' => 'case_studies', 
												  'tax_query' => array(
													  array(
														  'taxonomy' => 'uc_and_cs_verticals', 
														  'field' => 'term_id', 
														  'terms' => $service_terms->term_id,
													  )
												  )
											);
											$myposts = get_posts($post_args); ?>
											<div class="row text-center pt-4 owl-<?php echo $j;?> owl-carousel owl-theme owl-nav-outer mx-auto">
											<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
											  <div class="item it-case-study industry-case-study pb-3 mx-2 <?php echo $var_value; ?>">
												<div class="bg-image ">
													<?php the_title( '<h5>', '</h5>' ); ?>
												</div>
												 <?php echo '<p>'.wp_trim_words( get_the_excerpt(),24, '...' ).'</p>';?>
													<a href="<?php echo get_permalink();?>">LEARN MORE</a>
											</div>
											<?php endforeach; // Term Post foreach ?>
											</div>
											<div id="<?php echo $j;?>_nav"  class="owl-nav customNav"></div>
									</div>
									<?php $j++; ?>
										<div class="use-case-industry pb-3 px-4">
											<h3>Use Cases</h3>
											<?php 
											$post_args = array(
												  'posts_per_page' => -1,
												  'post_type' => 'use_case', 
												  'tax_query' => array(
													  array(
														  'taxonomy' => 'uc_and_cs_verticals', 
														  'field' => 'term_id', 
														  'terms' => $service_terms->term_id,
													  )
												  )
											);
											$myposts = get_posts($post_args); ?>
											<div class="row owl-<?php echo $j;?> owl-carousel owl-theme owl-nav-outer mx-auto">
											<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
												<a href="<?php echo get_permalink();?>" class="item px-2 <?php echo $var_value; ?>">
													<div class="case_item bg-white"> 
														<?php
															$image = get_field('use_case_icon');?>
															<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
															<?php the_title( '<h6>', '</h6>' ); 
															echo '<p>'.wp_trim_words(  get_the_excerpt(),20, '...' ).'</p>';
														?>	
													</div>
												</a>
											<?php endforeach; // Term Post foreach ?>
											</div>
											
											<div id="<?php echo $j;?>_nav"  class="owl-nav customNav"></div>
										</div>
										<?php $i++; $j++; ?>
									</div>
								</div>
							</div>
						<?php wp_reset_postdata(); ?>
						<?php endforeach; // End Term foreach; ?>  
						</div>
					</div>
				</div>
			</div>
<!-- 		</div> -->
	</section>
<?php
	 } 

} 
?>
	<?php get_template_part( 'template-parts/testimonials', 'none' );?>
	
	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>

	<section class="my-3 pt-5">
		<?php get_template_part( 'template-parts/software_tools', 'none' );?>
	</section>

	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>
	
<?php get_footer();