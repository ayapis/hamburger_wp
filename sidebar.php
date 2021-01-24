<aside class="l-aside">
  <!-- <h2 class="l-aside__title">
    <button class="c-button-open">Menu</button>
  </h2> -->
  <div class="p-sidebar">
    <?php
        if ( is_active_sidebar( 'menu_widget' ) ) :
            dynamic_sidebar( 'menu_widget' );
        else:
    ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
    <div class="u-pd-aside u-pd-l40">
      <button class="c-button-close"></button>
      <h3 class="c-title-aside">バーガー</h3>
      <ul class="u-pd40">
        <li><a href="#">ハンバーガー</a></li>
        <li><a href="#">チーズバーガー</a></li>
        <li><a href="#">テリヤキバーガー</a></li>
        <li><a href="#">アボカドバーガー</a></li>
        <li><a href="#">フィッシュバーガー</a></li>
        <li><a href="#">ベーコンバーガー</a></li>
        <li><a href="#">チキンバーガー</a></li>
      </ul>
      <h3 class="c-title-aside">サイド</h3>
      <ul class="u-pd40">
        <li><a href="#">ポテト</a></li>
        <li><a href="#">サラダ</a></li>
        <li><a href="#">ナゲット</a></li>
        <li><a href="#">コーン</a></li>
      </ul>
      <h3 class="c-title-aside">ドリンク</h3>
      <ul class="u-pd40">
        <li><a href="#">コーラ</a></li>
        <li><a href="#">ファンタ</a></li>
        <li><a href="#">オレンジ</a></li>
        <li><a href="#">アップル</a></li>
        <li><a href="#">紅茶 (Ice/Hot)</a></li>
        <li><a href="#">コーヒー (Ice/Hot)</a></li>
      </ul>
    </div>
</aside>
</div>