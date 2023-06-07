 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

?>
	<section class="my-3 pt-5 bg-colour">
    	<div class="container pt-lg-4">
    		<div class="row">
    			<div  class="col-xl-5 col-md-7 col-12 explore_text text-center mx-auto">
    		      <h3>We Utilize all of your customer support tools</h3>
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
									  'terms' => 47,
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
    		</div>
    	</div>
    </section>