$(function(){

	$('a').smoothScroll();

	console.log("It's working");

	//menu toggle on mobile 
  $('#mobileMenu').on('click', function() {

  	if($('.menuRegular').hasClass('showMenu')) {
  		$('.menuRegular').fadeOut(100, function() {
  			$('.menuRegular').removeClass('showMenu');
  		});
  	} else {
  		$('.menuRegular').fadeIn(100, function(){
  			$('.menuRegular').addClass('showMenu');
  		});
  	}
   
   if($(this).html() === '<a href="#">Close Menu</a>') {
    $(this).html('<a href="#">Menu</a>');
  
   } else {
   	$(this).html('<a href="#">Close Menu</a>');
   }

  });

 //  function checkWidth() {
 //  var windowSize = $(window).width();

 //  if(windowSize <= 650) {
 //    $(window).scroll(function(){
	//     	if($(window).scrollTop() > 300) {
	//     		$('.showMenu').fadeOut(300, function(){
	//   	  		$('.showMenu').toggleClass('menuRegular');
	//     		});
	  	  	
	//   	  	$('#mobileMenu').html('<a href="#">Menu</a>');
	//     	}
 //    	}
 //  	);
 //  }
 // }

 // checkWidth();

  $('#menu-primary-menu li').on('click', function(){
    $('.menufixed').toggleClass('showMenu');
    $('#mobileMenu').html('<a href="#">Menu</a>');
  });

});
