jQuery(function ($) {
  $(document).ready(function(){
      $('.pp-mobile-button').click(function(event){
          event.stopPropagation();
           $(".nav").slideToggle("fast");
      });
      $(".nav").on("click", function (event) {
          event.stopPropagation();
      });
  });
    $(document).on("click", function () {
      if($(window).width() <= 768) {
          $(".nav").hide();
      }
  });
});
