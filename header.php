<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="WP最終課題">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo2.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700&family=Poppins:wght@100;300;400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <title>WP最終課題</title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="header">
    <h1 class="header__logo"><a href="<?php echo esc_url(home_url('#')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a></h1>
    <nav>
      <ul class="nav__ul">
        <li class="nav__ul-li"><a href="<?php echo esc_url(home_url('operation')); ?>">運営元について</a></li>
        <li class="nav__ul-li"><a href="<?php echo esc_url(home_url('articleList')); ?>">ブログについて</a></li>
        <li class="nav__ul-li"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>
  <!-- /header -->

  <!-- sp__menu -->
  <button class="sp__btn">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
  </button>

  <div class="sp__menu">
    <div class="sp__menu-wrap">
      <h2 class="sp__menu-title">カテゴリー</h2>
      <ul class="sp__menu-ul">
        <a href="<?php echo esc_url(get_category_link(6)); ?>">
          <li class="sp__menu-li">カテゴリー1</li>
        </a>
        <a href="<?php echo esc_url(get_category_link(7)); ?>">
          <li class="sp__menu-li">カテゴリー2</li>
        </a>
        <a href="<?php echo esc_url(get_category_link(8)); ?>">
          <li class="sp__menu-li">カテゴリー3</li>
        </a>
        <a href="<?php echo esc_url(get_category_link(9)); ?>">
          <li class="sp__menu-li">カテゴリー4</li>
        </a>
        <a href="<?php echo esc_url(get_category_link(10)); ?>">
          <li class="sp__menu-li">カテゴリー5</li>
        </a>
        <a href="<?php echo esc_url(get_category_link(11)); ?>">
          <li class="sp__menu-li">カテゴリー6</li>
        </a>
      </ul>
    </div>

    <div class="sp__menu-wrap">
      <h2 class="sp__menu-title">その他</h2>
      <ul class="sp__menu-ul others__ul">
        <a href="<?php echo esc_url(home_url('operation')); ?>">
          <li class="sp__menu-li">運営元について</li>
        </a>
        <a href="<?php echo esc_url(home_url('articleList')); ?>">
          <li class="sp__menu-li">ブログについて</li>
        </a>
        <a href="<?php echo esc_url(home_url('contact')); ?>">
          <li class="sp__menu-li">お問い合わせ</li>
        </a>
      </ul>
    </div>
  </div>
  <!-- /sp__menu -->