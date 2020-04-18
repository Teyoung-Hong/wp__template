<?php

  // jqueryの読み込み
  wp_enqueue_script('jquery');                                                                                                                                                   


  // page-newsの文文章抜粋部分の表示文字数設定
  // function my_excerpt_length($length) {
  //   return 40; 
  // }
  // add_filter('excerpt_length', 'my_excerpt_length');

  // page-newsの文章抜粋部分の最後の[...]を非表示に
  // function my_excerpt_more($more) {
  //   return '...';
  // }
  // add_filter('excerpt_more' , 'my_excerpt_more' );  

  function create_post_type() {
    register_post_type( 'traction', // URLになる部分
      array(
        'label' => '実績', // 管理画面の左メニューに表示されるテキスト
        'labels' => array(
        'all_items' => '実績一覧'// 管理画面の左メニューの下層に表示されるテキスト
        ),
        'public' => true, 
        'has_archive' => true,
        'menu_position' => 5, 
        'supports' => [ 
          'thumbnail', // アイキャッチ画像
          'title', // 記事タイトル
          'editor',
        ]
      )
    );
  }
  add_action( 'init', 'create_post_type' );

  // サムネイル　追加
  add_theme_support('post-thumbnails', array('post', 'traction'));

  // ウィジェット
  register_sidebar(array(
    'name' => 'archive',
    'id' => 'widget-archive',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

?>