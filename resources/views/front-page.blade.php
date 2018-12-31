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
  @include('partials.page-header')
  <div class="row">
  @while($quest_loop->have_posts()) @php($quest_loop->the_post())
    @include('partials.content-'.get_post_type())
  @endwhile
  @php(wp_reset_postdata())
  </div>


  {!! get_the_posts_navigation() !!}
@endsection
