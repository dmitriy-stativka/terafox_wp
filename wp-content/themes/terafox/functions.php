<?php 

function terafox_scripts() {
    wp_enqueue_style('wp_play_style', get_stylesheet_directory_uri().'/styles.css');

    wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('jquery');
    wp_deregister_script('slick');
    wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js');
    wp_enqueue_script('slick');
    wp_deregister_script('mask');
    wp_register_script('mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js');
    wp_enqueue_script('mask');
  }

add_action('wp_enqueue_scripts','terafox_scripts');


add_action('init', 'register_post_types');

function register_post_types(){

register_post_type('company', array(
'labels'             => array(
  'name'               => 'О компании', // Основное название типа записи
  'singular_name'      => 'О компании', // отдельное название записи типа Book
  'add_new'            => 'Добавить текст',
  'add_new_item'       => 'Добавить новый текст',
  'edit_item'          => 'Редактировать текст',
  'new_item'           => 'Новый текст',
  'view_item'          => 'Посмотреть текст',
  'search_items'       => 'Найти текст',
  'not_found'          => 'Не найдено',
  'not_found_in_trash' => 'В корзине ничего не найдено',
  'parent_item_colon'  => '',
  'menu_name'          => 'О компании'
  ),
'public'             => true,
'publicly_queryable' => true,
'show_ui'            => true,
'show_in_menu'       => true,
'query_var'          => true,
'rewrite'            => true,
'capability_type'    => 'post',
'has_archive'        => false,
'hierarchical'       => false,
'menu_position'      => null,
'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
));




register_post_type('reviews', array(
    'labels'             => array(
      'name'               => 'Отзывы', // Основное название типа записи
      'singular_name'      => 'Отзывы', // отдельное название записи типа Book
      'add_new'            => 'Добавить отзыв',
      'add_new_item'       => 'Добавить новый отзыв',
      'edit_item'          => 'Редактировать отзыв',
      'new_item'           => 'Новый отзыв',
      'view_item'          => 'Посмотреть отзыв',
      'search_items'       => 'Найти отзыв',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Отзывы'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
    ));
    
register_post_type('generalScreen', array(
    'labels'             => array(
      'name'               => 'Главный экран', // Основное название типа записи
      'singular_name'      => 'Главный экран', // отдельное название записи типа Book
      'add_new'            => 'Добавить главный экран',
      'add_new_item'       => 'Добавить новый главный экран',
      'edit_item'          => 'Редактировать главный экран',
      'new_item'           => 'Новый главный экран',
      'view_item'          => 'Посмотреть главный экран',
      'search_items'       => 'Найти главный экран',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Главный экран'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
    ));
    
    register_post_type('utp', array(
        'labels'             => array(
          'name'               => 'УТП', // Основное название типа записи
          'singular_name'      => 'УТП', // отдельное название записи типа Book
          'add_new'            => 'Добавить УТП',
          'add_new_item'       => 'Добавить новое УТП',
          'edit_item'          => 'Редактировать УТП',
          'new_item'           => 'Новое УТП',
          'view_item'          => 'Посмотреть УТП',
          'search_items'       => 'Найти УТП',
          'not_found'          => 'Не найдено',
          'not_found_in_trash' => 'В корзине ничего не найдено',
          'parent_item_colon'  => '',
          'menu_name'          => 'УТП'
          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
        ));

}
?>