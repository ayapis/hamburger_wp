<!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>
<main class="l-main">
  <!-- メインタイトル部分 -->
  <section class="p-hero p-hero-archive u-mb35">
    <div class="c-wrap">
      <h1 class="c-title-hero">Search:<span class="u-break u-ml20-ipadPc"><?php echo '“'.$_GET['s'] .'”' ?></span></h1>
    </div>
  </section>
  <!-- コンテンツ部分 -->
  <section class="p-menu c-wrap">
    <h2 class="c-title-archive u-mb35">小見出しが入ります</h2>
    <p class="u-mb-menu">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    <!-- ループ処理で投稿記事を一覧表示 -->
    <?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>
    <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
    <div class="c-wrap-flexbox" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_post_thumbnail(); ?>
      <div class="p-menu__intro">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content( '詳しく見る' ); ?>
      </div>
    </div>
    <?php endwhile;
    else :
      ?><p>表示する記事がありません</p><?php
    endif;
    ?>
  </section>
  <section class="c-wrap">
    <ul class="p-pagination">
      <li class="p-pagination__number">page 1/10</li>
      <li class="p-pagination__pre"><a href="#">&#8810;</a></li>
      <li><a href="#" class="active">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a href="#">7</a></li>
      <li><a href="#">8</a></li>
      <li><a href="#">9</a></li>
      <li class="p-pagination__next"><a href="#">&#8811;</a></li>
    </ul>
  </section>
</main>
</div>
<!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_sidebar(); ?>
<!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>