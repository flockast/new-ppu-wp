<?php

require_once "includes/ajax.php";
require_once "includes/register_types.php";

function theme_url() {
    bloginfo('template_url');
}

if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('menus');
}

function register_widget_sidebars( ) {
    register_sidebar( array(
        'name' => 'Banner sidebar',
        'id' => "sidebar-banner",
        'description' => '',
        'class' => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => "</li>\n",
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => "</h2>\n",
    ) );
}
add_action( 'widgets_init', 'register_widget_sidebars' );

function search_highlighter($search, $html) {
    $pattern = "/((?:^|>)[^<]*)(".$search.")/si";
    $replace = '$1<b style="color:#FF0000; background:#FFFF00;">$2</b>';
    $newhtml = preg_replace($pattern, $replace, $html);
    return $newhtml;
}