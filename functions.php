<?php



function tgws_enqueue_styles() {
    if ( is_page( 192 ) ) {
      wp_register_style( 'normalize', get_template_directory_uri() . '/normalize.css');
      wp_enqueue_style( 'ja-styles', get_template_directory_uri() . '/css/ja-main.css' );
    }
    else if ( is_page( array( 204, 206, 208, 210, 212, 214, 216 ) ) ) {
      wp_register_style( 'normalize', get_template_directory_uri() . '/normalize.css');
      wp_enqueue_style( 'unplugged-styles', get_template_directory_uri() . '/css/unplugged-main.css' );
    }
    else if (is_page( 248 ) ) {
      wp_register_style( 'normalize', get_template_directory_uri() . '/normalize.css');
      wp_enqueue_style( 'rp-styles', get_template_directory_uri() . '/css/rp-main.css' );
    }
    else {
      wp_register_style( 'normalize', get_template_directory_uri() . '/normalize.css');
      wp_register_style( 'tgws', get_stylesheet_uri(), array( 'normalize' ));
      wp_enqueue_style( 'tgws' );
      wp_enqueue_style('style', get_stylesheet_uri());
    }
}
add_action( 'wp_enqueue_scripts', 'tgws_enqueue_styles' );




//Navigation Menus
register_nav_menus(array(
  'primary-left' => __( 'Primary Menu - Left'),
  'primary-right' => __( 'Primary Menu - Right'),
));



//  ADDS IN HEADER IMAGE OPTION IN CUSTOMISATION SETTINGS
/** Tell WordPress to run yourtheme_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'yourtheme_setup' );
if ( ! function_exists('yourtheme_setup') ):
/**
* @uses add_custom_image_header() To add support for a custom header.
* @uses register_default_headers() To register the default custom header images provided with the theme.
*
* @since 3.0.0
*/
function yourtheme_setup() {
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
// Your changeable header business starts here
define( 'HEADER_TEXTCOLOR', '' );
// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
define( 'HEADER_IMAGE', '%s/images/headers/forestfloor.jpg' );
// The height and width of your custom header. You can hook into the theme's own filters to change these values.
// Add a filter to yourtheme_header_image_width and yourtheme_header_image_height to change these values.
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'yourtheme_header_image_width', 940 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'yourtheme_header_image_height',	198 ) );
// We'll be using post thumbnails for custom header images on posts and pages.
// We want them to be 940 pixels wide by 198 pixels tall (larger images will be auto-cropped to fit).
set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, false );
// Don't support text inside the header image.
define( 'NO_HEADER_TEXT', true );
// Add a way for the custom header to be styled in the admin panel that controls
// custom headers. See yourtheme_admin_header_style(), below.
add_custom_image_header( '', 'yourtheme_admin_header_style' );
// … and thus ends the changeable header business.
// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
}
endif;
if ( ! function_exists( 'yourtheme_admin_header_style' ) ) :
/**
* Styles the header image displayed on the Appearance > Header admin panel.
*
* Referenced via add_custom_image_header() in yourtheme_setup().
*
* @since 3.0.0
*/
function yourtheme_admin_header_style() {
?>
<style type="text/css">
#headimg {
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
}
#headimg h1, #headimg #desc {
display: none;
}
</style>
<?php
}
endif;


// PORTFOLIO ITEM CUSTOM PAGE
function create_custom_post_types() {
  register_post_type('portfolio_items',
    array(
      'labels' => array(
        'name' => __( 'Portfolio Items' ),
        'sungular_name' => __( 'Portfolio Item' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
        'slug' => 'portfolio_items'
      ),
    )
  );
}
add_action( 'init', 'create_custom_post_types' );


//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome-4.6.3/css/font-awesome.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

// Experience posts
