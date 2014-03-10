<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	

	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
            'main_nav' => 'Main Navigation Menu'
                )
            );
    }
//increases custom field option list size to 120
    function increase_postmeta_form_limit() {
        return 120;
        }
        add_filter('postmeta_form_limit', 'increase_postmeta_form_limit');

   

function display_propertydetails() {
    ob_start();
    get_template_part('property_details');
    return ob_get_clean();   
} 
add_shortcode( 'property_details', 'display_propertydetails' );



?>