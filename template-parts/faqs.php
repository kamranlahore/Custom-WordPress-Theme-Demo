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
		    <div class=" text-center faqs_text px-0 py-3 py-md-5 mt-md-4">
    			<h3>FAQ'S</h3>
    		    </div>
	    		<div class="row px-sm-0 px-2 pb-4">
	    			<div class="col-md-10 border px-0 accordion-section">
	    				<div class="accordion" id="1-accordian">
						<?php 
							$i=1;$j=1;
							$post_args = array(
								  'posts_per_page' => -1,
								  'post_type' => 'frequent_asked_ques'
							);
							$myposts = get_posts($post_args); ?>
							<?php foreach ( $myposts as $post ) : setup_postdata( $post );
								$faqs_checkbox = get_field('faqs_checkbox');
								if( $faqs_checkbox): ?>
								
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
									<?php $i++; ?>
								</div>
							<?php endif; 	
							 endforeach;
							wp_reset_postdata(); ?>
	
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row pb-5 px-md-5 px-4 text-center">
		    		<div class="col-12 mx-auto text-center pt-2">
					<div class="get-footer">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="http://assivo.com/get-started-now/">Request A Proposal</a>
					</div>
				</div>
	    		</div>
    	</div>
	
    