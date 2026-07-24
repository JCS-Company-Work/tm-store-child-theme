<?php
defined( 'ABSPATH' ) || exit;

global $product;
?>

<div class="swatch-product">

    <div class="swatch-product__image">
        <?php echo woocommerce_get_product_thumbnail(); ?>
    </div>

    <h1 class="swatch-product__title">
        <?php the_title(); ?>
    </h1>

    <div class="swatch-product__price">
        <?php echo $product->get_price_html(); ?>
    </div>

    <div class="swatch-product__add-to-cart">
        <?php woocommerce_template_single_add_to_cart(); ?>
    </div>

</div>