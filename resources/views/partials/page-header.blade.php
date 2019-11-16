<div class="page-header">
  @if (is_front_page())
  @else
    <h1>{!! App::title() !!}</h1>
  @endif
  @if (is_category())
    @php
    $category = get_the_category();
    $category = $category[0];
    echo '<p class="cat">' . $category->category_description . '</p>';
    @endphp
  @endif

    
</div>
