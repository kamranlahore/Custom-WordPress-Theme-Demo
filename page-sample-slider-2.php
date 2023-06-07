<?php
/**
 * 
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>

	<style>
		.testimonial_mobile_view{
			display: none;
		}
		.h-carousel-pre{
			left: -8%;
			top: 40%;
			width: 7%;
		}
		.h-carousel-next{
			right: -8%;
			top: 40%;
			width: 7%;
		}
		.bg-content-service.quote blockquote {
			min-height: 400px;
		}
		li.nav-item {
			float: left;
		}
		.testimonial-bottom {
			min-height: 75px;
		}
		
		
.carousel-inner {
 > .item {
  opacity: 0;
  top: 0;
  left: 0;
  width: 100%;
  display: block;
  position: absolute;
  z-index:0;
  transition: none;
  transform: translate3d(0,0,0) !important;
  &:first-of-type {
	position:relative;
  }	
  }
 > .active {
  opacity: 1;
  z-index:3;
}

 > .next.left,
 > .prev.right {
  transition: opacity 0.6s ease-in-out;
  opacity: 1;
  left: 0;
  z-index:2;
  }																												
 > .active.left,
 > .active.right {
  z-index:1;
  }
}
.carousel-control {
z-index:4;
}	
		
		
		html {
		  scroll-behavior: smooth;
		}		
		.bg-content-service.quote blockquote {
			margin-top: 45px;
			padding-top: 80px !important;
		}
		a#dot-0, footer, .mobile_view, .assive-home-page{
			display: none !important;
		}
		
		@media (min-width: 991px){
			.h-carousel-pre {
    			left: 28% !important;
			}
			.h-carousel-next {
    			right: 25% !important;
			}
			ul.carousel-inner li.nav-item {
				margin-left: 35% !important;
			}
		}
		
		
		@media (max-width: 1024px){
			.bg-content-service.quote blockquote {
				min-height: 470px;
			}
			.testimonial-bottom {
				min-height: 81px;
			}
			.item.carousel-item{
				width: 95%;
				left: 3%;
			}
			.h-carousel-pre {
				left: -5%;
			}
			.h-carousel-next {
				right: -5%;
			}
		}
		@media (max-width: 991px){
			.testimonial_desktop_view{
				display: none;
			}
			.testimonial_mobile_view{
				display: block;
			}
			.item.carousel-item {
				width: 96%;
				left: 4%;
			}
			li.nav-item {
				max-width: 70%;
				left: 13%;
			}
			.h-carousel-next {
				right: 7%;
				width: 9%;
			}
			.h-carousel-pre {
				left: 6%;
				width: 9%;
			}
			.bg-content-service.quote blockquote {
				min-height: 350px;
			}
			.testimonial-bottom {
				width: 75%;
				margin: 0 auto;
			}
		}
		@media (max-width: 768px){
			.h-carousel-pre {
				left: 4%;
				width: 11%;
			}
			.h-carousel-next {
				right: 5%;
				width: 11%;
			}
			.bg-content-service.quote blockquote {
				min-height: 380px;
			}
		}
		@media (max-width: 575px){
			li.nav-item {
				max-width: 100%;
				left: 0%;
			}
			.h-carousel-pre {
				left: 0%;
				width: 12%;
				bottom: 100%;
			}
			.h-carousel-next{
				right: 0%;
				width: 12%;
				bottom: 100%;
			}
			.bg-content-service.quote blockquote {
				min-height: 380px;
			}
			.testimonial-bottom {
				min-height: 91px;
				width: 100%;
			}
			.page-id-57 .bg-content-service.quote h4 {
				font-size: 17px;
			}
			span.designation {
				font-size: 12px;
			}
			.item.carousel-item {
				width: 100%;
				left: 0%;
			}
		}
		@media (max-width: 480px){
			.bg-content-service.quote blockquote {
				min-height: 420px;
			}
			.page-id-57 .bg-content-service.quote h4 {
				font-size: 13px;
			}
			span.designation {
				font-size: 11px;
			}
		}
		@media (max-width: 430px){
			.h-carousel-next {
				right: -3%;
				width: 18%;
			}
			.h-carousel-pre {
				left: -3%;
				width: 18%;
			}
			li.nav-item {
				max-width: 90%;
				left: 5%;
			}
			.bg-content-service.quote blockquote {
				min-height: 390px;
			}
			.page-id-57 .bg-content-service.quote h4 {
				font-size: 16px;
			}
			span.designation {
				font-size: 13px;
			}
		}
		@media (max-width: 380px){
			.bg-content-service.quote blockquote {
				min-height: 440px;
			}
			.page-id-57 .bg-content-service.quote h4 {
				font-size: 11px;
			}
			span.designation {
				font-size: 10px;
			}
			.testimonial-bottom {
				width: 73%;
				min-height: 95px;
			}
		}
		@media (max-width: 350px){
			.bg-content-service.quote blockquote {
				min-height: 455px;
			}
			.testimonial-bottom {
				width: 75%;
			}
		}
		@media (max-width: 320px){
			.bg-content-service.quote blockquote {
				min-height: 505px;
			}
			.testimonial-bottom {
				width: 87%;
			}
		}
	</style>

	<section class="use-case assivo-help pt-5">
		<div class="container">
			
			<?php
				$ids_args = [
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'testimonials',
					'posts_per_page' => -1,
					'paged' => $paged,
					'order' => 'ASC',
					'fields' => 'ids',
				];
				$all_posts_ids = get_posts( $ids_args );
				 $testimonial_args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'testimonials',
					'posts_per_page' => -1,
					'paged' => $paged,
					'order' => 'ASC',
				);
				$myposts = get_posts($testimonial_args); $h_limit = count($all_posts_ids); $h_last_id = $all_posts_ids[$h_limit - 1]; ?>
				<div class="row px-sm-0 px-2 mx-auto">
					<div class="col-md-10 pb-md-3 pb-0 explore_text lower-heading text-center mx-auto advantage-heading">
						<h3>CUSTOMER TESTIMONIALS ON MOBILE</h3>
						<br>
					</div>
				</div>
		
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
					<div class="d-block">
					<?php $i=1; ?>
					<div class="row pb-md-4 data-entry-tabs">
						<ul class="nav carousel-inner">
							<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="item carousel-item <?php if($i==1){echo 'active';}?>">
								<li class="nav-item col-sm-4 pb-3 text-center <?php if($i==1){echo 'pr-md-2 pl-md-0 px-3';}elseif($i==2 || $i==3){echo 'px-md-2 px-3';}else{echo 'pl-md-2 pr-md-0 px-3';}?> ">
									<div class="nav-link px-2" data-toggle="tab">
										<div class="bg-img-service pb-2">
											<div class="bg-content-service quote">
												<blockquote><?php the_content(); ?></blockquote>
												<div class="testimonial-bottom">																							<img src="<?php the_field('testimonial_image'); ?>" class="testimonial-image">
													<img src="<?php the_field('company_logo'); ?>" class="company-logo">
													<?php $designation = get_field('designation');?>
													<h4>
														<?php the_title(); ?>
														<br>
														<span class="designation"><?php echo $designation; ?></span>
													</h4>
												</div>
											</div>
										</div>
									</div>
								</li>
								<?php $i++; ?>
							</div>
							<?php endforeach; ?>
						</ul>
			<?php wp_reset_postdata(); ?>
						</div>
				</div>
					
			<!-- Carousel controls -->
					<div class="owl-nav customNav">
					<button type="button" role="presentation" class="carousel-control-prev h-carousel-pre" href="#myCarousel" data-slide="prev">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/prev_slide.png">
					</button>
					<button type="button" role="presentation" class="carousel-control-next h-carousel-next" href="#myCarousel" data-slide="next">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/next_slide.png">
					</button>
					</div>
			</div>
		</div>
</section>


	
	
<?php get_footer(); ?>