<header class="banner">
  <div class="container">
    @php the_custom_logo() @endphp
    <nav class="navbar navbar-expand-md navbar-light bg-faded">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
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
        ]) !!}
      @endif
    </nav>
  </div>
</header>
