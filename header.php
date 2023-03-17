<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bear's Valley</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nail.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/handmade.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loading.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/scroll.css">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Mrs+Saint+Delafield&family=Noto+Sans+JP:wght@400;500;700&family=Tangerine:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://kit.fontawesome.com/cb1c1fffdd.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/cb1c1fffdd.js" crossorigin="anonymous"></script>

  <!-- loading -->
  <link href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css" rel="stylesheet">
  <!--mv用-->
  <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/4-1/css/reset.css">
  <!-- scroll用 -->
  <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

  <!-- animate -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>
  <!--loading画面-->

  <div class="after-loading">
    <header class="header">
      <h1 class="header__logo ">
        <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Bear'sValley logo"></a>
      </h1>

      <!-- TopPageのみ非表示 -->
      <?php if ( !is_home() && !is_front_page() ) : ?>
      <nav class="header__nav ly-cont">
        <!-- Screen 480px or less is top, 480px or more is left -->
        <ul class="header__nav__list">
          <li class="cursive"><a href="<?php echo home_url() ?>">Home</a></li>
          <li class="cursive"><a href="<?php echo home_url( '/nail/home/' ); ?>">Nail</a></li>
          <li class="cursive"><a href="<?php echo home_url( '/handmade/home/' ); ?>">Ribbon&Strap</a></li>
          <li class="ja"><a href="#contact">お問い合わせ</a></li>
        </ul>

        <!-- Screen 480px or less is bottom, 480px or more is right -->
        <ul class="header__nav__list">
          <li><a href="https://www.instagram.com/bear_valley_nail/" target=”_blank” rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_2F241B.png" alt=""></a></li>
          <li><a href="https://www.tiktok.com/@aco_bear_valley" target=”_blank” rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/TikTok_2F241B.png" alt=""></a></li>
        </ul>
      </nav>
      <?php endif; ?>
    </header>
