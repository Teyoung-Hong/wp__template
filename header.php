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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/_reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/_top.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/_about.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/_single.css">

  <!-- fontawesome -->
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <!-- ▼　js　-->

  <!-- ▼　ファビコン　-->


  <!-- ▼　サイトタイトル　-->
  <title><!-- タイトル --></title>

  <?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=""></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130548866-4');
</script>

</head>
<body <?php body_class(); ?>>
  <!-- ヘッダー -->
  <header>
    <div class="header clearfix">
      <!-- ヘッダーを中身 -->
    </div>
  </header>