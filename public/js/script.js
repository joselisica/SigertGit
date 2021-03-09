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

    $('.btn-sigert').click(function(){

      $("html,body").animate(
        {
          scrollTop: $("#home-formular").offset().top
        },
        "slow"
      );
      
    });

  //made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
  this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
  this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
  delta = this.period;
  this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
  this.isDeleting = false;
  this.loopNum++;
  delta = 500;
  }

  setTimeout(function() {
  that.tick();
  }, delta);
};

function typeWriterTypo() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #002D62}";
  document.body.appendChild(css);
};

typeWriterTypo();



// ########


    // $('#exampleModalCenter').modal('show');

    // function loop() {

      // new TypeIt("#headerWriter", {
      //   speed: 100,
      //   waitUntilVisible: false,
      //   loop: true,
        
      // })
      // .type("Wandplaner", {delay: 1000})
      // .move(-6, {speed: 100, delay: 100})
      // .delete(4)
      // .type('Tisch', {delay: 1000})
      // .delete(5)
      // .type('Pocket')
      // .go();    
  // }
  // loop();

  
  });


  
