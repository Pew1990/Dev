
$(document).ready(function(){

	
	$("#logotipo").on("mouseover",function(){

		$("#banner h1").addClass("efeito");

	}).on("mouseout",function(){
		$("#banner h1").removeClass("efeito");

	});
	
	$("#input-search").on("focus",function(){

		$("li.search").addClass("ativo");
	}).on("blur",function(){
		$("li.search").removeClass("ativo");
	});	


	$(".thumbnails").owlCarousel({

		loop:true,
		nav:true,
		margin:10,
		navText: ["Anterior","Próximo"],
		responsive: {
			0 :{
				items:1,
				nav:false,
				dots:false

			},
			480 :{
				items:3
			},
			768 :{
				items:4
			},
			1200 :{
				items:6
			}
		}

	});

	var owl = $(".thumbnails");
	owl = owl.owlCarousel();

	$("#btn-news-prev").on("click", function(){
		 owl.trigger('prev.owl.carousel');	
	});

	$("#btn-news-next").on("click", function(){
		owl.trigger('next.owl.carousel');
	});


	$("#btn-bars").on("click",function(){

		$("header").toggleClass("open-menu");
	});

	$(".btn-close, #menu-mobile-mask").on("click",function(){

		$("header").removeClass("open-menu");
	});

	$("#btn-search").on("click", function(){

		$("header").toggleClass("open-search");
		$("#input-search-mobile").focus();
	});
});

