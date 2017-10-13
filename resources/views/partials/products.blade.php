@php($query = new WP_Query([
  'post_type' => 'product'
]))

@if ($query->have_posts())

  <div class="grid-x small-up-2 medium-up-3 large-up-4 grid">

    @while ( $query->have_posts() )

      @php($query->the_post())

      @include('partials.product')

    @endwhile

  </div>
@else
    Nothing is here.
@endif

@php(wp_reset_postdata())
