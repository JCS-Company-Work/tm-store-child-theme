<?php get_header();

    /** Template Name: Landing Page */

    

?>



<link rel="preconnect" href="https://player.vimeo.com">  


    <main id="content">
        
        <?php
         $collectionver = "?ver=4";
         $collectioncolumn = "Monarch";
         $collectionhexagon = "Phantom";
         $collectionpedestal = "Vanguard";
         $collectionsemicolumn = "Luna";
         
         $collectioncolumndesc = "Column base";
         $collectionhexagondesc = "Hexagon base";
         $collectionpedestaldesc = "Pedestal base";
         $collectionsemicolumndesc = "Semicircular base";
         
         $collectioncolumnlink = "/product-category/furniture/monarch/";
         $collectionhexagonlink = "/product-category/furniture/phantom/";
         $collectionpedestallink = "/product-category/furniture/vanguard/";
         $collectionsemicolumnlink = "/product-category/furniture/luna/";
         
         $collection12mm = "Slim";
         $collection20mm = "Solid";
         $collection50mm = "Edge";
         
         $collection12desc = "Slim Profile 12mm";
         $collection20desc = "Solid Profile 20mm";
         $collection50desc = "Metal Edge Profile";
         
         global $post;
         $landingslug = $post->post_name; // Gets the slug (e.g., "luxury-dining-tables")
         $landingkeyword = ucfirst(str_replace('-', ' ', $landingslug)); // Converts to "luxury dining tables"
         
         $landing_review_01 = "<p>Thrilled with the table<br> — it looks stunning.</p>";
         $landing_review_03 = "<p>Impeccable installation. <br>Very happy all around.</p>";
         $landing_review_02 = "<p>Exceptional delivery service<br> — careful and precise.</p>";

         $landingheading = get_the_title();
         $landingintro = wp_strip_all_tags(get_the_content());
         $landingctalink = "/";
         $landingheroimage = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'large' );
         $landingheroimagetablet = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'sampleslarge' );
         $landingheroimagemobile = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'homeportrait' );
         
         
        //$landingheroimage = "landing-page-hero-table-01";
         $landingheroimagetitle = "Luna Edge - Curve";
         
         $whatsapplink = "https://wa.me/447782274315?text=Hi%2C%20I%20have%20a%20question%20about%20your%20dining%20tables%20-" . get_permalink();
         $whatsappshowroomlink = "https://wa.me/447782274315?text=Hi%2C%20I%20would%20like%20to%20arrange%20to%20see%20the%20dining%20tables%20in%20your%20partner%20showroom%20-" . get_permalink();
         $whatsapplinkcta = "Chat on WhatsApp";
    ?> 

<script>
window.dataLayer = window.dataLayer || [];

window.dataLayer.push({
  event: "landing_page_context",
  page_type: "landing_page",
  campaign_context: "<?php echo $landingslug; ?>",
  product_interest: "<?php echo $landingslug; ?>",
  estimated_order_value: 5000,
  currency: "GBP",
  ecommerce: {
    items: [
      {
        item_id: "lp_<?php echo $landingslug; ?>",
        item_name: "<?php echo $landingheading; ?>",
        item_category: "Landing Page",
        item_category2: "Dining Tables",
        item_brand: "Tailor-made",
        price: 5000,
        google_business_vertical: "retail"
      }
    ]
  }
});
</script>

<script>
function trackWhatsAppClick() {
  window.dataLayer = window.dataLayer || [];

  window.dataLayer.push({
    event: "whatsapp_click",
    lead_type: "<?php echo $landingslug; ?>",
    lead_source: "landing_page",
    lead_value: 250,
    value: 250,
    currency: "GBP",
    estimated_order_value: 5000,
    page_type: "landing_page",
    product_interest: "<?php echo $landingslug; ?>"
  });
}
</script> 
    
<style>
    
    
    
    
.page-template-landing-page .storefront-breadcrumb, .block.footer-widget-2, .block.footer-widget-3, .follow-block, .site-footer, .legal-info, .menu-mega-menu-nav, .mobile-menu-icon, .header-search-bar, .desktop-site-branding, .notification-bar, .header-account-bar, .fixed-header-bar  {
display: none !important;
}

.mobile-site-branding {
    display: block;
}

.floating-whatsapp {
position: fixed;
top: calc(var(--headerheight));
right: 2vw;
z-index: 3;
}

.buttonfloat {
    border-radius: 50%;
    width: 70px;
    height: 70px;
    overflow: hidden;
    text-align: center;
    font-size: 8px !important;
    line-height: 4px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 10px;
    background-color: var(--button-bg-colour);
    color: var(--button-colour);
    font-family: var(--brand-font-bold);
    text-transform: uppercase;
    letter-spacing: 0.2em;
    text-decoration: none;
    cursor: pointer;
}

.floating-whatsapp .fa-brands:before{
    width: 30px;
    height: 30px;}
  
.landing-section-featured-banner{position:relative;overflow:hidden;}
.landing-section-featured-banner .featured-banner {margin:auto;}

.landing-section-container p{max-width: 750px;
    margin-left: auto;margin-right:auto;}

.text-video-panel-content .landing-section-cta{display: grid; grid-template-columns: repeat(1, minmax(0, 1fr));}

.text-video-panel-content {
    text-align: center;
    position: relative;
    display: flex;
    flex-direction: column;
    z-index: 2;
    align-items: center;
    justify-content: flex-end;
    height: auto;
    padding-bottom: calc(var(--headerheight));
    padding-top: 3vh;
}

.text-video-panel-heading h1 {
    font-size: clamp(1.5rem, 9vw, 2.75rem);
    margin: auto;
}
blockquote.landing-section-quote{    width: 100%;
    padding: 0;
    text-align: center;
    margin: 2vw 0;
    font-style: italic;
    color: #999;
    font-size:x-large;
    font-family: var(--brand-font-light);
    font-weight:100;
        line-height: normal;
    
} 
.landing-section-quote p:before, .landing-section-quote p:after {
    content: '"';
}

.landing-section-cta a  {
        color: #fff;
        border: 1px solid var(--font-colour);
        background: var(--font-colour);
        line-height: 40px;
        margin: auto;
        font-family: var(--brand-font-bold);
    text-transform: uppercase;
    letter-spacing: 0.2vw;
    font-size: 11px;
    padding: 0 2em;
    border-radius: var(--border-radius);
    display: inline-block;
    text-decoration: none;
    white-space:nowrap;
} 

.landing-section-cta a.landing-section-cta-reverse{background: var(--button-bg-colour); color: var(--button-colour);}


.landing-link-brochure{text-decoration:none; color: var(--font-colour);}

.landing-section-container, .landing-section-comparison, .landing-section-faq{text-align: center; padding:1vw 0 2vw 0;}

.landing-section-heading {
    text-align: center;
}


.landing-section-gallery, .landing-section-benefits-list, .product-list, .landing-section-instagram, .landing-section-swatches, .landing-section-comparison, .landing-section-faq {max-width: 1200px;margin:auto;}
 
.landing-horizontal-list{padding:0;}

.landing-horizontal-list .product-list {
    list-style-type: none;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 1vw;
}

.landing-horizontal-list .product-list li,
.landing-horizontal-list .swatch-container img {
    background: var(--bg-colour-light-tint);
}

li.product-price {
    font-size: small;
    margin-top: .5em;
    font-family: var(--brand-font-bold);
    letter-spacing: inherit;
}

 
ul.landingintro-benefits {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    display: grid;
    text-align: center;
    list-style: none;
    padding: 0;
    margin: 2em 0;
}

.landing-section-comparison, .landing-section-faq {
    background: var(--bg-colour-light-tint);
}

.landing-section-gallery {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    row-gap: 2vw;
    column-gap:2vw;
    padding: 0;
}

.landing-section-gallery-img {
    position: relative;
    font-size: 0;
}

.landing-section-swatches {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    grid-gap: 2vw;
    padding: 0;
    padding-bottom: 2vw;
}
.landing-section-swatch-img {
    position: relative;
    font-size: 0;
}

.landing-section-swatches img {
    border-radius: 999px;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 5px 10px 10px 0px rgba(0, 0, 0, 0.2);
}



.landing-section-swatch figcaption {
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    font-size: clamp(0.25rem, 2vw, 0.6rem);
    line-height: 3em;
    width: 100%;
    color: #000;
    font-family: var(--brand-font-bold);
    font-weight: 100;
    white-space: nowrap;
    overflow:hidden;
    text-overflow: ellipsis;
}

.landing-section-swatch a{text-decoration:none;}


.landing-section-gallery figcaption { 
    text-align: center;
    letter-spacing: 0.05em;
    font-size: 14px;
    position: absolute;
    margin-top: -3em;
    line-height: 3em;
    color: #fff;
    width:100%;
    white-space: nowrap;
}




.landing-section-benefits-list {
    list-style-type: none;
    padding: 0;
    margin: 2vw auto;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    grid-gap: 2vw;
}

.landing-section-benefits-list li {
    padding: 2%;
    margin: 0;
    text-align: center;
    display: block;
    padding: 0px;
    line-height: 1.25;
    overflow: hidden;
    background: var(--bg-colour-light-tint);
}

.section-02 .landing-section-benefits-list li{ background: unset;}

.landing-section-benefits-list ul{padding:0; margin:1em 0;}
.landing-section-benefits-list ul li{margin:0.5em;}

.landing-section-benefits-list img {
    margin: 0 auto;
    max-width: 100px;
}

.section-02 .landing-section-benefits-list, .landing-section-benefits-list h3 {
    line-height: 1;
    white-space: nowrap;
    text-transform: uppercase;
    font-size: clamp(0.65rem, 2vw, 0.9rem);
    letter-spacing: 0.2em;
    font-family: var(--brand-font-bold);
    font-weight:100;
}

.landing-section-list{padding:0; margin:0; list-style:none;}
 .landing-section-list li{padding:0; margin:0;}
 
 .landing-section-split {
    align-content: center;
    align-items: center;
}
 
.video-wrapper {
    width: 100%;
}

.video-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform: unset;
    bottom: unset;
    min-height: unset;
}

.loading-screen {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    opacity: 1;
    background-color: var(--bg-colour-light-tint);
    background-size: cover;
    background-position: center bottom;
}

.panel-featured .loading-screen {
    background-image: url(https://store.tailormade.uk/wp-content/uploads/tm-cats-intro-still-featured.jpg);
}

.loading-screen.hidden {
    opacity: 0;
    pointer-events: none;
}

.loading-screen.removed {
    display: none;
}

#loader {
    left: unset;
    top: unset;
    margin: unset;
}



  

@media screen and (min-width: 1023px) {
    .fixed-header-bar {display: flex; position:relative;}
    .text-video-panel-content .landing-section-cta a  {color: #fff; border: 1px solid #fff;}
     .text-video-panel-content .landing-section-cta a.landing-section-cta-reverse{background: #fff;color: #222;}
     .text-video-panel-content{color: #fff;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.1) 70%, rgba(0, 0, 0, 0.5) 100%);
        justify-content: flex-end;
    }
     .landing-section-instagram .landing-section-body img, .landing-section-brochure .landing-section-body img{max-width:60%;}
     .landing-section-split {display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); grid-gap: 2vw;}
     .landing-horizontal-list .product-list {grid-template-columns: repeat(4, minmax(0, 1fr));}
     .landing-section-benefits-list {grid-template-columns: repeat(4, minmax(0, 1fr));}
     .landing-section-swatches {grid-template-columns: repeat(7, minmax(0, 1fr));}
     .landing-section-gallery {grid-template-columns: repeat(3, minmax(0, 1fr));}
     .landing-section-gallery figcaption {text-align: left; font-size: 18px; margin-top: -4em;  line-height: 4em; padding-left: 2em;width:auto;}
}


       
    </style>

<div class="landing-page">
    <div class="floating-whatsapp"><a href="<?php echo $whatsapplink;?>" target="_blank" onclick="trackWhatsAppClick();" class="landing-link-whatsapp wa-link buttonfloat" aria-label="Chat with us on WhatsApp" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp-white" aria-hidden="true"></i><br>WhatsApp</a></div>
    <section class="landing-section section-01">

           <div class="landing-section-featured-banner">
                <div class="featured-banner full-width-banner-content">
                   <img alt="desktop lifestyle image of <?php echo $landingheroimagetitle; ?>" class="full-width-banner-desktop" src="<?php echo $landingheroimage; ?><?php echo $collectionver; ?>">
                   <img alt="tablet lifestyle image of <?php echo $landingheroimagetitle; ?>" class="full-width-banner-tablet" src="<? echo $landingheroimagetablet; ?><?php echo $collectionver; ?>">
                   <img alt="mobile lifestyle image of <?php echo $landingheroimagetitle; ?>" class="full-width-banner-mobile" src="<? echo $landingheroimagemobile; ?><?php echo $collectionver; ?>">
                </div>
                <div class="text-video-panel-content">
                   <div class="text-video-panel-heading">
                      <h1><?php echo $landingheading; ?></h1>
                   </div>
                   <div class="text-video-panel-text">
                      <p><?php echo $landingintro; ?></p>
                   </div>
                   <div class="landing-section-cta"><a href="<?php echo $whatsapplink;?>" target="_blank" onclick="trackWhatsAppClick();" class="landing-section-cta-reverse landing-link-whatsapp wa-link" rel="noopener noreferrer"><?php echo $whatsapplinkcta; ?></a> <!--<a href="<?php echo $landingctalink; ?>" class="landing-link-discover" aria-label="Discover Collection">Discover Collection</a>--></div>
                </div>
            </div>

    </section>
    <section class="landing-section section-02">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <ul class="landing-section-benefits-list">
                    <li>
                        
                        <i class="fa-light fa-check" aria-hidden="true"></i> Handcrafted in UK
                        
                    </li>
                    <li>
                        
                        <i class="fa-light fa-check" aria-hidden="true"></i> 20+ Colours
                       
                    </li>
                    <li>
                        
                        <i class="fa-light fa-check" aria-hidden="true"></i> Custom Design
                        
                    </li>
                    <li>
                        
                        <i class="fa-light fa-check" aria-hidden="true"></i> Personal Shopper
                       
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <blockquote class="landing-section-quote"><?php echo $landing_review_01; ?></blockquote>
    
    <section class="landing-section section-03">
        <div class="landing-section-container">
            
        <!-- end coloumn text and image -->
        <div class="landing-horizontal-list">
            <div class="landing-section-content">
                <div class="landing-section-heading"><h2>Collections</h2></div>
            </div>
            <ul class="product-list">
            <li>
               
                  <div class="swatch-container">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectionpedestal) . '-' . strtolower($collection50mm); ?>.png<?php echo $collectionver; ?>" alt="product image of <?php echo $collectionpedestal; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectionpedestal) . '-' . strtolower($collection50mm); ?>.jpg<?php echo $collectionver; ?>" alt="lifestyle image of <?php echo $collectionpedestal; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                  </div>
               
               <img class="swatchspacer" src="https://store.tailormade.uk/wp-content/uploads/tile-swatch-square.png<?php echo $collectionver; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
               <ul class="product-list-attributes">
                  <li class="product-title">
                     <?php echo $collectionpedestal; ?>
                  </li>
                  <li class="product-description">
                     <?php echo $collectionpedestaldesc; ?>
                  </li>
                  <li class="product-price">
                     From £5,040.00
                  </li>
               </ul>
            </li>
            <li>
               
                  <div class="swatch-container">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectionhexagon) . '-' . strtolower($collection20mm); ?>.png<?php echo $collectionver; ?>" alt="product image of <?php echo $collectionhexagon; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectionhexagon) . '-' . strtolower($collection20mm); ?>.jpg<?php echo $collectionver; ?>" alt="lifestyle image of <?php echo $collectionhexagon; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                  </div>
               
               <img class="swatchspacer" src="https://store.tailormade.uk/wp-content/uploads/tile-swatch-square.png<?php echo $collectionver; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
               <ul class="product-list-attributes">
                  <li class="product-title">
                     <?php echo $collectionhexagon; ?>
                  </li>
                  <li class="product-description">
                     <?php echo $collectionhexagondesc; ?>
                  </li>
                  <li class="product-price">
                     From £5,520.00
                  </li>
               </ul>
            </li>
            <li>
               
                  <div class="swatch-container">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectioncolumn) . '-' . strtolower($collection50mm); ?>.png<?php echo $collectionver; ?>" alt="product image of <?php echo $collectioncolumn; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectioncolumn) . '-' . strtolower($collection50mm); ?>.jpg<?php echo $collectionver; ?>" alt="lifestyle image of <?php echo $collectioncolumn; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                  </div>
               
               <img class="swatchspacer" src="https://store.tailormade.uk/wp-content/uploads/tile-swatch-square.png<?php echo $collectionver; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
               <ul class="product-list-attributes">
                  <li class="product-title">
                     <?php echo $collectioncolumn; ?>
                  </li>
                  <li class="product-description">
                     <?php echo $collectioncolumndesc; ?>
                  </li>
                  <li class="product-price">
                     From £5,760.00
                  </li>
               </ul>
            </li>
             <li>
               
                  <div class="swatch-container">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectionsemicolumn) . '-' . strtolower($collection12mm); ?>.png<?php echo $collectionver; ?>" alt="product image of <?php echo $collectionsemicolumn; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                     <img class="swatch" src="/wp-content/uploads/cat-image-<?php echo strtolower($collectionsemicolumn) . '-' . strtolower($collection12mm); ?>.jpg<?php echo $collectionver; ?>" alt="lifestyle image of <?php echo $collectionsemicolumn; ?> dining table" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
                  </div>
               
               <img class="swatchspacer" src="https://store.tailormade.uk/wp-content/uploads/tile-swatch-square.png<?php echo $collectionver; ?>" alt="swatch spacer" decoding="async" fetchpriority="low" loading="lazy" width="500" height="300">
               <ul class="product-list-attributes">
                  <li class="product-title">
                     <?php echo $collectionsemicolumn; ?>
                  </li>
                  <li class="product-description">
                     <?php echo $collectionsemicolumndesc; ?>
                  </li>
                  <li class="product-price">
                     From £5,520.00
                  </li>
               </ul>
            </li>
      </div>
      </div>
    </section>
    
    <section class="landing-section section-13">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-call-back">
                    <div class="landing-section-heading"><h2>Work With a Personal Table Specialist</h2></div>
                    <div class="landing-section-body">
                        <p>Not sure what will work best? Send us a photo of your space — we’ll guide you.</p> 
                        <div class="landing-section-cta"><a href="<?php echo $whatsapplink;?>" target="_blank" onclick="trackWhatsAppClick();" class="wa-link" rel="noopener noreferrer"><?php echo $whatsapplinkcta; ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
    <section class="landing-section section-04">
        <div class="landing-section-container">
            <div class="text-video-panel">
                <div class="video-wrapper">
                    <div class="video-container" data-lazy-load="true">
                        <div class="loading-screen">
                            <div class="loader" id="loader"></div>
                        </div>
                        <iframe id="vimeo-player-1" data-src="https://player.vimeo.com/video/1176653760?h=c9e9a26236&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="<?php echo $collectionhexagon; ?> luxury dining table video"></iframe>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    
    <section class="landing-section section-16">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-heading"><h2>Find the Right Table for Your Space</h2></div>
                <div class="landing-section-body">
                     <div class="landing-section-cta"><a href="<?php echo $whatsapplink;?>" target="_blank" onclick="trackWhatsAppClick();" class="wa-link" rel="noopener noreferrer"><?php echo $whatsapplinkcta; ?></a> <!--<a href="<?php echo $landingctalink; ?>" class="" aria-label="Discover Collection">Discover Collection</a>--></div>
                     <br><ul class="landing-section-list">
                        <li><a href="tel:02038485212" class="call-back-link tel-no"><i class="fa-light fa-phone" aria-hidden="true"></i> Call us on 020 3848 5212</a></li> 
                        <li>Or share your details below and we'll be in touch.</li>
                    </ul>
                </div>
                <div class="landing-section-footer">
                        <div id="cognito-form"></div><script src="/wp-content/themes/tm-shop-child/assets/js/cognito-loader.js" data-form-id="60"></script> 

                </div>
            </div>
        </div>
    </section>
    
    <section class="landing-section section-17">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-brochure">
                    <div class="landing-section-heading"><h2><a class="landing-link-brochure" href="https://tailormade.uk/wp-content/uploads/pdf/brochure/Tailor-made-Luxury-Dining-Tables.pdf" target="_blank">Download Our Brochure</a></h2></div>
                    <div class="landing-section-body">
                            <p><strong>Explore our complete collection of <?php echo $landingkeyword; ?>, surfaces, and customisation options.</strong></p>
                        	<a class="landing-link-brochure" href="https://tailormade.uk/wp-content/uploads/pdf/brochure/Tailor-made-Luxury-Dining-Tables.pdf" target="_blank">
                                <div class="full-width-banner-desktop"><img width="1200" height="776" alt="Download Our Brochure" src="/wp-content/uploads/tm-luxury-dining-table-catalogue-1200x776.jpg<?php echo $collectionver; ?>"></div>
                                <div class="full-width-banner-tablet"><img width="768" height="497" alt="Download Our Brochure" src="/wp-content/uploads/tm-luxury-dining-table-catalogue-768x497.jpg<?php echo $collectionver; ?>"></div>
                                <div class="full-width-banner-mobile"><img width="768" height="497" alt="Download Our Brochure" src="/wp-content/uploads/tm-luxury-dining-table-catalogue-768x497.jpg<?php echo $collectionver; ?>"></div>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="landing-section section-05">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-heading"><h2>The Design Process</h2></div>
                <div class="landing-section-body">
                    <p>A simple system, built around your space.</p>
                    <ul class="landing-section-list">
                        <li><i class="fa-regular fa-circle-1" aria-hidden="true"></i> <strong>Choose Your Collection</strong><br>
Four distinct base designs</li>
                        
                        <li><i class="fa-regular fa-circle-2" aria-hidden="true"></i> <strong>Pick Your Shape</strong><br>
Stadium, Round, Curve, or Quad</li>

                        <li><i class="fa-regular fa-circle-3" aria-hidden="true"></i> <strong>Select Your Size</strong><br>
Four carefully proportioned options</li>
                        
                        <li><i class="fa-regular fa-circle-4" aria-hidden="true"></i> <strong>Choose Your Colour</strong><br>
20+ refined finishes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="landing-section section-10">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-swatch">
                    <div class="landing-section-heading"><h2>Choose from 20+ Colours</h2></div>
                    <div class="landing-section-body">
                        
                        <ul class="landing-section-swatches">
                            
                            
                            <?php

$ii = 1;
$swatches = array("golden ambra", "ivory gioiello", "tundra", "taj mahal pearl", "calacatta macchia vecchia", "travertine chiaro", "travertino romano", "travertino minimal white", "pietra grey", "macchia vecchia", "calacatta luxury", "yamuna", "fior di bosco", "viola rosso", "dark marquina", "laguna blanca", "travertine silver", "laurent golden", "michelangelo bianco", "statuario", "arabescato");
foreach ($swatches as $figcaption)
{
    if ($ii++ > 21) break;
     echo '<li class="landing-section-swatch-img"><a href="/wp-content/uploads/swatch-' . strtolower(str_replace(" ", "-", $figcaption)) . '.jpg' . $collectionver . '" data-pswp-width="800" data-pswp-height="1600" data-author="' . $figcaption . '"><img width="350" height="700"  alt="' . $figcaption . ' colour swatch" title="' . $figcaption . ' colour swatch" decoding="async" fetchpriority="low" loading="lazy" src="/wp-content/uploads/swatch-' . strtolower(str_replace(" ", "-", $figcaption)) . '-350x700.jpg' . $collectionver . '"></a><figcaption title="' . $figcaption . '">' . $figcaption . '</figcaption></li>';
}

?>


                            
                        </ul>
                    </div>
                </div>
                <!--<div class="landing-section-cta"><a class="landing-link-samples" href="/product-category/swatch/">Request Swatch Samples</a></div>-->
            </div>
        </div>
    </section>
    
    <!--
    <section class="landing-section section-06">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-split">
                     <div class="landing-section-split-01">
                        <div class="landing-section-heading"><h2>Design Your Table in 3D</h2></div>
                        <div class="landing-section-body">
                            <p>Explore every combination in real time.</p>
                            <ul class="landing-section-list">
                                <li><i class="fa-light fa-check" aria-hidden="true"></i> Test colours instantly</li>
                                <li><i class="fa-light fa-check" aria-hidden="true"></i> View from every angle</li>
                                <li><i class="fa-light fa-check" aria-hidden="true"></i> Design before you commit</li>
                            </ul>
                        </div>
                     </div>
                     <div class="landing-section-split-02">
                        <div class="video-wrapper">
                            <div class="video-container" data-lazy-load="true">
                                <div class="loading-screen">
                                    <div class="loader" id="loader"></div>
                                </div>
                                <iframe id="vimeo-player-2" data-src="https://player.vimeo.com/video/1183744472?h=c9e9a26236&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="<?php echo $collectionhexagon; ?> luxury dining table video"></iframe>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>-->
    <?php echo do_shortcode('[tm_model_viewer]'); ?>
    
    <section class="landing-section section-07">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-heading"><h2>The Tailor-made Difference</h2></div>
                <ul class="landing-section-benefits-list">
                    <li>
                        <img width="100" height="100" decoding="async" fetchpriority="low" loading="lazy" alt="handcrafted icon"  src="https://store.tailormade.uk/wp-content/uploads/benefit-uk.svg"><br>
                        <h3>Handcrafted in UK</h3>
                        <p>Made to order using premium&nbsp;materials</p>
                    </li>
                    <li>
                        <img width="100" height="100" decoding="async" fetchpriority="low" loading="lazy" alt="colours icon" src="https://tailormade.uk/wp-content/themes/porcelain-tiles-2016/images/tm/icons/benefit-colours.svg"><br>
                        <h3>20+ Colours</h3>
                        <p>Developed to complement modern interiors</p>
                    </li>
                    <li>
                        <img width="100" height="100" decoding="async" fetchpriority="low" loading="lazy" alt="stoneware icon" src="https://tailormade.uk/wp-content/themes/porcelain-tiles-2016/images/tm/icons/benefit-maintenance-free.svg"><br>
                        <h3>Porcelain Stoneware</h3>
                        <p>Durable, refined, built&nbsp;to&nbsp;last</p>
                    </li>
                    <li>
                        <img width="100" height="100" decoding="async" fetchpriority="low" loading="lazy" alt="shopper icon" src="https://tailormade.uk/wp-content/themes/porcelain-tiles-2016/images/tm/icons/benefit-account.svg"><br>
                        <h3>Personal Shopper</h3>
                        <p>One-to-one design guidance</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <blockquote class="landing-section-quote"><?php echo $landing_review_02; ?></blockquote>
    
     <section class="landing-section section-08">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-heading"><h2>Why Porcelain Stoneware</h2></div>
                <div class="landing-section-body">
                    <p>The surface defines how your table looks, lives, and lasts. Porcelain stoneware offers the same visual richness with greater durability. 
                    Where marble requires care and wood can warp, porcelain remains consistent and refined.
                    <?php echo $landingkeyword; ?> made to order for those seeking long-term quality and refined design.</p>
                    <ul class="landing-section-list">
                        <li><i class="fa-light fa-check" aria-hidden="true"></i> <strong>Resistant to stains, scratches, and heat</strong></li>
                        <li><i class="fa-light fa-check" aria-hidden="true"></i> <strong>No sealing or maintenance</strong></li>
                        <li><i class="fa-light fa-check" aria-hidden="true"></i> <strong>Designed for everyday living</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="landing-section section-09">
        <div class="landing-section-container">
            <div class="landing-section-comparison">
                <div class="landing-section-content">
                    <div class="landing-section-heading"><h2>Marble vs Porcelain Stoneware</h2></div>
                    <div class="landing-section-body">
                        <ul class="landing-section-benefits-list" style="grid-template-columns: repeat(2, minmax(0, 1fr));">
                            <li>
                                <h3>Marble</h3>
                                <ul>
                                    <li>Beautiful, but requires care</li>
                                    <li>Prone to staining and etching</li>
                                    <li>Ongoing maintenance needed</li>
                                </ul>
                            </li>
                            <li><h3>Porcelain Stoneware</h3>
                                <ul>
                                    <li>Visually rich and highly&nbsp;durable</li>
                                    <li>Resistant to everyday wear</li>
                                    <li>Designed to last without upkeep</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    
    
     
    
    
    
    
    <section class="landing-section section-12">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-instagram">
                    <div class="landing-section-heading"><h2>Follow Our Latest Designs</h2></div>
                    <div class="landing-section-body">
                            <p><strong>Join 30,000+ Followers. Daily inspiration, real&nbsp;interiors.</strong></p>
                        	<p class="follow-block-link"><a class="landing-link-instagram" href="https://instagram.com/tailormadeuk/" target="_blank">@tailormadeuk <i class="fa-brands fa-instagram" aria-hidden="true"></i></a></p>
                            <a class="landing-link-instagram" href="https://instagram.com/tailormadeuk/" target="_blank">
                                <div class="full-width-banner-desktop"><img width="1200" height="787" alt="Follow Our Latest Designs on Instagram" src="/wp-content/uploads/tm-store-instagram-feed.png<?php echo $collectionver; ?>"></div>
                                <div class="full-width-banner-tablet"><img width="768" height="504" alt="Follow Our Latest Designs on Instagram" src="/wp-content/uploads/tm-store-instagram-feed-768x504.png<?php echo $collectionver; ?>"></div>
                                <div class="full-width-banner-mobile"><img width="700" height="459" alt="Follow Our Latest Designs on Instagram" src="/wp-content/uploads/tm-store-instagram-feed-700x459.png<?php echo $collectionver; ?>"></div>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <blockquote class="landing-section-quote"><?php echo $landing_review_03; ?></blockquote>
    
    
    <section class="landing-section section-14">
        <div class="landing-section-container">
            <ul class="landing-section-gallery">
                
<?php

$i = 1;
$x = array("Phantom Edge","Phantom Solid","Phantom Slim","Monarch Edge","Monarch Solid","Monarch Slim","Vanguard Edge","Vanguard Solid","Vanguard Slim","Luna Edge","Luna Solid","Luna Slim");
foreach ($x as $value)
{
    if ($i++ > 12) break;
     echo '<li class="landing-section-gallery-img"><a href="/wp-content/uploads/landing-page-thirds-' . strtolower(str_replace(" ", "-", $value)) . '-01.jpg' . $collectionver . '" data-pswp-src="/wp-content/uploads/landing-page-thirds-' . strtolower(str_replace(" ", "-", $value)) . '-01.jpg' . $collectionver . '" data-pswp-width="900" data-pswp-height="1350"><img alt="' . $value . ' dining table in a luxury interior large" decoding="async" fetchpriority="low" loading="lazy" src="/wp-content/uploads/landing-page-thirds-' . strtolower(str_replace(" ", "-", $value)) . '-01.jpg' . $collectionver . '"></a><figcaption>' . $value . '</figcaption></li>';
     //echo '<div class="landing-section-gallery-img full-width-banner-tablet"><img alt="' . $value . ' dining table in a luxury interior medium" decoding="async" fetchpriority="low" loading="lazy" src="/wp-content/uploads/landing-page-thirds-' . strtolower(str_replace(" ", "-", $value)) . '-01-533x800.jpg' . $collectionver . '"><figcaption>' . $value . '</figcaption></div>';
     //echo '<div class="landing-section-gallery-img full-width-banner-mobile"><img alt="' . $value . ' dining table in a luxury interior small" decoding="async" fetchpriority="low" loading="lazy" src="/wp-content/uploads/landing-page-thirds-' . strtolower(str_replace(" ", "-", $value)) . '-01-416x624.jpg' . $collectionver . '"><figcaption>' . $value . '</figcaption></div>';
}

?>

             
            </ul>
        </div>
    </section>
    <link rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'" id="tm-photoswipe-css" href="https://store.tailormade.uk/wp-content/plugins/tm-product-configurator/assets/css/gallery/photoswipe.css?ver=2.0.6" media="all">
    
    <script id="tm-gallery-js-js-module" src="https://store.tailormade.uk/wp-content/plugins/tm-product-configurator/assets/js/gallery/TMGallery.js?ver=2.0.7" type="module"></script>
    <link rel="modulepreload" href="https://store.tailormade.uk/wp-content/plugins/tm-product-configurator/assets/js/gallery/photoswipe/photoswipe.esm.min.js?ver=2.0.7" id="photoswipe-js-modulepreload">
    <link rel="modulepreload" href="https://store.tailormade.uk/wp-content/plugins/tm-product-configurator/assets/js/gallery/photoswipe/photoswipe-lightbox.esm.min.js?ver=2.0.7" id="photoswipe-lightbox-js-modulepreload">
    
    <section class="landing-section section-11">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-heading"><h2>View in Person</h2></div>
                <div class="landing-section-body">
                    <p>We have two partner showrooms, one in North&nbsp;London and&nbsp;one&nbsp;in&nbsp;Wimbledon. <br>Arrange a showroom visit through <a href="<?php echo $whatsappshowroomlink;?>" target="_blank" onclick="trackWhatsAppClick();" class="landing-link-whatsapp wa-link" aria-label="Chat with us on WhatsApp" rel="noopener noreferrer">WhatsApp</a>.</p>   
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="landing-section section-15">
        <div class="landing-section-container">
            <div class="landing-section-content">
                <div class="landing-section-faq">
                    <div class="landing-section-heading"><h2>Frequently Asked Questions</h2></div>
                    <div class="landing-section-body">
                        <ul class="landing-section-list">
                            <li><p><i class="fa-light fa-check" aria-hidden="true"></i><strong>Can I customise size and shape?</strong><br>
                            Absolutely. Our website offers four sizes and four shapes as standard, but we can create tables in custom dimensions to fit your space perfectly. Contact our personal shopping advisors to discuss bespoke sizes and shapes.</p></li>
                            
                            <li><p><i class="fa-light fa-check" aria-hidden="true"></i> <strong>How do I choose a colour?</strong><br>
                            Use the configurator or request samples.</p></li>
                            
                            <li><p><i class="fa-light fa-check" aria-hidden="true"></i> <strong>Can I see the tables in person?</strong><br>
                            Yes. Collections are available to view at our North London and Wimbledon partner showrooms.</p></li>
                            
                            <li><p><i class="fa-light fa-check" aria-hidden="true"></i> <strong>Where are you based?</strong><br>
                            Design & manufacturing is in Chatteris,&nbsp;Cambridgeshire</li>
                            
                            <li><p><i class="fa-light fa-check" aria-hidden="true"></i> <strong>Do I need to know exactly what I want?</strong><br>
                            No - we’ll guide you.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
      
 <script src="https://player.vimeo.com/api/player.js"></script>
 <script src="/wp-content/themes/tm-shop-child/assets/js/vimeo-loading-script.js"></script>
 




</div><!-- end .landing-page -->

	<!-- everything below is part of header template -->


    </main>
    
    
    

<?php get_footer(); ?>