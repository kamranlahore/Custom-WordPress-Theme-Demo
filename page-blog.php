<?php
/**
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>

	<style>
		.nav-tabs-inner{
			padding: 0;
			margin-left: -9px;
		}
		#h_blog_slider_arrows button{
			top: 410px;
		}

	</style>



	<section class="blog-slider">
		
		<?php get_template_part( 'template-parts/blog_nav', 'none' );?>
		
		<div class="blog-top-slider">
			<div class="container">	
				<div class="owl-h-blog-slider owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
					<?php
						$args = array(
						  'post_type' => 'blog',
						  'posts_per_page' => '9',
						  'orderby' => 'title',
						  'order' => 'DESC',
						);
						$blog_slider_loop = new WP_Query( $args );	
						if ( $blog_slider_loop->have_posts() ) : 
							while ( $blog_slider_loop->have_posts() ) : $blog_slider_loop->the_post(); 
								if ( get_post_meta($post->ID, 'featured_post', true)[0] == 'Featured' )  { ?>
									<div class="row">
										<div class="col-md-6 blog-slider-img">
<!-- 											https://assivo.com/dev/wp-content/uploads/2020/06/slider-img.png -->
											<img src="<?php echo get_the_post_thumbnail_url(); ?>">
										</div>
										<div class="col-md-6 blog-slider-text">
											<p class="date">
												<?php echo get_the_date(); ?> &nbsp; | &nbsp; <?php the_field('blog_min_read'); ?> read
											</p>
											<p class="heading">
												<a href="#">
													<?php the_title(); ?>
												</a>
											</p>
											<p class="slide-text">
												<?php echo wp_trim_words( get_the_content(), 70, ' ...' ); ?>
											</p>
											<?php
											$blog_slider_terms = get_the_terms( $post->ID, 'blog_categories' );
											foreach($blog_slider_terms as $blog_slider_term) {
												$blog_slider_term_icon = get_field('taxonomy_icon', $blog_slider_term->taxonomy.'_'.$blog_slider_term->term_id);
										?>
											<a class="slider-icon" href="<?php echo site_url($blog_slider_term->taxonomy.'/'.$blog_slider_term->slug); ?>">
												<img src="<?php echo $blog_slider_term_icon; ?>">
												<?php echo $blog_slider_term->name; ?>
											</a>
										<?php } ?>
										</div>
									</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php wp_reset_query() ?>
				<?php endif; ?>
				</div>
				<div id="h_blog_slider_arrows"  class="owl-nav customNav"></div>
			</div>
		</div>
	</section>





<!-- 	blog section start -->

	<section class="blog-boxes top">
		<div class="container">
			<div class="row">
        
  				<!-- Tab panes -->
  				<div class="tab-content">
					<?php 
// 					  $blog_categories = get_terms('blog_categories');
// 					  foreach($blog_categories as $blog_category) { ?>
<!-- 					  <div class="tab-pane <?php // if($count==0) { ?> active <?php // } ?>" id="<?php // echo $blog_category->slug ?>"> -->
						<?php 	
						$args = array(
						  'post_type' => 'blog',
						  'posts_per_page' => '9',
						  'orderby' => 'title',
						  'order' => 'DESC',
// 						  'tax_query' => array(
// 							array(
// 							  'taxonomy' => 'blog_categories',
// 							  'field' => 'slug',
// 							  'terms' => $blog_category->slug
// 							)
// 						  )
						);
						$blog_cat_loop = new WP_Query( $args );	
						$h_count = 1;
						?>

						<?php if ( $blog_cat_loop->have_posts() ) : ?>
							<div class="row blog-boxes-row">
						  <?php while ( $blog_cat_loop->have_posts() ) : $blog_cat_loop->the_post(); 
								
// 								print_r($blog_cat_loop); die;
								?>	

						  		<div class="col-md-4 b-box">
								<?php 
								$url = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'large', false, '' );  
								?>
				  					<img src="<?php echo $url[0]; ?>">
									<div class="b-box-text">
										<p>
											<?php echo get_the_date(); ?> &nbsp; | &nbsp; <?php the_field('blog_min_read'); ?> read
										</p>
										<p class="heading heading-title-link">
											<a href="<?php echo get_permalink($post->ID); ?>">
											<?php the_title(); ?>
											</a>
										</p>
										<?php
											$blog_terms = get_the_terms( $post->ID, 'blog_categories' );
											foreach($blog_terms as $blog_term) {
												$blog_term_icon = get_field('taxonomy_icon', $blog_term->taxonomy.'_'.$blog_term->term_id);
										?>
											<a href="<?php echo site_url($blog_term->taxonomy.'/'.$blog_term->slug); ?>">
												<?php $image = get_field('blog_icons');?>
												<img src="<?php echo $blog_term_icon; ?>">
												<?php echo $blog_term->name; ?>
											</a>
										<?php } ?>
									</div>
								</div>
								<?php
									if($h_count == 6){
										get_template_part( 'template-parts/how_it_works', 'none' );	
									}
									$h_count++;
								?>

								<?php $count++; ?>
								<?php endwhile; ?>
								<?php wp_reset_query() ?>
							</div>
							<?php endif; ?>

							</div>
							<?php // }  ?>

<!-- 						</div> <!-- tab-content -->

					</div>

					<div class="row text-center">
						<div class="mx-auto">
							<nav aria-label="Page navigation example " class="pagenation-list">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</nav>
						</div>
					</div>
			
		</div>
	</section>

<!-- 	blog section end      -->

	<section class="blog-boxes" style="display:none;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 b-box">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/blog-img-1.png">
					<div class="b-box-text">
						<p>
							April 14,2020 | 5min read
						</p>
						<p class="heading">
							We are a premier partner for all of your research and data collection needs.
						</p>
						<a href="">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
							Industry-Specific Insights
						</a>
					</div>
				</div>
				<div class="col-md-4 b-box">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/blog-img-2.png">
					<div class="b-box-text">
						<p>
							April 14,2020 | 5min read
						</p>
						<p class="heading">
							We are a premier partner for all of your research and data collection needs.
						</p>
						<a href="">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
							Industry-Specific Insights
						</a>
					</div>
				</div>
				<div class="col-md-4 b-box">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/blog-img-3.png">
					<div class="b-box-text">
						<p>
							April 14,2020 | 5min read
						</p>
						<p class="heading">
							We are a premier partner for all of your research and data collection needs.
						</p>
						<a href="">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
							Industry-Specific Insights
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>



    	<?php get_template_part( 'template-parts/request_consultation', 'none' );?>

<?php get_footer();