$(document).ready(function () {

  if($(window).width() >= 1024){
    $.scrollify({
      section : ".section",
    });
  }
    

    if ($(".errorScroll")[0]) {
      $("html,body").animate(
        {
          scrollTop: $("#formular").offset().top
        },
        "slow"
      );
    }

    new TypeIt("#headerWriter", {
      speed: 100,
      waitUntilVisible: false,
      
    }).type("Wandplaner", {delay: 1000})
    .move(-6, {speed: 100, delay: 100})
    .delete(4)
    .type('Tisch')
    .move('END', {delay: 1000})
    .move(-6, {speed: 25, delay: 300})
    .delete(5)
    .type('Pocket', {delay: 250})
    .move('END', {delay: 500})
    .type('!!!')
    .go();

    $('#bigImg').desoSlide({
      
      thumbs: $('#my_thumbs')
      // etc.
  });

    $('.btn-sigert').click(function(){
      $.scrollify({
        section : ".section",
      });
      $.scrollify.move("#6");
      
    });

    // $('#exampleModalCenter').modal('show');

  
  });
