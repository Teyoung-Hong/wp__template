<?php
  /*
  Template Name: contact
  */
  get_header();
?>

<main class="page page-contact">
  <section class="contact-top">

    <div class="contact-top__inner">
      <p class="contact-top__title">connect <span>with</span> us</p>
      <p class="contact-top__subtitle">
        事業に関するご相談、取材や採用についてなど、お気軽にお問い合わせください。<br>
        後日、担当者よりご連絡申し上げます。
      </p>
    </div>
  </section>

  <section class="contact-main">
    <div class="contact-main__inner clearfix">
    <?php echo do_shortcode('[contact-form-7 id="26" title="Contact form 1"]'); ?>
    </div>
  </section>
</main>

<style>
  main.page{
    padding-bottom: 0;
  }
</style>