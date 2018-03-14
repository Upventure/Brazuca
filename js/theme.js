  // toggle function
  $(document).ready(function(){
    jQuery(".hamburger").click(function(){
    jQuery("nav ul, .menu-item-407").slideToggle(800);
    $(".menu-item-409").css("display", "none");
        });
    });

    $(document).ready(function(){
      jQuery(".logo").click(function(){
      jQuery("nav ul, .menu-item-407").slideToggle(800);
      $(".menu-item-409").css("display", "none");
          });
      });






  // varander kleur menu
  $(window).scroll(function() {
    if ($(document).scrollTop() > 120){
      $('nav').addClass('verandering')
      $('nav.fixed').addClass('verandering-2')
      $('.tussen-logo').addClass('verandering-1')
  }
    else {
    $('nav').removeClass('verandering');
    $('nav').removeClass('verandering-2');
    $('.tussen-logo').removeClass('verandering-1');
    }
  });

  // scrollfunction
  $(document).ready(function(){

    var windowHeight              = jQuery(window).height();
    var scrollFunctionPosTop      = jQuery(window).scrollTop();
    var scrollFunctionPosBotttom  = windowHeight + scrollFunctionPosTop;


    jQuery.fn.revealOnScroll = function(direction, speed){
    return this.each(function()  {

           var objectOffset    = jQuery(this).offset();
           var objectOffsetTop = objectOffset.top;

           if(!jQuery(this).hasClass('hidden')){

           if(direction === 'right'){
           jQuery(this).css({
           'opacity' : 0,
          //  'background-color' : 'rgb(236, 195, 197)',
           'right' : '700px'
           });
           } else {
             jQuery(this).css({
             'opacity' : 0,
            // 'background-color' : 'rgb(159, 155, 228)',
             'right' : '-700px'
             });
           }
           jQuery(this).addClass('hidden');
        }

          if
          (!jQuery(this).hasClass('animation-complete'))
          {
          if (scrollFunctionPosBotttom  > objectOffsetTop){
          jQuery(this).animate({'opacity': 1, 'right':0}, speed).addClass('animation-complete');

          }
      }

    });
    }
  // end function
    jQuery(window).scroll(function(){
       alert(scrollFunction + " " +"pixels");
        windowHeight              = jQuery(window).height();
        scrollFunctionPosTop      = jQuery(window).scrollTop();
        scrollFunctionPosBotttom  = windowHeight + scrollFunctionPosTop;

        jQuery('.jquery-div-2').revealOnScroll('right', 1000);
        jQuery('.jquery-div-1').revealOnScroll('left',  4000);

    });

  });
