<!doctype html>

<html lang="en">

	<head>

		<meta charset="utf-8">
  		<meta http-equiv="Content-Type" content="text/html">
		<title>Churrascaria Senador - Chapeado</title>
		<meta name="description" content="Churrascaria Senador - Chapeado">
		<meta name="author" content="Studio Noctus">
		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery-1.11.1.min.js"></script>
		<script>

		var phoneText;
		var originalHeaderSize;
		var originalLogoSize;

		$(function(){
    		$('#Header').data('size','big');
    		phoneText = $("#phone_number").text();
    		originalHeaderSize = $('#Header').height();
    		originalLogoSize = $('#Logo').height();
		});

		$(window).scroll(function(){
		    if($(document).scrollTop() > 0)
		    {
		        if($('#Header').data('size') == 'big')
		        {
		            $('#Header').data('size','small');
		            $('#Logo').stop().animate({
		            	height: originalLogoSize/2
		            },600)

		            $("#cssmenu").animate({ 
    					'padding-top' : 10,
    					'padding-right' : 0,
    					'padding-bottom' : 0,
    					'padding-left' : 0,
  					}, "slow");

  					$("#Phone").animate({ 
    					'padding-top' : 0,
    					'padding-right' : 10,
    					'padding-bottom' : 0,
    					'padding-left' : 0,
  					}, "slow");

  					$("#phone_number").replaceWith( "<h2 id='phone_number'>Delivery: (47) 3427-1474</h2>" );

		            $('#Header').stop().animate({
		                height:originalHeaderSize/2,
		                'padding-top' : 0,
    					'padding-right' : 0,
    					'padding-bottom' : 0,
    					'padding-left' : 0
		            },600);
		        }
		    }
		    else
		    {
		        if($('#Header').data('size') == 'small')
		        {
		            $('#Header').data('size','big');
		            $('#Logo').stop().animate({
		            	height: originalLogoSize
		            },600)

		            $("#cssmenu").animate({ 
    					'padding-top' : 32,
    					'padding-right' : 32,
    					'padding-bottom' : 32,
    					'padding-left' : 32,
  					}, "slow");

  					$("#Phone").animate({ 
    					'padding-top' : 10,
    					'padding-right' : 60,
    					'padding-bottom' : 0,
    					'padding-left' : 0,
  					}, "slow");

  					$("#phone_number").replaceWith( "<h2 id='phone_number'>Delivery: <br> (47) 3427-1474</h2>" );

		            $('#Header').stop().animate({
		                height: originalHeaderSize,
		                'padding-top' : 30,
    					'padding-right' : 0,
    					'padding-bottom' : 30,
    					'padding-left' : 0
		            },600);
		        }  
		    }
		});
		</script>

	</head>

	<body>

		<div id="Header">
			<div id="Wrap">

				<img id="Logo" height="100px" src="image/logo.png"/>
				<div id="Phone">
					<h2 id='phone_number'>Delivery: <br> (47) 3427-1474</h2>

				</div>

				<div id='cssmenu'>
					<ul id="menu">
					   <li><a href='#Content'>Home</a></li>
					   <li><a href='#container_about'>Sobre   a   casa</a></li>
					   <li><a href='#container_contact'>Contato</a></li>
					</ul>
				</div>
			</div>
		</div> <!--END HEADER-->

		<div id="Content">

			<div id="Slider">
				<div id="Slider_Text">
					<h3 id="banner">simplesmente <br> magnifico!</h3>
					<h1 id="slider">Lorem Ipsum</h1>
				</div>
				<img id="imageBanner" src="image/exemplo.png">
			</div>

			<div id="container_about">

				<h3 class="about">Sobre a casa:</h3>
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
				
				<div id="Products">
					<img class="imageProduct" src="image/product_1.png"/>
					<img class="imageProduct" src="image/product_1.png"/>
				</div>

			</div>

			<div id="container_contact">

				<h3 class="contact">Contato:</h3>

				<div id="wrapContact">
					<div id="ContactInfo">

						<div class="ItemContact">
							<img class="imageContact" src="image/facebook.png"/>
							<h1 class="contact">Facebook</h1>
						</div>

						<div class="ItemContact">
							<img class="imageContact" src="image/2.png"/>
							<h1 class="contact">Twitter</h1>
						</div>
					</div>
	    		</div>
			</div>
		</div> <!--END COTENT-->

		
		<script>
		$("#menu a").click(function(event) {
			event.preventDefault();
			var menuID = $(this).attr("href");
			$("html, body").animate({scrollTop: $(menuID).offset().top - 20}, "slow");
			return false;
		});

		</script>

	</body>
</html>