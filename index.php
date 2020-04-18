<?php 
/**
*The main template file
*@package WordPress // package name
*@subpackage template //chage here
*@since 1.0.0 //version
*/

/* 
# classはBRM記法
 Block__Element--Modifier
# html structure
 header
 main
  section__xxx
    xxx__inner
      xxx__case by case
 footer 
*/

get_header(); 
?>

<!-- ▼ メイン部分 -->
<main class="main page-top">

  <!-- ▼ 各セクション -->
  <!-- ▼ トップ部分 -->
  <section class="section__top">
    <div class="top__inner">

    <!---------------------
      
    ---------------------->
      <div class="video__pc">
        <video id="p-video" class="pc-video" src="<?php bloginfo('template_directory'); ?>/images/top/pc.mp4" autoplay muted ></video>
      </div>
      <div class="video__sp">
        <video id="s-video" class="sp-video" src="<?php bloginfo('template_directory'); ?>/images/top/sp.mp4" autoplay muted ></video>
      </div>
      <div id="v-content" class="video-content">
          <div class="video-content-left">
            <h1 class="v-c-title">鋼製技建</h1>
            <p class="v-c-subtitle">Metal fablication Professional</p>
            <div class="v-c-sp-tate">
              <p class="v-c-sp-tatebun">
                業界最年少集団が<br>
                建築業界に新たな<br>
                時代を築き上げる。<br>
                弊社に関わる全ての人に幸せを。<br>
              </p>
            </div>
            <div class="v-c-link">
              <a href="<?php bloginfo('url'); ?>/home">
                <img class="v-c-link-image" src="<?php bloginfo('template_directory'); ?>/images/top/link-ama.png" alt="">
              </a>
              <a href="<?php bloginfo('url'); ?>/home">
                <img class="v-c-link-image" src="<?php bloginfo('template_directory'); ?>/images/top/link-osaka.png" alt="">
              </a>
            </div>
          </div> 
          <div class="video-content-right">
            <div class="v-c-pc-tate">
              業界最年少集団が<br>
              建築業界に新たな<br>
              時代を築き上げる。<br>
              弊社に関わる全ての人に幸せを。<br>
            </div>
          </div> 
        </div>
    </div>
  </div>
</main>

<style>
  footer{
    display: none;
  }
</style>

<?php get_footer(); ?>


<script>
  window.setTimeout(textIn, 53000)
  window.setTimeout(pcStop, 59000)
  window.setTimeout(spStop, 60000)

  function textIn() {
    $('#v-content').fadeIn(6000);
    $('#v-content').css('display', 'flex');
    $('#v-content').addClass('sp-ended');
  }

  function pcStop() {
    $('#p-video').get(0).pause();
  }

  function spStop() {
    $('#s-video').get(0).pause();
  }
</script>