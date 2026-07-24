<?php
/**
 * TM Shop Child template functions.
 *
 * @package storefront
 */

/* remove woocomerce styles */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_action('wp_enqueue_scripts', 'removing_woo_styles');
function removing_woo_styles(){
  wp_dequeue_style('woocommerce-general'); // This is "woocommerce.css" file
}
function my_theme_remove_storefront_standard_functionality() {

//remove customizer inline styles from parent theme as I don't need it.
set_theme_mod('storefront_styles', '');
set_theme_mod('storefront_woocommerce_styles', '');  
add_filter('storefront_customizer_woocommerce_css', '__return_false');
add_filter('storefront_customizer_css', '__return_false');
}
add_action( 'init', 'my_theme_remove_storefront_standard_functionality' );

// Remove Storefront CSS
add_action( 'after_setup_theme', function() {
    
    // Check if Storefront is active and global is set
    if ( class_exists( 'Storefront' ) ) {
        global $storefront;

        // Make sure the customizer property exists before removing
        if ( isset( $storefront ) && isset( $storefront->customizer ) ) {
            remove_action( 'wp_enqueue_scripts', array( $storefront->customizer, 'add_customizer_css' ), 130 );
        }
    }
    
}, 20 );

/* remove storefront credits from footer */ 
function storefront_credit() {

}
/* remove_storefront_handheld_footer_bar */ 
add_action( 'init', 'jk_remove_storefront_handheld_footer_bar' );

function jk_remove_storefront_handheld_footer_bar() {
  remove_action( 'storefront_footer', 'storefront_handheld_footer_bar', 999 );
}

/* add excerpt to product loop */
// add_action( 'woocommerce_before_shop_loop_item_title', 'output_product_excerpt', 10 ); 
// function output_product_excerpt() {
// global $post;
// $excerpt = get_field('acf_subheading');
// echo '<div class="my-excerpt">'.$excerpt.'</div>';
// }

// add_action( 'woocommerce_after_shop_loop_item_title', 'output_product_attributes', 200 ); 
// function output_product_attributes() {
// global $post;
// $lead_time = get_field('acf_lead_time_message');
// $available_finishes = get_field('acf_available_finishes_message');
// $short_description = $post->post_excerpt;
// echo '<div class="my-product-subtitles"><div class="my-short-description">' . $short_description . '</div>';
// echo '<div class="my-lead-time-message">' . $lead_time . ' ' . $available_finishes . '</div></div>';
// }

// add function to test if sibling of parent page 
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    $anc = get_post_ancestors( $post->ID );
    foreach($anc as $ancestor) {
        if(is_page() && $ancestor == $pid) {
            return true;
        }
    }
    if(is_page()&&(is_page($pid))) 
               return true;   // we're at the page or at a sub page
    else 
               return false;  // we're elsewhere
}
add_filter( 'wpseo_canonical', 'yoast_remove_canonical_items' );
function yoast_remove_canonical_items( $canonical ) {
  if ( is_product() ) {
    return false; // removes Yoast Canon tag
  }
  /* Use a second if statement here when needed */
	return $canonical; /* Do not remove this line */
}

/** Custom theme image sizes */
require get_stylesheet_directory() . '/inc/image-sizes.php';

/** Custom theme functions for base64 image handling in emails */
require get_stylesheet_directory() . '/inc/base64-images.php';

/** Enqueue/dequeue theme assets */
require get_stylesheet_directory() . '/inc/enqueue-assets.php';
require get_stylesheet_directory() . '/inc/dequeue-assets.php';

/** WooCommerce customizations */
require get_stylesheet_directory() . '/inc/woocommerce.php';