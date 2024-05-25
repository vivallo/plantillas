//menu primcipal
$(function(){
        $('a.marca').smoothScroll({
          offset: -66,		  
		  scrollTarget: $(this).val()
	   });
       
       // Waypoints
       $('.seccion-pag').waypoint(  
        function(direction) {
          if (direction ==='down') {            
            var wayID = $(this).attr('id');            
          } else {
            var previous = $(this).prev();
            var wayID = $(previous).attr('id');                    
          }
          $('.activo').removeClass('activo');
          $('#men-sec a[href=#'+wayID+']').addClass('activo');
        }, { offset: '40%' });
       
       
       
       /// StickNav  
       var stickyNavTop = $('.menu').offset().top;  
  
        var stickyNav = function(){  
        var scrollTop = $(window).scrollTop();  
       
        if (scrollTop > stickyNavTop) {   
            $('.menu').addClass('fixed-top menu-b sombra');
            $('body').css({'margin-top':'78px'});  
        } else {  
            $('.menu').removeClass('fixed-top menu-b sombra');
            $('body').css({'margin-top': '0px'});
        }  
    };       
    stickyNav(); 
       $(window).scroll(function() {
            stickyNav();  
        });
  
// popover de seccion servicios  
  $('[data-toggle="popoverServicios"]').popover({
    container: 'body',
    placement:'top',
    trigger: 'hover',
    template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
  });
  
  
//collapse de la seccion de somos  
  $('.colapsar').click(function(){
    $('nav').toggleClass('menu-des');
  });  

  
//slide de clientes
  $('#cClientes').bxSlider({
      pager: false,
      minSlides: 4,
      maxSlides: 4,
      moveSlides: 1,
      prevSelector: $('.prev'),
      nextSelector: $('.post'),
      prevText: '<i class="icon-cyr-flecha-izq"></i>',
      nextText: '<i class="icon-cyr-flecha-der"></i>',
      infiniteLoop: false,
  });

  
  
//  parallax de contacto
  $('.contactoParallax, [data-paroller-factor]').paroller({
    factor:0.5,
    factorXs:0.2,
    type:'background'
  });
  
// cargando efecto shuffleLetters a los textos con waypoint 
  var textosUno = $('#txtEfecto1, #txtEfecto2, #txtEfecto3' );
  var textosDos = $('#txtEfecto4, #txtEfecto5, #txtEfecto6, #txtEfecto7' );  
  
  $('.ubicar').waypoint(function(){
    textosUno.shuffleLetters();
  }, { offset: '0%', triggerOnce: true });
  
  $('.buscanos').waypoint(function(){
    textosDos.shuffleLetters();
  }, { offset: '100%', triggerOnce: true } );

  
});

// iniciando efectos WOW
new WOW().init();
