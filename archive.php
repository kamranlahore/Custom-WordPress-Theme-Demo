application/x-httpd-php archive.php
PHP script text

<?php

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;
			
// 			$blog_term = wp_get_object_terms( $post->ID, 'blog_categories', array( 'fields' => 'slug' ) );
// 			print_r($blog_term);
			
	?>
			<!-- blog section start -->

<section class="blog-boxes top">
<div class="container">
<div class="row">

<!-- Tab panes -->
<div class="tab-content">


<?php
$blog_categories = get_terms('blog_categories');
foreach($blog_categories as $blog_category) { 
$current_post_type = get_post_type( $post_id ); ?>
<div class="tab-pane active" id="<?php echo $blog_category->slug ?>">
<?php
$related = get_posts( 
    array( 
        'category__in' => wp_get_post_categories( $post->ID ), 
        'numberposts'  => -1, 
        'post__not_in' => array( $post->ID ) 
    ) 
);

if( $related ) { 
    foreach( $related as $post ) {
        setup_postdata($post);
        /*whatever you want to output*/
    }
    wp_reset_postdata();
}
$args = array(
'post_type' => $current_post_type,
'orderby' => 'title',
'order' => 'DESC',
'tax_query' => array(
array(
'taxonomy' => 'blog_categories',
'field' => 'slug',
'terms' => $blog_category->slug
)
)
);
$blog_cat_loop = new WP_Query( $args );
?>

<?php if ( $blog_cat_loop->have_posts() ) : ?>
<div class="row blog-boxes-row">
<?php while ( $blog_cat_loop->have_posts() ) : $blog_cat_loop->the_post(); ?>

<div class="col-md-4 b-box">
<?php
$url = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'large', false, '' );
?>
<img src="<?php echo $url[0]; ?>">
<div class="b-box-text">
<p>
<?php echo get_the_date(); ?> &nbsp; | &nbsp; 5min read
</p>
<p class="heading heading-title-link">
<a href="<?php echo get_permalink($post->ID); ?>">
<?php the_title(); ?>
</a>
</p>
<a href="">



<!-- <img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png"> -->

<?php $image = get_field('blog_icons');?>
<img src="<?php echo $image;?>" alt="<?php echo $image['alt'];?>"/>

<?php echo $blog_category->name; ?>
</a>
</div>
</div>

<?php $count++; ?>
<?php endwhile; ?>
<?php wp_reset_query() ?>
</div>
<?php endif; ?>

</div>
<?php } ?>

</div> <!-- tab-content -->

</div>

</div>
</section>

<!-- blog section end -->
			
				
<?php

// 			the_posts_pagination( array(
// 				'prev_text' => assivo_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'assivo' ) . '</span>',
// 				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'assivo' ) . '</span>' . assivo_get_svg( array( 'icon' => 'arrow-right' ) ),
// 				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'assivo' ) . ' </span>',
// 			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

