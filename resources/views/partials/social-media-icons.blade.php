@if( have_rows('social_media_accounts', 'option'))
     @while( have_rows('social_media_accounts', 'option') )
        @php (the_row() )
        @if (get_sub_field('facebook_url'))
            <a href="{{ the_sub_field('facebook_url') }}">
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            </a>
         @endif
         @if (get_sub_field('twitter_url'))
              <a href="{{ the_sub_field('twitter_url') }}">
                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
              </a>
          @endif
          @if (get_sub_field('instagram_url'))
              <a href="{{ the_sub_field('instagram_url') }}">
                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </a>
          @endif
     @endwhile
 @endif
