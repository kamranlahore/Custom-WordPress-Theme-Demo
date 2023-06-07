 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */


$queried_object = get_queried_object();
if(isset($_GET['type'])){
	$get_parent= $_GET['type'];	
}
else{
	$get_parent= $queried_object->post_name;
}
?>
				<div class="col-lg-3 col-md-4 col-12">
					<h2 class="bg-gradient">CATEGORIES</h2>
					<?php 
						$i=1;
						$taxonomy ='uc_and_cs_categories';
						$terms = get_terms( $taxonomy, array( 'order' => 'ASC') );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								echo '<ul class="case-list usecases">';
								foreach ( $terms as $term ) {
									
								if($i==1){?>
									<li>
<!-- 									<input type="checkbox" class="select-all-cat all-filter-check"> -->
										<a href="<?php echo esc_url( home_url( '/' ) ).$get_parent;?>" class="case-filter all-cat uc-cat" data-category="" data-type="category">
											<span class="cat-name">All Categories</span>
										</a>
									</li>
									<li>
									<input type="checkbox" class="filter-check filter" name="category">
										<?php	$image = get_field('icon_of_terms', $term);?>
										<a href="<?php echo get_term_link($term, $taxonomy);?>?type=<?php echo $get_parent;?>" class="case-filter uc-cat" data-<?php echo $taxonomy;?>="<?php echo $term->slug; ?>" data-type="<?php echo $taxonomy;?>">
<!-- style="background: url(<?php echo $image['url'];?>) left center no-repeat;" -->
											<span class="cat-name"><?php echo $term->name;?></span>
										</a>
									</li>
								<?php }
								else{
// 									echo  $term->term_id;
// print_r($queried_object);
									if(is_page(47)){
									$post_type = "use_case";
									}
									else{
									$post_type = "case_studies";
									}

									$args = array(
									'post_type' => $post_type,
									'tax_query' => array(
										array(
										'taxonomy' => $taxonomy ,
										'field' => 'term_id',
										'terms' => $term->term_id
										 )
									  )
									);
//  									$args = array( 'post_type' => 'use_case', 'posts_per_page' => -1, 'order'=> 'asc' );
									$query = new WP_Query( $args );
									if ( $query->have_posts() ){
									
					?>
									<li>
									<input type="checkbox" class="filter-check" name="category">
									<?php	$image = get_field('icon_of_terms', $term); ?>
										<a href="<?php echo get_term_link($term, $taxonomy);?>?type=<?php echo $get_parent;?>" class="case-filter uc-cat" data-<?php echo $taxonomy;?>="<?php echo $term->slug; ?>" data-type="<?php echo $taxonomy;?>">
<!-- 				 style="background: url(<?php echo $image['url'];?>) left center no-repeat;" -->
											<span class="cat-name"><?php echo $term->name;?></span>
										</a>
									</li>
								<?php
										}
								}
									$i++;
								}
								echo '</ul>';
							}
					?>
					
					<h2 class="bg-gradient mt-md-3">VERTICALS</h2>
					
					<?php
						$taxonomy ='uc_and_cs_verticals';
						$terms = get_terms($taxonomy);
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								echo '<ul class="case-list cases_vertical">';
								 ?>
								        <li>
								
								            <a href="<?php echo esc_url(home_url('/')) . $get_parent; ?>" class="case-filter all-verticals uc-cat" data-vertical="" data-type="vertical">
								                <span class="cat-name">All Verticals</span>
								            </a>
								        </li>
								
								
							<?php								
								
								foreach ( $terms as $term ) {
								?>
									<li>
									<input type="checkbox" class="filter-check" name="verticles">
									<?php	$image = get_field('icon_of_terms', $term); ?>
										<a href="<?php echo get_term_link($term, $taxonomy);?>?type=<?php echo $get_parent;?>" class="case-filter uc-cat" data-<?php echo $taxonomy;?>="<?php echo $term->slug; ?>" data-type="<?php echo $taxonomy;?>">
<!-- 		 style="background: url(<?php echo $image['url'];?>) left center no-repeat;" -->
											<span class="cat-name"><?php echo $term->name;?></span>
										</a>
									</li>
								<?php
								
								}
								echo '</ul>';
							}
					?>
					
					
				</div>