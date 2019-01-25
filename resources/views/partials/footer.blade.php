<footer class="content-info">
  <div class="container">
    <section id="footerAds">
      <div class="row">
      @include('partials.sidebar-footer')
      </div>
    </section>
    
    <nav class="nav-primary">
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
		<div>
			<p>&copy;2018
        @if (date("Y")!=2018)
          @php echo date("-Y"); @endphp
        @endif
         | 
        @php bloginfo('name') @endphp</p>
		</div>
  </div>
</footer>
