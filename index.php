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
<main class="main">

  <!-- ▼ 各セクション -->
  <!-- ▼ トップ部分 -->
  <section class="section__top">
    <div class="top__inner">
      <video src="<?php echo get_template_directory_uri(); ?>/images/mov01.mp4" autoplay muted loop playsinline width="100%" height="100%"></video>
    </div>
  </div>
  <!-- ▼ 任意でこのブロックを増やしていく -->
  <section class="section__sample">
    <div class="sample__inner"></div>
  </div>
</main>

<?php get_footer(); ?>