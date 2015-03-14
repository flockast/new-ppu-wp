<?php

function theme_url() {
    bloginfo('template_url');
}

if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('menus');
}

function wp_corenavi() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

    if ($max > 1) echo '<div class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
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

add_action( 'init', 'true_register_products' ); // Использовать функцию только внутри хука init
 
function true_register_products() {
    $labels = array(
        'name' => 'Товары',
        'singular_name' => 'Товар', // админ панель Добавить->Функцию
        'add_new' => 'Добавить товар',
        'add_new_item' => 'Добавить новый товар', // заголовок тега <title>
        'edit_item' => 'Редактировать товар',
        'new_item' => 'Новый товар',
        'all_items' => 'Все товары',
        'view_item' => 'Просмотр товаров на сайте',
        'search_items' => 'Искать товары',
        'not_found' =>  'Товаров не найдено.',
        'not_found_in_trash' => 'В корзине нет товаров.',
        'menu_name' => 'Товары' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true, // благодаря этому некоторые параметры можно пропустить
        'menu_icon' => 'dashicons-cart', // иконка корзины
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments'),
        'taxonomies' => array('post_tag')
    );
    register_post_type('products',$args);
}