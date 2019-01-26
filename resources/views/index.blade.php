@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <div class="row">
  @while (have_posts()) @php the_post() @endphp  
    @include('partials.content-'.get_post_type())
  @endwhile
  </div>
  <!-- ページネーション -->
  <div class="pagination">
    @php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
    )) @endphp
  </div>
@endsection
