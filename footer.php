<?php
/**
 * The template for displaying the footer
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
 
if (!is_page_template( 'get-started.php')){ ?> 
	<footer>
		<div class="container mt-5">
			<div class="row mb-2 mx-auto">
			        <div class="col-lg-3 col-sm-7 footer-section pb-lg-1 pb-4 px-md-0 px-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-blue.svg"></a>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Content") ) : ?>
					<?php endif;?>
				</div>
				
				<div class="col-lg-3 col-sm-5 col-5 pt-lg-4 pt-3 pl-lg-5 pb-sm-5 pb-lg-1  px-2">
<!-- 					<h5>COMPANY</h5> -->
					<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
				</div>
				<div class="col-lg-3 col-sm-7 col-7 pt-lg-4 pt-3 pl-xl-4 px-md-0 pb-lg-1 px-2">
<!-- 					<h5>OTHER LINKS</h5> -->
					<?php wp_nav_menu( array( 'theme_location' => 'services_Menu' ) ); ?>
				</div>
				<div class="col-lg-3 contact-us-footer col-sm-5 col-12 pt-lg-4 pt-3 pl-xl-4 px-md-0 px-sm-0 px-2 py-3">
					<div class="get-footer">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold" href="<?php echo get_permalink('334');?>">Request A Proposal</a>
					</div>
					<div class="get-footer second-btn">
						<a class="assivo-contact-us text-center text-white border-0 font-weight-bold blue-btn" href="https://calendly.com/assivo" target="_blank">Schedule A Call</a>
					</div>
				</div>
				
			</div>
			<div class="row copyrights pt-2">
				<div class="col-sm-3 col-12 copyrights-date px-0">
					<p>&copy; <?php echo date("Y"); ?> Assivo, Inc. </p>
				</div>
				<div class="col-sm-9 col-12 p-0 m-0 pr-xl-1 copyrights-terms">
					<p>All Rights Reserved &nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>information-and-data-security">Information &amp; Data Security</a>&nbsp;&nbsp; |&nbsp;&nbsp;
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy </a>&nbsp;&nbsp; |&nbsp;&nbsp;
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-conditions">Terms &amp; Conditions</a>
					
					</p>
				</div>
			</div>
		</div>
	</footer>
<?php } 
if (is_page_template( 'get-started.php')){ ?> 
	<script>
		var url_string = window.location.href;
		var url = new URL(url_string);
		var email = url.searchParams.get("email");
		document.getElementById('email_custom').value = email;
	</script>
<?php }
else { ?>
	<script>
		var url_string = window.location.href;
		var url = new URL(url_string);
		var email = url.searchParams.get("email");
		document.getElementById('email').value = email;
		if (typeof email!= 'undefined' && email) {
			document.getElementById('request_proposal').scrollIntoView(true);
		}
	</script>
<?php } ?>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<script>
		
		
// 		$(document).ready(function(){
// 			$('.flip-box-front h5').on('click',function(){
// 				// alert('hello');
// 				$(this).closest('.flip-box-front').trigger('click');
// 			});
// 		});
		

	</script>
	<script>
		var base_url='<?php echo esc_url( get_template_directory_uri() )?>';
	</script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smooth_scroll.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slider_owl.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/dot-nav.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
