<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @if (is_user_logged_in())
    
      @if (get_field('question')) 
        <h2>質問内容</h2>
        <p>{{ the_field('question') }}</p>
      @endif
      @if (get_field('goal'))
        <h2>ゴール地点</h2>
        <p>@php the_field('goal') @endphp</p>
      @endif
      @if (get_field('Investigate'))
        <h2>調べてみたこと</h2>
        <p>@php the_field('Investigate') @endphp</p>
      @endif
    @endif
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
