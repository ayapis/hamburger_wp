jQuery(function (jQuery) {
  jQuery(window).on('load resize', function () {
    var w = jQuery(window).width();
    var x = 768;
    if (w <= x) {
      //画面サイズが768px以下のときの処理
      jQuery(".c-button-open").on("click", function () {
        jQuery(".l-aside").addClass("is-open");
        jQuery(".c-button-close").addClass("is-open");
        jQuery(".l-aside__title").css('display', 'none');
      });
      jQuery(".c-button-close").on("click", function () {
        jQuery(".l-aside").removeClass("is-open");
        jQuery(".c-button-close").removeClass("is-open");
        jQuery(".l-aside__title").css('display', '');
      });
    }
  });
});