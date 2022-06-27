	window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		  } else {
			header.classList.remove("sticky");
		  }
		}
			 /*-----------------------------------
  ----------- Brands Carousel -----------
  ------------------------------------*/
		$('.brandscarousel').owlCarousel({
		loop:true,
		margin:20,
		nav:false,
		dots:false,
		autoplay:true,
		responsive:{
		0:{
		items:1
		},
		320:{
		items:3
		},
		767:{
		items:3
		},
		1000:{
		items:5
		},1400:{
		items:5
		}
		}	
			});
		 /*-----------------------------------
  ----------- Industries Carousel -----------
  ------------------------------------*/
		$('.industrycarousel').owlCarousel({
		loop:true,
		margin:20,
		nav:true,
		dots:false,
		autoplay:true,
		responsive:{
		0:{
		items:1
		},
		320:{
		items:1
		},
		767:{
		items:2
		},
		1000:{
		items:3
		},1400:{
		items:3
		}
		}
		});
				 /*-----------------------------------
  ----------- Date Carousel -----------
  ------------------------------------*/
		$('.datecarousel').owlCarousel({
		loop:true,
		margin:20,
		nav:true,
		dots:false,
		//autoplay:true,
		autowidth:true,
		responsive:{
		0:{
		items:3
		},
		320:{
		items:4
		},
		767:{
		items:5
		},
		1000:{
		items:7
		},1400:{
		items:7
		}
		}
		});
 /*-----------------------------------
  ----------- Scroll To Top -----------
  ------------------------------------*/
   /*-----------------------------------
  ----------- Datatable -----------
  ------------------------------------*/
  

$(document).ready(function() {
    $('#example').DataTable();
} );
(function($){
				$(window).on("load",function(){
				$(".tablescroll ").mCustomScrollbar({
				  axis:"x", //  horizontal scrollbar
				  scrollbarPosition: "outside",
				  alwaysShowScrollbar:"Enable",
				  scrollButtons:"Enable ",
				  advanced:{autoExpandHorizontalScroll:true}
				});
				});
				})(jQuery);

    $(window).scroll(function () {
      if ($(this).scrollTop() > 1000) {
          $('#back-top').fadeIn();
      } else {
          $('#back-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-top').on('click', function () {
      $('#back-top').tooltip('hide');
      $('body,html').animate({
          scrollTop: 0
      }, 1500);
      return false;
    });		
	AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
			
				$(document).ready(function(){
              $(".modal-header #myTab  #details-tab").click(function(){
					$(".details-tab").show();
					$(".chat-tab").hide();
					$(".notes-tab").hide();
					$(".visit-tab").hide();
				});
				  $(".modal-header #myTab  #chat-tab").click(function(){
					$(".details-tab").hide();
					$(".chat-tab").show();
					$(".notes-tab").hide();
					$(".visit-tab").hide();
				});
				  $(".modal-header #myTab  #notes-tab").click(function(){
					$(".details-tab").hide();
					$(".chat-tab").hide();
					$(".notes-tab").show();
					$(".visit-tab").hide();
				});
		         $(".modal-header #myTab  #visits-tab").click(function(){
					$(".details-tab").hide();
					$(".chat-tab").hide();
					$(".notes-tab").hide();
					$(".visit-tab").show();
				});
		   
});
