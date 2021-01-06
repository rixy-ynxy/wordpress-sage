@extends('layouts.front-app')

@section('content')
  
  <div class="col-md-8">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp  
      @include('partials.content-'.get_post_type())
    @endwhile
  </div>
  
  <div class="col-md-4">
    @php dynamic_sidebar('sidebar-primary') @endphp
  </div>

@endsection
