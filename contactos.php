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
<script src="js/script.js"> </script>
<script src="js/jquery.min.js"> </script>
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
	<!--start-header-->
	<div class="header second" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/symbol.png"></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig second">
					<li><a href="galeria.php">GALERIA</a><span> </span></li>
					<li><a href="sobre.php">SOBRE</a><span> </span></li>
					<li><a class="active" href="contactos.php">CONTACTOS</a><span> </span></li>
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
	<!--/contact-->
	 <div class="section-contact">
	    <div class="container">
	      <h2 class="title">Contacte-nos</h2>
				<div class="contact-main">
					<div class="col-md-6 contact-grid">
						<form name="form_contactos" action="#" method="post">
							<p class="your-para">O seu Nome:</p>
							<input type="text" name="nome" id="nome" placeholder="Nome">
							<p class="your-para">O seu Email:</p>
							<input type="text" name="email" id="email" placeholder="Email">
							<p class="your-para">A sua Mensagem:</p>
							<textarea name="msg" id="msg" cols="77" rows="6" placeholder="Mensagem"></textarea>
							<div class="send">
								<input type="submit" id="b1" value="Enviar" ><div class="contactos_box" id="contactos_box"></div>
							</div>
						</form>
					</div>
					<div class="col-md-6 contact-in">
						<p class="sed-para"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</p>
						<p class="para1">Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.  </p>
						<div class="more-address"> 
								<address>
								  <strong>Curso de Multimédia.</strong><br>
								  Campo 24 de Agosto<br>
								  Porto<br>
								  <abbr title="Phone">Tel:</abbr> (351) 123456789
								</address>
								<address>
								  <strong>João Manuel Ramos Macedo Machado</strong><br>
								  <a href="mailto:info@example.com">mail@example.com</a>
							   </address>
						  </div>
					</div>
						<div class="clearfix"> </div>
			      </div>
		        <h3 class="title find">Encontre-nos Aqui</h3>
		   <div class="map">
		   		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.3268061167264!2d-8.600905384928529!3d41.14921971868928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464ede4ac66ff%3A0xc284a210925804dc!2sCampo+24+de+Agosto%2C+4300+Porto!5e0!3m2!1spt-PT!2spt!4v1444901651323" style="border:0"></iframe>
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