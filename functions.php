<?php
// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('small', 120, '', true); // Small Thumbnail

function purepress_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => 'nav',
		'container_id'    => 'offcanvas',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
// REGISTER THEME MENU
function register_purepress_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'purepress'), // Main Navigation
    ));
}


// Sidebar
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area', 'purepress'),
        'description' => __('PurePress Widget area', 'purepress'),
        'id' => 'widget-area',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function purepress_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}



// LOAD PUREPRESS SCRIPTS
function purepress_scripts()
{
    wp_register_script('purepressjs', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('purepressjs'); // Enqueue it!
}

// LOAD PUREPRESS STYLES
function purepress_styles()
{
    wp_register_style('PureCSS', get_template_directory_uri() . '/css/pure.min.css', array(), '1.0', 'all');
    wp_enqueue_style('PureCSS'); // Enqueue it!

    wp_register_style('PureCSSGrids', get_template_directory_uri() . '/css/grids-responsive.min.css', array(), '1.0', 'all');
    wp_enqueue_style('PureCSSGrids'); // Enqueue it!

    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!

    wp_register_style('purepress', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('purepress'); // Enqueue it!



// A C T I O N S
add_action('init', 'register_purepress_menu'); // Add Menu to theme
add_action('wp_enqueue_scripts', 'purepress_styles'); // Add Theme Stylesheet
add_action('init', 'purepress_scripts'); // Add Custom Scripts to wp_head
add_action('init', 'purepress_pagination'); // Add our HTML5 Pagination


require_once( get_template_directory() .'/includes/comments.php' ); // Load Comments Template
