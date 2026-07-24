<?php
    // add the following to page url to create xml version /?xml=feed.xml
    /** Template Name: Google Products Featured */
    
    if (isset($_GET['digest'])) {
        $digest = $_GET['digest'];
        if ($digest == "pin") {
            $availability = "in_stock";
        } else {
            $availability = "in_stock";
        }
} else {
    $availability = "in_stock";
}

$ver = '?ver=v2';

?>
<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
    <channel>
        <title>Product List - Tailor-made Store</title>
        <link>https://store.tailormade.uk</link>
        <description>Product feed containing the required and recommended attributes for Tailor-made products</description>
        <item>
            <g:id>4743</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Metal Veneer | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-semicolonna/?colour=Viola%20Rosso&amp;veneer=Brushed%20Copper&amp;base=Viola%20Rosso&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-semicircular-viola-rosso-300x120-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-semicircular-viola-rosso-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-semicircular-viola-rosso-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-semicircular-viola-rosso-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-semicircular-viola-rosso-300x120-02.jpg</g:additional_image_link>
            <g:price>7800.00 GBP</g:price>
            <g:shipping_weight>270 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>77 cm</g:product_height>
            <g:product_weight>270 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Viola Rosso</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-metal-bp101-semi</g:mpn>
            <g:brand>Tailor-made</g:brand><g:identifier_exists>false</g:identifier_exists><g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke stadium-shaped dining table handcrafted from premium Italian porcelain stoneware. Features elegant twin semicircular base, metal veneer profile, and available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from marble finishes including Calacatta, Travertine, and Viola Rosso as shown. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Metal veneer edge</g:product_highlight>
            <g:product_highlight>Twin semicircular base</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £6,000</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>16 Colour Options including Calacatta, Travertine, Viola Rosso finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Rectangular Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>6927</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Pedestal Base | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-contorno-romano-obelisco-20/?colour=Arabescato%20New&amp;base=Black%20Grey&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/contorno-20mm-romano-black-grey-arabescato-new-300x120-03.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/contorno-20mm-romano-black-grey-arabescato-new-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/contorno-20mm-romano-black-grey-arabescato-new-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/contorno-20mm-romano-black-grey-arabescato-new-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/contorno-20mm-romano-black-grey-arabescato-new-300x120-04.jpg</g:additional_image_link>
            <g:price>6300.00 GBP</g:price>
            <g:shipping_weight>380 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>380 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Arabescato</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt12-solid-20-bp501-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury dining table handcrafted from premium Italian porcelain stoneware with an elegant real wood pedestal base. The gently curved shape maximises seating space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from authentic marble and stone-effect finishes including Arabescato (as shown), Calacatta and Travertine. Perfect for high-end interiors, statement dining rooms, and luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Pedestal base</g:product_highlight>
            <g:product_highlight>Curved Top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £4,980</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Custom marble and stone finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5018</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Twin Hexagon Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-alveo-solido-12/</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-alveo-laurent-golden-300x120-03.jpg<?php echo $ver; ?></g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-alveo-laurent-golden-300x120-02.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-alveo-laurent-golden-300x120-05.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-alveo-laurent-golden-300x120-04.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-alveo-laurent-golden-300x120-01.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-alveo-laurent-golden-300x120-06.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:price>7380.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>290 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Laurent Golden</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury oval dining table handcrafted from premium Italian porcelain stoneware. Features a distinctive twin hexagon Alveo base, refined shark nose profile, and perfectly balanced proportions. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from marble effect finishes including Calacatta, Travertine, Statuario or Laurent Golden as shown here, for a modern architectural statement piece.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Twin hexagon Alveo base</g:product_highlight>
            <g:product_highlight>12mm stoneware top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Calacatta, Travertine, Statuario finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5545</g:id>
            <g:title>Luxury Marble Dining Table | Seats 10–12 | 200–300cm | UK Handcrafted with Twin Column Real Wood Base | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-romano-solido-20/?colour=Bianca%20Luna&amp;base=American%20Walnut&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tt03-20mm-300x120-romano-bianca-luna-02.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt03-20mm-300x120-romano-bianca-luna-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt03-20mm-300x120-romano-bianca-luna-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt03-20mm-300x120-romano-bianca-luna-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt03-20mm-300x120-romano-bianca-luna-05.jpg</g:additional_image_link>
            <g:price>6600.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Bianca Luna</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-20-bp101-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury oval dining table handcrafted in Britain from premium 20mm Italian porcelain stoneware with twin column real wood base. Features a special shark nose edge profile, balanced proportions, and marble finish. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm. Seats 8–12. Choose from 10 finishes including marble and stone effects such as Calacatta, Travertine, and Statuario. Designed for luxury interiors and statement dining spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 10–12 people</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,640</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>10 marble and stone finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5526</g:id>
            <g:title>Luxury Stone Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Twin Hexagon Base | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-alveo-solido-20/</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-07.jpg<?php echo $ver; ?></g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-05.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-03.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-06.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-04.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-02.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-alveo-black-horse-mulberry-300x120-01.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:price>7680.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Black Horse</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-20-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury rectangular dining table handcrafted from premium 20mm Italian porcelain stoneware. Features a distinctive twin hexagon base, refined shark nose profile, and perfectly balanced proportions. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from marble effect finishes including Calacatta, Travertine, or Raffaello for a modern architectural statement piece.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Twin hexagon Alveo base</g:product_highlight>
            <g:product_highlight>20mm stoneware top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,880</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Calacatta, Travertine finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Rectangular Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5075</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Gold Metal Veneer and Twin Walnut Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-contorno-romano/?colour=Golden%20Ambra&amp;base=American%20Walnut&amp;veneer=Brushed%20Gold&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-contorno-romano-golden-ambra-american-walnut-300cm-06.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-contorno-romano-golden-ambra-american-walnut-300cm-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-contorno-romano-golden-ambra-american-walnut-300cm-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-contorno-romano-golden-ambra-american-walnut-300cm-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-contorno-romano-golden-ambra-american-walnut-300cm-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-contorno-romano-golden-ambra-american-walnut-300cm-05.jpg</g:additional_image_link>
            <g:price>6720.00 GBP</g:price>
            <g:shipping_weight>330 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>77 cm</g:product_height>
            <g:product_weight>300 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Golden Ambra</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt12-metal-bp101-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury curved dining table handcrafted in Britain from premium Italian porcelain stoneware and sustainable American Walnut. Features a gold metal veneer edge, twin fluted real wood base, and marble porcelain top. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm. Seats 8–12. Choose from Calacatta, Statuario, Travertine, or Golden Ambra as shown.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Gold metal veneer edge</g:product_highlight>
            <g:product_highlight>Twin American Walnut base</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,760</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Custom marbles and stones</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5024</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Pedestal Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-obelisco-solido-12/?colour=Ivory%20Gioiello&amp;base=Ivory%20Gioiello&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12-obelisco-gioiello-300x120-06.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12-obelisco-gioiello-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12-obelisco-gioiello-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12-obelisco-gioiello-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12-obelisco-gioiello-300x120-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12-obelisco-gioiello-300x120-05.jpg</g:additional_image_link>
            <g:price>6600.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>310 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Ivory Gioiello</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-bp501</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury oval dining table handcrafted from premium Italian porcelain stoneware with an elegant pedestal base. The stadium shape maximises seating space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from authentic marble or stone-effect finishes including Calacatta, Travertine, and Ivory Gioiello as shown here. Perfect for high-end interiors, statement dining rooms, and luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Pedestal base</g:product_highlight>
            <g:product_highlight>Stadium oval shape</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,160</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Custom marble and stone finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4930</g:id>
            <g:title>Luxury Circular Marble Dining Table | Seats 6–8 | 120–150cm | UK Handcrafted with Metal Veneer and Hexagon Base | 2 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-luna-alveo/?base=Macchia%20Vecchia&amp;colour=Macchia%20Vecchia&amp;veneer=Decorative%20Bronze&amp;model=150cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tt02-metal-401-macchiavecchia-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt02-metal-401-macchiavecchia-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt02-metal-401-macchiavecchia-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt02-metal-401-macchiavecchia-2.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt02-metal-401-macchiavecchia-2b.jpg</g:additional_image_link>
            <g:price>3840.00 GBP</g:price>
            <g:shipping_weight>150 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>150cm</g:product_length>
            <g:product_width>150cm</g:product_width>
            <g:product_height>77 cm</g:product_height>
            <g:product_weight>150 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Tundra</g:color>
            <g:size>150cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt02-metal-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury circular dining table handcrafted in Britain from premium Italian porcelain stoneware. Available in 120cm or 150cm, featuring a bronze metal veneer edge and bold hexagon base. Seats 6–8. Choose from authentic marble and stone finishes including Calacatta and Travertine. A modern geometric centrepiece for luxury interiors.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 6-8</g:product_highlight>
            <g:product_highlight>Hexagon base design</g:product_highlight>
            <g:product_highlight>Metal veneer edge</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £3,480</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Marble Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4982</g:id>
            <g:title>Luxury Circular Marble Dining Table | Seats 6–8 | 120–150cm | UK Handcrafted with Column Base | 2 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-luna-colonna-solido-12/?colour=Laguna%20Blanca&amp;base=Cobolo&amp;model=150cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/luna-12mm-colonna-laguna-cobolo-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12mm-colonna-laguna-cobolo-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12mm-colonna-laguna-cobolo-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12mm-colonna-laguna-cobolo-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12mm-colonna-macchia-minimal-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12-circular-tundra-travertino-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12-circular-tundra-travertino-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12-circular-tundra-travertino-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/luna-12-circular-tundra-travertino-04.jpg</g:additional_image_link>
            <g:price>4200.00 GBP</g:price>
            <g:shipping_weight>140 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>150cm</g:product_length>
            <g:product_width>150cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>140 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Laguna Blanca</g:color>
            <g:size>150cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt02-solid-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury circular dining table handcrafted from premium Italian porcelain stoneware. Features a central column base for maximum comfort and clean visual lines. Available in 120cm or 150cm sizes. Seats 6–8. Choose from authentic marble and stone finishes including Calacatta and Travertine. Perfect for both grand dining rooms and intimate spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 6–8 people</g:product_highlight>
            <g:product_highlight>Classical column base</g:product_highlight>
            <g:product_highlight>Made to order</g:product_highlight>
            <g:product_highlight>Available in 120cm or 150cm</g:product_highlight>
            <g:product_highlight>From £3,840</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Exclusive marble and stone finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Circular Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5558</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Twin Hexagon Base | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-alveo-solido-20/?colour=Travertine%20Chiaro&amp;base=Travertine%20Chiaro&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-solido-20-travertine-chiaro-travertine-chiaro-300cm-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-solido-20-travertine-chiaro-travertine-chiaro-300cm-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-solido-20-travertine-chiaro-travertine-chiaro-300cm-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-solido-20-travertine-chiaro-travertine-chiaro-300cm-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-solido-20-travertine-chiaro-travertine-chiaro-300cm-05.jpg</g:additional_image_link>
            <g:price>7680.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Travertine Chiaro</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-20-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury stadium shaped dining table handcrafted from premium 20mm thickness Italian porcelain stoneware. Features a distinctive twin hexagon Alveo base, refined shark nose profile, and perfectly balanced proportions. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from marble effect finishes including Calacatta or Travertine as shown here, for a modern architectural statement piece.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Twin hexagon Alveo base</g:product_highlight>
            <g:product_highlight>20mm stoneware top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,880</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Calacatta, Travertine finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4985</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Twin Column Base and Metal Veneer | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-colonna/?colour=Tundra&amp;veneer=Brushed%20Gold&amp;base=Tundra&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-colonna-tundra-300x120-03.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-colonna-tundra-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-colonna-tundra-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-colonna-tundra-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-colonna-tundra-300x120-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-colonna-tundra-300x120-05.jpg</g:additional_image_link>
            <g:price>7800.00 GBP</g:price>
            <g:shipping_weight>330 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>77 cm</g:product_height>
            <g:product_weight>330 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Tundra</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-metal-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand><g:identifier_exists>false</g:identifier_exists><g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke stadium-shaped dining table handcrafted from premium Italian porcelain stoneware. Features elegant twin column base, metal edge veneer, and available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from marble finishes including Calacatta, Travertine, and Tundra as shown. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Metal veneer edge</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £6,000</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>16 Colour Options including Calacatta, Travertine, Tundra finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4559</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Twin Column Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-colonna-solido-12/</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-colonna-101-michelangelo-bianco-cobolo-300x120-06.jpg<?php echo $ver; ?></g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-colonna-101-michelangelo-bianco-cobolo-300x120-03.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-colonna-101-michelangelo-bianco-cobolo-300x120-01.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-colonna-101-michelangelo-bianco-cobolo-300x120-05.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-colonna-101-michelangelo-bianco-cobolo-300x120-02.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-colonna-101-michelangelo-bianco-cobolo-300x120-07.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:price>7380.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>290 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Michelangelo Bianco</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury rectangular dining table handcrafted from premium Italian porcelain stoneware. Features a twin column base. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from marble effect finishes including Calacatta, Statuario, Travertine, or Golden Ambra as shown here.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>12mm stoneware top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Calacatta, Travertine finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Rectangular Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5569</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Twin Column Base | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-colonna-solido-20/?colour=Raffaello&amp;base=Raffaello&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-colonna-raffaello-300x120-01.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-colonna-raffaello-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-colonna-raffaello-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-colonna-raffaello-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-colonna-raffaello-300x120-04.jpg</g:additional_image_link>
            <g:price>7680.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Raffaello</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-20-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke curved dining table handcrafted from premium 20mm Italian porcelain stoneware. Features a twin column base. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from marble effect finishes including Calacatta, Statuario, Travertine, or Raffaello as shown here.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>20mm stoneware top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,880</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Calacatta, Travertine finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5550</g:id>
            <g:title>Luxury Travertine Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Pedestal Base | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-obelisco-solido-20/?colour=Travertino%20Romano&amp;base=Travertino%20Romano&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-solido-20-travertino-romano-travertino-romano-300cm-02.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-solido-20-travertino-romano-travertino-romano-300cm-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-solido-20-travertino-romano-travertino-romano-300cm-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-solido-20-travertino-romano-travertino-romano-300cm-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-solido-20-travertino-romano-travertino-romano-300cm-05.jpg</g:additional_image_link>
            <g:price>6960.00 GBP</g:price>
            <g:shipping_weight>380 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>380 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Travertino Romano</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-20-bp501</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Stadium-shaped luxury dining table manufactured from the finest Italian porcelain stoneware. Shark nose edge profile, paired with pedestal base for a balanced structural presence. Four sizes and surfaces that capture the essence of marble or stone. Handmade-to-order in the UK. Model shown 300 x 120cm seats 10-12.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Pedestal base</g:product_highlight>
            <g:product_highlight>Curved Top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Marble and travertine finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4992</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Pedestal Base and Metal Veneer | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-obelisco/?colour=Calacatta%20Luxury&amp;veneer=Decorative%20Bronze&amp;base=Calacatta%20Luxury&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-calacatta-luxury-dec-bronze-calacatta-luxury-300cm-02.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-calacatta-luxury-dec-bronze-calacatta-luxury-300cm-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-calacatta-luxury-dec-bronze-calacatta-luxury-300cm-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-calacatta-luxury-dec-bronze-calacatta-luxury-300cm-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-calacatta-luxury-dec-bronze-calacatta-luxury-300cm-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-obelisco-calacatta-luxury-dec-bronze-calacatta-luxury-300cm-06.jpg</g:additional_image_link>
            <g:price>6960.00 GBP</g:price>
            <g:shipping_weight>350 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>77 cm</g:product_height>
            <g:product_weight>350 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Calacatta Luxury</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-metal-bp501</g:mpn>
            <g:brand>Tailor-made</g:brand><g:identifier_exists>false</g:identifier_exists><g:identifier_exists>false</g:identifier_exists>
            <g:description>Stadium-shaped luxury dining table with a bronze veneer edge. Sculptural pedestal base provides both stability and visual impact. Available in four sizes to accommodate different dining spaces and seating requirements. Classic and contemporary surfaces featuring marble and stone effects and Calacatta as shown. Each table is handmade in the UK. Size shown 300cm seats 10-12.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Metal veneer edge</g:product_highlight>
            <g:product_highlight>Pedestal base</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>16 Colour Options including Calacatta, Travertine, Laurent Golden</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5013</g:id>
            <g:title>Luxury Stone Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Semicircular Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-semicolonna-solido-12/?colour=Travertine%20Silver&amp;base=Travertine%20Silver&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-semicolonna-solido-12-travertine-silver-travertine-silver-300cm-5.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-semicolonna-solido-12-travertine-silver-travertine-silver-300cm-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-semicolonna-solido-12-travertine-silver-travertine-silver-300cm-03b.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-semicolonna-solido-12-travertine-silver-travertine-silver-300cm-02-rotated-1.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-semicolonna-solido-12-travertine-silver-travertine-silver-300cm-03c.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-semicolonna-solido-12-travertine-silver-travertine-silver-300cm-6b.jpg</g:additional_image_link>
            <g:price>7380.00 GBP</g:price>
            <g:shipping_weight>230 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>230 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertine</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-bp101-semi</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury dining table handcrafted from premium Italian porcelain stoneware with a twin semicircular base. The gently curved shape maximises seating space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from authentic marble and stone-effect finishes including Travertine (as shown), Marquina and Calacatta. Perfect for high-end interiors, statement dining rooms, and luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8–12 people</g:product_highlight>
            <g:product_highlight>Semicircular Twin base</g:product_highlight>
            <g:product_highlight>Curved Top</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>Custom marble and stone finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5044</g:id>
            <g:title>Luxury Marble Dining Table | Seats 10–12 | 200–300cm | UK Handcrafted with Twin Column Real Wood Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-romano-solido-12/?base=Black%20Grey&amp;colour=Michelangelo%20Bianco&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-romano-solido-12-black-grey-michelangelo-bianco-300cm-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-romano-solido-12-black-grey-michelangelo-bianco-300cm-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-romano-solido-12-black-grey-michelangelo-bianco-300cm-05-rotated-1.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-romano-solido-12-black-grey-michelangelo-bianco-300cm-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-romano-solido-12-black-grey-michelangelo-bianco-300cm-03.jpg</g:additional_image_link>
            <g:price>6240.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>290 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Michelangelo Bianco</g:color>
            <g:size>300x120cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-bp101-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury oval dining table handcrafted in Britain from premium 12mm Italian porcelain stoneware with twin column real wood base. Features a shark nose edge profile, balanced proportions, and marble finish. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm. Seats 8–12. Choose from 10 finishes including marble and stone effects such as Calacatta, Travertine, and Statuario. Designed for luxury interiors and statement dining spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 10–12 people</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>Available in 200–300cm</g:product_highlight>
            <g:product_highlight>From £5,280</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_highlight>20 marble and stone finishes</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Oval Dining Tables &gt; Porcelain</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4999</g:id>
            <g:title>Luxury Stone Dining Table | Seats 8–12 | 200–300cm | UK Handcrafted with Metal Veneer and Twin Hexagon Base | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-alveo/?colour=Travertine%20Silver&amp;veneer=Decorative%20Bronze&amp;base=Travertine%20Silver&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-travertine-silver-decorative-bronze-travertine-silver-300cm-05.jpg<?php echo $ver; ?></g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-travertine-silver-decorative-bronze-travertine-silver-300cm-01.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-travertine-silver-decorative-bronze-travertine-silver-300cm-04-rotated-1-rotated.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-travertine-silver-decorative-bronze-travertine-silver-300cm-02.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-mezzaluna-alveo-travertine-silver-decorative-bronze-travertine-silver-300cm-03.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:price>7800.00 GBP</g:price>
            <g:shipping_weight>330 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>78 cm</g:product_height>
            <g:product_weight>330 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertine</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-metal-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury oval dining table handcrafted in Britain from premium Italian porcelain stoneware. Available in 4 sizes from 200cm to 300cm. Featuring a bronze metal veneer edge and twin hexagon base. Seats 8–12. Choose from over 20 authentic marble and stone finishes including Calacatta and Travertine. A modern geometric centrepiece for luxury interiors.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Hexagon base design</g:product_highlight>
            <g:product_highlight>Metal veneer edge</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £6,000</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5513</g:id>
            <g:title>Luxury Large Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-romano-solido-20/?colour=Travertino%20Romano&amp;base=American%20Walnut&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-07.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-romano-20mm-travertine-chiaro-300x120-08.jpg</g:additional_image_link>
            <g:price>6600.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertine</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-20-bp101-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury rectangular top is made from top-quality Italian porcelain stoneware, featuring a distinctive special shark nose edge and a substantial 20mm thickness that feels really solid and well-made. Featuring twin wooden base, offering 2 finish options. The table is available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from marble finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Real wood base design</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,640</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5062</g:id>
            <g:title>Luxury Large Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-romano-solido-12/</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazzo-romano-12-taj-mahal-pearl-300x120-06.jpg<?php echo $ver; ?></g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazzo-romano-12-taj-mahal-pearl-300x120-02.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazzo-romano-12-taj-mahal-pearl-300x120-01.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazzo-romano-12-taj-mahal-pearl-300x120-04.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazzo-romano-12-taj-mahal-pearl-300x120-03.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazzo-romano-12-taj-mahal-pearl-300x120-05.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:price>6240.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>290 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Taj Mahal Pearl</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-bp101-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury rectangular top crafted from premium Italian porcelain stoneware, featuring an elegant double pencil edge and 12mm thickness. Stands on a twin column base with a choice of two real wood finishes. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from over 20 marble finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Real wood base design</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,280</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5564</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | Choice of Colours </g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-semicolonna-solido-20/?colour=Raffaello&amp;base=Cobolo&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-semicircular-raffaello-cobolo-300x120-03.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-semicircular-raffaello-cobolo-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-semicircular-raffaello-cobolo-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-semicircular-raffaello-cobolo-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-semicircular-raffaello-cobolo-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-20mm-semicircular-raffaello-cobolo-300x120-04.jpg</g:additional_image_link>
            <g:price>7680.00 GBP</g:price>
            <g:shipping_weight>300 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>300 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Raffaello</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-20-bp101-semi</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury stadium-shaped top crafted from premium 20mm Italian porcelain stoneware with a special shark nose edge profile. The table sits on a twin semicircular base. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from four marble finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Twin semicircular base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,880</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Marble Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
         <item>
            <g:id>4806</g:id>
            <g:title>Luxury Dining Table | Seats 8-12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-alveo-solido-12/</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-alveo-travertine-silver-300x120-05.jpg<?php echo $ver; ?></g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-alveo-travertine-silver-300x120-06.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-alveo-travertine-silver-300x120-07.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-alveo-travertine-silver-300x120-02.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-alveo-travertine-silver-300x120-03.jpg<?php echo $ver; ?></g:additional_image_link>
            <g:price>7380.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>290 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertine Silver</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury rectangular dining table with 12mm Italian porcelain stoneware. Twin hexagon base and pencil edge profile defines its elegant lines. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from over 20 marble and stone finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Twin hexagon base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
         <item>
            <g:id>5540</g:id>
            <g:title>Luxury Travertine Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-colonna-solido-20/?colour=Travertino%20Romano&amp;base=Travertino%20Romano&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-01.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-07.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tavolo-piazza-colonna-20mm-travertino-romano-300x120-05.jpg</g:additional_image_link>
            <g:price>7680.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertine</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-20-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury rectangular dining table crafted from 20mm premium Italian porcelain stoneware. Featuring a shark nose edge profile and standing on a twin column base. This dining table is made-to-order and available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from marble and stone finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,880</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5008</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-colonna-solido-12/?colour=Taj%20Mahal%20Pearl&amp;base=Mogano&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-colonna-taj-mahal-mogano-300x120-03.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-colonna-taj-mahal-mogano-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-colonna-taj-mahal-mogano-300x120-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-colonna-taj-mahal-mogano-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-colonna-taj-mahal-mogano-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-12mm-colonna-taj-mahal-mogano-300x120-06.jpg</g:additional_image_link>
            <g:price>7380.00 GBP</g:price>
            <g:shipping_weight>290 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>290 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Taj Mahal Pearl</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-solid-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury stadium dining table, handcrafted from premium Italian porcelain stoneware. Features an elegant twin column base and is available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from marble and stone finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Twin column base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Marble Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5584</g:id>
            <g:title>Luxury Curved Dining Table | Twin Hexagon Base | Seats 8–12 | 200–300cm | 4 Sizes | Choice of Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-contorno-alveo-solido-20mm/?colour=Travertino%20Romano&amp;base=Travertino%20Romano&amp;model=300cm</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/tt12-alveo-20mm-travertine-04.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt12-alveo-20mm-travertine-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt12-alveo-20mm-travertine-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/tt12-alveo-20mm-travertine-05.jpg</g:additional_image_link>
            <g:price>7680.00 GBP</g:price>
            <g:shipping_weight>360 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>360 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertino</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt12-solid-20-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury dining table handcrafted from premium 20mm Italian porcelain stoneware. Features a twin hexagon base and a refined shark nose profile. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from marble and stone finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Twin hexagon base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,880</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>6779</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-mezzaluna-romano-obelisco/?model=300cm&amp;colour=Golden%20Ambra&amp;base=American%20Walnut&amp;veneer=Brushed%20Gold</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-romano-golden-ambra-300x1200-02.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-romano-golden-ambra-300x1200-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-romano-golden-ambra-300x1200-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-romano-golden-ambra-300x1200-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-romano-golden-ambra-300x1200-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/mezzaluna-metal-romano-golden-ambra-300x1200-05.jpg</g:additional_image_link>
            <g:price>6360.00 GBP</g:price>
            <g:shipping_weight>350 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>78 cm</g:product_height>
            <g:product_weight>350 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Golden Ambra</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt03-metal-bp501-wood</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury dining table, handcrafted in Britain from premium Italian porcelain stoneware, featuring an elegant real wood pedestal base and metal edge veneer. The stadium shape maximises seating space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Available in a variety of tops and 2 options for the real wood base. Choose from authentic marble and stone-effect finishes, including Arabescato, Calacatta and Travertine. Perfect for high-end interiors, statement dining rooms, and contemporary luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Real wood pedestal base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,040</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Marble Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4818</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-obelisco-solido-12/?model=300cm&amp;colour=Travertine%20Silver&amp;base=Travertine%20Silver</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-obelisco-travertine-silver-300x120-05.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-obelisco-travertine-silver-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-obelisco-travertine-silver-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-obelisco-travertine-silver-300x120-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-obelisco-travertine-silver-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-12-obelisco-travertine-silver-300x120-06.jpg</g:additional_image_link>
            <g:price>6600.00 GBP</g:price>
            <g:shipping_weight>310 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>74 cm</g:product_height>
            <g:product_weight>310 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Stone Effect</g:pattern>
            <g:color>Travertine Silver</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-bp501</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury dining table handcrafted in Britain from premium 12mm Italian porcelain stoneware with an elegant pedestal base. Rectangular shape maximises space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from authentic marble and stone-effect finishes, including Arabescato, Calacatta and Travertine. Perfect for high-end interiors, statement dining rooms, and contemporary luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Obelisco base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,160</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Stone Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4586</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-obelisco/?model=300cm&amp;colour=Laguna%20Blanca&amp;base=Mogano&amp;veneer=Decorative%20Bronze</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-03.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-04.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-07.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-obelisco-laguna-blanc-mogano-300x120-08.jpg</g:additional_image_link>
            <g:price>6960.00 GBP</g:price>
            <g:shipping_weight>350 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>78 cm</g:product_height>
            <g:product_weight>350 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Laguna Blanca</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-metal-bp501</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury dining table handcrafted in Britain from premium Italian porcelain stoneware with a imposing pedestal base, furnished with metal edge veneer. The rectangular shape maximises seating space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from authentic marble and stone-effect finishes, including Arabescato, Calacatta and Travertine. Perfect for high-end interiors, statement dining rooms, and contemporary luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Pedestal base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Rectangular Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4561</g:id>
            <g:title>Luxury Dining Table | Seats 8-12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-alveo/?model=300cm&amp;colour=Michelangelo%20Bianco&amp;base=Michelangelo%20Bianco&amp;veneer=Brushed%20Inox</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-alveo-metal-inox-michelangelo-bianco-300x120-02.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-alveo-metal-inox-michelangelo-bianco-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-alveo-metal-inox-michelangelo-bianco-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-alveo-metal-inox-michelangelo-bianco-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-alveo-metal-inox-michelangelo-bianco-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-alveo-metal-inox-michelangelo-bianco-300x120-04.jpg</g:additional_image_link>
            <g:price>7800.00 GBP</g:price>
            <g:shipping_weight>350 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>78 cm</g:product_height>
            <g:product_weight>350 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Michelangelo Bianco</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-metal-bp401</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury rectangular dining table with metal edge veneer, handcrafted from premium Italian porcelain stoneware. Twin hexagon base supports a sculptural form. Available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Seats 8–12. Choose from marble finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms. Model shown 300x120.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Hexagon base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £6,000</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Rectangular Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>4480</g:id>
            <g:title>Luxury Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | 20+ Colours</g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-colonna/?model=300cm&amp;colour=Laurent%20Golden&amp;base=Mogano&amp;veneer=Decorative%20Bronze</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-colonna-laurent-golden-mogano-300x120-03.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-colonna-laurent-golden-mogano-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-colonna-laurent-golden-mogano-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-colonna-laurent-golden-mogano-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-colonna-laurent-golden-mogano-300x120-06.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-metal-colonna-laurent-golden-mogano-300x120-04.jpg</g:additional_image_link>
            <g:price>7800.00 GBP</g:price>
            <g:shipping_weight>330 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>78 cm</g:product_height>
            <g:product_weight>330 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Laurent Golden</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-metal-bp101</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Luxury rectangular dining table crafted from premium Italian porcelain stoneware, featuring a distinctive metal edge veneer. Standing on twin column bases and available in 200x100cm, 220x100cm, 250x110cm, or 300x120cm sizes. Available in a variety of tops and leg colours. Seats 8–12. Choose from marble finishes, including Calacatta and Travertine. Perfect for luxury interiors and high-end dining rooms.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Colonna base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £6,000</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Marble Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
        <item>
            <g:id>5518</g:id>
            <g:title>Luxury Marble Dining Table | Seats 8–12 | 200–300cm | 4 Sizes | Choice of Colours </g:title>
            <g:link>https://store.tailormade.uk/product/tavolo-piazza-obelisco-solido-20/</g:link> 
            <g:availability><?php echo $availability; ?></g:availability>
            <g:availability_date><?php echo date('Y-m-d', strtotime("+28 days"));?>T00:00:00+00:00</g:availability_date>
            <g:image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-obelisco-arabescato-new-cobolo-300x120-07.jpg</g:image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-obelisco-arabescato-new-cobolo-300x120-02.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-obelisco-arabescato-new-cobolo-300x120-01.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-obelisco-arabescato-new-cobolo-300x120-05.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-obelisco-arabescato-new-cobolo-300x120-03.jpg</g:additional_image_link>
            <g:additional_image_link>https://store.tailormade.uk/wp-content/uploads/piazza-20-obelisco-arabescato-new-cobolo-300x120-06.jpg</g:additional_image_link>
            <g:price>6960.00 GBP</g:price>
            <g:shipping_weight>380 kg</g:shipping_weight>
            <g:shipping_label>extra-large-furniture</g:shipping_label>
            <g:shipping>
                <g:country>GB</g:country>
                <g:price>200.00 GBP</g:price>
                <g:service>White‑glove delivery</g:service>
            </g:shipping>
            <g:product_length>300cm</g:product_length>
            <g:product_width>120cm</g:product_width>
            <g:product_height>75 cm</g:product_height>
            <g:product_weight>380 kg</g:product_weight>
            <g:material>Italian Porcelain Stoneware</g:material>
            <g:pattern>Marble Effect</g:pattern>
            <g:color>Arabescato</g:color>
            <g:size>300cm</g:size>
            <g:age_group>adult</g:age_group>
            <g:gender>unisex</g:gender>
            <g:mpn>tt04-solid-20-bp501</g:mpn>
            <g:brand>Tailor-made</g:brand>
            <g:identifier_exists>false</g:identifier_exists>
            <g:description>Bespoke luxury dining table handcrafted in Britain from premium 20mm Italian porcelain stoneware with a substantial pedestal base. The rectangular shape maximises seating space and conversation comfort. Available in 200x100cm, 220x100cm, 250x110cm, and 300x120cm sizes. Seats 8–12. Choose from authentic marble and travertine finishes, including Arabescato, Calacatta and Travertine. Perfect for high-end interiors, statement dining rooms, and contemporary luxury spaces.</g:description>
            <g:google_product_category>4355</g:google_product_category>
            <g:condition>new</g:condition>
            <g:product_highlight>Handcrafted in Britain</g:product_highlight>
            <g:product_highlight>Premium Italian Porcelain Stoneware</g:product_highlight>
            <g:product_highlight>Bespoke Luxury Design – Seats 8-12</g:product_highlight>
            <g:product_highlight>Pedestal base</g:product_highlight>
            <g:product_highlight>Choice of marble and stone surfaces</g:product_highlight>
            <g:product_highlight>From £5,520</g:product_highlight>
            <g:product_highlight>4-6 Week Delivery</g:product_highlight>
            <g:product_type>Luxury Furniture &gt; Dining Tables &gt; Marble Dining Tables &gt; Bespoke</g:product_type>
            <g:custom_label_0>Featured</g:custom_label_0>
            <g:custom_label_1>Luxury Dining Tables</g:custom_label_1>
        </item>
    </channel>
</rss>