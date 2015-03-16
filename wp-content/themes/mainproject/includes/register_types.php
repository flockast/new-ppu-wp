<?php

add_action( 'init', 'true_register_products' );
 
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