@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    <div class="entry-tag">
      @php the_tags() @endphp
    </div>
    {!! get_search_form(false) !!}
  @endif
  <div class="column">
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
  </div>

  @include('partials.pagination')

@endsection
