<?php

	include_once("header.php");


?>

	<section>
		<div id="banner">
			<h1>Orlando City<small>Orlando City Soccer Club</small></h1>

		</div>

		<div id="call-to-action">

			<div class="container">

				<div class="row text-center">
					<h2>VIDEOS</h2>
					<hr>
				</div>

				<div class="row">					
						<video src="mp4/highlights.mp4" poster="img/Orlando_City_Foundation_2015.jpg"></video>
					
					<input type="range" min="0" max="1" step="0.01" id="volume" value="1">
					<button type="button" id="play-stop" class="btn btn-success">PLAY</button>				

				</div>


			</div>

		</div>

		<div id="news" class="container" style="top:0">

			<div class="row text-center" >
				<h2>latest news</h2>
				<hr>
			</div>
			<div class="row thumbnails owl-carousel owl-theme">
				<div class="item" data-video="Orlando_City_Foundation_2015"> 
					<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City</h3>
						
					</div>	
				</div>

				<div class="item" data-video="highlights">
					<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>HighLights</h3>
						
					</div>
				</div>	

				<div class="item" data-video="Orlando_City_Foundation_2015"> 
					<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City</h3>
						
					</div>	
				</div>

				<div class="item" data-video="highlights">
					<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>HighLights</h3>
						
					</div>
				</div>

				<div class="item" data-video="Orlando_City_Foundation_2015"> 
					<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City</h3>
						
					</div>	
				</div>

				<div class="item" data-video="highlights">
					<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>HighLights</h3>
						
					</div>
				</div>		
				
			</div>
		</div>
		
	</section>
	<?php

		include_once("footer.php");

	?>

	<script>

		$(function(){

			$(".thumbnails .item").on("click",function(){

				

				$("video").attr({
									"src":"mp4/" + $(this).data("video") + ".mp4",
									"poster":"img/" + $(this).data("video") + ".jpg",
									"autoplay":"true"

								});

				if ($("#play-stop").hasClass("btn-success")){
					$("#play-stop").toggleClass("btn-success btn-danger");
					$("#play-stop").text("STOP");
					}

			});


			$("#volume").on("mousemove", function(){


					$("video")[0].volume = $(this).val();

			});

			$("#play-stop").on("click",function(){

				$(this).toggleClass("btn-success btn-danger");

				var video = $("video")[0];

				if($(this).hasClass("btn-danger")){

						$(this).text("STOP");
						video.play();

				}else {
					$(this).text("PLAY");
					video.pause();
				}
			});		
			
			
		});

	</script>


