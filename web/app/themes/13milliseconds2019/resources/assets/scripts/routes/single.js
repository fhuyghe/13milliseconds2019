export default {
  init() {
    // JavaScript to be fired
    /* $(document).ready(function(){
      if ($('.websiteSpread')){
        $('.websiteSpread').each(function(){
          var spread = $('.content', this),
              topAnchor = spread.offset().top,
              spreadHeight = spread.innerHeight(),
              windowHeight = $(window).innerHeight(),
              bottomAnchor = topAnchor + spreadHeight;
  
          //Activate when scrolling
          $(window).scroll(function(){
            var scroll = $(window).scrollTop() + windowHeight;
  
            if (scroll > topAnchor && scroll < bottomAnchor){
              //we're moving baby
              var scrolled = (scroll - topAnchor) / spreadHeight * 100;
              console.log(scrolled);
              spread.scrollTop(spread.scrollTop + scrolled);
            }
          });
        });
      }
    }); */

  },
  finalize() {
    // JavaScript to be fired after the init JS
  },
};
