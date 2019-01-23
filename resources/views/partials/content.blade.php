<article @php post_class('archive') @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    
  </header>
  <div class="entry-summary">
    @include('partials/entry-meta')
  </div>
</article>
