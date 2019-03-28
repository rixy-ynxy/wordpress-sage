  <footer class="content-info">
    <div class="container">
      <section id="footerAds">
        <div class="row text-center">
          @include('partials.sidebar-footerads')
        </div>
      </section>
      <section id="footer-menu">
        <div class="row">
          @include('partials.sidebar-footer')
        </div>
      </section>
      <div id="footer-nav">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu([
            'menu'            => 'ナビゲーションバー',
            'theme_location'  => 'footer_navigation',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'menu_id'         => false,
            'menu_class'      => 'nav justify-content-center',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
          ]) !!}
        @endif
      </div>
      <p class="text-center small">
          &copy;2018
          @if (date("Y")!=2018)
            @php echo date("-Y"); @endphp
          @endif
          |
          @php bloginfo('name') @endphp
      </p>
    </div>
  </footer>
