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

    // 投稿件数が0件のカテゴリもサイドバーに表示させる
    function hook_widget_categories( $args ){
      $args['hide_empty'] = 0;
      return $args;
      }
      add_filter( 'widget_categories_args', 'hook_widget_categories');
      add_filter( 'widget_categories_dropdown_args', 'hook_widget_categories' );

    // 特定のカテゴリのみ非表示にする
    function exclude_widget_categories($args){
      $exclude = array(2,58,59);
      $args["exclude"] = $exclude;
      return $args;
    }
    add_filter( 'widget_categories_args', 'exclude_widget_categories');
    

    // エディターのカスタマイズしようとしたが、下記ではうまくいかず。
    // core/heading removeで検索してみる
    function custom_editor_settings( $initArray ){
      $initArray['block_formats'] = "見出し3=h3; 見出し4=h4; 見出し5=h5; 段落=p; グループ=div; 整形済みテキスト=pre";
      return $initArray;
      }
      add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );


    // ページネーション
    function pagenation($pages = '', $range = 2){
      // 質問１：($range * 1) → ×１をする必要ある？
      $showitems = ($range * 1)+1;
      global $paged;
      if(empty($paged)) $paged = 1;
      if($pages == ''){
          global $wp_query;
          $pages = $wp_query->max_num_pages;
          // 質問２：!は否定？ $pagesでないときって何？
          if(!$pages){
              $pages = 1;
          }
      }
      // 質問３：質問２の箇所で$pagesに1が代入されたら、falseになるってこと？
      if(1 != $pages){
          // 画像を使う時用に、テーマのパスを取得（今回は使用しない）
          // $img_pass = get_template_directory_uri();
          // echo "<div class=\"m-pagenation\">";
          
          // 「1/2」表示 現在のページ数 / 総ページ数
          echo "<li class=\"p-pagination__number\">". "page ".$paged."/". $pages."</li>";

          // 現在のページ番号が1より大きいとき「<<前へ」をリンク付きで表示
            // 「前へ」の文字は、スマホ版のときのみ表示なので、疑似要素として分ける
          // それ以外のときはリンクなしで表示
            // スマホ版では非表示にするために、「p-pagination__pre-none」クラスを追加
          // リンク先は現在のページの1つ前なので「-1」とする
          // if($paged > 1) echo "<li class=\"p-pagination__pre\"><a href='".get_pagenum_link($paged - 1)."'>&#8810;</a></li>";
          if($paged > 1) {
            echo "<li class=\"p-pagination__pre\"><a href='".get_pagenum_link($paged - 1)."'>&#8810;</a></li>";
          } else {
            echo "<li class=\"p-pagination__pre p-pagination__pre-none\">&#8810;</li>";
          }
          
          // ページ番号を出力
          // ここのクラスなくてもいい？
          echo "<ol class=\"m-pagenation__body\">\n";
          // 変数iの初期値が1、ループごとに変数iは1増加、変数iが総ページ以下の間ループ=変数iが総ページより大きくなったら終わり
          for ($i=1; $i <= $pages; $i++){
            // 条件１ 総ページが1でないかつ、→ページネーション自体表示させないから分かる
            // 条件２-ⅰ 「変数iが現ページ+2+1以上または、変数iが現ページ-2-1以下」でない
            //           →変数iが現ページ+2+1以上でないかつ、変数iが現ページ-2-1以下でない
            // 条件２-ⅱ 表示する項目数（2+1）が総ページより大きいとき
              if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                    // 現在のページの数字はリンク無し
                    // 質問４： ($paged == $i)? の構文？が分からない。
                  echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": 
                      "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
              }
          }
          // [...] 表示
          // 現ページ+4ページが総ページよりも小さいとき
          // すなわち、総ページ10ページのとき、 現ページ+4ページ > 10ページに該当するのは
          // 現ページが 1,2,3,4,5ページ のときのみこの表示がされる
          if(($paged + 4 ) < $pages){
              echo "<li class=\"notNumbering\">...</li>";
              // ・・・のあとに最後のページの番号（=総ページ数）を表示してる！
              echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
          }
          echo "</ol>\n";


          // 「次へ」を表示
          if($paged < $pages) {
            echo "<li class=\"p-pagination__next\"><a href='".get_pagenum_link($paged + 1)."'>&#8811;</a></li>";
          } else {
            echo "<li class=\"p-pagination__next p-pagination__next-none\">&#8811;</li>";
          }
          // echo "</div>\n";
          }
    }

    // 投稿の並び順を変更する
    function twpp_change_sort_order( $query ) {
      if ( $query->is_main_query() ) {
        $query->set( 'order', 'ASC' );
      }
    }
    
    add_action( 'pre_get_posts', 'twpp_change_sort_order' );

    // 続きを読むのアンカーを除去して、記事の先頭から表示させる
    function remove_more_jump_link($link) { 
      $offset = strpos($link, '#more-');
      if ($offset) {
        $end = strpos($link, '"',$offset);
      }
      if ($end) {
        $link = substr_replace($link, '', $offset, $end-$offset);
      }
      return $link;
    }
    
    add_filter('the_content_more_link', 'remove_more_jump_link');

    // 投稿ページの画像タグに埋め込まれるwidth/heightを削除
    add_filter( 'wp_img_tag_add_width_and_height_attr', '__return_false' );
 