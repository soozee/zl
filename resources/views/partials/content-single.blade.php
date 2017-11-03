<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    <div class="grid-x">
      @php($images = get_field('image_gallery'))
      <div class="cell {{ $images ? 'large-8' : '' }}">
        @php(the_content())
      </div>

      @if ($images)
        @php($size = 'large')
        <div class="cell large-4">
          @foreach ($images as $image)
            {!! wp_get_attachment_image( $image['ID'], $size ) !!}
          @endforeach
        </div>
      @endif
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  {{-- @php(comments_template('/partials/comments.blade.php')) --}}
</article>
