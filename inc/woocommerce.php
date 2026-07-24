<?php

    // Move product meta below product summary
     remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    // add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_meta', 10);

    // Disable 'ship to different address' default
    add_filter('woocommerce_ship_to_different_address_checked', '__return_false');

    //Remove Related Products from Single Product Page
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

    // Change 'Return to shop' URL
    function bbloomer_change_return_shop_url() {
    
        return '/product-category/furniture/tables/';

    }

    add_filter( 'woocommerce_return_to_shop_redirect', 'bbloomer_change_return_shop_url' );

    /* add excerpt to product loop */
    function output_product_excerpt() {
        global $post;
        $excerpt = get_field('acf_subheading');
        echo '<div class="my-excerpt">'.$excerpt.'</div>';
    }

    add_action( 'woocommerce_before_shop_loop_item_title', 'output_product_excerpt', 10 ); 

    // add lead time and available finishes to product loop
    function output_product_attributes() {

        global $post;
        $lead_time = get_field('acf_lead_time_message');
        $available_finishes = get_field('acf_available_finishes_message');
        $short_description = $post->post_excerpt;

        echo '<div class="my-product-subtitles"><div class="my-short-description">' . $short_description . '</div>';
        echo '<div class="my-lead-time-message">' . $lead_time . ' ' . $available_finishes . '</div></div>';

    }

    add_action( 'woocommerce_after_shop_loop_item_title', 'output_product_attributes', 200 ); 

    // enable gutenberg for woocommerce
    function activate_gutenberg_product( $can_edit, $post_type ) {

    if ( $post_type == 'product' ) {
            $can_edit = true;
        }
        return $can_edit;
    }

    add_filter( 'use_block_editor_for_post_type', 'activate_gutenberg_product', 10, 2 );

    // enable taxonomy fields for woocommerce with gutenberg on
    function enable_taxonomy_rest( $args ) {
        $args['show_in_rest'] = true;
        return $args;
    }

    add_filter( 'woocommerce_taxonomy_args_product_cat', 'enable_taxonomy_rest' );
    add_filter( 'woocommerce_taxonomy_args_product_tag', 'enable_taxonomy_rest' );

    /**
     * Add custom tabs to WooCommerce product page
     *
     * @param array $tabs
     * @return array
     */
    function custom_tab( $tabs ) {

        // Define new tabs with title, priority, and content callback
        $tab_data = [
            'form_01' => [
                'title'    => __( 'Delivery', 'woocommerce' ),
                'priority' => 32,
                'post_id'  => 3100,
                'label'    => 'Delivery',
            ],
            'form_02' => [
                'title'    => __( 'Warranty', 'woocommerce' ),
                'priority' => 33,
                'post_id'  => 15,
                'label'    => 'Warranty',
            ],
            'form_03' => [
                'title'    => __( 'About our Products', 'woocommerce' ),
                'priority' => 38,
                'post_id'  => 5252,
                'label'    => 'About our Products',
            ],
        ];

        // Loop through the new tabs and add them to the existing tabs array
        foreach ( $tab_data as $key => $data ) {
            $tabs[ $key ] = [
                'title'    => $data['title'],
                'priority' => $data['priority'],
                'callback' => function() use ( $data ) {
                    $post = get_post( $data['post_id'] );
                    $content = apply_filters( 'the_content', $post->post_content );
                    printf(
                        '<table class="woocommerce-product-attributes shop_attributes" aria-label="%1$s">
                            <tbody><tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_description">
                            <th class="woocommerce-product-attributes-item__label" scope="row">%1$s</th>
                            <td class="woocommerce-product-attributes-item__value">%2$s</td>
                            </tr></tbody></table>',
                        esc_html( $data['label'] ),
                        $content
                    );
                    wp_reset_postdata();
                }
            ];
        }

        // Return the modified tabs array
        return $tabs;
    }

    add_filter( 'woocommerce_product_tabs', 'custom_tab' );

    function render_pdf_button() {
        ?>
        <button type="button" id="make-pdf" class="download-pdf level-02 button">Download as PDF <i class="fa-light fa-file-pdf"></i></button>        
        <?php
    }

    add_action('tm_buttons_container', 'render_pdf_button', 20);

add_filter( 'woocommerce_structured_data_product', 'tm_modify_product_structured_data', 10, 2 );

/**
 * Modify WooCommerce product structured data.
 *
 * @param array $markup The structured data markup.
 * @param WC_Product $product The WooCommerce product object.
 * @return array Modified structured data markup.
 */
function tm_modify_product_structured_data( $markup, $product ) {

    // Brand
    $markup['brand'] = [
        '@type' => 'Brand',
        'name'  => 'Tailor-made'
    ];

    // Set category
    $markup['category'] = 'Luxury dining tables';

    // Set product condition
    $markup['itemCondition'] = 'https://schema.org/NewCondition';

    // Set description
    $markup['description'] = $product->get_name() . ' is a ' . strtolower( $product->get_short_description() );

    // Force image into array
    $image_id = $product->get_image_id();

    if ( $image_id ) {
        $markup['image'] = [ wp_get_attachment_image_url( $image_id, 'full' ) ];
    }

    // Convert offers array to single Offer object
    if ( ! empty( $markup['offers'][0] ) ) {

        $offer = $markup['offers'][0];

        // Add top-level price fields
        if ( isset( $offer['priceSpecification'][0]['price'] ) ) {

            $offer['price'] = $offer['priceSpecification'][0]['price'];
            $offer['priceCurrency'] = $offer['priceSpecification'][0]['priceCurrency'];

            // Convert priceSpecification to single object too
            $offer['priceSpecification'] = $offer['priceSpecification'][0];
            $offer['priceSpecification']['valueAddedTaxIncluded'] = true;
        }

        $offer['itemCondition'] = 'https://schema.org/NewCondition';

        $offer['seller'] = [
            '@type' => 'Organization',
            'name'  => 'Tailor-made',
            'url'   => home_url()
        ];

        $markup['offers'] = $offer;
    }

    return $markup;

};