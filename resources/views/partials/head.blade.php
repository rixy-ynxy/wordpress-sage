<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5GPV993');</script>
  <!-- End Google Tag Manager -->  
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
  @php wp_head() @endphp
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8583945528952172",
            enable_page_level_ads: true
      });
  </script>
</head>
