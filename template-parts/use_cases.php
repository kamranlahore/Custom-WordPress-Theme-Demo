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
			<div class="col-12 explore_text mt-4"> <!-- pt-5 -->
				<h3>EXPLORE HOW WE CAN SUPPORT YOU</h3>
				<p>Search and scroll through our library of use cases, and find the right fit for your business needs. <br> Need something else? Most of our engagements are highly customized, so don't hesitate to get in touch with us and let's discuss!</p>
				<!--<div class="col-md-5 col-sm-6 col-12 text-center search-bar searchbar-home pt-4">
					<form action="#" method="get" class="searchform bg-lblue text-white py-2" role="search">
						<div class="row m-0 px-2">
							<input type="text" required class="text-white" placeholder="SEARCH" name="q">
							<button class="btn" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>-->
			</div>
		</div>
		<div class="row explore_tabs text-center mt-5">
			<?php 
			$i=1;
			$taxonomy ='uc_and_cs_categories';
			$terms = get_terms( $taxonomy, array( 'order' => 'DESC') );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					echo '<ul class="col-lg-12 nav nav-tabs p-0 d-block m-auto w-100">';
					foreach ( $terms as $term ) {
					if($i==1){?>
						<li class="nav-item d-inline-block">
							<a class="h_uc_link nav-link active" data-toggle="tab" h_id="all" href="#">All Use Cases</a>		
						</li>
						<li class="nav-item d-inline-block">
							<a class="h_uc_link nav-link" data-toggle="tab" h_id="<?php echo $term->slug;?>" href="#"><?php echo $term->name;?></a>
						</li>
					<?php }
					else{
						?>
						<li class="nav-item d-inline-block">
							<a class="h_uc_link nav-link" data-toggle="tab" h_id="<?php echo $term->slug;?>" href="#"><?php echo $term->name;?></a>
						</li>
					<?php
					}
						$i++;
					}
					echo '</ul>';
				}
		?>
		</div>
		<div class="row tab-content p-sm-0 px-2 home-usecase" id="h_usecase">
			<div id="all" class="container tab-pane active"><br>
				<div class="explore_tabs row text-center mw-100 mx-auto position-relative">
					<div class="row text-center owl-usecase owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
						<?php
						
							$ids_args = [
								'post_type'      => 'use_case',
								'posts_per_page' => -1,
								'order'          => 'ASC',
								'fields'         => 'ids'
							];
							$all_posts_ids = get_posts( $ids_args );
    						$move_to_front   = [959,999,971,2171];
    						$post_ids_merged = array_merge( $move_to_front, $all_posts_ids );
    						$reordered_ids   = array_unique( $post_ids_merged );
							$args = [
								'post_type'      => 'use_case',
								'posts_per_page' => -1,
								'post__in'       => $reordered_ids,
								'orderby'        => 'post__in',
								'order'          => 'DESC'
							];
						
// 							$args = array( 'post_type' => 'use_case', 'posts_per_page' => -1 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								  ?>
									<a href="<?php echo get_permalink();?>" class="item px-2">
										<div class="case_item py-sm-4 px-4 bg-white"> 
											<?php
												$image = get_field('use_case_icon');?>
												<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
												<?php the_title( '<h6>', '</h6>' ); 
												echo '<p>'.wp_trim_words(  get_the_excerpt(),28, '...' ).'</p>';
											?>	
										</div>
									</a>
								  <?php
								endwhile;
							?>
					</div>
					<div id="usecase_nav"  class="owl-nav customNav"></div>
				</div>
 				<div class="view-all pb-5">  <!-- mt-md-5 pb-5 pt-3 -->
					<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>use-cases/">VIEW ALL</a>
				</div>
			</div>
			<?php 
				$terms_array = array( 
				  'taxonomy' => 'uc_and_cs_categories', 
				  'parent'   => 0 
				);
				$j=2;
				$services_terms = get_terms($terms_array); 
				foreach($services_terms as $service): ?>
				
				<div id="<?php echo $service->slug;?>" class="container tab-pane"><br>
					<?php 
					$post_args = array(
						  'posts_per_page' => -1,
						  'post_type' => 'use_case', 
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
						<div class="row text-center owl-<?php echo $j;?> owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
							<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<a href="<?php echo get_permalink();?>" class="item px-2">
									<div class="case_item py-sm-4 px-4 bg-white"> 
										<?php
											$image = get_field('use_case_icon');?>
											<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
											<?php the_title( '<h6>', '</h6>' ); 
											echo '<p>'.wp_trim_words(  get_the_excerpt(),28, '...' ).'</p>';
										?>	
									</div>
								</a>
							<?php endforeach; ?>
						</div>
						<div id="<?php echo $j;?>_nav"  class="owl-nav customNav"></div>
					</div>
					<?php $j= $j+2; ?>
					<div class="view-all mt-md-5 pb-5 pt-3">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo $service->slug;?>/?type=use-cases">VIEW ALL</a>
					</div>
					
					<?php wp_reset_postdata(); ?>
				</div>
			<?php endforeach;?>  
		</div>
	</div>

	