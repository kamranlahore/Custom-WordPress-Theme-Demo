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
				<?php get_template_part( 'template-parts/uc-cs_left-sidebar', 'none' );?>
				<div class="col-lg-9 col-md-8 col-12 pt-md-0 py-3 px-0 right-side">
					<div class="container">
						<div class="row no-gutters">
							<div class="col-12 pb-md-4" class="case-header" id="case-header">
								<h3>All Categories</h3>
											
								<input type="text" id="search-case" placeholder="Search">
							</div>
							<div class="use-case-study row">
							<?php
							
							$args = array( 'post_type' => 'use_case', 'posts_per_page' => -1, 'order'=> 'asc' );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								$post_id = get_the_ID();
								$taxonomies=get_taxonomies('','names');
								$taxo=wp_get_post_terms($post_id, $taxonomies,  array("fields" => "slugs"));
								$length = count($taxo);
								  ?>
									<a href="<?php echo get_permalink();?>" class="col-lg-4 col-md-6 case-box category vertical <?php for($i = 0; $i < $length; $i++){ echo $taxo[$i].' ';}?>">
<!-- 										<div class="case_item p-3 bg-white mb-3">  -->
											<div class="case_item">
											  <?php
												$image = get_field('use_case_icon');?>
												<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/>
												<?php the_title( '<h6>', '</h6>' ); 
												echo '<p>'.wp_trim_words(  get_the_excerpt(),35, '...' ).'</p>';
												?>
											
										</div>
									</a>
								  <?php
								endwhile;
							?>
							</div>
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
					</div>
				</div>
			</div>
		
	</section>
	<script>
        pagename = 'usecase';
        totalcontents= 9;
    </script>
	<?php // get_template_part( 'template-parts/testimonials', 'none' );?>
	<?php get_template_part( 'template-parts/how_it_works', 'none' );?>
	
<?php get_footer();