<?php
  /*
  Template Name: strength
  */
  get_header();
?>

<main class="page page-strength">

  <!---------------------------------------

  strength-topセクション

  ----------------------------------------->
  <section class="strength-top">
    <div class="strength-top__inner">
      <p class="strength-top-title">Flexible</p>
      <p class="strength-top-title">And</p>
      <p class="strength-top-title">Powerful</p>
      <p class="strength-top-subtitle">日本一柔軟でパワフルな会社を目指して。</p>
    </div>
  </section>




  <div class="strength-main-bg">
  <!---------------------------------------

  strength-aboutセクション

  ----------------------------------------->
  <section class="strength-about">
    <div id="st-head" class="strength-about-head animated">
      Lead<br>By<br>Example
    </div>
    <div class="strength-about-head-sp">
      Lead By Example
    </div>
    <div class="strength-about-content">
      <p class="about-content-title">業界最年少集団が前例を創り上げる。</p>
      <div class="about-content-image">
        <p class="about-content-image-article">
          少数精鋭部隊だからこその<br>
          速さ<br>
          業務をこなすだけでなく、<br>
          徹底的な品質管理はもちろん<br>
          お客様に納品されるまでの<br>
          速さ<br>
          作業効率を上げることにより<br>
          着工から納品までの流れをスムーズに。<br>
        </p>
      </div>
      <p class="about-content-article">
        少数精鋭部隊だからこその<br>
        速さ<br>
        業務をこなすだけでなく、<br>
        徹底的な品質管理はもちろん<br>
        お客様に納品されるまでの<br>
        速さ<br>
        作業効率を上げることにより<br>
        着工から納品までの流れをスムーズに。<br>
      </p>
    </div>
  </section>

  <!---------------------------------------

  strength-descセクション

  ----------------------------------------->
  <section class="strength-desc">

    <div class="strength-desc-top">
      <p id='st-top-title' class="strength-desc-top-title animated">What's Strong?</p>
      <div id='st-top-cover' class="strength-desc-top-cover animated"></div>
      <p class="strength-desc-top-title-sp">
        The Company's<br>
        Strong Value<br>
        Proposition
      </p>
    </div>

    <div class="strength-desc-body">
      <div class="strength-desc-body__inner">
        <img src="<?php bloginfo('template_directory');?>/images/strength/process.png" alt="">
        <div class="strength-desc-body-corner top-left">
          <div class="strength-desc-body-corner-image">
          </div>
          <p class="strength-desc-body-corner-article">
          専門の施工部隊によって業務効率、
作業スピード、品質管理、
全てが揃って鋼製技研の本当の力が発揮される。
          </p>
        </div>
        <div class="strength-desc-body-corner top-right">
          <div class="strength-desc-body-corner-image">
          </div>
          <p class="strength-desc-body-corner-article">
          原寸図、一般図
それぞれの工程に人員を配備
綿密な設計により、0-1は誕生する。
          </p>
        </div>
        <div class="strength-desc-body-corner bottom-left">
          <div class="strength-desc-body-corner-image">
          </div>
          <p class="strength-desc-body-corner-article">
          部材の運搬は社長自らがハンドルを握る。
仕事によっては北は北海道、南は九州まで
運搬する。
          </p>
        </div>
        <div class="strength-desc-body-corner bottom-right">
          <div class="strength-desc-body-corner-image">
          </div>
          <p class="strength-desc-body-corner-article">
          制作段階から鋼製魂を吹き込むのが弊社のやり方。
綿密に作り上がった設計書から新たな部材が作り上がる。
          </p>
        </div>
      </div>
    </div>

  </section>



  <!---------------------------------------

  strength-subセクション

  ----------------------------------------->

  <section class="strength-sub">
    <div class="sub-red-zone"></div>
    <div class="sub-inner">
      <p class="sub-top">
        設計、制作、運搬、施工をワンストップで実現する。<br>
        自社で全てを完結することで早期問題発見につながり、<br>
        アフターケアも充実させる。<br>
        おかげさまで、リピート率は100%お客様ファーストの精神を貫き、
      </p>
      <p class="sub-middle">
        弊社に関わる全ての人に幸せを運ぶ。<br>
        それこそが、
      </p>
      <p id="soul" class="sub-bottom animated">
        鋼製技研の魂
      </p>
    </div>
  </section>


  <!---------------------------------------

  strength-tractionセクション

  ----------------------------------------->
  <section class="strength-traction">
    <div class="strength-header">
      <p class="straction-title">実績</p>
    </div>
    <div class="straction-main">
      <div class="straction-main__inner">
        <p class="straction-main__sp">OSAKA</p>
        <div class="straction-main__left">
          <div class="straction-main__item first">
            <p class="straction-main__title">Osaka</p>
            <img src="<?php bloginfo('template_directory');?>/images/strength/left-top.png" alt="">
          </div>
          <div class="straction-main__item">
            <p class="straction-main__title">Osaka</p>
            <img src="<?php bloginfo('template_directory');?>/images/strength/left-bottom.png" alt="">
          </div>
        </div>
        <div class="straction-main__right">
          <div class="straction-main__item first">
            <p class="straction-main__title">Osaka</p>
            <img src="<?php bloginfo('template_directory');?>/images/strength/right-top.png" alt="">
          </div>
          <div class="straction-main__item">
            <p class="straction-main__title">Osaka</p>
            <img src="<?php bloginfo('template_directory');?>/images/strength/right-bottom.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <?php
      get_footer();
    ?>
  </section>

</div>

</main>

<script>
  // page-strength
  $('#st-head').on('inview', function () {
    $(this).addClass('fadeInLeftBig');
    $(this).css('opacity', '1.0');
  })

  $('#st-top-title').on('inview', function(){
    $(this).addClass('fadeInLeftBig');
    $(this).css('opacity', '1.0');
    $('#st-top-cover').addClass('fadeInLeftBig');
    $('#st-top-cover').css('opacity', '1.0');
  })

  $('#soul').on('inview', function () {
    $(this).addClass('fadeInRightBig');
    $(this).css('opacity', '1.0');
  })


</script>