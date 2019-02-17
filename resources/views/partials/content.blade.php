<article @php post_class('archiveList') @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    <div class="entry-summary">
      @include('partials/entry-meta')
    </div>
  </header>

</article>
