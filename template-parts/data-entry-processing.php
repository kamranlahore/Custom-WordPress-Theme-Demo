 <?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
$section_id= '355';
?>

	<section class="use-case assivo-help pt-5">
		<div class="container">
			<?php
				$taxonomy= 'services_categories';
				$term_id=64;
				$term = get_term( $term_id, $taxonomy );							
				$post_args = array(
					  'posts_per_page' => -1,
					  'post_type' => 'services',
					  'order' => 'ASC',
					  'tax_query' => array(
						  array(
							  'taxonomy' => $taxonomy, 
							  'field' => 'term_id', 
							  'terms' => $term->term_id,
						  )
					  )
				);
				$myposts = get_posts($post_args); ?>
				<div class="row px-sm-0 px-2 mx-auto">
					<div class="col-md-10 pb-md-3 pb-0 explore_text lower-heading text-center mx-auto advantage-heading">
						<h3><?php echo $term->name; ?></h3>
						<br>
						<p><?php echo $term->description; ?></p>
					</div>
				</div>
				<div class="d-md-block d-none">
					<?php $i=1; ?>
					<div class="row pb-md-4 data-entry-tabs">
						<ul class="nav">
							<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<li class="nav-item col-md-3 col-sm-6 pb-3 text-center <?php if($i==1){echo 'pr-md-2 pl-md-0 px-3';}elseif($i==2 || $i==3){echo 'px-md-2 px-3';}else{echo 'pl-md-2 pr-md-0 px-3';}?> ">
									<a class="nav-link px-2 <?php if($i==1){echo 'active';} ?> " data-toggle="tab" href="#" data-target="#<?php echo get_the_id(); ?>">
										<div class="bg-img-service pb-2">
											<div class="bg-content-service">
												<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="">
												<h4><?php the_title(); ?></h4>
											</div>
										</div>
									</a>
								</li>
							<?php $i++; ?>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php $j=1; ?>
					<div class="row data-entry-li tab-content">
						<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="col-md-12 tab-pane <?php if($j==1){echo 'active show';} ?>" id="<?php echo get_the_id(); ?>" role="tablist" aria-multiselectable="true">
								<?php $content_lead = get_field('lead_generation_feature_content');?>
								<?php echo $content_lead; ?>
							</div>
						<?php $j++; ?>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="d-block d-md-none">
					<div class="row data-entry-li">
					<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<div class="col-12 py-3">
							<div class="">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>" alt="" class="float-md-none float-left">		
								<h4 class="align-middle pt-3"><?php the_title(); ?></h4>
							</div>
							<div class="d-inline-block pt-2 pl-3">
								<?php $content_lead = get_field('lead_generation_feature_content');?>
								<?php echo $content_lead; ?>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>	
	