<!DOCTYPE html>
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<html lang="ja">
<head>
  <meta charset="UTF-8">

  <!--  ▼　ビューポート -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!--  ▼　デバイス認識 -->
  <?php
  global $ua, $sp, $pad;
  $ua=$_SERVER['HTTP_USER_AGENT'];
  $sp=
  ((strpos($ua,'iPhone')==true)||(strpos($ua,'iPod')==true)||(strpos($ua,'Android')==true));
  $ipad=
  ((strpos($ua,'iPhone')==true)||(strpos($ua,'iPod')==true)||(strpos($ua,'Android')==true)||(strpos($ua,'iPad')==true));
  ?>

  <!-- ▼　スタイルシート -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/slick/slick-theme.css"/>

  <!-- fontawesome -->
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <!-- ▼　js　-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/function.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slick/slick.min.js"></script>


  <!-- ▼　ファビコン　-->


  <!-- ▼　サイトタイトル　-->
  <title>鋼製技研</title>

  <?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->

</head>
<body <?php body_class(); ?>>
  <!-- ヘッダー -->
  <header class="header" id="header">
    <div class="header__inner">
      <img class="header__icon-home" src="<?php bloginfo('template_directory'); ?>/images/common/home.png" alt="">
      <button id="js-drawer-button" class="drawer-button">
        <span class="drawer-border"></span>
        <span class="drawer-border"></span>
        <span class="drawer-border"></span>
      </button>
      <i class="fab fa-instagram icon__instagram"></i>
    </div>
  </header>
  <section id="js-drawer-menu" class="drawer-menu">
    <div class="drawer-menu__pc">
      <nav class="drawer-nav">
        <li class="nav-list"><a class="nav-link" href="<?php bloginfo('url'); ?>/about">弊社について</a></li>
        <li class="nav-list"><a class="nav-link" href="<?php bloginfo('url'); ?>/strength">弊社の強み</a></li>
        <li class="nav-list"><a class="nav-link" href="<?php bloginfo('url'); ?>/business">事業内容</a></li>
        <li class="nav-list"><a class="nav-link" href="<?php bloginfo('url'); ?>/news">News</a></li>
        <li class="nav-list"><a class="nav-link" href="<?php bloginfo('url'); ?>/traction">実績一覧</a></li>
        <li class="nav-list"><a class="nav-link" href="<?php bloginfo('url'); ?>/contact">お問い合せ</a></li>
        <div class="nav-icon__box">
          <i class="fab fa-instagram nav-icon"></i>
        </div>
      </nav>
      <div class="drawer-right">
        <img class="drawer-bg-img" src="<?php bloginfo('template_directory'); ?>/images/common/hamburger-bg.png" alt="鋼製技研">
      </div>
    </div>
    <div class="drawer-menu__sp">
      <div class="drawer-sp__inner">
        <nav class="drawer-nav-sp">
          <li class="nav-list-sp"><a class="nav-link" href="<?php bloginfo('url'); ?>/about">弊社について</a></li>
          <li class="nav-list-sp"><a class="nav-link" href="<?php bloginfo('url'); ?>/strength">弊社の強み</a></li>
          <li class="nav-list-sp"><a class="nav-link" href="<?php bloginfo('url'); ?>/business">事業内容</a></li>
          <li class="nav-list-sp"><a class="nav-link" href="<?php bloginfo('url'); ?>/news">News</a></li>
          <li class="nav-list-sp"><a class="nav-link" href="<?php bloginfo('url'); ?>/traction">実績一覧</a></li>
          <li class="nav-list-sp"><a class="nav-link" href="<?php bloginfo('url'); ?>/contact">お問い合せ</a></li>
        </nav>
      </div>
    </div>
  </section>
