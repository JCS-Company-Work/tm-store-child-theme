<?php
/**
 * The header for our child theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tm-shop-child
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- <link rel="preconnect" href="https://kit.fontawesome.com">
<link rel="preconnect" href="https://ka-p.fontawesome.com" crossorigin>
<script src="https://kit.fontawesome.com/68313286f9.js" crossorigin="anonymous"></script> -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="google-site-verification" content="rS3rjDOUVZSHeLqWjgV843BO_ETZ3DTjhR3I2lxcECQ" />
<meta name="p:domain_verify" content="7f124771c398bf9f320111815508ecbd"/>
<link rel="preconnect" href="https://connect.facebook.net">
<link rel="preconnect" href="https://s.pinimg.com">
<link rel="preconnect" href="https://js.stripe.com">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>


	<?php do_action( 'storefront_before_header' ); ?>


<div class="notification-bar">
   <div class="ticker">
         <div class="ticker__item">Precision Made</div>
         <div class="ticker__item">Custom Design</div>
	     <div class="ticker__item">Made in Britain</div>
         <div class="ticker__item">Expertly Handcrafted</div>
	     <div class="ticker__item">Ready in 4-6 Weeks</div>
         <div class="ticker__item">Built to Order</div>
    </div>
</div>

<div class="header-site-branding mobile-site-branding"><a href="/" aria-label="Homepage">Tailor-made Shop</a></div>
<div class="fixed-header-bar">

        <div class="mobile-menu-icon"><a href="#" aria-label="Open Menu"><span>Menu </span><i class="fa-light fa-bars"></i></a></div>
        <div class="header-search-bar">
               <?php aws_get_search_form( true ); ?>
    			<?php //storefront_product_search(); ?>
    		
        </div>
        <div class="header-site-branding desktop-site-branding"><a href="/">Tailor-made Shop</a></div>
        <!-- <div class="header-account-bar">
            <?php storefront_header_cart(); ?>
        </div> -->

		<div class="header-account-bar">
			<ul class="site-header-account"><li><a href="/my-account/" type="button" aria-label="Account Login"><i class="fa-light fa-user" aria-hidden="true"></i><span class="mobilehide"> Account</span></a></li></ul>
            <?php echo do_shortcode('[tm_header_cart]'); ?>
        </div>

</div>  <!--fixed-header-bar -->
<nav class="menu-mega-menu-nav"><div class="menu-mega-menu-container"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?></div></nav>          

		    
<div id="page" class="hfeed site">		



	<?php

	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
