<?php get_header(); ?>

<main class="page page-single">
  <section class="single-top">
    <div class="single-top__inner">
      <p class="single-top__title">NEW<span>S</span></p>
    </div>
  </section>
  <section class="single-main">
    <div class="single-main__inner">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <!-------------------------------
         single-left
      ---------------------------------->
      <div class="single-left">
        <div class="single-left-bottom sp">
          <h1 class="single-left__title"><?php the_title(); ?></h1>
          <div class="single-left__date">
            <span class="single-left__date--title">投稿した日付</span>
            <span class="single-left__date--day"><?php the_time('Y.m.d'); ?></span>
          </div>
        </div>
        <div class="single-left-img">
          <?php the_post_thumbnail('index_thumbnail'); ?>
        </div>
        <div class="single-left-bottom">
          <div class="single-left-bottom pc">
            <h1 class="single-left__title"><?php the_title(); ?></h1>
            <div class="single-left__date">
              <span class="single-left__date--title">投稿した日付</span>
              <span class="single-left__date--day"><?php the_time('Y.m.d'); ?></span>
            </div>
          </div>
          <p class="single-left__article"><?php the_content(); ?></p>
        </div>
      </div>
    <?php endwhile; endif; ?>

    <!-------------------------------
      single-right
    ---------------------------------->
    <div class="single-right clearfix">
      <?php // wp_get_archives( 'type=postbypost&limit=4' ); ?>
      <?php
        global $post;
        //投稿数
        $args = array( 'posts_per_page' => 4 );
        $myposts = get_posts( $args );
        $counter = 0;
        //ループで回す
        foreach( $myposts as $post ) { 
          setup_postdata($post);
          $counter++;
      ?>

      <div class="single-right-item">
        <a href="<?php the_permalink(); ?>" class="single-right-item-link">
          <div class="single-right__image"><?php the_post_thumbnail('index_thumbnail'); ?></div>
          <div class="single-right__detail">
            <p class="single-right__title"><?php the_title(); ?></p>
            <p class="single-right__article"><?php the_time('Y.m.d'); ?></p>
          </div>
        </a>
      </div>

      <?php 
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
  </section>
</main>
