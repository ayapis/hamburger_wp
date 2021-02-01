<!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_header(); ?>
<main class="l-main">
  <section class="p-hero u-mb50">
    <div class="c-wrap">
      <h2 class="c-title-hero">ダミーサイト</h2>
    </div>
  </section>
  <div class="c-wrap-flexbox u-mb50">
    <!-- TakeOutとEatInを横並びにするためのdiv -->
    <section class="c-wrap-takeout">
      <h3 class="c-title-takeout"><a href="<?php echo esc_url( get_category_link( 59 ) ); ?>">Take Out</a></h3>
      <div class="p-box u-aspectRatio">
        <div class="p-box__content">
          <h4 class="c-title-box u-mb23">小見出しが入ります</h4>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="p-box__content">
          <h4 class="c-title-box u-mb23">小見出しが入ります</h4>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
    </section>
    <section class="c-wrap-eatin">
      <h3 class="c-title-eatin"><a href="<?php echo esc_url( get_category_link( 58 ) ); ?>">Eat In</a></h3>
      <div class="p-box u-aspectRatio">
        <div class="p-box__content">
          <h4 class="c-title-box u-mb23">小見出しが入ります</h4>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="p-box__content">
          <h4 class="c-title-box u-mb23">小見出しが入ります</h4>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
    </section>
  </div><!-- TakeOutとEatInを横並びにするためのdiv -->
  <div class="c-wrap-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.585149284183!2d135.29682832559706!3d34.40325717843787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000b7faadf417f9%3A0x9942d8545f15937c!2z44KK44KT44GP44GG5Lit5aSu5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1609170535362!5m2!1sja!2sjp"
      width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>
    <section class="p-map">
      <div class="p-map__layer1">
        <div class="p-map__layer2">
          <div class="p-map__content">
            <h3 class="c-title-map u-mb50">見出しが入ります</h3>
            <p class="p-map__comment">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
</div>
<!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_sidebar(); ?>
<!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
<?php get_footer(); ?>