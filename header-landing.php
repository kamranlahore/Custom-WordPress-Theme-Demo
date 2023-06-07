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
	<meta name="format-detection" content="telephone=no">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
	<script>
	  var pagename='';	
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

	<header class="assive-home-page nav-bg" style="background:linear-gradient(to right, #4775e5,#8e53e9) !important;">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-sm-3 col-4 mt-sm-1 mt-0 img-postion px-md-3 px-0">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg"></a>
				</div>
<!-- 				<div class="col-lg-10 col-sm-9 col-8 nav-position p-sm-0 p-0 pr-1 position-relative">
					<div class="get-started-lg d-block float-right py-sm-3 py-2 mt-sm-0 mt-2 pr-sm-3 pr-2">
						<a href='#request_proposal'>Request A Proposal</a>
					</div>
					<div class="get-started-lg purple_button d-md-block d-sm-none d-block d-xs-none float-right py-sm-3 py-2 mt-sm-0 mt-2 pr-lg-3 pr-2">
						<a href='#our_advantage'>OUR ADVANTAGE</a>
					</div>
					<div class="get-started-lg blue_button d-sm-block d-none float-right py-sm-3 py-2 mt-sm-0 mt-2 pr-lg-3 pr-2">
						<a href='#how_work'>HOW TO WORK WITH US</a>
					</div>
				</div> -->
			</div>
		</div>
	</header>
	