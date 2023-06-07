 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

?>	
        <div class="container">
				<div class="row">
			 		<div class="col-12 explore_text pt-sm-3"> <!-- mt-5 -->
			 	   		<h3>Customer Success Stories</h3>
			    		<p>Our client engagements speak to the strength of our service offerings and the partnerships that we have formed since our inception in 2016. <br> When our clients succeed in measurable and quantifiable ways, we succeed alongside them. </p>
		     		</div>
				</div>
		   		<div class="row explore_tabs text-center mt-4">
			<?php 
			$i=1;
			$taxonomy ='uc_and_cs_categories';
			$terms = get_terms( $taxonomy, array( 'order' => 'DESC') );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					echo '<ul class="col-lg-12 nav nav-tabs p-0 d-block m-auto w-100">';
					foreach ( $terms as $term ) {
						if($term->slug != 'data-mining' && $term->slug != 'data-transcription' ){
							if($i==1){?>
								<li class="nav-item d-inline-block">
									<a class="h_cs_link nav-link active" data-toggle="tab" h_id="all_1" href="#">All Case Studies</a>		
								</li>
								<li class="nav-item d-inline-block">
									<a class="h_cs_link nav-link" data-toggle="tab" h_id="<?php echo $term->slug;?>_1" href="#"><?php echo $term->name;?></a>
								</li>
							<?php }
							else{
								?>
								<li class="nav-item d-inline-block">
									<a class="h_cs_link nav-link" data-toggle="tab" h_id="<?php echo $term->slug;?>_1" href="#"><?php echo $term->name;?></a>
								</li>
							<?php
							}
						}
						$i++;
					}
					echo '</ul>';
				}
		?>
		</div>
		<div class="row tab-content p-sm-0 px-2 home-usecase" id="h_casestudies">
			<div id="all_1" class="container tab-pane active"><br>
				<div class="explore_tabs row text-center mw-100 mx-auto position-relative">
					<div class="row text-center owl-services owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
						<?php
							$cs_ids_args = [
								'post_type'      => 'case_studies',
								'posts_per_page' => -1,
								'order'          => 'ASC',
								'fields'         => 'ids'
							];
							$cs_all_posts_ids = get_posts( $cs_ids_args );
    						$cs_move_to_front   = [1032,1034,1031];
    						$cs_post_ids_merged = array_merge( $cs_move_to_front, $cs_all_posts_ids );
    						$cs_reordered_ids   = array_unique( $cs_post_ids_merged );
							$args = [
								'post_type'      => 'case_studies',
								'posts_per_page' => 12,
								'post__in'       => $cs_reordered_ids,
								'orderby'        => 'post__in',
								'order'          => 'ASC'
							];
// 							$args = array( 'post_type' => 'case_studies', 'posts_per_page' => -1 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								  ?>
									<div class="item it-case-study industry-case-study pb-3 mx-sm-1">
										<div class="bg-image ">
											<?php the_title( '<h5>', '</h5>' ); ?>
										</div>
										 <?php echo '<p>'.wp_trim_words( get_the_excerpt(),30, '...' ).'</p>';?>
											<a href="<?php echo get_permalink(17);?>#case-study-<?= get_the_ID();?>">LEARN MORE</a>
									</div>
								  <?php
								endwhile;
							?>
					</div>
					<div id="services_nav"  class="owl-nav customNav"></div>
				</div>
				<div class="view-all mt-md-5 pb-5 pt-3">
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>case-study">VIEW ALL</a>
				</div>
			</div>
			<?php 
				$terms_array = array( 
				  'taxonomy' => 'uc_and_cs_categories', 
				  'parent'   => 0 
				);
				$i=1;
				$services_terms = get_terms($terms_array); 
				foreach($services_terms as $service): ?>
				
				<div id="<?php echo $service->slug;?>_1" class="container tab-pane"><br>
					<?php 
					$post_args = array(
						  'posts_per_page' => -1,
						  'post_type' => 'case_studies', 
						  'tax_query' => array(
							  array(
								  'taxonomy' => 'uc_and_cs_categories', 
								  'field' => 'term_id', 
								  'terms' => $service->term_id,
							  )
						  )
					);
					$myposts = get_posts($post_args); ?>
					<div class="explore_tabs row text-center mw-100 mx-auto position-relative">
						<div class="row text-center owl-<?php echo $i;?> owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
							<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<div class="item it-case-study industry-case-study pb-3 mx-1">
									<div class="bg-image ">
										<?php the_title( '<h5>', '</h5>' ); ?>
									</div>
									 <?php echo '<p>'.wp_trim_words( get_the_excerpt(),30, '...' ).'</p>';?>
										<a href="<?php echo get_permalink(17);?>#case-study-<?= get_the_ID();?>">LEARN MORE</a>
								</div>
							<?php endforeach; ?>
						</div>
						<div id="<?php echo $i;?>_nav"  class="owl-nav customNav"></div>
					</div>
					<?php $i++; ?>
					<div class="view-all mt-md-5 pb-5 pt-3">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo $service->slug;?>/?type=case-study">VIEW ALL</a>
					</div>
					<?php $i++; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			<?php endforeach;?>  
		</div>
	</div>

	