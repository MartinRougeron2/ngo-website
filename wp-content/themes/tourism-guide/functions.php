<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'tourism_guide_after_setup_theme' );
function tourism_guide_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'tourism-guide-featured-image', 2000, 1200, true );
    add_image_size( 'tourism-guide-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function tourism_guide_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'tourism-guide' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'tourism-guide' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'tourism-guide' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'tourism-guide' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'tourism-guide' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'tourism-guide' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'tourism-guide' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tourism-guide' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'tourism_guide_widgets_init' );

// enqueue styles for child theme
function tourism_guide_enqueue_styles() {

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'tourism-guide-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'tourism-guide-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('adventure-travelling-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('adventure-travelling-child-style', get_stylesheet_directory_uri() .'/style.css', array('adventure-travelling-style'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
}
add_action('wp_enqueue_scripts', 'tourism_guide_enqueue_styles');

function tourism_guide_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'tourism-guide-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'tourism_guide_admin_scripts' );

add_action( 'init', 'tourism_guide_remove_my_action');
function tourism_guide_remove_my_action() {
    remove_action( 'admin_menu','adventure_travelling_menu' );
    remove_action( 'admin_notices','adventure_travelling_activation_notice' );
}

if ( ! defined( 'ADVENTURE_TRAVELLING_PRO_THEME_NAME' ) ) {
    define( 'ADVENTURE_TRAVELLING_PRO_THEME_NAME', esc_html__( 'Tourism Guide Pro', 'tourism-guide' ));
}
if ( ! defined( 'ADVENTURE_TRAVELLING_PRO_THEME_URL' ) ) {
    define( 'ADVENTURE_TRAVELLING_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/travel-tour-wordpress-theme/'));
}