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
    			<div  class=" offset-md-2 col-md-8 col-12 explore_text text-center">
    		      <h3>We use all of the tools and software that make you successful</h3>
    		    </div>
				
					<?php 
						$post_args = array(
							  'posts_per_page' => -1,
							  'order' => 'ASC',
							  'post_type' => 'tools_and_softwares',
							  'tax_query' => array(
								  array(
									  'taxonomy' => 'tools_categories', 
									  'field' => 'term_id', 
									  'terms' => 46,
								  )
							  )
						);
						$myposts = get_posts($post_args); ?>
						<ul class="software_tools">
						<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						  <li>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
						  </li>
						<?php endforeach;?>
						</ul>
						<?php wp_reset_postdata(); ?>
					
    			</ul>
    		</div>
    	</div>
