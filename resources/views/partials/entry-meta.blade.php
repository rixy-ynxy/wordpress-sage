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
