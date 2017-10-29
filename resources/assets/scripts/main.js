// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import stickyNav from './util/stickyNav';
import 'masonry-layout';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  stickyNav.init();

  // $('.masonry').masonry();
});

$(window).load(function(){
  $('.masonry').masonry({
    itemSelector: '.cell',
  });
});
