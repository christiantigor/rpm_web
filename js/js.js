$(function() {

	
    var lastScrollTop = 0;
	$(window).bind('scroll', function() {

		if ($(window).width()>1024 && $(window).scrollTop() > 100) 
		{

			var st = $(this).scrollTop();
		    if (st < lastScrollTop){
			   var menu = $("header .content-box").html();

			   $(".float-menu .list-menu").html(menu);
			   $(".float-menu").slideDown();
		    } else {
				$(".float-menu").slideUp();
				$(".float-menu .list-menu").html("");	
			}
		    lastScrollTop = st;

		} 
		else 
		{

			$("header").removeClass('float-menu')

			$(".float-menu").slideUp();
			$(".float-menu .list-menu").html("");

		}

	});




	$(window).resize(function() {   

		if($(window).width() <= 1024)

		{

			 $('.menutop-title').show();

			 $('.menutop-title').css("display","inline-block");

			 $('.float-menu').hide();

			 $('UL.nav-top > li').css('display','block');

		}
		else if($(window).width() > 1024)
		{

			$('.menutop-title').hide();

			$('UL.nav-top').show();

			$('UL.nav-top').css('display','inline-table');

			$('UL.nav-top > li').css('display','table-cell');

		}

	});


	$(".menutop-title").click(function(){

		$(".nav-top").toggle();

	});


});