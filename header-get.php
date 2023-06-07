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

<body <?php body_class(); ?>>
	<header class="" style="background: none !important;">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-6 mt-3 ">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/assivo-logo-blue.png"></a>
				</div>
				<div class="col-lg-10 col-md-8 col-6">
				</div>
			</div>
		</div>
	</header>