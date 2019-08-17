<?php

add_action('wp_enqueue_scripts', 'addHeadLink');

function addHeadLink()
{
  wp_enqueue_style("libs", get_stylesheet_directory_uri() . "/css/libs.min.css");
  wp_enqueue_style("main", get_stylesheet_directory_uri() . "/css/main.css", '', time());
  wp_enqueue_style("media", get_stylesheet_directory_uri() . "/css/media.css");

  wp_enqueue_script("jquery");
  wp_enqueue_script("main", get_stylesheet_directory_uri() . "/js/main.js");
}

register_nav_menus(
  array(
    'head_menu' => 'Шапка',
    'footer_menu' => 'Футер'
  )
);

add_theme_support('post-thumbnails');
add_image_size('posts', '270', '190');
add_image_size('page_thumb', '82', '55');

function true_register_wp_sidebars() {
  register_sidebar(
    array(
      'id' => 'true_side', // уникальный id
      'name' => 'Боковая колонка', // название сайдбара
      'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
      'before_widget' => '<div id="%1$s" class="sidebar__sidebar-item %2$s">', // по умолчанию виджеты выводятся <li>-списком
      'after_widget' => '</div>',
      'before_title' => '<div class="sidebar-item__title">', // по умолчанию заголовки виджетов в <h2>
      'after_title' => '</div>'
    )
  );
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );