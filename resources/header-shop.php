<!doctype html>
<html <?php get_language_attributes() ;?>>
  <?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- OGP 個別ページ　アイキャッチ画像 -->
    <?php if( is_single() || is_page() ): ?>
    <?php setup_postdata($post) ?>
      <meta property="og:type" content="article">
      <meta property="og:title" content="<?php the_title(); ?>">
      <meta property="og:url" content="<?php the_permalink(); ?>">
      <?php if( has_post_thumbnail() ): ?>
        <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
        <meta property="og:image" content="<?php echo $postthumb[0]; ?>">
      <?php endif; ?>
    <?php endif; ?>
    <?php wp_head() ;?>
  </head>
<body <?php body_class() ;?>>
<header class="banner">
  <div class="container">
    <?php the_custom_logo() ;?>
    <nav class="navbar navbar-expand-md navbar-light bg-faded">
      <!-- <span class="navbar-brand mb-0 h1">RemoCA</span> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <?php if (has_nav_menu('primary_navigation')){
      	wp_nav_menu([
          'menu'            => 'ナビゲーションバー',
          'theme_location' => 'primary_navigation',
          'container'       => 'div',
          'container_id'    => 'bs4navbar',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav mr-auto',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);
      }
      ;?>
    </nav>
  </div>
</header>
