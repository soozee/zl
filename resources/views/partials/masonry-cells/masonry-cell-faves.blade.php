<a href="{{ the_sub_field('page_link_title')}}">
    <h3>{{ the_sub_field('faves_text') }}</h3>
    @php ($image = get_sub_field('cell_image'))
    @if( $image )
        {!! wp_get_attachment_image( $image, 'large') !!}
    @endif
</a>
