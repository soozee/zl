
<div class="masonry grid-x small-up-2 medium-up-3 large-up-4 grid">
  @if( have_rows('quote', 'option') )
    <div class="cell">
      @while( have_rows('quote', 'option') )
          @php(the_row())
          <blockquote>
              {{ the_sub_field('quote_body') }}
              <cite>{{ the_sub_field('quote_author') }}</cite>
          </blockquote>
      @endwhile
      blog
      title of most recent blog post.
      most recent IG pic (link to IG)
      Shop link with one picture
      About page link.
      Faves.
      <img src="http://localhost:3004/wp-content/uploads/2017/10/zoe.jpg">
    </div>
  @endif
  <div class="cell">
    Blog
    <img src="http://localhost:3004/wp-content/uploads/2017/10/zoe.jpg">
  </div>
  <div class="cell">
    <img src="http://localhost:3004/wp-content/uploads/2017/10/zoe.jpg">
    Blog
  </div>
  <div class="cell">
    <img src="http://localhost:3004/wp-content/uploads/2017/10/zoe.jpg">
    Blog
  </div>
  <div class="cell">
    <img src="http://localhost:3004/wp-content/uploads/2017/10/zoe.jpg">
    Blog
    Blog
    Blog
    Blog
    Blog
    Blog
    <p>Blog</p>
  </div>
  <div class="cell">
    <img src="http://localhost:3004/wp-content/uploads/2017/10/zoe.jpg">
    Blog
  </div>
</div>
