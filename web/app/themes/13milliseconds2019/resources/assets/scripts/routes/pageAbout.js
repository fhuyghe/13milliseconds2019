export default {
  init() {
    // JavaScript to be fired on the about us page
    console.log('JS init');
    $('.sharon, .francois').hover(function () {
      let classes = $(this).attr('class');
      $('.photos .' + classes).addClass('active');
    }, function () { 
      $('.photos img').removeClass('active');
    });
  },
};
