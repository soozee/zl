<a href="{{ the_sub_field('page_link_title')}}">
    <h3>this one</h3>
    @php ($image = get_sub_field('cell_image'))
    @if( $image )
        {!! wp_get_attachment_image( $image, 'medium') !!}
    @endif
</a>
