<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="utf-8">
  <meta name="description" content="ハンバーガーショップのホームページです。">
  <!-- viewportの指定 -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="p-bar"><button class="c-button-open">Menu</button></div>
  </header>
  <div class="l-content">
    <div class="l-content__main">
      <div class="l-header">
        <div class="l-header__wrap">
          <!-- フロントではサイトタイトルをh1、他ではpとする分岐 -->
          <?php
          if(is_front_page()){ ?>
          <h1 class="l-header__title"><a
              href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
          </h1>
          <?php }else{ ?>
          <p class="l-header__title"><a
              href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
          </p>
          <?php } ?>
          <?php get_search_form(); ?>
        </div>
      </div>