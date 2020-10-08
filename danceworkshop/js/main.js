(function ($) {
	"use strict";
	var nav = $('nav');
  var navHeight = nav.outerHeight();
  
  $('.navbar-toggler').on('click', function() {
    if( ! $('#mainNav').hasClass('navbar-reduce')) {
      $('#mainNav').addClass('navbar-reduce');
    }
  })

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

	/*--/ Star ScrollTop /--*/
	$('.scrolltop-mf').on("click", function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});

	/*--/ Star Counter /--*/
	$('.counter').counterUp({
		delay: 15,
		time: 2000
	});

	/*--/ Star Scrolling nav /--*/
	$('a.js-scroll[href*="#"]:not([href="#"])').on("click", function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - navHeight + 5)
				}, 1000, "easeInOutExpo");
				return false;
			}
		}
	});

	// Closes responsive menu when a scroll trigger link is clicked
	$('.js-scroll').on("click", function () {
		$('.navbar-collapse').collapse('hide');
	});

	// Activate scrollspy to add active class to navbar items on scroll
	$('body').scrollspy({
		target: '#mainNav',
		offset: navHeight
	});
	/*--/ End Scrolling nav /--*/

	/*--/ Navbar Menu Reduce /--*/
	$(window).trigger('scroll');
	$(window).on('scroll', function () {
		var pixels = 50; 
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-expand-md').addClass('navbar-reduce');
			$('.navbar-expand-md').removeClass('navbar-trans');
		} else {
			$('.navbar-expand-md').addClass('navbar-trans');
			$('.navbar-expand-md').removeClass('navbar-reduce');
		}
		if ($(window).scrollTop() > top) {
			$('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
		} else {
			$('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
		}
	});

	/*--/ Star Typed /--*/
	if ($('.text-slider').length == 1) {
    var typed_strings = $('.text-slider-items').text();
		var typed = new Typed('.text-slider', {
			strings: typed_strings.split(','),
			typeSpeed: 80,
			loop: true,
			backDelay: 1100,
			backSpeed: 30
		});
	}

	/*--/ Testimonials owl /--*/
	$('#testimonial-mf').owlCarousel({
		margin: 20,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			}
		}
	});
$("body").delegate(".pjoin","click",function(event){
	event.preventDefault();
	var wid=$(this).attr("wid");
	var tid=$(this).attr("tid");
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{pjoin1:1,did:did,tid:tid,wid:wid},
		success:function(data){
			alert(data)
		}
	})
})	
$("body").delegate(".cjoin","click",function(event){
	event.preventDefault();
	var wid=$(this).attr("wid");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{tjoin1:1,wid:wid},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc1","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance1:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc2","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance2:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc3","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance3:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc4","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance4:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc5","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance5:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc6","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance6:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc7","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance7:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc8","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance8:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})


$("body").delegate(".dnc11","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance11:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc21","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance21:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc31","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance31:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc41","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance41:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc51","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance51:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc61","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance61:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc71","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance71:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".dnc81","click",function(event){
	event.preventDefault();
	var did=$(this).attr("did");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{dance81:1,did:did},
		success:function(data){
			alert(data)
		}
	})
})
$("body").delegate(".cshow","click",function(event){
	event.preventDefault();
	$("#result").show();
	$("#searchresult").hide();
	$("#sresult").hide();
	$("#dstyle").hide();
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{cdetail:1},
		success:function(data){
		  $("#dresult").html(data);
		}
	})
})
$("body").delegate(".selected","click",function(event){
	event.preventDefault();
	$("#result").hide();
	$("#searchresult").hide();
	$("#dstyle").hide();
	$("#sresult").show();
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{selected1:1},
		success:function(data){
		  $("#selected2").html(data);
		}
	})
})
$("body").delegate(".select","click",function(event){
	event.preventDefault();
	var cid=$(this).attr("cid");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{cselect:1,cid:cid},
		success:function(data){
		 alert(data)
		}
	})
})
$("body").delegate(".cancle","click",function(event){
	event.preventDefault();
	var pid=$(this).attr("pid");
	$(".cancle").html("Cancled Logout")
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{cancle1:1,pid:pid},
		success:function(data){
		}
	})
})
$("body").delegate(".reject","click",function(event){
	event.preventDefault();
	var cid=$(this).attr("cid");
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{creject:1,cid:cid},
		success:function(data){
		 alert(data)
		}
	})
})
$("body").delegate(".submit","click",function(event){
	event.preventDefault();
	var did=$("#select").val();
	$("#searchresult").show();
	$("#sresult").hide();
	$("#result").hide();
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{submit1:1,did:did},
		success:function(data){
		 $("#submit2").html(data);
		}
	})
})
$("body").delegate(".psubmit","click",function(event){
	event.preventDefault();
	var did=$("#select").val();
	var bid=$("#date").val();
	$("#psearchresult").show();
	$("#presult").hide();
	$("#pdstyle").hide();
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{psubmit1:1,did:did,bid:bid},
		success:function(data){
		 $("#psubmit2").html(data);
		}
	})
})
$("body").delegate(".preg","click",function(event){
	event.preventDefault();
	$("#psearchresult").hide();
	$("#presult").show();
	$("#pdstyle").hide();
	$("#ptresult").hide();
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{preg1:1},
		success:function(data){
		 $("#psresult").html(data);
		}
	})
})
$("body").delegate(".tpreg","click",function(event){
	event.preventDefault();
	$("#psearchresult").hide();
	$("#presult").hide();
	$("#pdstyle").hide();
	$("#ptresult").show();
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{ptreg1:1},
		success:function(data){
		 $("#ptsresult").html(data);
		}
	})
})
function updatework(){
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{uptw:1},
		success:function(data){
		}
	})
}
updatework();
})(jQuery);
