@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-single')
    @endwhile
  </div>
  <div class="col-md-4">
    @php dynamic_sidebar('sidebar-primary') @endphp
  </div>
</div>
@endsection
