<?php

    /**
     * Customise account area product image/link to include our params when set
     *
     * @param string $product_name
     * @param WC_Order_Item_Product $item
     * @return string Modified product name with custom image and link if applicable
     */
    function tm_account_order_custom_image( $product_name, $item ) {

        // Only modify on account pages
        if ( is_account_page() ) {

            // Get custom product link (with params)
            $custom_url = $item->get_meta('_tm_custom_product_url', true);

            // Replace product link href if custom URL exists
            if ( ! empty( $custom_url ) ) {
                $product_name = preg_replace('/href="[^"]+"/', 'href="' . esc_url($custom_url) . '"', $product_name);
            }

            // Get custom image from meta or legacy values
            $custom_image = $item->get_meta('_tm_custom_image', true);

            if ( empty( $custom_image ) && ! empty( $item->legacy_values['custom_image'] ) ) {
                $custom_image = $item->legacy_values['custom_image'];
            }

            // Generate image tag if custom image exists, otherwise fallback to default product thumbnail
            $image_tag = '';

            // If custom image exists, convert to base64 and create image tag
            if ( ! empty( $custom_image ) ) {
                
                // Use base64 version of custom image
                $base64 = '';

                // Check if the custom image is already a base64 string or a URL
                if ( is_string( $custom_image ) && strpos( $custom_image, 'data:image' ) === 0 ) {
                    // Already base64 → use directly
                    $base64 = $custom_image;
                } elseif ( filter_var( $custom_image, FILTER_VALIDATE_URL ) ) {
                    // Fallback if ever a real URL appears
                    $base64 = tm_get_custom_base64_thumbnail( $custom_image, 150 );
                }
                
                // If we have a valid base64 image, create the image tag
                if ( $base64 ) {
                    $image_tag = '<a href="' . esc_url( $custom_url ?: '#' ) . '">
                                    <img src="' . esc_attr( $base64 ) . '" alt="Configured Product"
                                        style="max-width:150px;height:auto;margin-right:8px;vertical-align:middle;" />
                                </a>';
                }
            }

            // Fallback to default product image if no custom image
            if ( empty( $image_tag ) ) {
                $product = $item->get_product();

                // Get default product thumbnail if available
                if ( $product && $product->get_image_id() ) {
                    $thumbnail = wp_get_attachment_image( $product->get_image_id(), 'thumbnail', false, [
                        'style' => 'max-width:150px;height:auto;margin-right:8px;vertical-align:middle;',
                        'alt'   => esc_attr( $product->get_name() ),
                    ] );
                    $image_tag = '<a href="' . esc_url( $custom_url ?: get_permalink( $product->get_id() ) ) . '">' . $thumbnail . '</a>';
                }
            }

            // Prepend image tag to product name if we have either a custom or default image
            if ( $image_tag ) {
                $product_name = $image_tag . $product_name;
            }
        }

        // Return modified product name with custom image and link if applicable
        return $product_name;
    }

    add_filter( 'woocommerce_order_item_name', 'tm_account_order_custom_image', 10, 2 );

    /**
     * Format order item meta keys: remove underscores/hyphens and capitalize words.
     *
     * @param string $display_key
     * @param string $meta
     * @param object $item
     * @return string Formatted display key for order item meta
     */
    function formatOrderItemMetaKey( $display_key, $meta, $item ) {

        // Transform key: remove underscores and hyphens, convert to title case
        $display_key = ucwords( str_replace( ['_', '-'], ' ', $display_key ) );

        return $display_key;
    }

    add_filter( 'woocommerce_order_item_display_meta_key', 'formatOrderItemMetaKey', 10, 3 );

    /**
     * Replace email product thumbnail with Base64 image.
     *
     * @param string $image
     * @param object $item
     * @return string Modified image HTML for email order item thumbnail
     */
    function tm_replace_email_order_item_thumbnail($image, $item) {
        // Get custom product link (with params) if available, otherwise default permalink
        $product = $item->get_product();
        $custom_link = $item->get_meta('_tm_custom_product_url', true);
        $product_link = !empty($custom_link) ? $custom_link : ($product ? $product->get_permalink() : '#');

        // Check if custom image exists
        $custom_image = $item->get_meta('_tm_custom_image', true);
        if ($custom_image) {
            $base64 = tm_get_custom_base64_thumbnail($custom_image, 150);
            if ($base64) {
                return '<a href="' . esc_url($product_link) . '"><img src="' . esc_attr($base64) . '" alt="Configured Product" style="max-width:150px;height:auto;" /></a>';
            }
        }

        // If no custom image, wrap the default WooCommerce thumbnail in the same link
        if (!empty($image)) {
            return '<a href="' . esc_url($product_link) . '">' . $image . '</a>';
        }

        return $image;
    }

    add_filter('woocommerce_order_item_thumbnail', 'tm_replace_email_order_item_thumbnail', 10, 2);

    /**
     * Undocumented function
     *
     * @param string $image_url
     * @param integer $max_width
     * @return string Base64 encoded image data URI
     */
    function tm_get_custom_base64_thumbnail( $image_url, $max_width = 150 ) {

        // If no image URL provided, return empty string
		if ( empty( $image_url ) ) {
			return '';
		}

        // Ensure we have the necessary function to download the image
		if ( ! function_exists( 'download_url' ) ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
		}

        // Download the image to a temporary location
		$temp_file = download_url( $image_url );
		if ( is_wp_error( $temp_file ) ) {
			var_dump( $temp_file->get_error_message() );
			return '';
		}

        // Use WP_Image_Editor to resize the image to the specified max width while maintaining aspect ratio
		$editor = wp_get_image_editor( $temp_file );
		if ( is_wp_error( $editor ) ) {
			@unlink( $temp_file );
			return '';
		}

        // Resize the image to the specified max width while maintaining aspect ratio
		$editor->resize( $max_width, null );
		$resized = $editor->save( null, 'image/png' );
		@unlink( $temp_file );

        // If resizing failed, return empty string
		if ( is_wp_error( $resized ) || empty( $resized['path'] ) ) {
			return '';
		}

        // Get the contents of the resized image, encode it in base64, and return as a data URI
		$final_data = file_get_contents( $resized['path'] );
		@unlink( $resized['path'] );

        // Return the image as a base64-encoded data URI
		return 'data:image/png;base64,' . base64_encode( $final_data );
	}

    /**
     * Add product link to email product title.
     *
     * @param string $product_name
     * @param object $item
     * @return string Modified product name with link in emails
     */
    function tm_email_order_item_product_link($product_name, $item) {

        // Only modify in emails, not on account pages
        if (!is_account_page()) {
            $product = $item->get_product();
            $custom_link = $item->get_meta('_tm_custom_product_url', true);
            $product_link = !empty($custom_link) ? $custom_link : ($product ? $product->get_permalink() : '#');

            // Wrap product name in anchor tag with correct link
            $product_name = '<a href="' . esc_url($product_link) . '" style="text-decoration:none;">' . $product_name . '</a>';
        }

        // Return modified product name with link in emails
        return $product_name;

    }

    // Ensure product links in emails also include custom URL
    add_filter('woocommerce_order_item_name', 'tm_email_order_item_product_link', 10, 2);