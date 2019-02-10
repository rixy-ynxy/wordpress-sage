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

  <section id="diversity">
    @php dynamic_sidebar('sidebar-frontup') @endphp
    @include('partials.cat-box')
  </section>

  <section id="problem-solving">
    @php dynamic_sidebar('sidebar-frontdown') @endphp
    @if (!$category_loop->have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
    @while($category_loop->have_posts()) @php($category_loop->the_post())
      @include('partials.content-list')
    @endwhile
    @php(wp_reset_postdata())
    @include('partials.pagination')
  </section>
@endsection
