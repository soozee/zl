@php ($image = get_sub_field('plain_image'))
@if( $image )
    {!! wp_get_attachment_image( $image, 'large') !!}
@endif
