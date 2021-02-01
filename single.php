<!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>
<main class="l-main">
  <?php
    if( have_posts() ) :
      while( have_posts() ) :
        the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="p-hero p-hero-single">
      <div class="c-wrap">
        <h1 class="c-title-hero"><?php the_title(); ?></h1>
      </div>
    </section>
    <article class="p-post c-wrap">
      <!-- <?php the_post_thumbnail(); ?> -->
      <?php the_content(); ?>
  </div>
  <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>
  </article>
</main>
</div>
<!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_sidebar(); ?>
<!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>