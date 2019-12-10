@extends('layouts.front-app')

@section('content')
  @include('partials.page-header')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp  
    @include('partials.content-'.get_post_type())
  @endwhile

  <section class="w-50 mx-auto my-5">
    @php dynamic_sidebar('frontup') @endphp
  </section>

  <section class="w-50 mx-auto my-5">
    @php dynamic_sidebar('frontdown') @endphp
  </section>


@endsection
