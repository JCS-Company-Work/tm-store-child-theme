<?php

    // Register custom image sizes
    add_action('after_setup_theme', function() {

        // Gallery thumbnails (1.4:1)
        add_image_size('gallery-thumb-xs', 140, 100, true);  // Mobile
        add_image_size('gallery-thumb-sm', 210, 150, true);  // Retina mobile
        add_image_size('gallery-thumb-md', 280, 200, true);  // Tablet / small desktop

        // WAPF / layer graphics (2.5:1)
        add_image_size('gallery-thumb-md2', 600, 240, true);
        add_image_size('gallery-thumb-landscape-sm', 280, 113, true);

        // Square / sample imagery
        add_image_size('samplesthumb', 300, 300, true);
        add_image_size('square-lg', 800, 800, false);
        add_image_size('square-xl', 1600, 1600, false);

        // Category thumbs
        add_image_size('category-thumb', 660, 330, true);

        // Homepage banners and hero images
        add_image_size('homeportrait', 700, 1200, true);
        add_image_size('homelandscape', 1600, 800, true);

        // Large sample / marketing
        add_image_size('sampleslarge', 1200, 1200, true);

    });

    // change default thumbnails to 300x300. This override uses 
    // height and width value not the name of a declared custom image size
    add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
        return [
            'width'  => 660,
            'height' => 330,
            'crop'   => 0,
        ];
    } );

    /* change default thumbnail in product loop to wordpress thrumbnail */ 
    add_filter('woocommerce_get_image_size_thumbnail', function() {
        return [
            'width' => 660,
            'height' => 330,
            'crop' => 0,
        ];
    });

    add_filter('wp_get_attachment_image_attributes', function($attr, $attachment, $size) {
        // Add lazy loading & low fetch priority for gallery thumbnails and your custom sizes
        if ( in_array($size, ['woocommerce_gallery_thumbnail', 'category-thumb', '660x330']) ) {
            $attr['loading'] = 'lazy';
            $attr['fetchpriority'] = 'low';
            $attr['decoding'] = 'async';
            
        }
        // Fallback: add to all images without loading attr (optional)
        elseif (!isset($attr['loading'])) {
            $attr['loading'] = 'lazy';
            $attr['fetchpriority'] = 'low';
            $attr['decoding'] = 'async';
        }
        return $attr;
    }, 10, 3);

    // Filter to remove 440w images from srcset for performance
    // add_filter('wp_calculate_image_srcset', function($sources) {

    //     $widths_to_remove = [440, 1920, 1536, 700, 768, 2000];

    //     foreach ($sources as $width => $source) {
    //         if (in_array($width, $widths_to_remove)) {
    //             unset($sources[$width]);
    //         }
    //     }
    //     return $sources;
    // }, 10, 3);