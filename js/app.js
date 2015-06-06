// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

(function () {
  
//  $('.stats-books .stat-num').each(function() {
//    numToAnimate = $(this).text();
//    console.log("numToAnimate: " + numToAnimate);
//    
//    thisStat = $(this);
//    
//    $({countNum: 0}).animate({countNum: thisStat.text()}, {
//      duration: 4000,
//      easing:'linear',
//      step: function() {
//        thisStat.text(Math.floor(this.countNum));
//        console.log("doing the count");
//      },
//      complete: function() {
//        thisStat.text(this.countNum);
//        console.log('finished');
//      }
//    });
//    
//  });

//  $('.stat-num').each(function () {
//    var $this = $(this);
//    jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
//      duration: 5000,
//      easing: 'swing',
//      step: function () {
//        $this.text(Math.ceil(this.Counter));
//      }
//    });
//  });
  
//  $('.stat-num').each(function() {
//    numToAnimate = $(this).text();
//    console.log("numToAnimate: " + numToAnimate);
//  });
//  
//  
//  $({countNum: 0}).animate({countNum: $('.stat-num').text()}, {
//    duration: 4000,
//    easing:'linear',
//    step: function() {
//      $('.stat-num').text(Math.floor(this.countNum));
//      console.log("doing the count");
//    },
//    complete: function() {
//      $('.stat-num').text(this.countNum);
//      console.log('finished');
//    }
//  });

  
  
  
  
})();

var hasScrolled = false;

$(window).scroll(function() {

  var visible = $('.stats-block ul').visible( true );
  
  if (visible && !hasScrolled) {
    
    hasScrolled = true;
    
    $('.stat-num').each(function () {
      var $this = $(this);
      jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: 4000,
        easing: 'swing',
        step: function () {
          $this.text(Math.ceil(this.Counter));
        }
      });
    });
    
  }
  
});




// this piece of code enables the extra details of the work section on the homepage to slide down into view on hover, and slide back up when focus has moved on
    
$('.work-block-list__item').hover(
    function(){ $(this).find(".js-hover-slide-down").slideToggle(250); },
    function(){ $(this).find(".js-hover-slide-down").slideToggle(250); }
);

// END WORK HOVER SLIDE