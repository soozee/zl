@php ($currentPost = get_sub_field('page_link_title'))
<a href="{{ get_permalink($currentPost->ID) }}">
    <h3>{{ get_the_title($currentPost->ID) }}</h3>
    @php ($image = get_sub_field('cell_image'))
    @if( $image )
        {!! wp_get_attachment_image( $image, 'large') !!}
    @endif
</a>
