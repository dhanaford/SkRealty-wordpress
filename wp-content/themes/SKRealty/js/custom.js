$(document).ready(function() {
	//scroll effect for navigation
	var menu = $('#nav'),
		pos = menu.offset();
		
		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+menu.height() && menu.hasClass('default')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('default').addClass('fixed').fadeIn('fast');
				});
			} else if($(this).scrollTop() <= pos.top && menu.hasClass('fixed')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('fixed').addClass('default').fadeIn('fast');
				});
			}
		});

		$(document).ready(function() {
			$('nav div a').hover(function() {
				$(this).animate({color: '#279558'}, 150)
			});
			$('nav div a').mouseleave(function() {
				$('nav div a').animate({color: '#666666'}, 150)
			});
		});

	
		    
		$(document).ready(function() {
			$('nav div a').click(function() {
				$(this).addClass('active');
			});
			
		});


		$(document).ready(function() {
			$('#submit').hover(function() {
				$(this).fadeTo('fast', 0.85);
			});
			$('#submit').mouseleave(function() {
				$(this).fadeTo('fast', 1)
			});
		});


		

});



		

