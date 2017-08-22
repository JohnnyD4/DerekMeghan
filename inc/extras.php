<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package bloggerbuz
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
 // Sidebar Layout

 
 function bloggerbuz_body_classes($classes){
        global $post;
        if(is_home() || is_front_page()){
        	    if(get_theme_mod('bloggerbuz_home_page_layout_setting','fullwidth-home') == 'gridview-home'){
        	        $classes[]= 'gridview-home';
        	    }
                elseif(get_theme_mod('bloggerbuz_home_page_layout_setting','fullwidth-home') == 'fullwidth-home'){
                    $classes[]='fullwidth-home';
                }
                
                if(get_theme_mod('bloggerbuz_design_web_layout','fullwidth') == 'boxed'){
        	        $classes[]= 'boxed-layout';
        	    }
                elseif(get_theme_mod('bloggerbuz_design_web_layout','fullwidth') == 'fullwidth'){
                    $classes[]='fullwidth';
                }
                $bloggerbuz_slider_option = get_theme_mod('bloggerbuz_homepage_setting_slider_section_option','no');
                if($bloggerbuz_slider_option == 'no'){
                    $classes[]='no-slider';
                }
        }
        
    	// Adds a class of group-blog to blogs with more than 1 published author.
    	if ( is_multi_author() ) {
    		$classes[] = 'group-blog';
    	}
    
    	// Adds a class of hfeed to non-singular pages.
    	if ( ! is_singular() ) {
    		$classes[] = 'hfeed';
    	}
        
        $sidebar_meta_option = 'sidebar-right';
        if( is_home() && is_front_page()) {
    		$sidebar_meta_option = get_theme_mod( 'bloggerbuz_sidebar_layout', 'sidebar-right' );
            $classes[] = $sidebar_meta_option;
        }
        elseif(is_archive()) {
            $classes[] = 'sidebar-right';
        }else{
            
            if( 'post' === get_post_type() ) {
                $sidebar_meta_option = esc_attr(get_post_meta( $post->ID, 'bloggerbuz_sidebar_layout', true ));
                $classes[] = $sidebar_meta_option;
            }
            elseif( 'page' === get_post_type() ) {
            	$sidebar_meta_option = esc_attr(get_post_meta( $post->ID, 'bloggerbuz_sidebar_layout', true ));
                $classes[] = $sidebar_meta_option;
            }else{
                $classes[] = 'sidebar-right';
            }
        }
	    return $classes;
 }
 add_filter( 'body_class', 'bloggerbuz_body_classes' );

?>