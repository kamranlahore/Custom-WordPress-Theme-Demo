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
   	<?php
		$mobile_image = get_field('mobile_banner_image');
	?>
	<style>
		header.back_responsive{
			background: url('<?php echo get_the_post_thumbnail_url(get_the_id(),"full"); ?>') no-repeat!important;
			background-position: top;
			background-size: 100% !important;
		}
		@media (max-width:865px){
		<?php if(!empty($mobile_image['url'])){ ?>
			.assive-home-page{
				background: url('<?php echo $mobile_image['url'];?>') no-repeat!important;
				background-position: top;
				background-size: 100% !important;
			}
		<?php } ?>
		}
   	</style>
   	<header class="nav_nav">
   		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-3 mt-xl-2 mt-sm-1 mt-0 img-postion px-sm-3 px-0">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg"></a>
				</div>
				<div class="col-lg-10 col-sm-8 col-9 nav-position px-sm-3 p-0 pr-1 position-relative">
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
							<div class="get-started mt-xl-3 pt-xl-2 pt-3 pl-2 py-4 mb-1 d-xl-block d-none blue-btn">
								<a href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
							</div>
							<div class="get-started mt-xl-3 pt-xl-2 pt-3 pl-2 py-4 mb-1 d-xl-block d-none">
								<a href='<?php echo get_permalink('334');?>'>Request A Proposal</a>
							</div>
							
						</div>
					</nav>
					<div class="get-started-lg d-xl-none d-block float-right py-sm-3 py-2 mt-sm-0 mt-2 pr-2 blue-btn h_n-pd">
						<a href="https://calendly.com/assivo">Schedule A Call</a>
					</div>
					<div class="get-started-lg d-xl-none d-block float-right py-sm-3 py-2 mt-sm-0 mt-2 pr-2 h_n-pd">
						<a href='<?php echo get_permalink('334');?>'>Request A Proposal</a>
					</div>
				
				</div>
			</div>
		</div>
	</header>
<!-- 	<section class="assive-home-page pro_button" style="background: url('<?php 
// echo get_the_post_thumbnail_url(get_the_id(),"full");
?>') no-repeat;"> -->
	
	<nav id="dot-nav"></nav>
	
	<section class="assive-home-page pro_button" style="background: none !important;">
		<?php the_post_thumbnail('full');?>
		<?php 
			if (is_front_page()){ 
			$h_mobile_banner = get_field('mobile_banner_image');
		?>
		
<!-- 		<img class="h-croped col-4" src="https://assivo.com/dev/wp-content/uploads/2020/06/illustrations.svg" class="" alt=""> -->
		<img class="h-mobile-banner" src="<?php echo($h_mobile_banner['url']); ?>" class="attachment-full size-full wp-post-image" alt="">
		<div class="home-banner-text">
		<?php } else {?>
		<div class="inner_banner_text">
		<?php }?>
			<div class="container">
				<div class="row">
					<?php if (is_front_page()){?>
						<div class="col-xl-6 col-md-8 col-10 assivo-banner-text desktop_view px-0 mt-xl-4 mt-lg-1 mt-4">
							<?php $sub_head = get_field('sub_heading');
							echo $sub_head; ?>
							
<!-- 								<div class="row mt-4">
									<div class="col-xl-10 col-lg-11 col-md-8 text-center search-bar px-lg-5 px-md-0 pt-md-0 pt-2 mx-auto get_started"> -->
	<!-- 									<div class="searchform bg-white" >
											<?php // echo do_shortcode( '[contact-form-7 id="1235" title="Enter Your Business E-mail To Request A Consultation-All"]'); ?>
										</div> -->
<!-- 									</div>
								</div> -->
							
<!-- 							<div class="get-started pt-xl-2 pt-3 pl-2 py-4 mb-1 d-xl-block service-btn">
								<a href='<?php // echo get_permalink('338');?>'>Our Services</a>
							</div> -->
						</div>
					<div class="col-xl-6 col-md-4 col-2" >
						<img class="h-croped" src="https://assivo.com/dev/wp-content/uploads/2020/06/illustrations.svg" alt="">
					</div>
					<?php } else {

							$url = $_SERVER["REQUEST_URI"];
							$keys = parse_url($url);
							$path = explode("/", $keys['path']);
							$last = $path[count($path)-3];
							if($last == 'use-case'){ ?>
								<div class="col-xl-6 col-lg-6 col-md-7 contact-us-banner-text assivo-banner-text desktop_view_new inner-uc-b-text">
							<?php }else{ ?>
								<div class="col-xl-6 col-lg-6 col-md-7 contact-us-banner-text assivo-banner-text desktop_view_new">

							<?php }  ?>
									<h2><?php the_title();?></h2>
									<?php $sub_head = get_field('sub_heading');
									echo $sub_head; ?>
								</div>
							<?php // }else{ ?>
<!-- 								<div class="col-xl-8 col-lg-9 col-md-10 assivo-banner-text desktop_view text-center">
									<h2><?php // the_title();?></h2>
									<?php // $sub_head = get_field('sub_heading');
									// echo $sub_head; ?>
								</div> -->
							<?php // } 
						} ?>
				</div>
			</div>
			</div>
		</div>
	</section>
	<?php // if($last == 'contact-us'){ ?> 
		<div class="mobile_view_new pb-4" style="background: none !important;">
	<?php // }else{ ?>
<!-- 		<div class="mobile_view" style="background: none !important;"> -->
	<?php // } ?>
		<div class="container px-1">
			<div class="row mx-auto">
                <div class="col-lg-8 col-md-12 assivo-banner-text text-center">
					 <?php if (is_front_page()){
						$sub_head = get_field('sub_heading');
						echo $sub_head; ?>
<!-- 						<div class="get-started pt-xl-2 pt-3 pl-2 py-4 mb-1 d-xl-block service-btn">
							<a href='<?php echo get_permalink('338');?>'>Our Services</a>
						</div> -->
						<div class="row mt-2">
							<div class="col-md-10 col-sm-8 col-12 text-center search-bar px-sm-3 p-0 get_started">
<!-- 								<div class="searchform bg-white" >
									<?php // echo do_shortcode( '[contact-form-7 id="1235" title="Enter Your Business E-mail To Request A Consultation-All"]'); ?>
								</div> -->
							</div>
						</div>
					<?php }
					else {?>
						<h2><?php the_title();?></h2>
						<?php $sub_head = get_field('sub_heading');
						echo $sub_head; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	