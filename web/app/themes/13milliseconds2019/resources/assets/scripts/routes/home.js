import 'masonry-layout/dist/masonry.pkgd';
import 'imagesloaded/imagesloaded.pkgd';

export default {
  init() {
    // JavaScript to be fired on the home page

    $('.tag').click(function () { 
      let tag = $(this).data('slug');
      $('.portfolio-item').hide();
      $('.portfolio-item.' + tag).show();
    })

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    var $grid = $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
    });

    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry('layout');
    });
  },
};