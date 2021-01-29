<!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>
<main class="l-main">
  <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <ul class="post__meta">
      <li class="post__meta__item">
        <date class="post__meta__date"><?php echo get_the_date(); ?></date>
      </li>
      <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
      <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
    </ul>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <?php $args = array (
                    'before' => '<div class="page-split">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    );
                    wp_link_pages( $args );
                ?>
  </div>
  <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>

  <section class="p-hero p-hero-single">
    <div class="c-wrap">
      <h1 class="c-title-hero">h1 チーズバーガー</h1>
    </div>
  </section>
  <article class="p-single c-wrap">
    <h2 class="c-title-single">見出しh2</h2>
    <p class="c-comment">
      Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
    </p>
    <h3 class="c-title-single__smaller">見出しh3</h3>
    <h4 class="c-title-single__smallest">見出しh4</h4>
    <h3 class="c-title-single__smallest">見出しh3</h3>
    <h4 class="c-title-single__smallest">見出しh4</h4>
    <h5 class="c-title-single__smallest">見出しh5</h5>
    <h6 class="c-title-single__smallest">見出しh6</h6>
    <blockquote cite="引用元URL">
      <p>Blockquote
        引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
      </p>
      <cite>出典元：<a href="引用元URL">○○○○○○○○○○○○</a></cite>
    </blockquote>
    <img class="c-image__wide" src="./images/single_wide.png" alt="シングルページの横長のハンバーガー写真">
    <div class="p-single-intro">
      <div>
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
      </div>
      <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
    </div>
    <div class="p-single-intro">
      <div>
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
      </div>
      <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
    </div>
    <div class="p-single-imageList">
      <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
      <div>
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
        <img src="./images/single_normal.png" alt="シングルページのハンバーガー写真">
      </div>
    </div>
    <div class="p-single-list">
      <div class="p-single-list-order">
        <ol>
          <li>リストリストリスト</li>
          <li>
            リストリストリスト
            <ol class="u-ml10">
              <li>リスト２リスト２リスト２</li>
              <li>リスト２リスト２リスト２</li>
            </ol>
          </li>
        </ol>
        <ol>
          <li>リストリストリスト</li>
          <li>リストリストリスト</li>
        </ol>
      </div>
      <div class="p-single-list-unorder">
        <ul>
          <li>リストリストリスト</li>
          <li>リストリストリスト
            <ul class="u-ml10">
              <li>リスト２リスト２リスト２</li>
              <li>リスト２リスト２リスト２</li>
            </ul>
          </li>
        </ul>
        <ul>
          <li>リストリストリスト</li>
          <li>リストリストリスト</li>
        </ul>
      </div>
    </div>
    <pre>
            <code>
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;/body&gt;
&lt;/html&gt;
              </code>
          </pre>
    <table>
      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>
      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>
      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>
      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>
    </table>
    <button class="c-button"><a href="">ボタン</a></button>
    <p class="c-comment__bold">boldboldboldboldboldboldbold</p>
  </article>
</main>
</div>
<!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_sidebar(); ?>
<!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>