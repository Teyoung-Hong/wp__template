(function ($) {
  window.onload = (function () {

    //ハンバーガーメニューのクリック
    $('#js-drawer-button').on('click', function () {
      $(this).toggleClass('open');
      $('#js-drawer-menu').fadeToggle();
      if ($(this).hasClass('open')) {
        console.log("true");
        $('#header').css('background-color', 'transparent');
      } else {
        console.log("false");
        $('#header').css('background-color', '#626262');
      }
    })



    // page-home
    // slick
    $('#js-home-slider').slick({
      // 自動再生。trueで自動再生される。
      autoplay: true,
      // 自動再生で切り替えをする時間
      autoplaySpeed: 2000,
      // 自動再生や左右の矢印でスライドするスピード
      speed: 400,
      // 自動再生時にスライドのエリアにマウスオンで一時停止するかどうか
      pauseOnHover: true,
      // 左右のボタンを非表示に
      arrows: false,
    });
  })


})(jQuery)