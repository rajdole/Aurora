<?php
$content_width = 629;
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
	));
}

//set up the options for Abbans theme options plugin
function ab_set_options(){
 global $ab_options_set;
	$styles = array('blue'=>'Blue', 'orange'=>'Orange');
	
    $ab_options_set = array('template_styles'=>$styles,
                            'favicon'=>true,'footer_copy'=>true);
}
add_filter('init','ab_set_options',9,1);

add_theme_support( 'menus' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 140, 140, true );
paginate_comments_links();
add_custom_background(); 
wp_enqueue_script( 'comment-reply' );
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'build' ),
) );

//Paste this into your template where you want the menu to go:

//wp_nav_menu(array('container_class' => 'menu-header', 'menu_id' => 'menu-navigation', 'theme_location' => 'primary'));

function wpe_excerptlength_news($length) {
    return 15;
}

function wpe_excerptlength_teaser($length) {
    return 35;
}
function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return ' ...';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

?>