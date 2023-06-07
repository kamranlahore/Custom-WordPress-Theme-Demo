<?php
/**
 * TW_Assivo's functions and definitions
 *
 * @package TW_Assivo
 * @since TW_Assivo 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
 
if ( ! function_exists( 'tw_assivo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function tw_assivo_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    //load_theme_textdomain( 'tw_assivo', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    //add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */

	add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Header Menu', 'tw_assivo' ),
        'secondary' => __('Footer Menu', 'tw_assivo' ),
        'services_Menu' => __('Services Menu', 'tw_assivo' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    //add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // tw_assivo_setup
add_action( 'after_setup_theme', 'tw_assivo_setup' );

//widget Area Code
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Content',
  )
);



require_once('bs4navwalker.php');


/******************* Plugin to Upload SVG from wp-admin Media  ************/
 
 function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img { 
               width: 100% !important; 
               height: auto !important; 
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');


// Add custom validation for CF7 form fields
    function is_company_email($email){
            if(
                    preg_match('/@gmail.com/i', $email) ||
                    preg_match('/@hotmail.com/i', $email) ||
                    preg_match('/@live.com/i', $email) ||
                    preg_match('/@msn.com/i', $email) ||
                    preg_match('/@aol.com/i', $email) ||
                    preg_match('/@yahoo.com/i', $email) ||
                    preg_match('/@inbox.com/i', $email) ||
                    preg_match('/@gmx.com/i', $email) ||
					preg_match('/@outlook.com/i', $email) ||
					preg_match('/@icloud.com/i', $email) ||
                    preg_match('/@me.com/i', $email)
            ){
                    return false;
            }else{
                    return true;
            }
    }
    function your_validation_filter_func($result,$tag){
            $type = $tag['basetype'];
            $name = $tag['name'];
		
            if('email' == $type){ 
				$the_value = $_POST[$name];
                    if(!is_company_email($the_value)){
						$result->invalidate( $tag, "Please enter a valid company email" );
                    }
            }
            return $result;
    }
   add_filter( 'wpcf7_validate_email*', 'your_validation_filter_func', 10, 2 ); // Req. Email field or contact number








?>