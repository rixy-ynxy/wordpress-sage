<article @php post_class('archiveList') @endphp>
  @if ( !is_post_type_archive('members'))
  <p class="ibyline author vcard">
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      @php echo get_avatar(get_the_author_meta('ID'), 50) @endphp
    </a>
  </p>
  @else
  @endif
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    <div class="entry-summary">
      @include('partials/entry-meta')
      <div class="entry-tag">
        @php the_tags() @endphp
      </div>
    </div>
  </header>

</article>
