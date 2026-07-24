<?php

    //Remove Gutenberg Block Library and WooCommerce Block CSS from loading on the frontend
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-blocks-style' );
    } 

    add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

    // Remove Stripe.js from Product Pages
    add_filter( 'wc_stripe_load_scripts_on_product_page_when_prbs_disabled', '__return_false' );