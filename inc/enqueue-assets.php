<?php

    /**
     * Register theme scripts and styles
     *
     * @return void
     */
    function register_theme_scripts() {

        $theme_uri = get_stylesheet_directory_uri();

        // Shepherd JS
        /*
        wp_register_script(
            'shepherd-tour-js',
            'https://cdn.jsdelivr.net/npm/shepherd.js/dist/js/shepherd.min.js',
            [],
            '2.0',
            ['in_footer' => true]
        );

        wp_register_script(
            'shepherd-js-tour-init',
            $theme_uri . '/assets/js/shepherd-js-tour-init.js',
            [],
            '3.2',
            ['in_footer' => true]
        );

        wp_register_style(
            'shepherd-tour-css',
            'https://cdn.jsdelivr.net/npm/shepherd.js/dist/css/shepherd.css',
            [],
            '1.1'
        );
        */

        // TV Embed
        wp_register_script(
            'tvembed-script',
            $theme_uri . '/assets/js/tvembed.js',
            [],
            '2.0',
            ['strategy' => 'defer','in_footer' => true]
        );

        // PhotoSwipe (registered globally, only enqueued on non-product pages)
        wp_register_style(
            'photoswipe-css',
            'https://unpkg.com/photoswipe@5/dist/photoswipe.css',
            [],
            '5.7'
        );

    }

    add_action('wp_enqueue_scripts', 'register_theme_scripts', 5);

    /**
     * Enqueue critical CSS with high priority and version for cache busting
     *
     * @return void
     */
    function enqueueCriticalStyles() {
        wp_enqueue_style('tm-critical', get_stylesheet_directory_uri() . '/assets/css/critical.css', [], '090226.28', 'all');
    }

    //add_action('wp_enqueue_scripts', 'enqueueCriticalStyles', 1);

    /**
     * Enqueue theme scripts and styles conditionally
     *
     * @return void
     */
    function enqueue_theme_scripts() {

        global $post;

        wp_enqueue_style('consolidated-style', get_stylesheet_directory_uri() . '/assets/css/consolidated.css', [], '110626.1', 'all');

        // Product pages
        if (function_exists('is_product') && is_product() && $post instanceof WP_Post) {
            wp_enqueue_script('product-ajax-cart');
        }

        // Product pages that are NOT swatches
        if (function_exists('is_product') && is_product() && $post instanceof WP_Post && !has_term('swatch', 'product_cat', $post->ID)) {

            // Shepherd JS - disabled for now
            //wp_enqueue_script('shepherd-tour-js');
            //wp_enqueue_script('shepherd-js-tour-init');
            //wp_localize_script('shepherd-js-tour-init', 'ShepherdData', ['sessionKey' => session_id()]);
            //wp_enqueue_style('shepherd-tour-css');

        }

        // Non-product pages → enqueue PhotoSwipe
        if (function_exists('is_product') && !is_product()) {
            wp_enqueue_style('photoswipe-css');
            wp_enqueue_script('photoswipe-init');
        }

        // TV Embed
        if (isset($_GET['tvembed']) && $_GET['tvembed'] === 'embed-class') {
            wp_enqueue_script('tvembed-script');
        }
    }

    add_action('wp_enqueue_scripts', 'enqueue_theme_scripts', 20);
   
    /**
     * Convert resources to modules
     *
     * @param string $tag
     * @param string $handle
     * @param string $src
     * @return string
     */
    function scriptLoader($tag, $handle, $src) {
        
        // JS handles safe to defer/async
        $defer_js = [
            'navigation-min',      
            'sc-countdown-min',  
            'order-attribution-min',
            'brands-min',
            'footer-min',
            'sourcebuster-min',
        ];

        if (in_array($handle, $defer_js)) {
            // Add defer attribute
            $tag = str_replace(' src=', ' defer src=', $tag);
        }
        
        // load photoswipe as module
        if ($handle === 'photoswipe-init') {
            return '<script type="module" src="' . esc_url($src) . '"></script>';
        }
        return $tag;
    };

    add_filter('script_loader_tag', 'scriptLoader', 10, 3);

    /**
     * Safely defer non-critical CSS using media="print"
     *
     * @param string $html
     * @param string $handle
     * @param string $href
     * @param string $media
     * @return string
     */
    function styleLoader($html, $handle, $href, $media) {

        // List of non-critical CSS handles to defer
        $defer_css = [
            'storefront-child-style',
            'tm-product-renders',
            'brands',
            'wc-stripe-blocks-checkout-style',
            'smart-coupons',
            'gutenberg-blocks',
            'wapf-layers',
            'wapf-frontend',
            'aws-style'
        ];

        if (in_array($handle, $defer_css, true)) {
            // Use media="print" trick to load asynchronously
            $html = str_replace(
                "media='all'",
                "media='print' onload=\"this.media='all'\"",
                $html
            );
        }

        return $html;

    };

    add_filter('style_loader_tag', 'styleLoader', 10, 4);

    /**
     * Preload critical CSS (e.g. cookie consent banner)
     *
     * @param string $html
     * @param string $handle
     * @param string $href
     * @param string $media
     * @return string
     */
    function preloadStyles($html, $handle, $href, $media) {

        // Preload cookie consent banner CSS
        if ($handle === 'cookie-consent-banner') {
            $html = "<link rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\" href='" . esc_url($href) . "'>";
        }
        return $html;
    }

    add_filter('style_loader_tag', 'preloadStyles', 10, 4);

    /**
     * Extract default image data from WAPF fields for product renders
     *
     * @param object $post
     * @return array
     */
    function setDefaultImages($post) {

        // array to hold conversion to expected three.js values
		$fieldKeys = [
			'top colour' 		=> 'colour',
			'base'		 		=> 'secondcolour',
			'metal edge veneer'	=> 'metalcolour'
		];
		
        // Retrieve wapf fieldgroup serialized data from db  
        $fieldgroup_raw = get_post_meta($post->ID, '_wapf_fieldgroup', true);  
  
        // Unserialize db data  
        $fieldgroup_data = maybe_unserialize($fieldgroup_raw);  
  
        // Array to hold default image data  
        $default_imgs = [];  
  
        // Loop over fields to extract the swatch name for default selected items  
        if (is_array($fieldgroup_data) && isset($fieldgroup_data['fields']) && is_array($fieldgroup_data['fields'])) {

            foreach($fieldgroup_data['fields'] as $fieldGroup) {    

                if (isset($fieldGroup['options']['choices']) && is_array($fieldGroup['options']['choices'])) {    

                    // Find selected option    
                    foreach($fieldGroup['options']['choices'] as $choice) {    

                        if(isset($choice['selected']) && $choice['selected']) {    

                            // If selected item, extract filename and add to $default_imgs array    
                            $pattern = '#/uploads/((?:swatch|banding)-.+?)-\d+x\d+\.(jpg|jpeg|png|webp)#i';    
                            if (isset($choice['image']) && preg_match($pattern, $choice['image'], $matches)) {    
                                $default_imgs[$fieldKeys[strtolower($fieldGroup['label'])]] = $matches[1];    
                            }    
                        }    
                    }    
                }    
            }    
        }   

        return $default_imgs;

    }