 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

?>

    	<div class="container pb-md-4 px-sm-3 px-2">
    		<div class="row mw-100 mx-auto">
	    		<div class="col-md-10 col-12 text-center faqs_text px-md-5 px-3 py-sm-4 pt-4 pb-2 mt-lg-3 mx-auto">
	    			<?php echo get_field('comparison_content',40);?>
	    		</div>
	    	</div>
    		<div class="row col-md-12 pt-md-2 mx-auto px-md-3 p-0">
    			<div class="table-responsive comparison-table border">          
					<table class="table mb-0">
						<thead>
						    <tr>
								<?php for ($x = 1; $x <= 4; $x++) {
									if($x==4){?>
										<th>
											<img src="<?php echo get_field($x.'_column',40);?>" alt="" />
										</th>
									<?php }
									else{?>
										<th>
											<?php echo get_field($x.'_column',40);?>
										</th>
						        <?php }
								} ?>
									
						    </tr>
						</thead>
						<tbody>
						<?php
						$args = array( 'post_type' => 'comparison', 'posts_per_page' => -1 ,'order' => 'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<tr>
								<td><?php echo the_title();?></td>
								<?php for ($x = 1; $x <= 3; $x++) {?>
								<td>
								<?php
									$field = get_field('column_'.$x);
									if( $field ):
										foreach( $field as $field ):
											if( $field == "High"):?>
											  <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/high-mobile.svg" class="d-md-block d-none mx-auto">
											   <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/high.svg" class="d-md-none d-block mx-auto"><div class="d-md-none d-block"> <?php echo $field; ?></div>
										<?php	elseif( $field == "Medium"): ?>
											  <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/medium-mobile.svg" class="d-md-block d-none mx-auto">
											   <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/medium.svg" class="d-md-none d-block mx-auto"><div class="d-md-none d-block"> <?php echo $field; ?></div>
										 <?php 	elseif( $field == "Low"): ?>
											  <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/low-mobile.svg" class="d-md-block d-none mx-auto"> 
											   <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/low.svg" class="d-md-none d-block mx-auto"><div class="d-md-none d-block"> <?php echo $field; ?></div>
										<?php	elseif ($field == "Null") : ?>
											 <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/null.svg" class="d-md-block d-none mx-auto"> <div class="d-md-none d-block"> N/A </div>
										<?php	endif;
										endforeach;
									endif; 
								 } ?>
							</tr>
						<?php endwhile; ?>
					</table>
				</div>
				<!--<div class="col-12 mx-auto text-center pt-5">
					<div class="get-footer">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="https://assivo.com/get-started-now/">Request A Proposal</a>
					</div>
				</div>-->
			</div>
			<div class="row col-12 py-4 pl-4 px-0">
				<div class="col-12 mx-auto text-center pt-3 pb-5 ">
					<div class="get-footer">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
								<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a>
					</div>
				</div>
			</div>
    	</div>
	
