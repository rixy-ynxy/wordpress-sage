<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
    <section id="posted-area" class="my-5">
      @php dynamic_sidebar('posted-cts') @endphp
    </section>
    <aside class="related-posts">
      <h4>関連記事</h4>
      <ul>
      <?php if(has_category() ) {
        $cats =get_the_category();
        $catkwds = array();
        foreach($cats as $cat){
            $catkwds[] = $cat->term_id;
        }
      } ?>
      <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => '4',
          'post__not_in' =>array( $post->ID ),
          'category__in' => $catkwds,
          'orderby' => 'rand'
        );
      $my_query = new WP_Query( $args );?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <li><a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('small'); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no_images<?php echo(rand(1,9));?>.jpg" alt="no image">
            <?php endif; ?>
            <div class="text">
              <?php the_title(); ?>
            </div>
          </a></li>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      </ul>
    </aside>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>

