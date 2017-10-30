
<div class="masonry grid-x small-up-2 medium-up-3 grid">
  @if (have_rows('masonry_options', 'option'))
    @while( have_rows('masonry_options', 'option'))
      @php(the_row())
      <div class="cell">
        @php ($fieldType = get_sub_field('cell_type'))
        @include('partials.masonry-cells.masonry-cell-'.$fieldType)
      </div>
    @endwhile
  @endif
</div>
