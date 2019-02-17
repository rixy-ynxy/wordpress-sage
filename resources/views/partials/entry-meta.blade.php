<div class="author-box">
<p class="ibyline author vcard">
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    @php echo get_avatar(get_the_author_meta('ID'), 50) @endphp
  </a>
</p>
<div class="metaBox">
  @if ( !is_post_type_archive('members'))
    <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  @else
  @endif
  <span class="posts-cat">@php the_category(' / ') @endphp</span>
  @if (  !is_front_page() || !is_home() )
    @php the_tags( '<ul class="entry-tag"><li>', '</li><li>', '</li></ul>') @endphp
  @endif
</div>
</div>
