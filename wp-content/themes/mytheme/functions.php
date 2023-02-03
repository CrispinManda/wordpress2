<?php 

function enqueue_my_theme_files() {
    wp_enqueue_style( 'my-theme-stylesheet', get_template_directory_uri() . '/css/mytheme.css' );
    wp_enqueue_script( 'my-theme-javascript', get_template_directory_uri() . '/js/mytheme.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_my_theme_files' );

  function my_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','primary header navigation');
    register_nav_menu('secondary','footer navigation');
    

  }
  add_action('init', 'my_theme_setup');  

  function custom_theme_sidebar() {
    register_sidebar( array(
        'name'          => 'Custom Theme Sidebar',
        'id'            => 'custom-theme-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'custom_theme_sidebar' );


