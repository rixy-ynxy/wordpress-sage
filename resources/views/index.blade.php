@extends('layouts.app')

@section('content')
  @include('partials.page-header')

<div class="row">
  <div class="col-md-8">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
    <div class="column row">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile
    @include('partials.pagination')
    </div>
  </div>
  <div class="col-md-4">
    @php dynamic_sidebar('sidebar-primary') @endphp
  </div>

</div>
@endsection
