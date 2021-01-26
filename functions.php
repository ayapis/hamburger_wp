<?php
    //テーマサポート
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // サイトタイトルの取得
    function hamburger_title( $title ) {
      $title = get_bloginfo( 'name', 'display' );
      return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    // fontawesomeやjs、cssファイルなどの読み込み
    // バージョンは最初は1.0.0でバージョンアップしたら変更する
    function hamburger_script() {
      wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
      // レイアウトを組んだcssファイルの読み込み
      wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
      // テーマディレクトリ直下の情報を記載したcssファイルの読み込み
      wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
      wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/hamburger.js', array( 'jquery' ), '1.0.0');
      wp_enqueue_style( 'google-webfont-style', '//fonts.googleapis.com/css?family=Lato:wght@400;700&' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    // サイドバーのウィジェットの有効化
    function wpbeg_widgets_init() {
      register_sidebar (
          array(
              'name'          => 'メニュー一覧',
              'id'            => 'menu_widget',
              'description'   => 'ハンバーガーサイトのメニュー一覧です。',
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h2 class="l-aside__title"><button class="c-button-open">',
              'after_title'   => "</button></h2>\n",
          )
      );
   }
  add_action( 'widgets_init', 'wpbeg_widgets_init' );

  function custom_editor_settings( $initArray ){
    $initArray['block_formats'] = "見出し3=h3; 見出し4=h4; 見出し5=h5; 段落=p; グループ=div; 整形済みテキスト=pre";
    return $initArray;
    }
    add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );