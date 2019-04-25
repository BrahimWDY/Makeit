$(window).scroll(function(){
    var Hscroll = $(this).scrollTop();

    if( Hscroll > 100 ){
      $('nav, #topnav, .mlogo, .logo-search').addClass('fix-white');
    }
    else {
      $('nav, #topnav, .mlogo, .logo-search').removeClass('fix-white');
    }

    var opScroll = Hscroll / 300;

    $('.logo').css({ opacity : 1 - opScroll });
  });
