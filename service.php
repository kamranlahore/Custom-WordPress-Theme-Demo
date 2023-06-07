<?php
/**
 * Template Name: Service Page
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); 

	global $post;
  	$post_slug=$post->post_name;
		$file_name = explode('-', $post_slug, 2);
		$template_fname= "template-parts/".$file_name[1];		
		
		get_template_part($template_fname);
		get_template_part( 'template-parts/how_it_works', 'none' );
	
	?>
	<section class="mt-5 mb-3">
	    	<div class="container">
	    		<div class="row pt-md-3 px-sm-0 px-2 mx-auto">
	    			<div class="col-md-8 pb-md-3 pb-0 explore_text text-center mx-auto advantage-heading">
	    		      <h3>Our Advantage</h3>
	    		    </div>
	    		</div>
				<br>
	    		<?php get_template_part( 'template-parts/our_advantage', 'none' );?>
	    	</div>
	</section>
<?php 
//if(isset($_GET['dev'])){
	// if($_GET['dev']=="1"){
		$_SESSION['service_name'] = $file_name[1];
		?>
			<section class="text-center explore my-1 pb-md-3 bg-colour">
				<?php get_template_part( 'template-parts/services_usecases', 'none' );?>
			</section>
			<section class="text-center explore my-1 pt-md-3 ">
				<?php get_template_part( 'template-parts/services_casestudies', 'none' );?>
			</section>
		<?php //} 
	//} ?> 		
	<?php
		if (is_page( 'service-customer-support' )){
			get_template_part( 'template-parts/services_support-tools', 'none' );
	}
	
	get_template_part( 'template-parts/request_consultation', 'none' );
	
get_footer();