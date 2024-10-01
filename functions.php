<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support('menus');
register_nav_menu('header-menu', 'Primary');
register_nav_menu('drop-menu', 'dropPrimary');
register_nav_menu('practice-menu', 'PracticeSecondary');
register_nav_menu('footer-menu', 'Secondary');


function themename_custom_logo_setup() {


	add_theme_support( 'custom-logo', [
		'header-text'          => [ 'site-title', 'site-description' ],
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true, 

    ]);
}





    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Header Settings',
            'menu_title'    => 'Header',
            'parent_slug'   => 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'theme-general-settings',
        ));
        
    }


// Register Css File
function hongolaw_enqueue_stylesheet() {
   
	wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array() );
	wp_enqueue_style( 'fontawesome-all','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array() );
	wp_enqueue_style( 'fancybox','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array() );
	wp_enqueue_style( 'fontawesome-min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css', array(), '1.0.0' );
  wp_enqueue_style( 'fontawesome-brand', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array() );
	wp_enqueue_style( 'all', get_stylesheet_directory_uri() . '/assets/style/style.css', array(), '1.0.0' );
  wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/assets/style/responsive.css', array(), '1.0.0' );
  }
  add_action( 'wp_enqueue_scripts', 'hongolaw_enqueue_stylesheet' );


//   Register Jq File
function hongolaw_enqueue_scripts() {
    wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true );
    wp_enqueue_script( 'swiper-js-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js', array(),  true );
    wp_enqueue_script( 'owl-slider', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(),  true );
	wp_enqueue_script( 'aos-fancy-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(),  true );
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(),  true );
    wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery-cdn'),  true );

}
add_action( 'wp_enqueue_scripts', 'hongolaw_enqueue_scripts' );






/**
 * Polylang Shortcode - https://wordpress.org/plugins/polylang/
 * Add this code in your functions.php
 * Put shortcode [polylang_langswitcher] to post/page for display flags
 *
 * @return string
 */
function custom_polylang_langswitcher() {
	$output = '';
	if ( function_exists( 'pll_the_languages' ) ) {
		$args   = [
		'show_flags' => 0,
        'hide_if_empty' => 0,
		'show_names' => 1,
		'echo'       => 0,
			];
		$output = '<ul class="polylang_langswitcher">'.pll_the_languages( $args ). '</ul>';
	}

	return $output;
}

add_shortcode( 'polylang_langswitcher', 'custom_polylang_langswitcher' );