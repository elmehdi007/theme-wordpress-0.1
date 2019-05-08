<?php
define('THEME_NAME', 'theme1');
define('CONTENT_TOP_BAR_ID', 'tob_bare');
define('CONTENT_HEADER_ID', 'header');
define('CONTENT_SIDEBAR_LEFT_ID', 'sidebar_left');
define('CONTENT_FOOTER1_ID', 'footer_1');
define('CONTENT_FOOTER2_ID', 'footer_2');
define('CONTENT_FOOTER3_ID', 'footer_3');
define('CONTENT_FOOTER4_ID', 'footer_4');
define('CONTENT_BOTTOM_ID', 'bottom'); //Content Bottom


function theme1_add_style(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/asset/bootstrap-3.3.7/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

    
}
function theme1_add_script(){
   // wp_enqueue_style( 'script', get_template_directory_uri() . '/asset/bootstrap-3.3.7/js/jquery-3.1.1.min.js');
    wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/asset/bootstrap-3.3.7/js/bootstrap.min.js');
  //  wp_enqueue_script( 'theme1_js', get_template_directory_uri() . '/asset/js/theme1_js.js');
}


function theme1_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Top Bare', THEME_NAME ),
		'id'            => CONTENT_TOP_BAR_ID,
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 1', THEME_NAME ),
		'id'            => CONTENT_SIDEBAR_LEFT_ID,
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom', 'theme1' ),
		'id'            => CONTENT_BOTTOM_ID,
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

        register_sidebar( array(
		'name'          => __( 'Content footer 1', 'theme1' ),
		'id'            => CONTENT_FOOTER1_ID,
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Content footer 2', 'theme1' ),
		'id'            => CONTENT_FOOTER2_ID,
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

        register_sidebar( array(
		'name'          => __( 'Content footer 3', 'theme1' ),
		'id'            => CONTENT_FOOTER3_ID,
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Content footer 4', 'theme1' ),
		'id'            => CONTENT_FOOTER4_ID,
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'theme1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}


function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a class="link_read_more" href="'. get_permalink($post->ID) . '"> Lire la suite...</a>';
}

function theme1_menu_li_classes($classes, $item, $args) {
   // var_dump($item);    die();
  if($args->theme_location == 'primary') {
    $classes[] = 'list-inline-item';


  }
  return $classes;
}

function wpdocs_add_menu_parent_class( $items ) {
	/**$parents = array();
	if(isset($items) ){
		for($i=0;$i<count($items);$i++){
			if($items[$i]->post_type=="nav_menu_item"){
				$classes[]="list-inline-item";
			}
		}
	}**/
	
return $items;
 }
 
add_action( 'widgets_init', 'theme1_widgets_init' );
add_action( 'wp_enqueue_scripts', 'theme1_add_style' );
add_action( 'wp_enqueue_scripts', 'theme1_add_script' );
add_filter('the_excerpt', 'excerpt_read_more_link');
add_filter('nav_menu_css_class','theme1_menu_li_classes',1,3);
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );

register_nav_menus(array(
		'primary' => __( 'Primary Menu',THEME_NAME),
    		'menu_toogle' => __( 'toogle Menu',THEME_NAME)
	) );

if(function_exists("add_theme_support")){ add_theme_support("post-thumbnails");}
require_once 'widget_theme.php';
