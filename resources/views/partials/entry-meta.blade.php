<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<div class="posts-cat">
  @php the_category(' / ') @endphp
</div>
@if ( !is_post_type_archive('members'))
<p class="ibyline author vcard">
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
@else
@endif
