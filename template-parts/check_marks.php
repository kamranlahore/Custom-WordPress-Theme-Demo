		<div class="col-12 mt-3 flat-box-landing text-left">
			<div class="row landing-request">
				<div class="col-md-12 get-started-contect">
					<div class="row">
						<div class="col-12 px-0">
							<h3>
							Let us show you the <span><img src="https://assivo.com/dev/wp-content/themes/assivo/images/aaassivo-blue-logo.svg" id="logo-mono-white"></span> assivo difference</h3>	
							<?php
								$wp_q_landing = new WP_Query( array( 'page_id'=>334 ));
									while ( $wp_q_landing->have_posts() ) :$wp_q_landing->the_post();
										the_content();
									endwhile; 
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>