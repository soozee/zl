@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="grid-x grid-margin-x">
  <div class="medium-6 large-4 cell">{!! the_post_thumbnail() !!}</div>
  <div class="medium-6 large-8 cell">{!! the_content() !!}</div>
</div>
  @endwhile
@endsection
