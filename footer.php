<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
	
	
    



	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->
<?php if ( is_front_page() ) { ?>
<div class="newsletter-section">
        <div id="mc_embed_shell">
            <h2>Beautiful tables, delivered to your inbox.</h2>
            <p>Be the first to see our latest designs, discover styling inspiration, and get exclusive access to new collections before anyone else.</p>
        
            <div id="mc_embed_signup">
                <form action="https://tailormade.us10.list-manage.com/subscribe/post?u=529b41943a645ccc47e4ba7cf&amp;id=a943ecd850&amp;v_id=5754&amp;f_id=009450e4f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <div id="mc_embed_signup_scroll">
                        
                        <div class="newsletter-field-group">
                            <div class="newsletter-inputfield-container"><input placeholder="Enter email" type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div>
                            <div class="newsletter-button-container"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="newsletter-button button level-03" value="Submit"></div>
                        </div>
                        <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                            <div class="content__gdpr">
                                <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                    <label class="checkbox subfield" for="gdpr_65619"><input type="checkbox" id="gdpr_65619" name="gdpr[65619]" class="gdpr" value="Y"><span class="subfield-span">I agree to receive email updates from <span class="tailor-made">Tailor-made<sup>+</sup></span> including information about our collections, design inspiration and exclusive offers. I have read and acknowledge the <a target="_blank" href="/legal/privacy-policy/">Privacy Notice</a>.</span></label></fieldset>
                            </div>
                        </div>
                        <div hidden=""><input type="hidden" name="tags" value="14569275"></div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display: none;"></div>
                            <div class="response" id="mce-success-response" style="display: none;"></div>
                        </div>
                        <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_529b41943a645ccc47e4ba7cf_a943ecd850" tabindex="-1" value=""></div>
                        
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        </div>
    </div><!-- emd newsletter-section -->
 <?php } ?>
 
 
    <div class="legal-info"><div class="legal-menu"><?php wp_nav_menu( array( 'menu' => 'legal-menu' ) ); ?></div></div>

<div class="footer">
    <div class="accreditations">
    	
    		<div class="accreditation accreditation-intro"><p>Tailor-made<sup>+</sup> <br>Platinum Partner of</p></div>
    		<div class="accreditation sbid"><a href="https://www.sbid.org/supplier/tailor-made/"><img title="The Society of British and International Interior Design (SBID) - Platinum Partner" src="/wp-content/uploads/accreditations-sbid.svg?ver=1253" width="135" height="76" decoding="async" fetchpriority="low" loading="lazy"></a></div>
    		<div class="accreditation biid"><a href="https://biid.org.uk/users/tailor-made"><img title="The British Institute of Interior Design (BIID) - Industry Partner" src="/wp-content/uploads/accreditations-biid.svg?ver=1253" width="200" height="67" decoding="async" fetchpriority="low" loading="lazy"></a></div>
	
	</div>
</div>

<!-- <?php 
// script to embed site on touchscreens 
$extraclass = isset($_GET["tvembed"]) ? $_GET["tvembed"] : null;
if ($extraclass == "embed-class")
    { ?>
    <script>
        jQuery(document).ready(function(){
             jQuery('body').addClass('embed-class');
             var tvquerystring = 'tvembed=embed-class';
             jQuery('.menu a, .products a').each(function()
                {
                 var tvhref = jQuery(this).attr('href');
                 tvhref += (tvhref.match(/\?/) ? '&' : '?') + tvquerystring;
                 jQuery(this).attr('href', tvhref);
                });
        });
        </script>
   <?php // end if $extraclass 
   } else if ($extraclass == "pdf-class")
    { ?>
    <script>
        jQuery(document).ready(function(){
             jQuery('body').addClass('pdf-class');
        });
        </script>
   <?php // end if $extraclass 
   } 
   else {
       // do nothing if embed class not set
   } 
// end of script to embed site on touchscreens 
?> -->

<?php wp_footer(); ?>

</body>
</html>
