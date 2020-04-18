<?php
  /*
  Template Name: traction
  */
  get_header();
?>

<main class="page page-traction">
  <section class="traction-wrapper">
    <div class="traction-inner">
      <p class="traction-title">実績一覧</p>

      <div class="traction-items clearfix">
      <?php 
        $args = array(
          'numberposts' => 6, //表示する記事の数
          'post_type' => 'traction' //投稿タイプ名
          // 条件を追加する場合はここに追記
        );
        $counter=0;
        $traction = get_posts($args);
        if($traction) : foreach($traction as $post) : setup_postdata( $post );
        $counter++
      ?>
        <div id="ex<?php echo $counter; ?>" class="modal-body">
          <?php the_post_thumbnail(); ?>
          <?php //the_title(); ?>
          <?php the_content(); ?>
        </div>
        <div class="traction-item">
          <a href="#ex<?php echo $counter; ?>" rel="modal:open" class="modal-trigger">
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="traction-item__image">
              <?php the_post_thumbnail(); ?>
            </div> 
            <?php else: ?>
              <p>No thumbnail/</p>
            <?php endif; ?>
            <p class="traction-item__title"><?php the_title(); ?></p>
          </a>
        </div>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
      </div>
    </div>
  </section>
</main>
