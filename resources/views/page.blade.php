@extends('layouts.app')
<h1 class="page-title text-center">{{ get_the_title() }}</h1>

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
