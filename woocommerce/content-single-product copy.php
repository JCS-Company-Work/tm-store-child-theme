<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

// Check if current product is a swatch
$is_swatch = is_product() && $post instanceof \WP_Post && has_term('swatch', 'product_cat', $post->ID);

// check if is featured product then get the first gallery id


if ( has_term('featured', 'product_cat', $post->ID) ) {
$first_gallery_ids = $product->get_gallery_image_ids();
$first_gallery_id = $first_gallery_ids[0];
$first_gallery_id_url = wp_get_attachment_image_url($first_gallery_id, 'large');
$first_gallery_id_tablet_url = wp_get_attachment_image_url($first_gallery_id, 'sampleslarge');
$first_gallery_id_mob_url = wp_get_attachment_image_url($first_gallery_id, 'homeportrait');

echo '<link rel="preload" href="' . $first_gallery_id_mob_url . '" as="image" fetchpriority="high" media="(max-width: 760px)">';
echo '<link rel="preload" href="' . $first_gallery_id_tablet_url . '" as="image" fetchpriority="high" media="(min-width: 761px) and (max-width: 1200px)">';
echo '<link rel="preload" href="' . $first_gallery_id_url . '" as="image" fetchpriority="high" media="(min-width: 1201px)">';
?>

<div class="featured-banner-container">
    <div class="featured-banner full-width-banner-content">
       <img alt="desktop lifestyle image of <?php echo get_the_title(); ?>" class="full-width-banner-desktop" src="<?php echo $first_gallery_id_url; ?>">
       <img alt="tablet lifestyle image of <?php echo get_the_title(); ?>" class="full-width-banner-tablet" src="<?php echo $first_gallery_id_tablet_url; ?>">
       <img alt="mobile lifestyle image of <?php echo get_the_title(); ?>" class="full-width-banner-mobile" src="<?php echo $first_gallery_id_mob_url; ?>">
       <h1><?php echo get_the_title(); ?></h1>
    </div>
</div>

<?php } ?>


    <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

        <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
        
            <?php if (get_field('acf_3d_model_name')) : ?>
            
                <div class="product-model-titles">
                    <div class="my-excerpt"><?php echo get_field('acf_subheading'); ?></div>
                    <div class="product-model-title"><h1><?php echo get_the_title(); ?></h1></div>
                    <span class="product-model-from-price" data-from-price="From £<?php echo number_format(wc_get_price_including_tax( wc_get_product(get_the_ID()) ), 2); ?>"></span>
                </div>
            
            
            <div class="configurator last-opened-none" id="configurator">
                <!-- 3D viewer -->
                <div id="obj3dviewer" item-name="<?php the_field('acf_3d_model_name'); ?>">
                    <section id="loading-screen"><div id="loader"></div></section>
                    <a href="#" class="obj3dviewer-toggle">Full Screen</a>
                </div>
                <!-- End 3D viewer -->
                <script async src="/wp-content/plugins/tm-product-configurator/assets/js/renders/three-js/examples/jsm/utils/gsap.min.js"></script>
                <script type="importmap">
                    {
                        "imports": {
                            "three": "/wp-content/plugins/tm-product-configurator/assets/js/renders/three-js/build/three.module.js?ver=60",
                            "three/addons/": "/wp-content/plugins/tm-product-configurator/assets/js/renders/three-js/examples/jsm/"
                        }
                    }
                </script>
                
            <?php else: ?>
                
                <div class="product-titles">
                    <?php if ( $is_swatch && has_post_thumbnail( $post->ID ) ) : ?>
                        <div class="product-thumbnail">
                            <?php echo get_the_post_thumbnail( $post->ID, 'woocommerce_thumbnail' ); ?>
                        </div>
                    <?php endif; ?>
                    <div class="product-title"><h1><?php echo get_the_title(); ?></h1></div>
                    <?php  if (wc_get_price_to_display( $product ) > 0) { ?>
                    <span class="product-price"><?php echo wc_price( wc_get_price_including_tax( wc_get_product(get_the_ID()) ) ) ; ?></span>
                    <?php } ?>
                </div>
                
            <?php endif;
            
            // If product is not a swatch, pull in current status block -->
            if(!$is_swatch) : 
                
                $product_data = \TMProductConfigurator\Product\TMPC_ProductData::getProductData();

            ?>
            <div class="playground">
                <div class="config-options">
                    <ul class="config-option-buttons">
                        <li class="config-option-model">
                            <div class="config-option-button" id="option-model"><i class="fa-regular fa-circle-1"></i><span>Model Size</span> Click here to select <br>the&nbsp;size
                            </div>
                        </li>
                        <li class="config-option-top-colour">
                            <div class="config-option-button" id="option-top-colour"><i class="fa-regular fa-circle-2"></i><span>Top Colour</span> Click here to select <br>your&nbsp;top
                            </div>
                        </li>
                        <li class="config-option-base">
                            <div class="config-option-button" id="option-base"><i class="fa-regular fa-circle-3"></i><span>Base Colour</span> Click here to select <br>Your&nbsp;Base
                            </div>      
                        </li>
                        <li class="config-option-metal-edge-veneer">
                            <div class="config-option-button" id="option-metal-edge-veneer"><i class="fa-regular fa-circle-4"></i><span>Edge Veneer</span> Click here to select <br>Your&nbsp;Edge
                            </div>
                        </li>
                    </ul>
                </div><!-- end config-options -->
                <div class="config-selectors" id="slideout">
                    <div id="configCloseButton" class="config-close" title="Close">
                        <i class="fa fa-times fa-lg">
                        <span class="sr-only">Close configurator</span>
                        </i>
                    </div><!-- end config-close -->
                    <div class="wapf">
                        <div class="wapf-wrapper">
                            <div class="wapf-field-group">
                                <div class="obj-top-colour wapf-field-container">
                                    <div class="wapf-field-label"><label><span>Top Colour</span></label></div>
                                    <div class="wapf-field-group">
                                        <div class="wapf-image-swatch-wrapper">
                                        <input type="hidden" class="wapf-tf-h" value="0" name="top_colour">
                                            <?php foreach($product_data['colour_options'] as $solidTops) : ?>
                                                <div class="wapf-swatch wapf-swatch--image apf-pick-box">
                                                    <label aria-label="<?php echo $solidTops['top']['name']; ?>">
                                                        <input 
                                                            type="radio" 
                                                            name="top_colour" 
                                                            class="wapf-input"
                                                            value="<?php echo esc_attr($solidTops['top']['name']); ?>" 
                                                            <?php echo ($product_data['selected']['top']['name'] === $solidTops['top']['name']) ? 'checked' : ''; ?>
                                                        >
                                                        <div>
                                                            <img class="swatch" src="<?php echo $solidTops['top']['url']; ?>" alt="<?php echo $solidTops['top']['name']; ?>"/>
                                                        </div>
                                                        <div class="wapf-swatch-label"><?php echo $solidTops['top']['name']; ?></div>
                                                    </label>
                                                </div>
                                                
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="obj-base wapf-field-container wapf-field-image-swatch field-35e4fc4 wapf-required" style="width:100%;" for="35e4fc4">
                                    <div class="wapf-field-label">
                                        <label><span>Base</span> <abbr class="required" title="required">*</abbr></label>
                                    </div>
                                    <div class="wapf-field-input">
                                        <div class="wapf-image-swatch-wrapper wapf-swatch-wrapper" style="--wapf-cols:auto-fill;--apf-col-width:68px">
                                            
                                            <input type="hidden" class="wapf-tf-h" value="0" name="base_colour">
                                            <!-- Dynamic swatches based on colour options data -->
                                            <?php foreach($product_data['master_values']['base'] as $base) : 
                                                
                                                // Determine which bases are allowed for the currently selected top colour to conditionally show/hide options based on top selection
                                                $current_top = implode('_', explode(' ', $product_data['selected']['top']['name'])); // Get the first word of the top colour name to match against options keys in colour options data

                                                // Get allowed bases for the current top selection from the colour options data
                                                $bases_for_current_top = $product_data['colour_options'][$current_top]['base'] ?? [];

                                            ?>

                                                <div class="wapf-swatch wapf-swatch--image wapf-single-select apf-pick-box" style="<?php echo (in_array($base['name'], $bases_for_current_top)) ? 'display: inline;' : 'display: none;'; ?>">
                                                    <label aria-label="<?php echo esc_attr($base['name']); ?>">
                                                        <input
                                                            type="radio"
                                                            name="base_colour"
                                                            class="wapf-input"
                                                            value="<?php echo esc_attr($base['name']); ?>"
                                                            <?php echo ($product_data['selected']['base']['name'] === $base['name']) ? 'checked' : ''; ?>
                                                        >
                                                        <div>
                                                            <img class="swatch" src="<?php echo esc_url($base['url'] ?? ''); ?>" alt="<?php echo esc_attr($base['name']); ?>" />
                                                        </div>
                                                        <div class="wapf-swatch-label"><?php echo $base['name']; ?></div>
                                                    </label>
                                                </div>

                                            <?php endforeach; ?>
                                            <!-- End dynamic swatches -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php if(array_key_exists('metal', $product_data['master_values'])) : ?>
                                        <div class="obj-metal-edge-veneer wapf-field-container wapf-field-image-swatch field-6a9c491 wapf-required" style="width:100%;" for="6a9c491">
                                            <div class="wapf-field-label">
                                                <label><span>Metal Edge Veneer</span> <abbr class="required" title="required">*</abbr></label>
                                            </div>
                                            <div class="wapf-field-input">
                                                <div class="wapf-image-swatch-wrapper wapf-swatch-wrapper" style="--wapf-cols:auto-fill;--apf-col-width:68px">
                                                    <input type="hidden" class="wapf-tf-h" value="0" name="metal_edge_veneer">
                                                    <!-- Dynamic swatches based on colour options data -->
                                                        <?php foreach($product_data['master_values']['metal'] as $metal) : 
                                                            
                                                            // Determine which metals are allowed for the currently selected top colour to conditionally show/hide options based on top selection
                                                            $current_top = $product_data['selected']['top']['name'];
                        
                                                            // Get allowed metals for the current top selection from the colour options data
                                                            $metals_for_current_top = $product_data['colour_options'][$current_top]['metal'] ?? [];
                        
                                                        ?>
                        
                                                            <div class="wapf-swatch wapf-swatch--image wapf-single-select apf-pick-box" style="<?php echo (in_array($metal['slug'], $metals_for_current_top)) ? 'display: inline;' : 'display: none;'; ?>">
                                                                <label aria-label="<?php echo esc_attr($metal['name']); ?>">
                                                                    <input
                                                                        type="radio"
                                                                        name="metal_edge_veneer"
                                                                        class="wapf-input"
                                                                        value="<?php echo esc_attr($metal['name']); ?>"
                                                                        <?php echo ($product_data['selected']['metal']['name'] === $metal['name']) ? 'checked' : ''; ?>
                                                                    >
                                                                    <div>
                                                                        <img class="swatch" src="<?php echo esc_url($metal['url'] ?? ''); ?>" alt="<?php echo esc_attr($metal['name']); ?>" />
                                                                    </div>
                                                                    <div class="wapf-swatch-label"><?php echo $metal['name']; ?></div>
                                                                </label>
                                                            </div>
                        
                                                        <?php endforeach; ?>
                                                        <!-- End dynamic swatches -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="obj-model wapf-field-container wapf-field-select field-2e633bf wapf-required has-pricing" style="width:100%;" for="2e633bf">
                                        <div class="wapf-field-label">
                                            <label for="wapf-4586-2e633bf"><span>Model</span> <abbr class="required" title="required">*</abbr></label>
                                        </div>
                                        <div class="wapf-field-input">
                                            <select name="product-model-size" class="wapf-input">
                                                <?php foreach($product_data['model_sizes'] as $model) : ?>
                                                    <?php
                                                        $inc_vat = wc_get_price_including_tax(wc_get_product(get_the_ID()), array('price' => $model['price']));
                                                    ?>
                                                    <option 
                                                        value="<?php echo esc_attr($model['label']); ?>" 
                                                        data-label="<?php echo esc_attr($model['label']); ?>" 
                                                        data-wapf-price="<?php echo esc_attr($inc_vat); ?>" 
                                                        data-ex-vat="<?php echo esc_attr($model['price']); ?>" 
                                                        <?php echo $model['is_default'] ? 'selected' : ''; ?>>
                                                        <?php echo esc_html($model['label']); ?>
                                                        <?php
                                                        if ($model['price'] > 0) {
                                                            echo '<span class="price-label">(+'. wc_price($inc_vat) . ')</span>';
                                                        }
                                                        ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                
                                        <div class="wapf-field-description">
                                            <span class="model-dims">
                                                <?php foreach($product_data['model_sizes'] as $model) : ?>
                                                    <span class="model-dim model-<?php echo esc_html($model['label']); ?>"><?php echo esc_html($model['dims']); ?></span>
                                                <?php endforeach; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                
        <?php if (get_field('acf_3d_model_name')) : // if model exists show end of 3d viewer ?>
            
                        </div><!-- end config-selectors -->
                    </div><!-- end playground -->
                <div id="configMask" class="config-mask"></div>
            </div><!-- end configurator -->	
		
	    <?php endif; ?>

    <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
    ?>

        <div class="product-slideshow">
            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
            ?>
        </div>


        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */

        if ( ! has_term( 227, 'product_cat' ) ) {
            do_action( 'woocommerce_after_single_product_summary' );
        }
        ?>


    </div>
        

<?php do_action( 'woocommerce_after_single_product' ); ?>