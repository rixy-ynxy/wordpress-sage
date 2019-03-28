<?php
/*
Template Name: Woocommerce
*/
?>


<div class="container">
<?php get_header('shop'); ?>

  <?php woocommerce_breadcrumb(); ?>
  <article>
    <div id="the-content" class="entry-content">
      <?php woocommerce_content(); ?>
    </div>
  </article><!-- .article -->

<?php get_footer(); ?>
</div>
