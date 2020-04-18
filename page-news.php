<?php
  /*
  Template Name: news
  */
  get_header();
?>

<main class="page page-news">
  <section class="news-wrapper">
    <div class="news-inner">
      <p class="news-title">記事一覧</p>

      <div class="news-items clearfix">
      <?php
        global $post;
        //投稿数
        $args = array( 'posts_per_page' => 8 );
        $myposts = get_posts( $args );
        $counter = 0;
        //ループで回す
        foreach( $myposts as $post ) { 
          setup_postdata($post);
          $counter++;
      ?>
        <div class="news-item">
          <a href="<?php the_permalink(); ?>" class="news-link">
            <?php the_post_thumbnail('index_thumbnail'); ?>
            <p class="news-item__title"><?php the_title(); ?></p>
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