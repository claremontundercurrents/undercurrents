<?php
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

function script_enqueue()
{
    wp_enqueue_style('gfonts-1', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap');
    wp_enqueue_style('gfonts-2', 'https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', false, NULL, 'all' );
    wp_enqueue_style('twstyle', get_template_directory_uri() . '/css/tw.css', false, NULL, 'all' );
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v6.4.0/css/all.css", false, NULL, 'all' );
}
add_action('wp_enqueue_scripts', 'script_enqueue');

add_theme_support( 'post-thumbnails' );

function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function theme_add_menus()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'header' => __('Header top items'),
        'cats' => __('Header category list'),
        'footer' => __('Footer items'),
        'hero' => __('Hero text items')
    ));
}

add_action('init', 'theme_add_menus');

# from https://wordpress.stackexchange.com/questions/237044/wp-get-nav-menu-items-not-working-with-slug
function get_menu_items_by_registered_slug($menu_slug) {

    $menu_items = array();

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_slug ] ) ) {
        $menu = get_term( $locations[ $menu_slug ] );

        $menu_items = wp_get_nav_menu_items($menu->term_id);


    }

    return $menu_items;

}
function uc_gutenberg_setup() {
    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

  // Enqueue editor styles.
  add_editor_style( 'editor-styles.css' );
  add_editor_style('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap');
  add_editor_style('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
}
add_action( 'after_setup_theme', 'uc_gutenberg_setup' );

function uc_customizer_setup($wp_customize) {
    $wp_customize->add_section('uc-header-sec', array(
        'title' => 'Header and mag promo'
    ));
    $wp_customize->add_setting('uc-header-cta-text');
    $wp_customize->add_control('uc-header-cta-text-control', array(
        'label' => 'Header CTA text',
        'type' => 'string',
        'section' => 'uc-header-sec',
        'settings' => 'uc-header-cta-text',
    ));
    $wp_customize->add_setting('uc-header-cta-link');
    $wp_customize->add_control('uc-header-cta-link-control', array(
        'label' => 'Header CTA link',
        'type' => 'url',
        'section' => 'uc-header-sec',
        'settings' => 'uc-header-cta-link',
    ));
    $wp_customize->add_setting('uc-mag-issue');
    $wp_customize->add_control('uc-mag-issue-control', array(
        'label' => 'Mag issue text',
        'type' => 'string',
        'section' => 'uc-header-sec',
        'settings' => 'uc-mag-issue',
    ));
    $wp_customize->add_setting('uc-mag-season');
    $wp_customize->add_control('uc-mag-season-control', array(
        'label' => 'Mag issue season',
        'type' => 'string',
        'section' => 'uc-header-sec',
        'settings' => 'uc-mag-season',
    ));
    $wp_customize->add_setting('uc-mag-title');
    $wp_customize->add_control('uc-mag-title-control', array(
        'label' => 'Mag issue title',
        'type' => 'string',
        'section' => 'uc-header-sec',
        'settings' => 'uc-mag-title',
    ));
    $wp_customize->add_setting('uc-mag-description');
    $wp_customize->add_control('uc-mag-description-control', array(
        'label' => 'Mag issue description',
        'type' => 'string',
        'section' => 'uc-header-sec',
        'settings' => 'uc-mag-description',
    ));
    $wp_customize->add_setting('uc-mag-cta-text');
    $wp_customize->add_control('uc-mag-cta-text-control', array(
        'label' => 'Mag CTA text',
        'type' => 'string',
        'section' => 'uc-header-sec',
        'settings' => 'uc-mag-cta-text',
    ));
    $wp_customize->add_setting('uc-mag-cta-url');
    $wp_customize->add_control('uc-mag-cta-url-control', array(
        'label' => 'Mag CTA url',
        'type' => 'url',
        'section' => 'uc-header-sec',
        'settings' => 'uc-mag-cta-url',
    ));
}

add_action('customize_register', 'uc_customizer_setup');