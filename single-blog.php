<?php
/**
 * The template for displaying all single blog posts
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

get_header(); ?>

<style>
	.assive-home-page, .mobile_view_new{
		display: none !important;
	}
	.blog-content li {
		margin-top: 20px;
	}
</style>

	<section class="blog-slider pt-5">
		<?php get_template_part( 'template-parts/blog_nav', 'none' );?>
		<div class="container">
			<div class="row after-header pt-5">
				<div class="col-md-12 mb-4 blog-slider-text">
					<a href="">
						<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
						General Outsourcing
					</a>
				</div>
				<div class="col-md-10 main-title">
					<p>
						<?php the_title(); ?>
					</p>
				</div>
				<div class="col-md-12 after-header-bottom">	
					<div class="row">
						<div class="col-md-6 col-6">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/05/michael.png" class="testimonial-image">
							<div class="title pt-4">Michael Fagan</div>
							<div class="designation">(Director)</div>
						</div>
						<div class="col-md-6 col-6 mt-5 pt-3">
							<p>
								April 14,2020 | 5min read
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-content">
		<div class="container">
			<div class="row related-blog pt-4">
				<div class="col-md-12">
<!-- 					<img src="https://assivo.com/dev/wp-content/uploads/2020/05/michael.png" class="content-image"> -->
					<div class="content-image">
						<?php the_post_thumbnail('single-post-thumbnail'); ?>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-boxes">
		<div class="container">
			<div class="row related-blog pt-4">
				<div class="col-md-12 related-blog-title">
					<p>
						Related blogs
					</p>
				</div>
				<div class="col-md-4 b-box mt-4">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/blog-img-1.png">
					<div class="b-box-text">
						<p>
							April 14,2020 | 5min read
						</p>
						<p class="heading">
							We are a premier partner for all of your
						</p>
						<a href="">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
							Industry-Specific Insights
						</a>
					</div>
				</div>
				<div class="col-md-4 b-box mt-4">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/blog-img-2.png">
					<div class="b-box-text">
						<p>
							April 14,2020 | 5min read
						</p>
						<p class="heading">
							We are a premier partner for all of your
						</p>
						<a href="">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
							Service-Specific Insights
						</a>
					</div>
				</div>
				<div class="col-md-4 b-box mt-4">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/blog-img-3.png">
					<div class="b-box-text">
						<p>
							April 14,2020 | 5min read
						</p>
						<p class="heading">
							We are a premier partner for all of your
						</p>
						<a href="">
							<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
							Customer Success Stories
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php get_template_part( 'template-parts/request_consultation', 'none' );?>

<?php get_footer();