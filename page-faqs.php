<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>

	<section class="faqs-section py-md-5">
		<div class="container">
			<div class="row">
    			<div class="col-12 text-center faqs_text px-0 pt-5 pb-4">
        			  <?php $sub_heading = get_field('heading_after_banner');?>
        			<h3><?php echo $sub_heading; ?></h3>
        		    <div class="col-lg-8 col-12 pt-4 faqs_text-heading px-md-0">
        				<?php the_content();?>	
        			</div>
    		    </div>
	        </div>
	  	</div>
		<div class="container">
    		<div class="row px-1 px-sm-3">
			<?php 
				$terms_array = array( 
				  'taxonomy' => 'faqs_categories', 
				  'parent'   => 0 
				);
				$services_terms = get_terms($terms_array); 
				$k=1; ?>
				<div class="col-md-3  px-0 column-accordian">
					<ul class="nav flex-column border">
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
				<div class="tab-content col-md-9 border px-0 accordion-section">
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
	
	<section class="text-center explore my-1 pb-md-3 bg-colour">
		<?php get_template_part( 'template-parts/use_cases', 'none' );?>
	</section>

	<section class="my-3 pt-3">
		<?php get_template_part( 'template-parts/software_tools', 'none' );?>
	</section>
	
	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>
	
<?php get_footer();