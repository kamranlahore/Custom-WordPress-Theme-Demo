 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
$section_id= '29'; ?>			
		<div class="row py-3">    
			    <div class="it-case-study-large col-12 p-0">
					<div class="col-12 px-0 pb-3">
						<div class="bg-gradient px-0 py-1 text-center">
							<h3><?php echo get_field('main_title_cost',$section_id);?></h3>
						</div>
						<div class="operating-cost mx-3 mt-3 it-case-study-large">
							<div class="table-responsive">          
								<table class="table pricing-cost mb-0">
									<thead>
										<tr>
											<th>Team Size</th>
											<th>US In House Team</th>
											<th><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-blu.png">assivo Solution</th>
										 </tr>
									</thead>
									<?php for ($x = 1; $x <= 4; $x++) {?>
										<tbody>
											<tr>
												<td><?php echo get_field('team_'.$x,$section_id);?></td>
												<td><?php echo get_field('us_cost_'.$x,$section_id);?></td>
												<td><?php echo get_field('assivo_cost_'.$x,$section_id);?></td>
											</tr>
										</tbody>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="row pb-5 px-md-5 px-4 text-center">
		    		<div class="col-12 mx-auto text-center pt-2">
					<div class="get-footer">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="http://assivo.com/get-started-now/">Request A Proposal</a>
					</div>
				</div>
	    		</div>-->
	    		<div class="row py-4">
				<div class="request-purple col-lg-3 col-md-4 col-6 mx-auto">
					<a href="#request_pricing">REQUEST PRICING</a>
				</div>
			</div>