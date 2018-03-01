<?php

function remove_menus(){
     remove_menu_page( 'edit.php' );                   //Записи
}

add_action( 'admin_menu', 'remove_menus' );
   

function awesome_custom_post_type() {

register_post_type( 'shares-post',
    array(
      'label' => 'Акции',
      'public' => true,
      'has_archive' => true,
			'show_ui'              => true,
			'menu_position'=>5,
			'supports'             => array('title', 'editor', 'thumbnail')
    )
  );

  register_post_type( 'services-post',
  array(
    'label' => 'Услуги',
    'public' => true,
    'has_archive' => true,
    'show_ui'              => true,
    'menu_position'=>5,
    'supports'             => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category'),
    )
  );

	register_post_type( 'masters-post',
    array(
      'label' => 'Мастера',
      'public' => true,
      'has_archive' => true,
			'show_ui'              => true,
      'menu_position'=>5,
      'taxonomies' => array('category'),
			'supports'             => array('title', 'editor', 'thumbnail')
    )
  );
  
  	register_post_type( 'otziv-post',
    array(
      'label' => 'Отзывы',
      'public' => false,
      'has_archive' => false,
			'show_ui'              => true,
			'menu_position'=>5,
			'supports'             => array('title', 'editor', 'thumbnail')
    )
  );
  
  
  	register_post_type( 'new-post',
    array(
      'label' => 'Новости',
      'public' => true,
      'has_archive' => true,
			'show_ui'              => true,
			'menu_position'=>5,
			'supports'             => array('title', 'editor', 'thumbnail')
    )
  );
  
  
  	register_post_type( 'article-post',
    array(
      'label' => 'Статьи',
      'public' => true,
      'has_archive' => true,
			'show_ui'              => true,
			'menu_position'=>3,
			'supports'             => array('title', 'editor', 'thumbnail')
    )
  );

}
  // flush_rewrite_rules( false );


  add_action('init','awesome_custom_post_type');
