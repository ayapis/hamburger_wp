<aside class="l-aside">
  <div class="p-sidebar">
    <button class="c-button-close"></button>
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
</aside>
</div>