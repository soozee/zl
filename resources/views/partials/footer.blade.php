<footer>
  <div class="grid-x grid-margin-x">
    <div class="large-6 cell">{!! wp_nav_menu(['theme_location' => 'footer_menu']) !!}</div>
    <div class="auto cell footer-right">{!! do_shortcode('[social-icons]') !!}</div>
  </div>
  <p class="copyright"><i class="fa fa-copyright fa-1x" aria-hidden="true"></i> Copyright Zoelaz {{ date('Y')}} | <a href="mailto:suziecampbell.dev@gmail.com">Site by Suz</a></p>
</footer>
