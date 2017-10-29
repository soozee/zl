@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
<div class="grid-x small-up-2 medium-up-3 large-up-4 grid">
  @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())
  @endwhile
</div>
  {!! get_the_posts_navigation() !!}
@endsection
