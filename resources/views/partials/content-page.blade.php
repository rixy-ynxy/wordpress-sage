<div class="{{ $front }}-content">
    @if (is_front_page())
       @php remove_filter('the_content', 'wpautop')@endphp
    @endif
    @php the_content() @endphp
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>

