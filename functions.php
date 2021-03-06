<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

// Start the engine.
include_once(get_template_directory() . '/lib/init.php');

// Setup Theme.
include_once(get_stylesheet_directory() . '/lib/theme-defaults.php');

// Set Localization (do not remove).
add_action('after_setup_theme', 'genesis_sample_localization_setup');
function genesis_sample_localization_setup()
{
    load_child_theme_textdomain('genesis-sample', get_stylesheet_directory() . '/languages');
}

// Add the helper functions.
include_once(get_stylesheet_directory() . '/lib/helper-functions.php');

// Add Image upload and Color select to WordPress Theme Customizer.
require_once(get_stylesheet_directory() . '/lib/customize.php');

// Include Customizer CSS.
include_once(get_stylesheet_directory() . '/lib/output.php');

// Add WooCommerce support.
include_once(get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php');

// Add the required WooCommerce styles and Customizer CSS.
include_once(get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php');

// Add the Genesis Connect WooCommerce notice.
include_once(get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php');

// Child theme (do not remove).
define('CHILD_THEME_NAME', 'Genesis Sample');
define('CHILD_THEME_URL', 'http://www.studiopress.com/');
define('CHILD_THEME_VERSION', '2.3.0');

// Enqueue Scripts and Styles.
add_action('wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles');
function genesis_sample_enqueue_scripts_styles()
{

    wp_enqueue_style('genesis-sample-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION);
    wp_enqueue_style('dashicons');

    $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';
    wp_enqueue_script('genesis-sample-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array('jquery'), CHILD_THEME_VERSION, true);
    wp_localize_script(
        'genesis-sample-responsive-menu',
        'genesis_responsive_menu',
        genesis_sample_responsive_menu_settings()
    );

}

// Define our responsive menu settings.
function genesis_sample_responsive_menu_settings()
{

    $settings = array(
        'mainMenu' => __('Menu', 'genesis-sample'),
        'menuIconClass' => 'dashicons-before dashicons-menu',
        'subMenu' => __('Submenu', 'genesis-sample'),
        'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
        'menuClasses' => array(
            'combine' => array(
                '.nav-primary',
                '.nav-header',
            ),
            'others' => array(),
        ),
    );

    return $settings;

}

// Add HTML5 markup structure.
add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

// Add Accessibility support.
add_theme_support('genesis-accessibility', array('404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links'));

// Add viewport meta tag for mobile browsers.
add_theme_support('genesis-responsive-viewport');

// Add support for custom header.
add_theme_support('custom-header', array(
    'width' => 600,
    'height' => 160,
    'header-selector' => '.site-title a',
    'header-text' => false,
    'flex-height' => true,
));

// Add support for custom background.
add_theme_support('custom-background');

// Add support for after entry widget.
//add_theme_support('genesis-after-entry-widget-area');

// Add support for 3-column footer widgets.
add_theme_support('genesis-footer-widgets', 3);

// Add Image Sizes.
add_image_size('featured-image', 720, 400, TRUE);

// Rename primary and secondary navigation menus.
add_theme_support('genesis-menus', array('primary' => __('After Header Menu', 'genesis-sample'), 'secondary' => __('Footer Menu', 'genesis-sample')));

// Reposition the secondary navigation menu.
remove_action('genesis_after_header', 'genesis_do_subnav');
add_action('genesis_footer', 'genesis_do_subnav', 5);

// Reduce the secondary navigation menu to one level depth.
add_filter('wp_nav_menu_args', 'genesis_sample_secondary_menu_args');
function genesis_sample_secondary_menu_args($args)
{

    if ('secondary' != $args['theme_location']) {
        return $args;
    }

    $args['depth'] = 1;

    return $args;

}

// Modify size of the Gravatar in the author box.
add_filter('genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar');
function genesis_sample_author_box_gravatar($size)
{
    return 90;
}

// Modify size of the Gravatar in the entry comments.
add_filter('genesis_comment_list_args', 'genesis_sample_comments_gravatar');
function genesis_sample_comments_gravatar($args)
{

    $args['avatar_size'] = 60;

    return $args;

}

/**
 * LA LUPITA PRODUCCIONES SAS
 */

/**
 * Incluye archivo principal less que llama al archivo de iconos AUDI
 */

// Enqueue sticky menu script - Crunchify Tips
add_action( 'wp_enqueue_scripts', 'smoothscroll' );
function smoothscroll() {
    wp_enqueue_script( 'follow', get_stylesheet_directory_uri() . '/assets/js/smooth.js', array( 'jquery' ), '', true );
    //http://fancyapps.com/fancybox/3/
    wp_register_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js', array('jquery'), null, false );
    wp_enqueue_script('fancybox');

}

/*FONT AWESOME*/
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}


/**
 * Custom Footer
 */
// Remove site footer.
remove_action('genesis_footer', 'genesis_footer_markup_open', 5);
remove_action('genesis_footer', 'genesis_do_footer');
remove_action('genesis_footer', 'genesis_footer_markup_close', 15);
// Customize site footer
add_action('genesis_footer', 'sp_custom_footer');
function sp_custom_footer()
{ ?>
    <div class="site-footer">
        <div class="wrap">
            <p>Audi 2018</p>
        </div>
    </div>

    <?php
}

//QUITAR TÍTULO EN PÁGINAS
add_action('genesis_before_entry', 'custom_remove_titles');
/**
 * Remove entry header on static Pages.
 */
function custom_remove_titles()
{
    // if we are not on a static Page, abort.
    if (!is_page()) {
        return;
    }

    if (is_page(array('inicio', 'login', 'password-reset', 'audi_webisodios', 'serievideo', 'inspiracion-audi', 'foro', 'libro', 'faq', 'novedades'))) {
        //remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
        remove_action('genesis_entry_header', 'genesis_entry_header_markup_open', 5);
        remove_action('genesis_entry_header', 'genesis_do_post_title');
        remove_action('genesis_entry_header', 'genesis_entry_header_markup_close', 15);
    }
}


//HIDE SUPERIOR WIDGET
unregister_sidebar( 'header-right' );


// Remove Footer Widget Areas on 'About' and 'Contact' Pages
add_action('genesis_after_content_sidebar_wrap', 'sk_footer_widget_areas');
function sk_footer_widget_areas()
{

    if (is_page(array('login', 'password-reset', 'inicio'))) {
        remove_action('genesis_footer', 'genesis_do_footer');
        remove_action('genesis_footer', 'genesis_footer_markup_open', 5);
        remove_action('genesis_footer', 'genesis_footer_markup_close', 15);
    }

}

remove_action('genesis_site_description', 'genesis_seo_site_description');
remove_action('genesis_site_title', 'genesis_seo_site_title');



remove_action('genesis_header', 'genesis_header_markup_open', 5);
remove_action('genesis_header', 'genesis_do_header');
remove_action('genesis_header', 'genesis_header_markup_close', 15);

/*FAVICON*/
/** Adding custom Favicon */
add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
function custom_favicon( $favicon_url ) {
    return 'https://www.audi.com/etc/designs/gbp/favicon.ico';
}
//QUITAR POST META
add_action ( 'genesis_meta' , 'remove_entry_meta_single_posts' );
function remove_entry_meta_single_posts() {
    if ( is_singular('post') )
        remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
}

remove_action( 'genesis_entry_footer', 'genesis_post_meta' );


/*VIDEOS*/


/*FIN VIDEOS*/