<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Sidebar
 *
 * @package storefront
 */

get_header(); ?>
<div class="page-with-sidebar">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
    </div><!-- #primary -->
	   
	<div id="secondary" class="widget-area" role="complementary">
	    
	    <?php 
	    
	    
	    
	    if(is_tree('3122')){ // being the parent page id
   
                
                echo '<div class="widget side-menu"><span class="widget-title">Support Pages</span>';
                wp_nav_menu( array( 
                    'menu' => 'support-menu', 
                    'container_class' => 'side-menu-container' 
                    ) 
                ); 
                echo "</div>";
         }
         
         else if(is_tree('3120')){ // being the parent page id
   
                
                echo '<div class="widget side-menu"><span class="widget-title">Support Pages</span>';
                wp_nav_menu( array( 
                    'menu' => 'support-menu', 
                    'container_class' => 'side-menu-container' 
                    ) 
                ); 
                echo "</div>";
         }
         
         else if(is_tree('1897')){ // being the parent page id
   
                
                echo '<div class="widget side-menu"><span class="widget-title">About Us</span>';
                wp_nav_menu( array( 
                    'menu' => 'about-menu', 
                    'container_class' => 'side-menu-container' 
                    ) 
                ); 
                echo "</div>";
         }
         
         else if(is_tree('6078')){ // being the parent page id
   
                
                echo '<div class="widget side-menu"><span class="widget-title">About Us</span>';
                wp_nav_menu( array( 
                    'menu' => 'about-menu', 
                    'container_class' => 'side-menu-container' 
                    ) 
                ); 
                echo "</div>";
         }
         
         
         
         
         else {
             
            
             
         }

        
?>

    </div><!-- #secondary -->

 </div><!-- .page-with-sidebar -->

<?php

get_footer();
