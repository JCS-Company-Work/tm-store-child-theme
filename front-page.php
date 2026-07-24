<?php get_header();

    /** Template Name: Homepage */

    

?>



<?php 
$images = get_field('image_gallery');
$desktopsize = 'full'; // (thumbnail, medium, large, full or custom size)
$tabletsize = 'sampleslarge'; //sampleslarge
$mobilesize = 'homeportrait'; // (thumbnail, medium, large, full or custom size)
$vers = '?ver=137';

$imageloop3 = '';
$imageloop4 = '';
$imageloop5 = '';
$i = 1;
if( $images ): ?>




    
        <?php foreach( $images as $image_id => $value):
                $class = ( $image_id !== count( $images ) -1 ) ? "," : "";

                $prefetch = '';
                
                if ($i == 1) {
                $prefetch .= "<link rel='preload' media='(max-width: 760px)'  fetchpriority='high'  as='image' href='" . wp_get_attachment_image_src($value, $mobilesize)[0] . $vers ."' />";
                $prefetch .= "<link rel='preload' media='(min-width: 761px) and (max-width: 1200px)'  fetchpriority='high'  as='image' href='" . wp_get_attachment_image_src($value, $tabletsize)[0] . $vers ."' />";
                $prefetch .= "<link rel='preload' media='(min-width: 1201px)'  fetchpriority='high'  as='image' href='" . wp_get_attachment_image_src($value, $desktopsize)[0] . $vers ."' />";
                }
                
                //$imageloop .= "\n"; 
                //$imageloop2 .= "\n";
                //$imageloop .= '{'. "\n"; 
                //$imageloop .= '"src" : "' . wp_get_attachment_image_src( $value, $size )[0] . '",' . "\n"; 
                //$imageloop .= '"' . wp_get_attachment_image_src( $value, $mobilesize )[0] . '?ver=6"';
                //$imageloop2 .= '"' . wp_get_attachment_image_src( $value, $desktopsize )[0] . '?ver=6"';
                //$imageloop .= '"caption" : "' . $i . '"' . "\n"; 
                //$imageloop .= $class . "\n"; 
                //$imageloop2 .= $class . "\n"; 
                //$imageloop .= "\n"; 
                
                $imageloop3 .= "\n"; 
                $imageloop3 .= '{ img: "';
                $imageloop3 .= wp_get_attachment_image_src($value, $desktopsize )[0];
                $imageloop3 .= $vers . '", bsdescription: "';
                $imageloop3 .= get_the_title( $value );
                $imageloop3 .= '", bsbuttontext: "';
                $imageloop3 .= wp_get_attachment_caption($value);
                $imageloop3 .= '", bsbuttonlink: "';
                $imageloop3 .= get_post_meta($value, '_wp_attachment_image_alt', TRUE);
                $imageloop3 .= '"},';
                $imageloop3 .= "\n"; 
                
                $imageloop4 .= "\n"; 
                $imageloop4 .= '{ img: "';
                $imageloop4 .= wp_get_attachment_image_src($value, $tabletsize )[0];
                $imageloop4 .= $vers . '", bsdescription: "';
                $imageloop4 .= get_the_title( $value );
                $imageloop4 .= '", bsbuttontext: "';
                $imageloop4 .= wp_get_attachment_caption($value);
                $imageloop4 .= '", bsbuttonlink: "';
                $imageloop4 .= get_post_meta($value, '_wp_attachment_image_alt', TRUE);
                $imageloop4 .= '"},';
                $imageloop4 .= "\n";
                
                
                $imageloop5 .= "\n"; 
                $imageloop5 .= '{ img: "';
                $imageloop5 .= wp_get_attachment_image_src($value, $mobilesize )[0];
                $imageloop5 .= $vers . '", bsdescription: "';
                $imageloop5 .= get_the_title( $value );
                $imageloop5 .= '", bsbuttontext: "';
                $imageloop5 .= wp_get_attachment_caption($value);
                $imageloop5 .= '", bsbuttonlink: "';
                $imageloop5 .= get_post_meta($value, '_wp_attachment_image_alt', TRUE);
                $imageloop5 .= '"},';
                $imageloop5 .= "\n"; 
                
                
       
$i++ 

?>
        <?php endforeach; ?>
   
<?php endif; 
 
 echo $prefetch;

?>


    <main id="content">
        
        
        <!-- page content -->
        <div class="homepage-wrapper">
            <div class="homepage-content"></div>
        </div><!-- homepage-wrapper -->
        
        <script type="text/javascript" src="/wp-content/themes/tm-shop-child/assets/js/backstretch/jquery.backstretch.min.js" id="backstretch-js"></script>    
<script>


const isMobile = window.matchMedia("(max-width: 760px)").matches;
const isTablet = window.matchMedia("(min-width: 761px) and (max-width: 1200px)").matches;
const isDesktop = window.matchMedia("(min-width: 1201px)").matches;



    if (isMobile) {
        // Mobile code
            var items = [ <?php echo $imageloop5; ?> ];
            
    } else if (isTablet) {
               // Tablet code
            var items = [ <?php echo $imageloop4; ?> ];
            
    } else if (isDesktop) {
            // Desktop code
            var items = [ <?php echo $imageloop3; ?> ];
        }




        var options = {
            fade: 250,
            duration: 12000,
            alignY: "center" 
        };

        var images = jQuery.map(items, function(i) { return i.img; });
        var slideshow = jQuery(".homepage-wrapper").backstretch(images,options);

        

        jQuery(window).on("backstretch.show", function(e, instance) {
            var theDescription = items[instance.index].bsdescription;
            var theButtonText = items[instance.index].bsbuttontext;
            var theButtonLink = items[instance.index].bsbuttonlink;
            
            if (theButtonLink) {
            	jQuery(".homepage-wrapper .homepage-content").html('<div class="homepage-01">'+theDescription+'</div><div class="homepage-02"><a class="button level-03" href="'+theButtonLink+'">'+theButtonText+'</a></div>').show();
            } else {
            	jQuery(".homepage-wrapper .homepage-content").html('<div class="homepage-01"><h2>Contemporary Living</h2> <h1>Exquisite Marble Dining Tables</h1> <h3>Redefine your dining space with sculpted simplicity and effortless grace.</h3></div><div class="homepage-02"><a class="button level-03" href="/product-category/furniture/tables/piazza/">Explore our Collection</a></div>').show();
            }
            
            
            
        });
        jQuery(window).on("backstretch.before", function(e, instance) {
        	jQuery(".backstretch-caption").hide();
        });
        

    
</script>
       
       
        
<div class="homepage-horizontal-list horizontal-list">
        
        <ul class="product-list"> 
        	<li>
        		<a href="https://store.tailormade.uk/product-category/furniture/tables/colonna/?product_tag=cladded" aria-label="link to Colonna Collection"><div class="swatch-container">
        			<img class="swatch" src="/wp-content/uploads/tiled-colonna-mezzaluna-metal.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="wp-content/uploads/tiled-colonna-mezzaluna-metal.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Colonna Collection
        			</li>
        			<li class="product-description">
        				Column Base Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>
        	
        	<li>
        		<a href="/product-category/furniture/tables/alveo/" aria-label="link to Alveo Collection"><div class="swatch-container">
        			<img class="swatch" src="wp-content/uploads/hexagon-tiled-piazza-metal.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="/wp-content/uploads/hexagon-tiled-piazza-metal.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Alveo Collection
        			</li>
        			<li class="product-description">
        				Hexagon Base Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>
        	
        	<li>
        		<a href="/product-category/furniture/tables/obelisco/?product_tag=cladded" aria-label="link to Obelisco Collection"><div class="swatch-container">
        			<img class="swatch" src="/wp-content/uploads/obelisco-tiled-wood-piazza-metal.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="/wp-content/uploads/obelisco-tiled-wood-piazza-metal.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Obelisco Collection
        			</li>
        			<li class="product-description">
        				Pedestal Base Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>
        	
        	<li>
        		<a href="/product-category/furniture/tables/semicolonna/" aria-label="link to Semicolonna Collection"><div class="swatch-container">
        			<img class="swatch" src="/wp-content/uploads/semicolonna-mezzaluna-12.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="/wp-content/uploads/semicolonna-mezzaluna-12.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Semicolonna Collection
        			</li>
        			<li class="product-description">
        				Semicircular Base Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>

			<li>
        		<a href="/product-category/furniture/obelisco/?product_tag=wood" aria-label="link to Obelisco Romano Collection"><div class="swatch-container">
        			<img class="swatch" src="/wp-content/uploads/romano-obelisco-contorno-metal.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="/wp-content/uploads/romano-obelisco-contorno-metal.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Obelisco Romano Collection
        			</li>
        			<li class="product-description">
        				Real Wood Pedestal Base Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>
        	
        	<li>
        		<a href="/product-category/furniture/romano/?product_tag=column" aria-label="link to Colonna Romano Collection"><div class="swatch-container">
        			<img class="swatch" src="/wp-content/uploads/romano-colonna-piazza-12.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="/wp-content/uploads/romano-colonna-piazza-12.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Colonna Romano Collection
        			</li>
        			<li class="product-description">
        				Real Wood Circular Base Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>
        	
        	<li>
        		<a href="/product-category/furniture/luna/" aria-label="link to Luna Collection"><div class="swatch-container">
        			<img class="swatch" src="/wp-content/uploads/hexagon-luna-metal.png<?php echo $vers; ?>" alt="product image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        			<img class="swatch" src="/wp-content/uploads/hexagon-luna-metal.jpg<?php echo $vers; ?>" alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		</div></a>
        		
        			<img class="swatchspacer" src="/wp-content/uploads/tile-swatch-square.png<?php echo $vers; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300" />
        		
        		<ul class="product-list-attributes">
        			<li class="product-title">
        				Luna Collection
        			</li>
        			<li class="product-description">
        			  Circular Dining&nbsp;Tables
        			</li>
        		</ul>
        	</li>
        	
        	
        	
        	
        </ul>

    </div><!-- end homepage-horizontal-list -->
    
        <!-- banner 1 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-piazza-colonna-solido-12/" aria-label="link to Tavolo Piazza Colonna page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-michelangelo-bianco-12mm-banner01.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-michelangelo-bianco-12mm-banner01-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-michelangelo-bianco-12mm-banner1.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-piazza-colonna-solido-12/" class="banner-cta-button" aria-label="Start designing the Tavolo Piazza Colonna">Start Designing</a></div>
            </div>
            <figcaption>Model: Piazza Colonna | Colour: Michelangelo Bianco | From&nbsp;£5,520</figcaption>
        </div>
        
        
         <div class="home-typograhpy">
           <div class="home-typography-container">
                <div class="home-typography-content">
                    <span>Your&nbsp;Vision, Your&nbsp;Surface, Your&nbsp;Table.</span> <span>Choose stunning marble classics or bold vibrant stones - every table crafted exactly how you dreamed&nbsp;it.</span>
                </div>
            </div>
        </div><!-- end home-typograhpy -->
        
        
         <!-- banner 2 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-piazza-alveo-solido-12/" aria-label="link to Tavolo Piazza Alveo page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-stone-travertine-silver-12mm-banner02.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-stone-travertine-silver-12mm-banner02-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-stone-travertine-silver-12mm-banner2.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-piazza-alveo-solido-12/" class="banner-cta-button" aria-label="Start designing the Tavolo Piazza Alveo">Start Designing</a></div>
            </div>
            <figcaption>Model: Piazza Alveo | Colour: Travertine Silver | From&nbsp;£5,200</figcaption>
        </div>


  
    <div class="column-with-text">                  
        <div class="column-with-text-container">  
            <div class="column-with-text-content">      
                <div class="column-with-text-column-one">    
                    <h1>Every table tells a story. Ours&nbsp;are crafted to be the perfect setting for yours. Beautifully designed, customisable, and built to last.</h1>
                    <div class="tm-cta"><a href="/product-category/furniture/tables/dining-tables/" class="button level-01">Start Designing Yours</a></div>
                </div>
                <div class="column-with-text-column-two">
                    <p>From intimate circular tables for cozy conversations to grand rectangular pieces that seat the whole family, <span class="tailor-made">Tailor-made<sup>+</sup></span> creates dining tables in thoughtfully designed shapes and sizes. Choose from a carefully curated selection of premium Italian porcelain stoneware surfaces, from dramatic marble veining to subtle concrete textures, and pair them with our range of beautiful base options. Every detail can be customised to create something uniquely yours. Whether you're drawn to bold statement pieces or prefer understated elegance, your perfect table is waiting to be designed.</p>
                </div>
            </div>
        </div>
    </div><!-- end column-with-text -->

    <!-- banner 3 -->
         <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-piazza-obelisco-solido-20/" aria-label="link to Tavolo Piazza Obelisco page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-arabescato-new-20mm-banner03.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-arabescato-new-20mm-banner03-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-arabescato-new-20mm-banner3.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-piazza-obelisco-solido-20/" class="banner-cta-button" aria-label="Start designing the Tavolo Piazza Obelisco">Start Designing</a></div>
            </div>
            <figcaption>Model: Piazza Obelisco | Colour: Arabescato New | From&nbsp;£5,520</figcaption>
        </div>
        
    
    <div class="banner-with-text">
        <div class="banner-with-text-container">
            <div class="banner-with-text-content" style="background-image:url(wp-content/uploads/banner-square-02-swatch-laurent-golden.jpg)">
                <div class="banner-with-text-heading"><h1>Our Philosophy</h1></div>
                <div class="banner-with-text-text">
                <p>A dining table anchors the home. It is where life unfolds, conversations deepen, celebrations begin, and memories take shape. We create bespoke dining tables of enduring beauty and quiet strength. Each piece is designed to become part of your daily ritual whilst rising to every occasion with effortless grace.</p>
                <p>Through thoughtful design and uncompromising materials, we craft tables that adapt to your life. Bold or understated, each piece reflects your vision, made precisely to your specifications. This is furniture built to last. To witness countless gatherings. To become part of your story.</p></div>
                <div class="banner-with-text-cta"><a href="?p=1897" class="button level-03">About Us</a></div>
            </div>
        </div>
    </div><!-- end banner with text -->
    
   <!-- banner 4 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-mezzaluna-obelisco/" aria-label="link to Tavolo Mezzaluna Obelisco page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-calacatta-metal-luxury-banner04.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-calacatta-metal-luxury-banner04-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-calacatta-metal-luxury-banner4.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-mezzaluna-obelisco/" class="banner-cta-button" aria-label="Start designing the Tavolo Mezzaluna Obelisco">Start Designing</a></div>
            </div>
            <figcaption>Model: Mezzaluna Obelisco | Colour: Calacatta Luxury | From&nbsp;£5,520</figcaption>
        </div>
    
    <div class="text-image-column">
        <div class="text-image-column-container">
            <div class="text-image-column-content">
                <div class="text-image-column-heading"><h1>British Craftsmanship</h1></div>
                <div class="text-image-column-text"><p>Each bespoke dining table is handcrafted in Great Britain by artisans who have devoted their careers to perfecting their craft. Made at our dedicated facility in Chatteris, every piece receives the individual attention and precision that defines true British manufacturing excellence.</p></div>
                <div class="text-image-column-cta"><a href="?p=5968" class="button level-02">Manufacturing Process</a></div>
            </div>
            <div class="text-image-column-image">
               <div class="text-image-column-image-01" style="padding:133.33% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/836108804?h=c9e9a26236&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Highly skilled technician" data-ready="true"></iframe></div>
            </div>
        </div>
    </div><!-- end coloumn text and image -->
    
    <!-- banner 5 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-piazza-obelisco/" aria-label="link to Tavolo Piazza Obelisco page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-laguna-blanc-metal-banner05.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-laguna-blanc-metal-banner05-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-laguna-blanc-metal-banner5.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-piazza-obelisco/" class="banner-cta-button" aria-label="Start designing the Tavolo Piazza Obelisco">Start Designing</a></div>
            </div>
            <figcaption>Model: Piazza Obelisco | Colour: Laguna Blanca | From&nbsp;£5,520</figcaption>
        </div>   

    <div class="tm-benefits">
       <ul class="tm-benefits-list">
            <li><img decoding="async" fetchpriority="low" loading="lazy" alt="durability icon" src="/wp-content/uploads/benefit-non-scratch.svg"><br />
            <h1>Enduring by Design</h1>
            <p>Crafted to withstand the rhythm of daily life whilst maintaining its refined presence for decades to come.</p>
            </li>
            <li><img decoding="async" fetchpriority="low" loading="lazy" alt="hygiene icon" src="/wp-content/uploads/benefit-hygenic.svg"><br />
            <h1>Inherently Pure</h1>
            <p>A naturally non-porous surface that ensures impeccable hygiene meets uncompromising elegance.</p>
            </li>
            <li><img decoding="async" fetchpriority="low" loading="lazy" alt="heat resistance icon" src="/wp-content/uploads/benefit-heat-resistant.svg"><br />
            <h1>Beyond the Ordinary</h1>
            <p>Exceptional heat resistance protects your investment, allowing you to dine without hesitation or concern.</p>
            </li>
            <li><img decoding="async" fetchpriority="low" loading="lazy" alt="stain resistance icon" src="/wp-content/uploads/benefit-stain-resistant.svg"><br />
            <h1>Effortlessly Pristine</h1>
            <p>Superior materials that resist the inevitable, ensuring your table remains as flawless as the day it arrived.</p>
            </li>
        </ul>
        <div class="tm-benefits-cta"><a href="?p=6043" class="button level-02">Read about our surfaces</a></div>
    </div><!-- end tm-benefits -->
    
    <!-- banner 6 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-piazza-alveo-solido-20/" aria-label="link to Tavolo Piazza Alveo page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-black-horse-20mm-banner06.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-black-horse-20mm-banner06-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-black-horse-20mm-banner6.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-piazza-alveo-solido-20/" class="banner-cta-button" aria-label="Start designing the Tavolo Piazza Alveo">Start Designing</a></div>
            </div>
            <figcaption>Model: Piazza Alveo | Colour: Black Horse | From&nbsp;£5,880</figcaption>
        </div>     
    
    <div class="column-with-text">
        <div class="column-with-text-container">
            <h1>About</h1>
            <div class="column-with-text-content">
                <div class="column-with-text-column-one">
                    <h1>We create bespoke dining tables using premium porcelain stoneware, handcrafted to order in our Chatteris design studio.</h1>
                </div>
                <div class="column-with-text-column-two">
                    <p>Each piece begins with your vision and ends with precision execution. Select your surface from our curated collection. Define your dimensions. Choose your design. We handle the rest, from material samples to meticulous craftsmanship through white-glove delivery to your door. No catalogue pieces. No compromise. Just considered design and uncompromising quality, crafted specifically for your home. Italian materials. British craft. Made for you. </p>
                   
                </div>
            </div>
        </div>
    </div><!-- end column-with-text -->
    
    <!-- banner 7 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-piazza-colonna/" aria-label="link to Tavolo Piazza Colonna page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-laurent-golden-metal-banner07.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-laurent-golden-metal-banner07-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-laurent-golden-metal-banner7.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-piazza-romano-solido-12/" class="banner-cta-button" aria-label="Start designing the Tavolo Piazza Colonna">Start Designing</a></div>
            </div>
            <figcaption>Model: Piazza Colonna | Colour: Laurent Golden | From&nbsp;£6,000</figcaption>
        </div>
        
        <p>&nbsp;</p>
    
   <!-- banner 8 -->
        <div class="full-width-banner">
            <div class="full-width-banner-content">
                <a href="/product/tavolo-luna-alveo/" aria-label="link to Tavolo Luna Alveo page"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-desktop" src="/wp-content/uploads/luxury-dining-table-marble-macchia-vecchia-12mm-banner08.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-tablet" src="/wp-content/uploads/luxury-dining-table-marble-macchia-vecchia-12mm-banner08-1200x1200.jpg<?php echo $vers; ?>"><img alt="lifestyle image of dining table" decoding="async" fetchpriority="low" loading="lazy" class="full-width-banner-mobile" src="/wp-content/uploads/luxury-dining-table-marble-macchia-vecchia-12mm-banner8.jpg<?php echo $vers; ?>"></a>
                <div class="banner-cta"> <a href="/product/tavolo-luna-alveo/" class="banner-cta-button" aria-label="Start designing the Tavolo Luna Alveo">Start Designing</a></div>
            </div>
            <figcaption>Model: Luna Alveo | Colour: Macchia Vecchia | From&nbsp;£3,480</figcaption>
        </div> 



    </main>
    
    
    

<?php get_footer(); ?>