export default {
  init() {
    // JavaScript to be fired on the home page

    $('.tag').click(function () { 
      console.log(this);
      let tag = $(this).data('slug');
      $('.portfolio-item').hide();
      $('.portfolio-item.' + tag).show();
    })

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};