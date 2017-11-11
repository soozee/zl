@php ($image = get_sub_field('only-image'))
@if( $image )
    {!! wp_get_attachment_image( $image, 'large') !!}
@endif
