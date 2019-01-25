<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <nav class="nav-primary">
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
		<div>
			<p>&copy;2018<?php if (date("Y")!=2018) echo date("-Y");?> RemoCA.media</p>
		</div>
  </div>
</footer>
