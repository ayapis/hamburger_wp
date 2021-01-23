<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="utf-8">
  <meta name="description" content="ハンバーガーショップのホームページです。">

  <!-- viewportの指定 -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- GoogleFontsの読み込み（内容は適宜変更） -->


  <!-- CSSの読み込み（slickは不要な場合もある） -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- jQueryの読み込み（不要な場合もある） -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <div class="l-content">
    <div class="l-content__main">
      <header class="l-header">
        <div class="l-header__wrap">
          <h1 class="l-header__title"><a href="#"><?php bloginfo( 'name' ); ?></a></h1>
          <?php get_search_form(); ?>
        </div>
      </header>