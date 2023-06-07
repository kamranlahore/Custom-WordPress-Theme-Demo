<div class="container-fluid">
	<div class="container">
		<div class="row pt-5">
			<div class="col-md-2 col-2 insights">
				<p>Insights</p>
			</div>
			<div class="col-md-10 col-10 header-slider">
				<div class="all">
					<img src="https://assivo.com/dev/wp-content/uploads/2020/06/icon_03.png">
					All
				</div>
				
				<div class="col-md-11 col-8 pl-2 px-0 owl-h-blog-nav owl-carousel owl-theme owl-nav-outer owl-dot-round mx-auto">
					<?php
						$taxonomies = get_terms( array(
							'taxonomy' => 'blog_categories',
							'hide_empty' => false
						) );

						if ( !empty($taxonomies) ) :
							foreach( $taxonomies as $category ) {
								if( $category->parent == 0 ) { 
						$category_icon = get_field('taxonomy_icon', $category->taxonomy.'_'.$category->term_id);
					?>
							<a href="<?php echo site_url($category->taxonomy.'/'.$category->slug); ?>">
								<img src="<?php echo $category_icon; ?>">
								<?php echo $category->name; ?>
							</a>
						<?php	}
							}
						endif;
					?>
				</div>
				<div id="h_blog_header_nav"  class="owl-nav customNav"></div>
			</div>
		</div>
	</div>
</div>