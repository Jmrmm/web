<?php
session_start();
$_SESSION['email'] = ""
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WEB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Multimédia, IEFP, Formação" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"> </script>
<script src="js/script.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,600italic,800' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>

<body>
	<div class="loader"></div>
	<!--start-header-->
		<div class="header second" id="home">
		<div class="container">
			<div class="logo">
				<a href="main"><img src="images/symbol.png"></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig second">
					<li><a href="galeria">GALERIA</a><span> </span></li>
					<li><a href="sobre">SOBRE</a><span> </span></li>
					<li><a href="contactos">CONTACTOS</a><span> </span></li>
				</ul>
			</div>
				 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!--script-for-menu -->
		</div>
	</div>

	 <div class="section-contact">
	    <div class="container">
				<div class="contact-main">
					<div class="col-md-6 contact-grid">
	    		  <h2 class="title">Registe-se</h2>
						<form name="form_registo" action="#" method="post">
							<p class="your-para">O seu Email:</p>
							<input type="text" name="emailreg" id="emailreg" placeholder="Email">
							<input type="hidden" name="reg_log" id="reg_log" value="reg">
							<p class="your-para">A sua Password:</p>
							<input type="password" name="passreg" id="passreg" placeholder="Password">
							<div class="send">
								<input type="submit" id="b2" value="Enviar" ><div class="registo_box" id="registo_box"></div>
							</div>
						</form>
					</div>
					<div class="col-md-6 contact-grid">
			      <h2 class="title">Login</h2>
						<form name="form_login" action="#" method="post">
							<p class="your-para">O seu Email:</p>
							<input type="text" name="emaillog" id="emaillog" placeholder="Email">
							<input type="hidden" name="reg_log" id="reg_log" value="log">
							<p class="your-para">A sua Password:</p>
							<input type="password" name="passlog" id="passlog" placeholder="Password">
							<div class="send">
								<input type="submit" id="b3" value="Enviar" ><div class="login_box" id="login_box"></div>
							</div>
						</form>
					</div>
						<div class="clearfix"> </div>
			      </div>
	   </div>
     </div>

   <!--blog-->
   	<div class="blog-section">

	</div>

 <!--//blog-->
<div class="contact" id="contact">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.3268061167264!2d-8.600905384928529!3d41.14921971868928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464ede4ac66ff%3A0xc284a210925804dc!2sCampo+24+de+Agosto%2C+4300+Porto!5e0!3m2!1spt-PT!2spt!4v1444901651323" allowfullscreen=""></iframe>
					<span> </span>
				 </div>
				 <div class="container">
					<div class=" contact-box">
					<div class="col-md-6 contact-info">
						<h3>Informação de Contacto</h3>
						<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique nec dolor non, ornare sagittis dolor. Nulla vestibulum lacus sed molestie gravida.</p>
						<p >Cras fermentum elit quis magna congue, vel sodales arcu vestibulum. Nunc lobortis dui magna, quis dapibus lacus </p>
					</div>
					
					<div class="col-md-6 contact-form">
						<form>
								<div class="col-md-6 your-name">
									<span>NOME:</span>
									<input type="text" name="your name" disabled placeholder=" ">
								</div>
								<div class="col-md-6 your-name">
									<span>EMAIL:</span>
									<input type="text" name="your email" disabled placeholder=" ">
								</div>
							
								<div class="clearfix"> </div>
								<div class=" your-msg">
									<span>MENSAGEM:</span>
									<textarea cols="70" rows="5" name="message" disabled placeholder=" "> </textarea>
								</div>
							
								<div class="your-submit">
									<input type="submit" value="Enviar">
								
							</div>
						</form>
					</div>
					<div class="clearfix"> </div>
					</div>
					
					</div>
	          </div>
<!--//contact-->

				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>