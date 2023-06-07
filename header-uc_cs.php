<?php
/**
 * TW_Assivo's functions and definitions
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128946754-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-128946754-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<?php 
	$queried_object = get_queried_object();
	$term_array = get_queried_object();
	$term= $queried_object->slug;
	$term_id= $queried_object->term_id;
	$term_name= $queried_object->name;
	$term_description= $queried_object->description;
	$image_term = get_field('featured_image_for_term',$queried_object); 
	$mobile_image = get_field('mobile_banner_image_for_term',$queried_object);
	
?>
	<style>
		header.back_responsive{
			background: url('<?php echo $image_term['url'];?>') no-repeat!important;
			background-position: center;
			background-size: 100% !important;
		}
		@media (max-width:865px){
		<?php if(!empty($mobile_image['url'])){ ?>
			header, header.back_responsive{
				background: url('<?php echo $mobile_image['url'];?>') no-repeat!important;
				background-position: center;
				background-size: 100% !important;
			}
		<?php } ?>
		}
   	</style>
	<header class="assive-home-page" style="background: url('<?php echo $image_term['url'];?>') no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-4 mt-xl-2 mt-sm-1 mt-0 img-postion px-sm-3 px-0">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"></a>
				</div>
				<div class="col-lg-10 col-8 nav-position px-sm-3 p-0 pr-1 position-relative">
					<nav class="navbar navbar-expand-xl navbar-dark nav-top p-0 float-right">
						<button class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php wp_nav_menu( array( 'theme_location' => 'primary',
									'container' => false,
									'depth'     => 2,
									'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
									'depth' => 2,
                                    'fallback_cb' => 'bs4navwalker::fallback',
                                    'walker' => new bs4navwalker(),
                                    ) );							
								?>
							
							<div class="get-started mt-xl-3 pt-xl-2 pt-3 pl-2 py-4 mb-1 d-xl-block d-none">
								<a href='<?php echo get_permalink('334');?>'>Request A Proposal</a>
							</div>
						</div>
					</nav>
					<div class="get-started-lg d-xl-none d-block float-sm-right float-left py-sm-3 py-2 mt-sm-0 mt-2 pr-sm-3 pr-2">
						<a href='<?php echo get_permalink('334');?>'>Request A Proposal</a>
					</div>
				
				</div>
				<div class="col-lg-8 col-md-10 assivo-banner-text desktop_view text-center">
					<h2><?php echo $term_name;?></h2>
					<p><?php echo $term_description; ?></p>
				</div>
			</div>
		</div>
	</header>
	
	<section class="mobile_view">
		<div class="container">
			<div class="row">
                <div class="col-lg-8 col-md-10 assivo-banner-text text-center">
					<h2><?php echo $term_name;?></h2>
					<p><?php echo $term_description; ?></p>
				</div>
			</div>
		</div>
	</section>
	