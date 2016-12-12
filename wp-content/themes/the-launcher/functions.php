<?php
/**
 * the launcher functions and definitions
 *
 * @package the launcher
 */

if ( ! function_exists( 'the_launcher_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_launcher_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on the launcher, use a find and replace
	 * to change 'the-launcher' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'the-launcher', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'the-launcher' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

    add_image_size('the_launcher_service',50,40,true);
    add_image_size('the_launcher_footer_recent_news',71,71,true);
    add_image_size('the_launcher_single_page_archive',1150,445,true);
    add_image_size('the_launcher_feature',580,500,true);
    add_image_size('the_launcher_testimonial',165,165,true);
    add_image_size('the_launcher_client',220,75,true);
    //Custom Logo
    add_theme_support('custom-logo', array(
        'width'     =>  238,
        'height'    => 44,
        'flex-height' => true,
        'flex-width'  => true            
    ));
}
endif; // the_launcher_setup
add_action( 'after_setup_theme', 'the_launcher_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_launcher_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_launcher_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_launcher_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function the_launcher_widgets_init() {
    register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'the-launcher' ),
		'id'            => 'the-launcher-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'the-launcher' ),
		'id'            => 'the-launcher-left-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Pricing Table', 'the-launcher' ),
		'id'            => 'the-launcher-pricing-table',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Subscribe Form', 'the-launcher' ),
		'id'            => 'the-launcher-subscribe-form',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'the-launcher' ),
		'id'            => 'the-launcher-footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'the-launcher' ),
		'id'            => 'the-launcher-footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'the-launcher' ),
		'id'            => 'the-launcher-footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Home Contact Section', 'the-launcher' ),
		'id'            => 'the-launcher-contact',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'the_launcher_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_launcher_scripts() {
    $query_args = array('family' => 'Raleway:400,100,200,300,500,600,700,800,900|Dosis:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic|Roboto:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic|Titillium+Web:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic|Merriweather:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic|Montserrat:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic|Khand:400,200,200italic,300,300italic,400italic,600italic,600,700,700italic,900,900italic');
	wp_enqueue_style('google-fonts-css', add_query_arg($query_args, "//fonts.googleapis.com/css"));
	wp_enqueue_style('the-launcher-style', get_stylesheet_uri() );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/inc/admin-panel/css/css/font-awesome.css');
    wp_enqueue_style('the-launcher-responsive',get_template_directory_uri().'/responsive.css');
    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/js/owl-carousel/owl.carousel.css');
    wp_enqueue_style('wow-animate',get_template_directory_uri().'/js/entrance-wow-animation/animate.css');
    wp_enqueue_style('countdown-main',get_template_directory_uri().'/js/countdown/main.css');
    wp_enqueue_style('jquery-mb-YTPlayer',get_template_directory_uri().'/js/youtube-video/jquery.mb.YTPlayer.css');
    wp_enqueue_style('jquery-mCustomScrollbar',get_template_directory_uri().'/js/custom-scroll/jquery.mCustomScrollbar.css');
    wp_enqueue_style('superfish',get_template_directory_uri().'/js/superfish/superfish.css');
    wp_enqueue_style('jquery-maximage',get_template_directory_uri().'/js/fullscreenslider/jquery.maximage.css');
    
    //JS Files
    wp_enqueue_script('jquery-maximage',get_template_directory_uri().'/js/fullscreenslider/jquery.maximage.js',array('jquery'));
    wp_enqueue_script('jquery-cycle',get_template_directory_uri().'/js/fullscreenslider/jquery.cycle.all.js',array('jquery'));
    wp_enqueue_script('superfish',get_template_directory_uri(). '/js/superfish/superfish.js',array('jquery'));
    wp_enqueue_script('hoverIntent',get_template_directory_uri(). '/js/superfish/hoverIntent.js',array('jquery'));
    wp_enqueue_script('jquery-sticky',get_template_directory_uri(). '/js/jquery.sticky.js',array('jquery'));
    wp_enqueue_script('jquery-mb-YTPlayer',get_template_directory_uri(). '/js/youtube-video/jquery.mb.YTPlayer.js',array('jquery'));
    wp_enqueue_script('mCustomScrollbar',get_template_directory_uri().'/js/custom-scroll/jquery.mCustomScrollbar.js',array('jquery'));
    wp_enqueue_script('theia-sticky-sidebar',get_template_directory_uri().'/js/sticky-sidebar/theia-sticky-sidebar.js',array('jquery'));
    wp_enqueue_script('countdown-misc',get_template_directory_uri().'/js/countdown/misc.js',array('jquery'));
    wp_enqueue_script('lwtCountdown',get_template_directory_uri().'/js/countdown/jquery.lwtCountdown-1.0.js',array('jquery'));
    wp_enqueue_script('wow',get_template_directory_uri().'/js/entrance-wow-animation/wow.js',array('jquery'));
    wp_enqueue_script('owl-carousel',get_template_directory_uri().'/js/owl-carousel/owl.carousel.js',array('jquery'));
    wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'));
    wp_enqueue_script('the-launcher-custom', get_template_directory_uri() . '/js/custom-js.js', array('jquery','jquery-maximage','jquery-cycle','superfish','hoverIntent','jquery-sticky','jquery-mb-YTPlayer','mCustomScrollbar','theia-sticky-sidebar','countdown-misc','lwtCountdown','wow','owl-carousel','parallax'));
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_launcher_scripts' );

function the_launcher_admin_enqueue() {
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/inc/admin-panel/css/css/font-awesome.css');
    wp_enqueue_style('the-launcher-admin',get_template_directory_uri().'/inc/admin-panel/css/the-launcher-admin.css');
    
}
add_action( 'admin_enqueue_scripts', 'the_launcher_admin_enqueue' );

function the_launcher_customizer_live_preview(){
    wp_enqueue_script( 'google-font-webfont','https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js');
    wp_enqueue_script('the-launcher-live-preview',get_template_directory_uri().'/js/the-launcher-customizer-preview.js',array( 'jquery','customize-preview' ),true);    
}
add_action( 'customize_preview_init', 'the_launcher_customizer_live_preview' );
function the_launcher_customizer_scripts() {
    wp_enqueue_style( 'the-launcher-customizer-style' , get_template_directory_uri().'/inc/admin-panel/css/customizer.css');
    wp_enqueue_script( 'the-launcher-customizer-script' , get_template_directory_uri().'/js/customizer-custom.js',array('jquery'), '20130508', true);
}

add_action( 'customize_controls_enqueue_scripts', 'the_launcher_customizer_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widget file 
 */
require get_template_directory().'/inc/widget/widget-fields.php';

/**
 * Pricing Widget
 */
require get_template_directory().'/inc/widget/pricing-widget.php';

/**
 * Recent Post Widget
 */
require get_template_directory().'/inc/widget/recent-post-widget.php';

/**
 * Footer Info Widget
 */
require get_template_directory().'/inc/widget/footer-info-widget.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory().'/inc/launcher_function.php';
require get_template_directory().'/inc/admin-panel/launcher-customizer.php';
require get_template_directory().'/inc/admin-panel/css/the-launcher-css.php';
require get_template_directory().'/inc/the-launcher-custom-metabox.php';
add_filter( 'body_class', 'the_launcher_my_class_names' );

function the_launcher_my_class_names( $classes ) {
	// add 'class-name' to the $classes array
    $enable_slider = get_theme_mod('the_launcher_enable_counter');
    if( is_home() || is_front_page()){
        if(!$enable_slider){
            $classes[] = 'not_slider'; 
        }
    }
    else{
        $classes[] = 'not_home_page'; 
    }
    return $classes;
}
add_filter( 'body_class', 'the_launcher_my_class_names_body' );

function the_launcher_my_class_names_body( $classes ) {
	// add 'class-name' to the $classes array
    if(is_home() && is_front_page()){
    
            $classes[] = 'latest_post_home';
        }
    return $classes;
}

add_filter( 'body_class', 'the_launcher_my_class_names_body_menu' );
function the_launcher_my_class_names_body_menu( $classes ) {
	// add 'class-name' to the $classes array
    $menu_layout = get_theme_mod('the_launcher_header_menu_style');    
    if($menu_layout == 'bottom_menu' ){
    
            $classes[] = 'bottom_menu_class';
        }
    if($menu_layout == 'top_menu' ){

        $classes[] = 'top_menu_class';
    }
    return $classes;
}
add_filter( 'body_class', 'the_launcher_enable_next_n_prev_arrow' );
function the_launcher_enable_next_n_prev_arrow($classes){
    $enable_slider_arrow = get_theme_mod('the_launcher_slider_enable_arrow_prev_next');
    if($enable_slider_arrow){
        $classes[] = 'enable_slider_arrow';
    }
    return $classes;
}
add_filter('widget_text', 'do_shortcode');
function the_launcher_register_required_plugins() {

$plugins = array(
    array(
        'name'      => 'AccessPress Custom CSS',
        'slug'      => 'accesspress-custom-css',
        'required'  => false,
    ),
    array(
        'name'      => 'AccessPress Social Icons',
        'slug'      => 'accesspress-social-icons',
        'required'  => false,
    ),
    array(
        'name'=>'Newsletter',
        'slug' => 'newsletter',
        'required'=>false,
    ),
    array(
        'name' => 'Contact Form for WordPress - Ultimate Form Builder Lite',
        'slug' => 'ultimate-form-builder-lite',
        'required' => false,
    ),
    array(
        'name' => 'Testimonial WordPress Plugin - AP Custom Testimonial',
        'slug' => 'ap-custom-testimonial',
        'required' => false
    ),array(
        'name' => 'WordPress Slider Plugin - WP 1 Slider',
        'slug' => 'wp-1-slider',
        'required' => false
    )
);

$config = array(
    'id'           => 'the-launcher',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to pre-packaged plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => true,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
    'strings'      => array(
        'page_title'                      => __( 'Install Required Plugins', 'the-launcher' ),
        'menu_title'                      => __( 'Install Plugins', 'the-launcher' ),
        'installing'                      => __( 'Installing Plugin: %s', 'the-launcher' ), // %s = plugin name.
        'oops'                            => __( 'Something went wrong with the plugin API.', 'the-launcher' ),
        'notice_can_install_required'     => _n_noop(
            'This theme requires the following plugin: %1$s.',
            'This theme requires the following plugins: %1$s.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_can_install_recommended'  => _n_noop(
            'This theme recommends the following plugin: %1$s.',
            'This theme recommends the following plugins: %1$s.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_cannot_install'           => _n_noop(
            'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_ask_to_update'            => _n_noop(
            'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
            'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_ask_to_update_maybe'      => _n_noop(
            'There is an update available for: %1$s.',
            'There are updates available for the following plugins: %1$s.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_cannot_update'            => _n_noop(
            'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_can_activate_required'    => _n_noop(
            'The following required plugin is currently inactive: %1$s.',
            'The following required plugins are currently inactive: %1$s.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_can_activate_recommended' => _n_noop(
            'The following recommended plugin is currently inactive: %1$s.',
            'The following recommended plugins are currently inactive: %1$s.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'notice_cannot_activate'          => _n_noop(
            'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
            'the-launcher'
        ), // %1$s = plugin name(s).
        'install_link'                    => _n_noop(
            'Begin installing plugin',
            'Begin installing plugins',
            'the-launcher'
        ),
        'update_link'                     => _n_noop(
            'Begin updating plugin',
            'Begin updating plugins',
            'the-launcher'
        ),
        'activate_link'                   => _n_noop(
            'Begin activating plugin',
            'Begin activating plugins',
            'the-launcher'
        ),
        'return'                          => __( 'Return to Required Plugins Installer', 'the-launcher' ),
        'plugin_activated'                => __( 'Plugin activated successfully.', 'the-launcher' ),
        'activated_successfully'          => __( 'The following plugin was activated successfully:', 'the-launcher' ),
        'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'the-launcher' ),  // %1$s = plugin name(s).
        'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'the-launcher' ),  // %1$s = plugin name(s).
        'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'the-launcher' ), // %s = dashboard link.
        'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'the-launcher' ),

        'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
    )
);

tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'the_launcher_register_required_plugins' );