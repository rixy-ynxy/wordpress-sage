<footer class="content-info">
  <div class="container">
    <section id="footerAds">
      <div class="row">
      @include('partials.sidebar-footer')
      </div>

			<div class="card-deck">
				<div class="card" style="width: 18rem;">
  				<a href="#" class="text-decoration-none">
						<img class="card-img-top" src="http://remocamedia.local/wp-content/uploads/2019/01/RemoCA-300x300.png" alt="カードの画像">
  						<div class="card-body">
    						<p class="card-text">カードのタイトルに基づいて、カードのコンテンツの大部分を占める簡単なサンプルテキスト。</p>
  						</div>
					</a>
				</div>
				<div class="card" style="width: 18rem;">
					<a href="#" class="text-decoration-none">
  					<img class="card-img-top" src="http://remocamedia.local/wp-content/uploads/2019/01/RemoCA-300x300.png" alt="カードの画像">
  						<div class="card-body">
    						<p class="card-text">カードのタイトルに基づいて、カードのコンテンツの大部分を占める簡単なサンプルテキスト。</p>
  						</div>
					</a>
				</div>
				<div class="card" style="width: 18rem;">
					<a href="#" class="text-decoration-none">
  					<img class="card-img-top" src="http://remocamedia.local/wp-content/uploads/2019/01/RemoCA-300x300.png" alt="カードの画像">
  						<div class="card-body">
    						<p class="card-text">カードのタイトルに基づいて、カードのコンテンツの大部分を占める簡単なサンプルテキスト。</p>
  						</div>
					</a>
				</div>
			</div>
    </section>

    <nav class="navbar navbar-expand-md navbar-light bg-faded">
      @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu([
					'menu'            => 'ナビゲーションバー',
					'theme_location'  => 'footer_navigation',
					'container'       => 'div',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]) !!}
      @endif
    </nav>
		<div>
			<p class="text-center small">
				&copy;2018
        @if (date("Y")!=2018)
          @php echo date("-Y"); @endphp
        @endif
         |
        @php bloginfo('name') @endphp</p>
		</div>
  </div>
</footer>
